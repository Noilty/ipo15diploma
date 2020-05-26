<?php
//Админ меню: Обработанные показания
//Запрос $sql_request_processing_all формерует данные в виде истории Обработанные показания всех пользователей
//(SELECT) Выбираем столбцы из которых будем получать информацию
//(FROM) указываем в какой таблице эти столбцы
//(WHERE) условие нам нужны данные авторизированного пользователя И показания которые прошли проверку
//(ORDER BY) переворачиваем таблицу и наверх ставим более новые значения
$sql_request_processing_all = "SELECT db_penance_gvs_cude_new, db_penance_gvs_cude_old, db_penance_kholodnoye_v_new, db_penance_kholodnoye_v_old, db_penance_id, db_penance_login, db_penance_date, db_penance_transfer FROM db_meter WHERE db_penance_processing = '1' ORDER BY db_penance_date DESC";
$request_result_processing_all = mysqli_query($link, $sql_request_processing_all);
$row_processing_all = mysqli_fetch_array($request_result_processing_all);
if (empty($row_processing_all)) {
  echo $mess_processing = "<div class='alert alert-info' style='margin: 0px;text-align-last: center;'>История пуста</div>";
} else {
  do {
    $consumption_gvs = Raznitsa($row_processing_all['db_penance_gvs_cude_new'],$row_processing_all['db_penance_gvs_cude_old']); //считаем расход ГВС
    $consumption_xvs = Raznitsa($row_processing_all['db_penance_kholodnoye_v_new'],$row_processing_all['db_penance_kholodnoye_v_old']); //считаем расход ХВС
    printf("
    <!--ЛОГИН #".$row_processing_all['db_penance_id']."-->
    <div class='card mb-2'>
        <div class='card-header' id='heading3_".$row_processing_all['db_penance_id']."'>
            <h5 class='mb-0'>
               <button class='btn btn-link collapsed' data-toggle='collapse' data-target='#collapse3_".$row_processing_all['db_penance_id']."' aria-expanded='false' aria-controls='collapse3_".$row_processing_all['db_penance_id']."'>
                 <span class='fas fa-angle-down mr-3'></span>".$row_processing_all['db_penance_login']." | ".$row_processing_all['db_penance_date']."
             </button>
           </h5>
        </div>
        <div id='collapse3_".$row_processing_all['db_penance_id']."' class='collapse' aria-labelledby='heading3_".$row_processing_all['db_penance_id']."' data-parent='#accordion3'>
            <div class='card-body'>

                <!--TABLE-->
                <table class='table'>
                    <thead>
                        <tr style='border-top: hidden;'>
                            <th>Дата показаний</th>
                            <th>Дата передачи</th>
                            <th>Услуга</th>
                            <th>Режим потребления</th>
                            <th>Показание</th>
                            <th>Расход</th>
                            <th>Ед. изм.</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>".$row_processing_all['db_penance_date']."</td>
                          <td>".$row_processing_all['db_penance_transfer']."</td>
                          <td>ХВС</td>
                          <td>КруглоСут</td>
                          <td>".$row_processing_all['db_penance_kholodnoye_v_new']."</td>
                          <td>$consumption_xvs[2]</td>
                          <th>м3</th>
                          <th>NaN</th>
                      </tr>
                      <tr>
                          <td>".$row_processing_all['db_penance_date']."</td>
                          <td>".$row_processing_all['db_penance_transfer']."</td>
                          <td>ГВС</td>
                          <td>КруглоСут</td>
                          <td>".$row_processing_all['db_penance_gvs_cude_new']."</td>
                          <td>$consumption_gvs[2]</td>
                          <th>м3</th>
                          <th>NaN</th>
                      </tr>
                      <tr>
                        <td style='text-align-last: center;' colspan='8'></td>
                      </tr>
                  </tbody>
              </table>
              <!--end TABLE-->
            </div>
        </div>
    </div>
    <!--end ЛОГИН #".$row_processing_all['db_penance_id']."-->
    ");
  } while ($row_processing_all=mysqli_fetch_array($request_result_processing_all));
}
?>
