<?php
$data=$_POST;
$PROFILE_SETTING=<<<HTML
<div class="alert alert-info" role="alert" style="text-align: center;">Пустые поля примут значения по умолчанию</div>
<form action="$address/system-messages/test.php" method="post">
    <div class="form-group">
        <table style="width: 100%;" border=0>
            <tr>
                <td>
                    Контактный телефон
                    <input type="text" name="new_contact_phone_number" id="contact_phone_number" placeholder="Новый телефон" class="form-control" style="text-align: center;">
                </td>
                <td>
                    <br>
                    <input type="text" name="old_contact_phone_number" class="form-control" value="$CORE_contact_phone_number" readonly style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    Контактный E-mail
                    <input type="email" name="new_contact_email" placeholder="Новый E-mail" class="form-control" style="text-align: center;">
                </td>
                <td>
                    <br>
                    <input type="email" name="old_contact_email" class="form-control" value="$CORE_contact_email" readonly style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Пароль
                    <input type="password" name="old_pass" placeholder="Старый пароль" class="form-control" style="text-align: center;">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="new_pass" placeholder="Новый пароль" class="form-control" style="text-align: center;">
                </td>
                <td>
                    <input type="password" name="re_new_pass" placeholder="Повторите новый пароль" class="form-control" style="text-align: center;">
                </td>
            </tr>
        </table>
    </div>
    <button type="submit" name="button_profile_setting" class="btn btn-primary btn-lg btn-block" style="text-align: center;">
      <span class="bigger-110">ИЗМЕНИТЬ</span>
    </button>
</form>
HTML;
?>
