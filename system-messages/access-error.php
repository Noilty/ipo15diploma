<?php
require '../require-file.php';
require 'timer.php';
?>
<?php
echo "<title>ОШИБКА</title>";
echo "<table align=center valign=center border=$border style='width: 99%;height: 99%;margin: 10px 0px 0px 0px;text-align: center;'>";
echo "<tr><td>";
echo "<font color=red><b>Ошибка доступа:</b> Cейчас сессия будет уничтожена.</font><br />";
echo '
  <p align=center>
    Через '?>
    <TIMER id="timer"><?php echo $random_number; ?></TIMER>
    <?php echo ' сек. Вы будете перенаправлены на страницу входа в систему.
  </p>
';
echo "</td></tr>";
echo "</table>";
?>
