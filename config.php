<?php
header('Content-Type: text/html; charset=utf-8');
$address = '';
$border = 0;
$time_zone_offset = 3; //указать нужное смещение по Гринвичу (https://www.kakras.ru/doc/time-zone.html)
$zone = $LANGUAGE_SITE['breadcrumbs']['zone'];
//Меню Администратора: указать Профиль ID
$admin_profile_id = 1;
//Меню бухгалтера: указать Профиль ID
$accountant_profile_id = 2;
//Данные для подключения к БД
$connection = [
	'db' => [
		'host' => '127.0.0.1', //адрес сервера
		'user' => 'root', //имя пользователя
		'pass' => 'root', //пароль
		'name' => 'ipo15diploma' //имя базы данных
	]
];
//подключаемся к серверу
//mysql_set_charset("utf8");
//mysql_set_charset("CP1251");
$link = mysqli_connect(
	$connection['db']['host'],
	$connection['db']['user'],
	$connection['db']['pass'],
	$connection['db']['name']
	) or die ("Ошибка " . mysqli_error($link));

ini_set('session.gc_maxlifetime', '60');
session_start();
?>
