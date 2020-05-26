<?php
require '../require-file.php';
require 'timer.php';
?>
<?php
//Вывод ощибок в таблицу
if (!$err_auth) {
  echo "<title>УСПЕХ</title>";
  echo "<table align=center valign=center border=$border style='width: 99%;height: 99%;margin: 10px 0px 0px 0px;text-align: center;'>";
  echo "<tr><td>";
  echo "<font color=green><b>Успех:</b> Вход выполнен!</font>";
  echo '
    <p align=center>
      Через '?>
      <TIMER id="timer"><?php echo $random_number; ?></TIMER>
      <?php echo ' сек. Вы будете перенаправлены на главную страницу системы.
    </p>
  ';
  echo "</td></tr>";
  echo "</table>";
} else {
  echo "<title>ОШИБКА</title>";
  echo "<table align=center valign=center border=$border style='width: 100%;height: 100%;margin: 10px 0px 0px 0px;text-align: center;'>";
  echo "<tr><td><font color=red><b>Ошибка:</b> Вход не выполнен!<br /></font>";
  foreach ($err_auth as $key => $value) {
    echo $err_auth[] = $value;
  }
  echo '
    <p align=center>
      Через '?>
      <TIMER id="timer"><?php echo $random_number; ?></TIMER>
      <?php echo ' сек. Вы будете перенаправлены на страницу входа в систему.
    </p>
  ';
  echo "</td></tr>";
  echo "</table>";
}
?>
