<?php
require '../system-info.php';
if ($system_update=='true') {
  echo "<title>update</title>";
  echo "Обновление системы до версии $system_version, зайдите позже.";
} else {
  header('Location: ../');
}

?>
