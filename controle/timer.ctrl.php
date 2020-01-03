<?php
  session_start();

  if (isset($_GET['mode'])) {
    include('../view/timer.view.php');
  }else {
    include('../view/accueilTimer.view.php');
  }
 ?>
