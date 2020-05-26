<?php
// Профиль ID
$CORE_user_profile_id = $_SESSION['loggen_user']['db_user_profile_id'];
// Логин
$CORE_user_login = $_SESSION['loggen_user']['db_user_login'];
// Фамилия
$CORE_user_surname = $_SESSION['loggen_user']['db_user_surname'];
// Имя
$CORE_user_name = $_SESSION['loggen_user']['db_user_name'];
// Отчество
$CORE_user_patronymic = $_SESSION['loggen_user']['db_user_patronymic'];
// Паспорт Серия
$CORE_passport_series = $_SESSION['loggen_user']['db_user_passport_series'];
// Паспорт Номер
$CORE_passport_number = $_SESSION['loggen_user']['db_user_passport_number'];
// Номер Дома
$CORE_house_number = $_SESSION['loggen_user']['db_user_house_number'];
// Номер Квартиры
$CORE_apartment_number = $_SESSION['loggen_user']['db_user_apartment_number'];
// Адрес проживания
$CORE_residential_address = $_SESSION['loggen_user']['db_user_residential_address'];
// Номер лицевого счёта
$CORE_personal_account_number = $_SESSION['loggen_user']['db_user_personal_account_number'];
// Количество граждан, зарегистрированных по адресу
$CORE_quantity_citizens_registered_at = $_SESSION['loggen_user']['db_user_quantity_citizens_registered_at'];
// Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих
$CORE_quantity_citizens_registered_fees = $_SESSION['loggen_user']['db_user_quantity_citizens_registered_fees'];
// Вид собственности
$CORE_type_property = $_SESSION['loggen_user']['db_user_type_property'];
// Общая площадь помещений по лицевому счёту
$CORE_total_area_premises = $_SESSION['loggen_user']['db_user_total_area_premises'];
// Размер платы за жилое помещение
$CORE_amount_payment_residential_premises = $_SESSION['loggen_user']['db_user_amount_payment_residential_premises'];
// Контактный телефон
$CORE_contact_phone_number = $_SESSION['loggen_user']['db_user_contact_phone_number'];
// Контактный E-mail
$CORE_contact_email = $_SESSION['loggen_user']['db_user_contact_email'];
// Дата регистрации в системе
$CORE_user_registration_date = $_SESSION['loggen_user']['db_user_registration_date'];
// Берём первый символ от Имени
$CORE__user_name = mb_strtoupper(substr($_SESSION['loggen_user']['db_user_name'],0,2), "utf-8");
// Берём первый символ от Отчества
$CORE__user_patronymic = mb_strtoupper(substr($_SESSION['loggen_user']['db_user_patronymic'],0,2), "utf-8");

//Получаем информацию из БД о Тарифах
$sql_request_tarif = "SELECT * FROM db_tarif order by db_tarif_id DESC LIMIT 0, 1"; //(Последняя строчка)
$request_result_tarif = mysqli_query($link, $sql_request_tarif);
$row_tarif = mysqli_fetch_assoc($request_result_tarif);
$CORE_tarif = test1($row_tarif, 'tarif');
//Считаем Разницу Тариф для Плата за жилое помещение
$CORE_raznitsa_plata_z_z_p_tarif = Raznitsa(
  $CORE_tarif[0], $CORE_tarif[1]
);
//Считаем Разницу Тариф для ХВС
$CORE_raznitsa_kholodnoye_v_tarif = Raznitsa(
  $CORE_tarif[2], $CORE_tarif[3]
);
//Считаем Разницу Тариф для Отведение сточных вод
$CORE_raznitsa_otvedeniye_s_v_tarif = Raznitsa(
  $CORE_tarif[4], $CORE_tarif[5]
);
//Считаем Разницу Тариф для ГВС (куб. м)
$CORE_raznitsa_gvs_cude_tarif = Raznitsa(
  $CORE_tarif[6], $CORE_tarif[7]
);
//Считаем Разницу Тариф для ГВС (Гкал)
$CORE_raznitsa_gvs_gkal_tarif = Raznitsa(
  $CORE_tarif[8], $CORE_tarif[9]
);
//Считаем Разницу Тариф для Отопление
$CORE_raznitsa_otopleniye_tarif = Raznitsa(
  $CORE_tarif[10], $CORE_tarif[11]
);

//Получаем информацию из БД о Нормативах
$sql_request_normativ = "SELECT * FROM db_normativ order by db_normativ_id DESC LIMIT 0, 1"; //(Последняя строчка)
$request_result_normativ = mysqli_query($link, $sql_request_normativ);
$row_normativ = mysqli_fetch_assoc($request_result_normativ);
$CORE_normativ = test1($row_normativ, 'normativ');
//Считаем Разницу Тариф для ХВС
$CORE_raznitsa_kholodnoye_v_normativ = Raznitsa(
  $CORE_normativ[2], $CORE_normativ[3]
);
//Считаем Разницу Тариф для Отведение сточных вод
$CORE_raznitsa_otvedeniye_s_v_normativ = Raznitsa(
  $CORE_normativ[4], $CORE_normativ[5]
);
//Считаем Разницу Тариф для ГВС (куб. м)
$CORE_raznitsa_gvs_cude_normativ = Raznitsa(
  $CORE_normativ[6], $CORE_normativ[7]
);
//Считаем Разницу Тариф для ГВС (Гкал)
$CORE_raznitsa_gvs_gkal_normativ = Raznitsa(
  $CORE_normativ[8], $CORE_normativ[9]
);
//Считаем Разницу Тариф для Отопление
$CORE_raznitsa_otopleniye_normativ = Raznitsa(
  $CORE_normativ[10], $CORE_normativ[11]
);

//Получаем информацию из БД о Состояние Cчётчиков (показания)
$sql_request_penance = "SELECT * FROM db_meter WHERE db_penance_login = '$CORE_user_login' order by db_penance_id DESC LIMIT 0, 1"; //(Последняя строчка)
$request_result_penance = mysqli_query($link, $sql_request_penance);
$row_penance = mysqli_fetch_assoc($request_result_penance);
$CORE_penance = test1($row_penance, 'penance');
//Считаем Разницу Тариф для ХВС
$CORE_raznitsa_kholodnoye_v_penance = Raznitsa(
  $CORE_penance[2], $CORE_penance[3]
);
//Считаем Разницу Тариф для Отведение сточных вод
$CORE_raznitsa_gvs_penance = Raznitsa(
  $CORE_penance[6], $CORE_penance[7]
);

// Профиль ID - Определяем Администратора
$CORE_user_profile_id = $_SESSION['loggen_user']['db_user_profile_id'];
if ($CORE_user_profile_id == $admin_profile_id) {
  $CORE_profile_group = 'Администратор';
  $CORE_btn_style = 'danger';
} elseif ($CORE_user_profile_id == $accountant_profile_id) {
  $CORE_profile_group = 'Бухгалтер';
  $CORE_btn_style = 'danger';
}
else {
  $CORE_profile_group = 'Пользователь';
  $CORE_btn_style = 'success';
}

$CORE_organization = acronym_organization (
  $LANGUAGE_SITE['auth']['organization'],
  $LANGUAGE_SITE['auth']['organization_name'],
  'yes'
);
$CORE_system_name_type = acronym_organization (
  $LANGUAGE_SITE['auth']['system_name'],
  $LANGUAGE_SITE['auth']['type'],
  'no'
);




?>
