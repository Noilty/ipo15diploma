<?php
require 'require-file.php';
//unset($_SESSION['loggen_user']);
session_destroy(); //Уничтожаем ссесию
//header("Location: system-messages/logout-complite.php");
header("Location: $address/system-messages/logout-complite.php");
?>
