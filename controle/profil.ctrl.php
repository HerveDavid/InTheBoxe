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
      $GestMatch =$choix[4];
      $GestAtt =$choix[5];
    } else {
    $InfClub="show active";  $InfClub="show active";  $DemComb = "";   $GestAdh = "";   $GestActu =""; $GestMatch = "";   $GestAtt ="";
    }
    if (isset($_POST['modifier'])) {  //pour afficher la tab de modification avec le bon adherent
      $modifier="show active";
      $modifAdh=$dao->getAdherent($_POST['modifier']);
    }else {
      $modifier="";
    }
    if (isset($_POST['accepterDemande'])) {
      $adversaires="show active";
      $combattant=$dao->getAdherent($_POST['accepterDemande']);
      $listAdversaires= $dao->getAdversaires($combattant->getCategorie(),$combattant->getGenre());
    }
    if (isset($_POST['Selectionner'])) {
      $choix = explode("/",$_POST['Selectionner']);
      $sectionClub="show active";
      $club = $dao->getClub($choix[1]);
      $nomAdversaire = $choix[0];
      $combattantAdherent = $choix[2];
    }
    if (isset($_REQUEST['disabled'])) { // pour verrouillier la list des tab a gauche
      $disabled=$_REQUEST['disabled'];
      $InfClub="";  $DemComb = "";
      $GestAdh = "";   $GestActu ="";
      $GestMatch = "";  $GestAtt ="";
    }else {
      $disabled="";
    }
    if (isset($_GET['erreurActu'])) {
      $erreurActu="Vous avez saisie une date déjà expirée !";
    }else {
      $erreurActu="";
    }
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
    if (isset($_POST['supp'])) {
      $numCours=$_POST['supp'];
      $mail = $_SESSION['mail'];
      $dao->suppParticipant($numCours,$mail);
    }
    include('../view/profilAdherent.view.php');
  }

 ?>
