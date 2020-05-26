<?php
$err_normativ = [];
// Страница регистрации нового пользователя
if(isset($data['button_add_normativ'])) {
  // Проверяем поля формы
  if (empty($data['normativ_kholodnoye_v_new'])) {
    $err_normativ[] = "Пусто";
  }
  if (empty($data['normativ_otvedeniye_s_v_new'])) {
    $err_normativ[] = "Пусто";
  }
  if (empty($data['normativ_gvs_cude_new'])) {
    $err_normativ[] = "Пусто";
  }
  if (empty($data['normativ_gvs_gkal_new'])) {
    $err_normativ[] = "Пусто";
  }
  if (empty($data['normativ_otopleniye_new'])) {
    $err_normativ[] = "Пусто";
  }

  // Если нет ошибок, то добавляем в БД нового пользователя
  if(!$err_normativ) {
    //ХВС
    $normativ_kholodnoye_v_new = trim($data['normativ_kholodnoye_v_new']);
    $normativ_kholodnoye_v_old = trim($data['normativ_kholodnoye_v_old']);
    //Отведение сточных вод
    $normativ_otvedeniye_s_v_new = trim($data['normativ_otvedeniye_s_v_new']);
    $normativ_otvedeniye_s_v_old = trim($data['normativ_otvedeniye_s_v_old']);
    //ГВС (куб. м)
    $normativ_gvs_cude_new = trim($data['normativ_gvs_cude_new']);
    $normativ_gvs_cude_old = trim($data['normativ_gvs_cude_old']);
    //ГВС (Гкал)
    $normativ_gvs_gkal_new = trim($data['normativ_gvs_gkal_new']);
    $normativ_gvs_gkal_old = trim($data['normativ_gvs_gkal_old']);
    //Отопление
    $normativ_otopleniye_new = trim($data['normativ_otopleniye_new']);
    $normativ_otopleniye_old = trim($data['normativ_otopleniye_old']);

    $sql_request = "INSERT INTO `db_normativ`(
      `db_normativ_kholodnoye_v_new`,
      `db_normativ_kholodnoye_v_old`,
      `db_normativ_otvedeniye_s_v_new`,
      `db_normativ_otvedeniye_s_v_old`,
      `db_normativ_gvs_cude_new`,
      `db_normativ_gvs_cude_old`,
      `db_normativ_gvs_gkal_new`,
      `db_normativ_gvs_gkal_old`,
      `db_normativ_otopleniye_new`,
      `db_normativ_otopleniye_old`,
      `db_normativ_update_date_new`
    ) VALUES (
      '$normativ_kholodnoye_v_new',
      '$normativ_kholodnoye_v_old',
      '$normativ_otvedeniye_s_v_new',
      '$normativ_otvedeniye_s_v_old',
      '$normativ_gvs_cude_new',
      '$normativ_gvs_cude_old',
      '$normativ_gvs_gkal_new',
      '$normativ_gvs_gkal_old',
      '$normativ_otopleniye_new',
      '$normativ_otopleniye_old',
      NOW()
    )";
    mysqli_query($link, $sql_request);
    $success_add_normativ[] = "Успешно normativ";
  } else {
      $err_normativ[] = array_shift($err_normativ);
  }
}
?>
