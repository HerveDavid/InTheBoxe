<?php
  include('../model/DAO.class.php');
  $dao = new DAO();
  session_start();

  if($dao->estCoach($_SESSION['mail'])){
    $profil = $dao->getCoach($_SESSION['mail']);
    include('../view/profilCoach.view.php');

  }else {
    $profil = $dao->getAdherent($_SESSION['mail']);
    include('../view/profilAdherent.view.php');
  }

 ?>
