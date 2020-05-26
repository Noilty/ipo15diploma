<?php
$err_tarif = [];
// Страница регистрации нового пользователя
if(isset($data['button_add_tarif'])) {
  // Проверяем поля формы
  if (empty($data['tarif_plata_z_z_p_new'])) {
    $err_tarif[] = "Поле <b>Плата за жилое помещение</b> пустое!";
  }
  if (empty($data['tarif_kholodnoye_v_new'])) {
    $err_tarif[] = "Поле <b>ХВС</b> пустое!";
  }
  if (empty($data['tarif_otvedeniye_s_v_new'])) {
    $err_tarif[] = "Поле <b>Отведение сточных вод</b> пустое!";
  }
  if (empty($data['tarif_gvs_cude_new'])) {
    $err_tarif[] = "Поле <b>ГВС (куб. м)</b> пустое!";
  }
  if (empty($data['tarif_gvs_gkal_new'])) {
    $err_tarif[] = "Поле <b>ГВС (Гкал)</b> пустое!";
  }
  if (empty($data['tarif_otopleniye_new'])) {
    $err_tarif[] = "Поле <b>Отопление</b> пустое!";
  }

  // Если нет ошибок, то добавляем в БД нового пользователя
  if(!$err_tarif) {
    //Плата за жилое помещение
    $tarif_plata_z_z_p_new = trim($data['tarif_plata_z_z_p_new']);
    $tarif_plata_z_z_p_old = trim($data['tarif_plata_z_z_p_old']);
    //ХВС
    $tarif_kholodnoye_v_new = trim($data['tarif_kholodnoye_v_new']);
    $tarif_kholodnoye_v_old = trim($data['tarif_kholodnoye_v_old']);
    //Отведение сточных вод
    $tarif_otvedeniye_s_v_new = trim($data['tarif_otvedeniye_s_v_new']);
    $tarif_otvedeniye_s_v_old = trim($data['tarif_otvedeniye_s_v_old']);
    //ГВС (куб. м)
    $tarif_gvs_cude_new = trim($data['tarif_gvs_cude_new']);
    $tarif_gvs_cude_old = trim($data['tarif_gvs_cude_old']);
    //ГВС (Гкал)
    $tarif_gvs_gkal_new = trim($data['tarif_gvs_gkal_new']);
    $tarif_gvs_gkal_old = trim($data['tarif_gvs_gkal_old']);
    //Отопление
    $tarif_otopleniye_new = trim($data['tarif_otopleniye_new']);
    $tarif_otopleniye_old = trim($data['tarif_otopleniye_old']);

    $sql_request = "INSERT INTO `db_tarif`(
      `db_tarif_plata_z_z_p_new`,
      `db_tarif_plata_z_z_p_old`,
      `db_tarif_kholodnoye_v_new`,
      `db_tarif_kholodnoye_v_old`,
      `db_tarif_otvedeniye_s_v_new`,
      `db_tarif_otvedeniye_s_v_old`,
      `db_tarif_gvs_cude_new`,
      `db_tarif_gvs_cude_old`,
      `db_tarif_gvs_gkal_new`,
      `db_tarif_gvs_gkal_old`,
      `db_tarif_otopleniye_new`,
      `db_tarif_otopleniye_old`,
      `db_tarif_update_date_new`
    ) VALUES (
      '$tarif_plata_z_z_p_new',
      '$tarif_plata_z_z_p_old',
      '$tarif_kholodnoye_v_new',
      '$tarif_kholodnoye_v_old',
      '$tarif_otvedeniye_s_v_new',
      '$tarif_otvedeniye_s_v_old',
      '$tarif_gvs_cude_new',
      '$tarif_gvs_cude_old',
      '$tarif_gvs_gkal_new',
      '$tarif_gvs_gkal_old',
      '$tarif_otopleniye_new',
      '$tarif_otopleniye_old',
      NOW()
    )";
    mysqli_query($link, $sql_request);
    $success_add_tarif[] = "Успешно ТАРИФ";
  } else {
      $err_tarif[] = array_shift($err_tarif);
  }
}
?>
