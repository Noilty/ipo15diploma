<?php
//Запрос $sql_PENANCE получает данные о показаниях в обработке у авторизированного пользователя
//(SELECT) Выбираем столбцы из которых будем получать информацию
//(FROM) указываем в какой таблице эти столбцы
//(WHERE) условие нам нужен авторизированный пользователь И его показания которые не прошли проверку 
$sql_PENANCE = "SELECT db_penance_login, db_penance_processing FROM db_meter WHERE db_penance_login = '$CORE_user_login' AND db_penance_processing = '0'";
$request_PENANCE = mysqli_query($link, $sql_PENANCE);
$row_cnt = mysqli_num_rows($request_PENANCE);
if (!$row_cnt) {
  $data=$_POST;
  $ADD_PENANCE=<<<HTML
  <div class="alert alert-info" role="alert" style="text-align: center;">Будьте внимательны при вводе значений так как передать значения можно только один раз</div>
  <form action="$address/system-messages/add-penance.php" method="post">
      <div class="form-group">
          <table style="width: 100%;" border=0>
              <tr>
                  <td>
                      ХВС
                      <input type="text" name="penance_kholodnoye_v_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                  </td>
                  <td>
                      <br>
                      <input type="text" name="penance_kholodnoye_v_old" class="form-control" value="$CORE_penance[2]" readonly>
                  </td>
              </tr>
              <tr>
                  <td>
                      ГВС
                      <input type="text" name="penance_gvs_new" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')" placeholder="Новое значение" class="form-control">
                  </td>
                  <td>
                      <br>
                      <input type="text" name="penance_gvs_old" class="form-control" value="$CORE_penance[6]" readonly>
                  </td>
              </tr>
          </table>
      </div>
      <button type="submit" name="button_add_penance" class="btn btn-primary btn-lg btn-block">
        <span class="bigger-110">ВНЕСТИ ПОКАЗАНИЯ</span>
      </button>
  </form>
HTML;
} else {
  $mess_PENANCE = '<div class="alert alert-info" role="alert" style="text-align: center;margin: 0px;">Форма будет доступна после того как показания будут обработаны</div>';
}
?>
