<?php
  include('../model/DAO.class.php');
  $dao = new DAO();

  session_start();
  if (isset($_SESSION['mail'])) {
    if (!$dao->estCoach($_SESSION['mail'])) {
      $adhConnecter=true;
    }
  }else {
    $adhConnecter=false;
  }

  global $adhConnecter;
  include('../view/planning.view.php');

 ?>
