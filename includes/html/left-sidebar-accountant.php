<?php
if(($CORE_user_profile_id==$admin_profile_id)||($CORE_user_profile_id==$accountant_profile_id)) {
$ACCOUNTANT_MENU=<<<HTML
<li class="nav-divider" style="text-align: center;">МЕНЮ БУХГАЛТЕРА</li>
<li class="nav-item">
    <a class="nav-link" href="#">Расчет платежа по коммунальным услугам</a>
</li>
HTML;
}

?>
