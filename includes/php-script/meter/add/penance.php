<?php
$err_penance = [];
// Страница регистрации нового пользователя
if(isset($data['button_add_penance'])) {
  // Проверяем поля формы
  if (empty($data['penance_kholodnoye_v_new'])) {
    $err_penance[] = "Пусто";
  }
  if (empty($data['penance_gvs_new'])) {
    $err_penance[] = "Пусто";
  }

  // Если нет ошибок, то добавляем в БД нового пользователя
  if(!$err_penance) {
    $login = $CORE_user_login;
    //ХВС
    $penance_kholodnoye_v_new = trim($data['penance_kholodnoye_v_new']);
    $penance_kholodnoye_v_old = trim($data['penance_kholodnoye_v_old']);
    //ГВС (куб. м)
    $penance_gvs_new = trim($data['penance_gvs_new']);
    $penance_gvs_old = trim($data['penance_gvs_old']);
    //
    $penance_processing = 0;

    $sql_request = "INSERT INTO `db_meter`(
      `db_penance_login`,
      `db_penance_kholodnoye_v_new`,
      `db_penance_kholodnoye_v_old`,
      `db_penance_gvs_cude_new`,
      `db_penance_gvs_cude_old`,
      `db_penance_processing`,
      `db_penance_date`
    ) VALUES (
      '$login',
      '$penance_kholodnoye_v_new',
      '$penance_kholodnoye_v_old',
      '$penance_gvs_new',
      '$penance_gvs_old',
      '$penance_processing',
      NOW()
    )";
    mysqli_query($link, $sql_request);
    $success_add_penance[] = "Успешно ПОКАЗАНИЯ";
  } else {
      $err_penance[] = array_shift($err_penance);
  }
}
?>
