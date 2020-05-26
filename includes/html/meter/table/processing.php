<?php
//Показания в обработке
?>
<!--TABLE-->
<table class="table" style="width: 100%;">
    <thead>
        <tr style="border-top: hidden;">
            <th>Дата показаний</th>
            <th>Услуга</th>
            <th>Режим потребления</th>
            <th>Показание</th>
            <th>Ед. изм.</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //Получаем информацию из БД о Состояние Cчётчиков (Показания в обработке)
        $sql_request_processing = "SELECT db_penance_date, db_penance_kholodnoye_v_new, db_penance_gvs_cude_new FROM db_meter WHERE db_penance_login = '$CORE_user_login' AND db_penance_processing = '0' order by db_penance_id DESC LIMIT 0, 1"; //(Последняя строчка)
        $request_result_processing = mysqli_query($link, $sql_request_processing);
        $row_processing = mysqli_fetch_array($request_result_processing);
        if (empty($row_processing)) {
          $mess_processing = "<div class='alert alert-info' style='margin: 0px;'>Все показания обработаны</div>";
        } else {
          do {
            printf("
            <tr>
                <td>".$row_processing['db_penance_date']."</td>
                <td>ХВС</td>
                <td>КруглоСут</td>
                <td>".$row_processing['db_penance_kholodnoye_v_new']."</td>
                <td>м3</td>
            </tr>
            <tr>
                <td>".$row_processing['db_penance_date']."</td>
                <td>ГВС</td>
                <td>КруглоСут</td>
                <td>".$row_processing['db_penance_gvs_cude_new']."</td>
                <td>м3</td>
            </tr>
            <tr>
                <td style='text-align-last: center;' colspan='7'>
                    <div class='alert alert-info' style='margin: 0px;'>Показания получены ожидайте конца обработки</div>
                </td>
            </tr>
            ");
          } while ($row_processing=mysqli_fetch_array($request_result_processing));
        }
        ?>
        <tr>
          <td style="text-align-last: center;" colspan="7"><?php echo $mess_processing; ?></td>
        </tr>
    </tbody>
</table>
<!--end TABLE-->
