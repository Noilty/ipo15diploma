<?php
$data=$_POST;
$AUTH=<<<HTML
<form id="login" action="$address/system-messages/auth.php" method="post">
    <div class="form-group">
        <input class="form-control form-control-lg" id="mask_login" class="form-control" style="text-align: center;" placeholder="Логин" name="user_login" type="text">
    </div>
    <div class="form-group">
        <input class="form-control form-control-lg" style="text-align: center;" placeholder="Пароль" name="user_password" type="password">
    </div>
    <div class="form-group">
        <label class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
        </label>
    </div>
    <button type="submit" name="button_login" class="btn btn-primary btn-lg btn-block">
      <span class="bigger-110">Войти</span>
    </button>
</form>
HTML;
?>
