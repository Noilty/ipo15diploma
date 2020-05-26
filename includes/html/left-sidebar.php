<?php
require PATH_ROOT.'/includes/html/left-sidebar-accountant.php';
require PATH_ROOT.'/includes/html/left-sidebar-admin.php';
$LEFT_SIDEBAR=<<<HTML
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="d-xl-none d-lg-none" href="#">All MENU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
            <li class="nav-divider" style="text-align: center;">МЕНЮ ПОЛЬЗОВАТЕЛЯ</li>
            <li class="nav-item">
                <a class="nav-link" href="$address/pages/meter.php">Счётчики</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="$address/pages/payment.php">Расчет платежа по коммунальным услугам</a>
            </li>
            $ACCOUNTANT_MENU
            $ADMIN_MENU
        </ul>
    </div>
</nav>
HTML;
?>
