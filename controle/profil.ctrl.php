<?php
  include('../model/DAO.class.php');
  $dao = new DAO();
  session_start();

  if($dao->estCoach($_SESSION['mail'])){
    $profil = $dao->getCoach($_SESSION['mail']);
    $listAdherents = $dao->getAllAdherent();
    $actualites = $dao->getActualites();
    $demandesCombats= $dao->getDemandesCombats();
    $listAttente= $dao->getAdherentAttente();

    if (isset($_REQUEST['tabActive'])){ // pour afficher la bonne tab
      $choix = explode("/",$_REQUEST['tabActive']);
      $InfClub= $choix[0];
      $DemComb = $choix[1];
      $GestActu = $choix[2];
      $GestAdh =$choix[3];
    } else {
      $InfClub="show active";
      $DemComb = "";
      $GestAdh = "";
      $GestActu ="";
    }
    if (isset($_POST['modifier'])) {  //pour afficher la tab de modification avec le bon adherent
      $modifier="show active";
      $modifierAdherent=$dao->getAdherent($_POST['modifier']);
    }else {
      $modifier="";
    }
    if (isset($_POST['disabled'])) {
      $disabled=$_POST['disabled'];
      $InfClub="";
      $DemComb = "";
      $GestAdh = "";
      $GestActu ="";
    }else {
      $disabled="";
    }
    // var_dump($_REQUEST);
    // var_dump($_GET);
    // var_dump($_POST);
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
