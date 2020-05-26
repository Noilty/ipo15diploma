<?php
//Админ меню: Показания ожидающие обработки
//Запрос $sql_request_processing_all формерует данные о показаниях, которые не обработаны (не подтверждены)
//(SELECT) Выбираем столбцы из которых будем получать информацию
//(FROM) указываем в какой таблице эти столбцы
//(WHERE) условие нам нужны все показания которые не прошли проверку
$sql_request_processing_all = "SELECT db_penance_id, db_penance_login, db_penance_date, db_penance_kholodnoye_v_new, db_penance_gvs_cude_new FROM db_meter WHERE db_penance_processing = '0'";
$request_result_processing_all = mysqli_query($link, $sql_request_processing_all);
$row_processing_all = mysqli_fetch_array($request_result_processing_all);
if (empty($row_processing_all)) {
  echo $mess_processing = "<div class='alert alert-info' style='margin: 0px;text-align-last: center;'>Нет показаний, ожидающих обработки</div>";
} else {
  do {
    printf("
    <!--ЛОГИН-->
    <div class='card mb-2'>
        <div class='card-header' id='heading2_".$row_processing_all['db_penance_id']."'>
            <h5 class='mb-0'>
               <button class='btn btn-link collapsed' data-toggle='collapse' data-target='#collapse2_".$row_processing_all['db_penance_id']."' aria-expanded='false' aria-controls='collapse2_".$row_processing_all['db_penance_id']."'>
                 <span class='fas fa-angle-down mr-3'></span>".$row_processing_all['db_penance_login']." | ".$row_processing_all['db_penance_date']."
             </button>
           </h5>
        </div>
        <div id='collapse2_".$row_processing_all['db_penance_id']."' class='collapse' aria-labelledby='heading2_".$row_processing_all['db_penance_id']."' data-parent='#accordion2'>
            <div class='card-body'>

                <!--TABLE-->
                <table class='table'>
                    <thead>
                        <tr style='border-top: hidden;'>
                            <th>Дата показаний</th>
                            <th>Услуга</th>
                            <th>Режим потребления</th>
                            <th>Показание</th>
                            <th>Ед. изм.</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>".$row_processing_all['db_penance_date']."</td>
                          <td>ХВС</td>
                          <td>КруглоСут</td>
                          <td>".$row_processing_all['db_penance_kholodnoye_v_new']."</td>
                          <td>м3</td>
                      </tr>
                      <tr>
                          <td>".$row_processing_all['db_penance_date']."</td>
                          <td>ГВС</td>
                          <td>КруглоСут</td>
                          <td>".$row_processing_all['db_penance_gvs_cude_new']."</td>
                          <td>м3</td>
                      </tr>
                      <tr>
                        <td style='text-align-last: center;' colspan='7'></td>
                      </tr>
                  </tbody>
              </table>
              <!--end TABLE-->
              <a href='../../includes/php-script/meter/admin/process-reading.php?penance_id=".$row_processing_all['db_penance_id']."' type='button' class='btn btn-primary btn-lg btn-block'>ОБРАБОТАТЬ</a>
            </div>
        </div>
    </div>
    <!--end ЛОГИН-->
    ");
  } while ($row_processing_all=mysqli_fetch_array($request_result_processing_all));
}
?>
