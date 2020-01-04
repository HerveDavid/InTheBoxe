<?php
  include('../model/DAO.class.php');
  $dao = new DAO();
  session_start();

  if($dao->estCoach($_SESSION['mail'])){
    $profil = $dao->getCoach($_SESSION['mail']);



    include('../view/profilCoach.view.php');

  }else {
    $profil = $dao->getAdherent($_SESSION['mail']);
    $demande=$dao->demandeEnCours($profil->getMail()); // permet de savoir si l'adherent a déjà une demande en cours

    if (isset($_GET['demande'])) {
      $dao->CreeDemandeCombat($_SESSION['mail']);
      $message=true;
    }else {
      $message =false;
    }

    include('../view/profilAdherent.view.php');
  }

 ?>
