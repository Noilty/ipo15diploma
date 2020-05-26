<script type="text/javascript">
  <?php
    $random_number = rand(5, 10);
    $_random_number = $random_number*100;
  ?>
  function timer(){
      var time=document.getElementById('timer');
      time.innerHTML--;
      if(time.innerHTML != 0){
        setTimeout(timer, <?php echo $_random_number; ?>);
      } else {
        window.location.href = '<?php echo "$address/pages/"; ?>';
      }
  }
  setTimeout(timer, <?php echo $_random_number; ?>);
</script>
