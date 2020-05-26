<?php
require '../system-info.php';
if ($system_update=='true') {
	header('Location: ../system-messages/system-update.php');
} else {
	header('Location: ../');
}
?>
