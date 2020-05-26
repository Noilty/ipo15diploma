<?php
require '../require-file.php';
require 'timer.php';
?>
<?php
//Вывод ощибок в таблицу
echo "<title>УСПЕХ</title>";
echo "<table align=center valign=center border=$border style='width: 99%;height: 99%;margin: 10px 0px 0px 0px;text-align: center;'>";
echo "<tr><td>";
echo "<font color=green><b>Успех:</b> Вы вышли из системы.</font><br />";
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
