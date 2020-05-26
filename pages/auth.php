<?php
require '../require-file.php';
if(!isset($_SESSION['loggen_user']))://Проверяем: сессия активна?
    //Если НЕТ то выполняем код ниже
    if ($system_update=='fasle') {//Проверяем: сайт на профилактике
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/libs/css/style.css">
        <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        </style>
    </head>

    <body>
      <?php //echo $REGISTER_USER; ?>
        <!-- ============================================================== -->
        <!-- login page  -->
        <!-- ============================================================== -->
        <div class="splash-container">
            <div class="p-3 mb-2 bg-danger text-white" style="text-align: center;">Логин: 00-00-000000-00-00<br />Пароль: 00000</div>
            <div class="card ">
                <div class="card-header text-center">
                    <a class="navbar-brand" href="location.php" title="<?php echo $system_name.' '.$type; ?>" style="padding: 0px;margin: 0px;">
                        <?php echo $CORE_system_name_type; ?>
                    </a>
                    <span class="splash-description" title="<?php echo $LANGUAGE_SITE['auth']['organization'].' &laquo;'.$LANGUAGE_SITE['auth']['organization_name'].'&raquo;'; ?>"><?php echo $CORE_organization; ?></span>
                </div>
                <div class="card-body">
                    <?php echo $AUTH; ?>
                </div>
                <div class="card-footer bg-white p-0  ">
                    <div class="card-footer-item card-footer-item-bordered" style="width: 50%;margin: 0px;padding: 0px;">
                        <a href="test.php" class="footer-link">Завести аккаунт</a></div>
                    <div class="card-footer-item card-footer-item-bordered">
                        <a href="#" class="footer-link">Забыли пароль?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- end login page  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- INCLUDE INPUT MASK -->
        <!--<script src="../assets/js/mask/jquery.js"></script>-->
        <script src="../assets/libs/js/mask/jquery.maskedinput.min.js"></script>
        <script src="../assets/libs/js/mask/mask-setting.js"></script>
    </body>

    </html>
<?php
} else {
  header('Location: system-messages/system-update.php');
}
mysqli_close($link);
else: // Если сессия НЕ активна то перенаправляем
	session_destroy(); //Уничтожаем ссесию
  header('Location: home.php');
endif; // Конец
?>
