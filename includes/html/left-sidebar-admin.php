<?php
if($CORE_user_profile_id==$admin_profile_id){
$ADMIN_MENU=<<<HTML
<li class="nav-divider" style="text-align: center;">МЕНЮ АДМИНИСТРАТОРА</li>
<li class="nav-item">
    <a class="nav-link" href="$address/pages/admin/meter.php">Счётчики</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="$address/pages/admin/tarif-normativ.php">Тариф / Норматив</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="$address/pages/admin/users.php">Пользователи</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="$address/pages/admin/event-audit.php">Аудит событий</a>
</li>
HTML;
}

?>
