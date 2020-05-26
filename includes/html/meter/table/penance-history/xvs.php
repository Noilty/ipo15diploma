<?php
//История показаний Cчётчиков: ХВС
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
        //Запрос $sql_request_xvs формерует данные в виде истории переданных показаний пользователем ХВС
        //(SELECT) Выбираем столбцы из которых будем получать информацию
        //(FROM) указываем в какой таблице эти столбцы
        //(WHERE) условие нам нужны данные авторизированного пользователя И показания которые прошли проверку
        //(ORDER BY) переворачиваем таблицу и наверх ставим более новые значения
        $sql_request_xvs = "SELECT db_penance_date, db_penance_transfer, db_penance_kholodnoye_v_new, db_penance_kholodnoye_v_old FROM db_meter WHERE db_penance_login = '$CORE_user_login' AND db_penance_processing = '1' ORDER BY db_penance_date DESC";
        $request_result_xvs = mysqli_query($link, $sql_request_xvs);
        $row_xvs = mysqli_fetch_array($request_result_xvs);
        if (empty($row_xvs)) {
          $mess_xvs = "<div class='alert alert-info'>История пуста</div>";
        } else {
          do {
            $consumption_xvs = Raznitsa($row_xvs['db_penance_kholodnoye_v_new'],$row_xvs['db_penance_kholodnoye_v_old']); //считаем расход
            printf("
            <tr>
                <th>".$row_xvs['db_penance_date']."</th>
                <td>".$row_xvs['db_penance_transfer']."</td>
                <td>ХВС</td>
                <td>КруглоСут</td>
                <td>".$row_xvs['db_penance_kholodnoye_v_new']."</td>
                <td>$consumption_xvs[2]</td>
                <td>м3</td>
                <td>NaN<!--Достоверные/Недостоверные--></td>
            </tr>
            ");
          } while ($row_xvs=mysqli_fetch_array($request_result_xvs));
        }
        ?>
        <tr>
            <td style="text-align-last: center;" colspan="9"><?php echo $mess_xvs; ?></td>
        </tr>
    </tbody>
</table>
<!--end TABLE-->
