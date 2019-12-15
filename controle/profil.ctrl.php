<?php
  include('../model/DAO.class.php');
  $dao = new DAO();
  session_start();

  if($dao->estCoach($_SESSION['mail'])){
    include('../view/profilCoach.view.php');

  }else {
    include('../view/profilAdherent.view.php');
  }

 ?>
