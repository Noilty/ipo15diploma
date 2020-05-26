<?php
$err_profile_setting = [];
// Страница регистрации нового пользователя
if(isset($data['button_profile_setting'])) {
  // Проверяем поля формы
  if (empty($data['new_contact_phone_number'])) {
    $contact_phone_number = trim($data['old_contact_phone_number']);
  } else {
    $contact_phone_number = trim($data['new_contact_phone_number']);
  }
  if (empty($data['new_contact_email'])) {
    $contact_email = trim($data['old_contact_email']);
  } else {
    $contact_email = trim($data['new_contact_email']);
  }
  //Достаем пароль из БД для проверки формы
  $sql_request = "SELECT `db_user_password` FROM `db_users` WHERE `db_user_profile_id` = '$CORE_user_profile_id'";
  $request_result = mysqli_query($link, $sql_request);
  $db_user_pass = array_shift(mysqli_fetch_assoc($request_result));
  if (!empty($data['old_pass'])) {
    if ($db_user_pass != md5(md5($data['old_pass']))) {
      $err_profile_setting[] = "Старый пароль введен не верно";
    }
    if ($data['new_pass'] != $data['re_new_pass']) {
      $err_profile_setting[] = "Новый пароль != Повторите новый пароль";
    } else {
      $new_pass = md5(md5(trim($data['re_new_pass'])));
    }
  } else {
    $new_pass = $db_user_pass;
  }
  // Если нет ошибок, то вносим изменения в БД
  if(!$err_profile_setting) {
    $sql_request = "UPDATE `db_users`
    SET `db_user_contact_phone_number` = '$contact_phone_number',
        `db_user_contact_email` = '$contact_email',
        `db_user_password` = '$new_pass'
    WHERE `db_user_profile_id` = '$CORE_user_profile_id'";
    mysqli_query($link, $sql_request);
    $success_profile_setting[] = "Успешно";
  } else {
      $err_profile_setting[] = array_shift($err_profile_setting);
  }
}
?>
