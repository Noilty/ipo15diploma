<?php
$err_auth = [];
//Страница авторизации
if(isset($data['button_login'])) {
  //Вытаскиваем из БД запись, у которой логин равняеться введенному
  $sql_request_auth = "SELECT * FROM db_users WHERE db_user_login='".mysqli_real_escape_string($link,$data['user_login'])."' LIMIT 1";
  $query_user_auth = mysqli_query($link, $sql_request_auth);
  $user_auth = mysqli_fetch_assoc($query_user_auth);
  // Сравниваем пароли
  if((!trim($data['user_login']) || !trim($data['user_password']))) {
    $err_auth[] = "Поля <b>Логин</b> и <b>Пароль</b> не могут быть пустыми!";
  } elseif($user_auth['db_user_password'] === md5(md5($data['user_password']))) {
    // Переадресовываем браузер на страницу проверки нашего скрипта
    $_SESSION['loggen_user'] = $user_auth;
    //echo 'Авторизация выполнена <a href="/reg-prob/">ТЫК</a>';
    exit("<meta http-equiv='refresh' content='0; url= $_SERVER[PHP_SELF]'>");
  } else {
    $err_auth[] = "Неправильный <b>Логин</b> или <b>Пароль</b>";
  }
  if(!empty($err_auth)) {
    $err_auth[] = array_shift($err_auth);
  }
}
?>
