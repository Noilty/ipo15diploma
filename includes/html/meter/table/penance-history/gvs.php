<?php
//История показаний Cчётчиков: ГВС
?>
<!--TABLE-->
<table class="table" style="width: 100%;">
    <thead>
        <tr style="border-top: hidden;">
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
        <?php
        //Запрос $sql_request_gvs формерует данные в виде истории переданных показаний пользователем ГВС
        //(SELECT) Выбираем столбцы из которых будем получать информацию
        //(FROM) указываем в какой таблице эти столбцы
        //(WHERE) условие нам нужны данные авторизированного пользователя И показания которые прошли проверку
        //(ORDER BY) переворачиваем таблицу и наверх ставим более новые значения
        $sql_request_gvs = "SELECT db_penance_date, db_penance_transfer, db_penance_gvs_cude_new, db_penance_gvs_cude_old FROM db_meter WHERE db_penance_login = '$CORE_user_login' AND db_penance_processing = '1' ORDER BY db_penance_date DESC";
        $request_result_gvs = mysqli_query($link, $sql_request_gvs);
        $row_gvs = mysqli_fetch_array($request_result_gvs);
        if (empty($row_gvs)) {
          $mess_gvs = "<div class='alert alert-info'>История пуста</div>";
        } else {
          do {
            $consumption_gvs = Raznitsa($row_gvs['db_penance_gvs_cude_new'],$row_gvs['db_penance_gvs_cude_old']); //считаем расход
            printf("
            <tr>
                <th>".$row_gvs['db_penance_date']."</th>
                <td>".$row_gvs['db_penance_transfer']."</td>
                <td>ГВС</td>
                <td>КруглоСут</td>
                <td>".$row_gvs['db_penance_gvs_cude_new']."</td>
                <td>$consumption_gvs[2]</td>
                <td>м3</td>
                <td>NaN<!--Достоверные/Недостоверные--></td>
            </tr>
            ");
          } while ($row_gvs=mysqli_fetch_array($request_result_gvs));
        }
        ?>
        <tr>
            <td style="text-align-last: center;" colspan="9"><?php echo $mess_gvs; ?></td>
        </tr>
    </tbody>
</table>
<!--end TABLE-->
