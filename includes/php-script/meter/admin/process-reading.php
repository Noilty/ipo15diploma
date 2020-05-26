<?php
require_once '../../../../require-file.php';
$penance_id=$_GET['penance_id'];

if ($CORE_user_profile_id==$admin_profile_id) {
  $sql_request_penance = "UPDATE `db_meter`
  SET `db_penance_processing` = '1',
      `db_penance_transfer` = NOW()
  WHERE `db_penance_id` = '$penance_id'";
  mysqli_query($link, $sql_request_penance);
  mysqli_close($link);
  $yspex = "УСПЕХ";
} else {
  $yspex = "ПРОВАЛ";
}

?>
<title><?php echo $yspex; ?></title>
<script type="text/javascript">
  alert('<?php echo $yspex; ?>');
  window.location.replace('../../../../pages/admin/');
</script>
