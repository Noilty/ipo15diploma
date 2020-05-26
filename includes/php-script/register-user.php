<?php
//https://ru.stackoverflow.com/questions/757433/Передача-данных-из-формы-в-mysql
$err_register_user = [];
// Страница регистрации нового пользователя
if(isset($data['button_register'])) {
  // Проверяем поля формы
  $user_login = $data['passport_series'].'-'.$data['passport_number'].'-'.$data['house_number'].'-'.$data['apartment_number'];
  if (empty($data['user_surname']) || empty($data['user_name']) || empty($data['user_patronymic'])) {
    $err_register_user[] = "Поля <b>ФИО</b> не могут быть пустыми";
  } elseif (!(preg_match("/[а-яё]/i",$data['user_surname']) || preg_match("/[а-яё]/i",$data['user_name']) || preg_match("/[а-яё]/i",$data['user_patronymic']))) {
    $err_register_user[] = "Поля <b>ФИО</b> поддерживают только RU язык";
  }
  if (empty($data['passport_series']) || empty($data['passport_number'])) {
    $err_register_user[] = "Поля <b>Серия/Номер</b> паспорта не могут быть пустымы";
  }
  if (empty($data['house_number']) || empty($data['apartment_number'])) {
    $err_register_user[] = "Поля Номер <b>Дома/Квартиры</b> не могут быть пустымы";
  }
  if (empty($data['personal_account_number'])) {
    $err_register_user[] = "ERR personal_account_number";
  }
  if (empty($data['quantity_citizens_registered_at'])) {
    $err_register_user[] = "ERR quantity_citizens_registered_at";
  }
  if (empty($data['quantity_citizens_registered_fees'])) {
    $err_register_user[] = "ERR quantity_citizens_registered_fees";
  }
  if (empty($data['total_area_premises'])) {
    $err_register_user[] = "ERR total_area_premises";
  }
  if (empty($data['amount_payment_residential_premises'])) {
    $err_register_user[] = "ERR amount_payment_residential_premises";
  }
  if (empty($data['contact_phone_number'])) {
    $err_register_user[] = "ERR contact_phone_number";
  }
  if(empty($data['contact_email'])) {
    $err_register_user[] = 'Поле <b>E-mail</b> неможет быть пустым';
  }
  if (empty($data['user_password'])) {
    $err_register_user[] = 'Поле <b>Пароль</b> не может быть пустым';
  }
  if ($data['user_password'] != $data['re_password']) {
    $err_register_user[] = '<b>Пароль</b> и <b>Повторный Пароль</b> не совпадают';
  }
  $query = mysqli_query(
    $link, "SELECT db_user_profile_id
            FROM db_users
            WHERE db_user_login='".$user_login."'"
  );
  // проверяем, не сущестует ли пользователя с таким именем
  if(mysqli_num_rows($query) > 0) {
    $err_register_user[] = "Пользователь с таким <b>Логином</b> уже существует в базе данных";
  }

  // Если нет ошибок, то добавляем в БД нового пользователя
  if(!$err_register_user) {
    $login = $user_login;
    $surname = trim($data['user_surname']);
    $name = trim($data['user_name']);
    $patronymic = trim($data['user_patronymic']);
    $passport_series = $data['passport_series'];
    $passport_number = $data['passport_number'];
    $house_number = $data['house_number'];
    $apartment_number = $data['apartment_number'];
    $residential_address = trim($data['select_residential_address']);
    $personal_account_number = trim($data['personal_account_number']);
    $quantity_citizens_registered_at = $data['quantity_citizens_registered_at'];
    $quantity_citizens_registered_fees = $data['quantity_citizens_registered_fees'];
    $type_property = $data['select_type_property'];
    $total_area_premises = trim($data['total_area_premises']);
    $amount_payment_residential_premises = $data['amount_payment_residential_premises'];
    $contact_phone_number = trim($data['contact_phone_number']);
    $contact_email = trim($data['contact_email']);
    $password = md5(md5(trim($data['user_password'])));// Убираем лишние пробелы и делаем двойное хеширование
    mysqli_query(
      $link,"INSERT INTO `db_users`(
        `db_user_login`,
        `db_user_surname`,
        `db_user_name`,
        `db_user_patronymic`,
        `db_user_passport_series`,
        `db_user_passport_number`,
        `db_user_house_number`,
        `db_user_apartment_number`,
        `db_user_residential_address`,
        `db_user_personal_account_number`,
        `db_user_quantity_citizens_registered_at`,
        `db_user_quantity_citizens_registered_fees`,
        `db_user_type_property`,
        `db_user_total_area_premises`,
        `db_user_amount_payment_residential_premises`,
        `db_user_contact_phone_number`,
        `db_user_contact_email`,
        `db_user_password`,
        `db_user_registration_date`
      ) VALUES (
        '$login',
        '$surname',
        '$name',
        '$patronymic',
        '$passport_series',
        '$passport_number',
        '$house_number',
        '$apartment_number',
        '$residential_address',
        '$personal_account_number',
        '$quantity_citizens_registered_at',
        '$quantity_citizens_registered_fees',
        '$type_property',
        '$total_area_premises',
        '$amount_payment_residential_premises',
        '$contact_phone_number',
        '$contact_email',
        '$password',
        NOW()
      )"
    );
    $success_register_user[] = "Аккаунт <b>{$login}</b> создан.";
  } else {
      $err_register_user[] = array_shift($err_register_user);
  }
}
?>
