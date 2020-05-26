<?php
//Аббревиатуры организаций
function acronym_organization($organization, $organization_name, $special_symbol) {
  $words  = explode(' ', $organization);
  $words  = array_map(function($word) {
    return $word[0].$word[1]; //RU символ занимает 2 байта
    //return $word[0]; //EN символ занимает 1 байт
  }, $words);
  if ($special_symbol == 'yes') {
    $title = $organization = implode('', $words).' &#171;'.$organization_name.'&#187;';
  } elseif ($special_symbol == 'no') {
    $title = $organization = implode('', $words).' '.$organization_name;
  }
  return $title;
}

//Считаем разницу Тариф / Норматив
function Raznitsa($tarif_new, $tarif_old){
  if($tarif_new <= $tarif_old) {
    $mass_result = ['success', 'down', $result];
  }
  if($tarif_new >= $tarif_old) {
    $mass_result = ['danger', 'up', $result];
  }
  $style = $mass_result[0];
  $icon = $mass_result[1];
  $result = abs($tarif_new - $tarif_old);
  $result_end = [$style, $icon, $result];
  return $result_end;
}

function test1($row, $title){
  //Плата за жилое помещение (NEW)
  if (!empty($row['db_'.$title.'_plata_z_z_p_new'])) {
    $plata_z_z_p_new = $row['db_'.$title.'_plata_z_z_p_new'];
  }
  //Плата за жилое помещение (OLD)
  if (!empty($row['db_'.$title.'_plata_z_z_p_old'])) {
    $plata_z_z_p_old = $row['db_'.$title.'_plata_z_z_p_old'];
  }
  //Тариф: Холодное водоснабжение (NEW)
  if (!empty($row['db_'.$title.'_kholodnoye_v_new'])) {
    $kholodnoye_v_new = $row['db_'.$title.'_kholodnoye_v_new'];
  }
  //Тариф: Холодное водоснабжение (OLD)
  if (!empty($row['db_'.$title.'_kholodnoye_v_old'])) {
    $kholodnoye_v_old = $row['db_'.$title.'_kholodnoye_v_old'];
  }
  //Тариф: Отведение сточных вод (NEW)
  if (!empty($row['db_'.$title.'_otvedeniye_s_v_new'])) {
    $otvedeniye_s_v_new = $row['db_'.$title.'_otvedeniye_s_v_new'];
  }
  //Тариф: Отведение сточных вод (OLD)
  if (!empty($row['db_'.$title.'_otvedeniye_s_v_old'])) {
    $otvedeniye_s_v_old = $row['db_'.$title.'_otvedeniye_s_v_old'];
  }
  //Тариф: ГВС (куб. м) (NEW)
  if (!empty($row['db_'.$title.'_gvs_cude_new'])) {
    $gvs_cude_new = $row['db_'.$title.'_gvs_cude_new'];
  }
  //Тариф: ГВС (куб. м) (OLD)
  if (!empty($row['db_'.$title.'_gvs_cude_old'])) {
    $gvs_cude_old = $row['db_'.$title.'_gvs_cude_old'];
  }
  //Тариф: ГВС (Гкал) (NEW)
  if (!empty($row['db_'.$title.'_gvs_gkal_new'])) {
    $gvs_gkal_new = $row['db_'.$title.'_gvs_gkal_new'];
  }
  //Тариф: ГВС (Гкал) (OLD)
  if (!empty($row['db_'.$title.'_gvs_gkal_old'])) {
    $gvs_gkal_old = $row['db_'.$title.'_gvs_gkal_old'];
  }
  //Тариф: Отопление (NEW)
  if (!empty($row['db_'.$title.'_otopleniye_new'])) {
    $otopleniye_new = $row['db_'.$title.'_otopleniye_new'];
  }
  //Тариф: Отопление (OLD)
  if (!empty($row['db_'.$title.'_otopleniye_old'])) {
    $otopleniye_old = $row['db_'.$title.'_otopleniye_old'];
  }
  //Тариф: Дата обновления (NEW)
  if (!empty($row['db_'.$title.'_update_date_new'])) {
    $update_date = $row['db_'.$title.'_update_date_new'];
  }
  //Состояние Cчётчиков: Дата показаний
  if (!empty($row['db_'.$title.'_date'])) {
    $update_date_penance = $row['db_'.$title.'_date'];
  }
  return $result = [
    $plata_z_z_p_new,
    $plata_z_z_p_old,
    $kholodnoye_v_new,
    $kholodnoye_v_old,
    $otvedeniye_s_v_new,
    $otvedeniye_s_v_old,
    $gvs_cude_new,
    $gvs_cude_old,
    $gvs_gkal_new,
    $gvs_gkal_old,
    $otopleniye_new,
    $otopleniye_old,
    $update_date,
    $update_date_penance
  ];
}
?>
