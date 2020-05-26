<?php
$data=$_POST;
$REGISTER_USER=<<<HTML
<form id="login" action="$address/system-messages/register-user.php" method="post">
    <!--Фамилия-->
    <div class="form-group">
        <input class="form-control" style="text-align: center;" placeholder="Фамилия" name="user_surname" type="text">
    </div>
    <!--Имя-->
    <div class="form-group">
        <input class="form-control" style="text-align: center;" placeholder="Имя" name="user_name" type="text">
    </div>
    <!--Отчество-->
    <div class="form-group">
        <input class="form-control" style="text-align: center;" placeholder="Отчество" name="user_patronymic" type="text">
    </div>
    <div class="form-group">
        <table border="0" style="width: 100%;">
          <!--Серия/Номер паспорта-->
          <tr>
            <td style="padding: 0px 5px 5px 0px;">
              <input id="passport_series" class="form-control" style="text-align: center;" placeholder="Серия паспорта" name="passport_series" type="text">
            </td>
            <td style="padding: 0px 0px 5px 5px;">
              <input id="passport_number" class="form-control" style="text-align: center;" placeholder="Номер паспорта" name="passport_number" type="text">
            </td>
          </tr>
          <!--Номер Дома/Квартиры-->
          <tr>
            <td style="padding: 5px 5px 0px 0px;">
              <input id="house_number" class="form-control" style="text-align: center;" placeholder="Номер Дома" name="house_number" type="text">
            </td>
            <td style="padding: 5px 0px 0px 5px;">
              <input id="apartment_number" class="form-control" style="text-align: center;" placeholder="Номер Квартиры" name="apartment_number" type="text">
            </td>
          </tr>
        </table>
    </div>
    <!--Адрес проживания-->
    <div class="form-group">
        <select name="select_residential_address" class="form-control" style="text-align: center;">
            <optgroup label="Адрес проживания">
                <option value="Братск, ул. Вокзальная">Братск, ул. Вокзальная</option>
            </optgroup>
        </select>
    </div>
    <!--Номер лицевого счёта-->
    <div class="form-group">
        <input type="text" name="personal_account_number" id="personal_account_number" class="form-control" style="text-align: center;" placeholder="Номер лицевого счёта (Обычно совпадает с номером квартиры)">
    </div>
    <!--Количество граждан, зарегистрированных по адресу-->
    <div class="form-group">
        <input type="text" name="quantity_citizens_registered_at" class="form-control" style="text-align: center;" placeholder="Количество граждан, зарегистрированных по адресу" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')">
    </div>
    <!--Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих-->
    <div class="form-group">
        <input type="text" name="quantity_citizens_registered_fees" class="form-control" style="text-align: center;" placeholder="Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')">
    </div>
    <!--Вид собственности-->
    <div class="form-group">
        <select name="select_type_property" class="form-control" style="text-align: center;">
            <optgroup label="Вид собственности">
                <option value="Приватизированная">Приватизированная</option>
            </optgroup>
        </select>
    </div>
    <!--Общая площадь помещений по лицевому счёту-->
    <div class="form-group">
        <input type="text" name="total_area_premises" class="form-control" style="text-align: center;" placeholder="Общая площадь помещений по лицевому счёту" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')">
    </div>
    <!--Размер платы за жилое помещение-->
    <div class="form-group">
        <input type="text" name="amount_payment_residential_premises" class="form-control" style="text-align: center;" placeholder="Размер платы за жилое помещение" onkeyup="this.value = this.value.replace (/[^0-9+.]/, '')">
    </div>
    <!--Контактный телефон-->
    <div class="form-group">
        <input type="text" name="contact_phone_number" id="contact_phone_number" style="text-align: center;" class="form-control" placeholder="Контактный телефон">
    </div>
    <!--E-mail-->
    <div class="form-group">
        <input type="email" name="contact_email" style="text-align: center;" class="form-control" placeholder="E-mail" im-insert="true">
    </div>
    <!--Пароль-->
    <div class="form-group">
        <input type="password" name="user_password" class="form-control" style="text-align: center;" placeholder="Пароль">
    </div>
    <!--Ведите пароль снова-->
    <div class="form-group">
        <input type="password" name="re_password" class="form-control" style="text-align: center;" placeholder="Ведите пароль снова">
    </div>
    <button type="submit" name="button_register" class="btn btn-primary btn-lg btn-block">ADD USER</button>
</form>
HTML;
//echo $ONE_REGISTER;
//print_residential_address($address_residential);
//echo $TWO_REGISTER;
//print_platform_email($platform_email);
//echo $TREE_REGISTER;

?>
