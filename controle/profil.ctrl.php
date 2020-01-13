<?php
  include('../model/DAO.class.php');
  $dao = new DAO();
  session_start();
  //////////////////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////PROFIL GERANT////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////
  if($dao->estCoach($_SESSION['mail'])){
    $profil = $dao->getCoach($_SESSION['mail']);
    $listAdherents = $dao->getAllAdherent();
    $actualites = $dao->getActualites();
    $demandesCombats= $dao->getDemandesCombats();
    $listAttente= $dao->getAdherentAttente();
    ///////////////////////////AFFICHAGE DE LA BONNE TAB///////////////////////////////////////////////
    if (isset($_REQUEST['tabActive'])){ // pour afficher la bonne tab
      $choix = explode("/",$_REQUEST['tabActive']);
      $InfClub= $choix[0];
      $DemComb = $choix[1];
      $GestActu = $choix[2];
      $GestAdh =$choix[3];
      $GestMatch =$choix[4];
      $GestAtt =$choix[5];
    } else {
      // affichage par defaut
    $InfClub="show active";  $DemComb = "";   $GestAdh = "";   $GestActu =""; $GestMatch = "";   $GestAtt ="";
    }
    ///////////////////////////AFFICHAGE DU FORMLULAIRE DE MODIFICATION///////////////////////////////////////////////

    if (isset($_POST['modifier'])) {  //pour afficher la tab de modification avec le bon adherent
      $modifier="show active";
      $modifAdh=$dao->getAdherent($_POST['modifier']);
    }else {
      $modifier="";
    }
    ///////////////////////////AFFICHAGE DE LA LIST D'ADVERSAIRES///////////////////////////////////////////////

    if (isset($_POST['accepterDemande'])) {
      $adversaires="show active";
      $combattant=$dao->getAdherent($_POST['accepterDemande']);
      $listAdversaires= $dao->getAdversaires($combattant->getCategorie(),$combattant->getGenre());
    }
    ///////////////////////////AFFICHAGE DU CLUB DE L'ADVERSAIRE///////////////////////////////////////////////
    if (isset($_POST['Selectionner'])) {
      $choix = explode("/",$_POST['Selectionner']);
      $sectionClub="show active";
      $club = $dao->getClub($choix[1]);
      $nomAdversaire = $choix[0];
      $combattantAdherent = $choix[2];
    }
    ////////////////////////VEROUILLAGE DU MENU DE NAVIGATION/////////////////////////////////////////////////
    if (isset($_REQUEST['disabled'])) { // pour verrouillier la list des tab a gauche
      $disabled=$_REQUEST['disabled'];
      $InfClub="";  $DemComb = "";
      $GestAdh = "";   $GestActu ="";
      $GestMatch = "";  $GestAtt ="";
    }else {
      $disabled="";
    }
    ////////////////////////AFFICHAGE DU MESSAGE D'ERREUR ACTUALITE/////////////////////////////////////////////////
    if (isset($_GET['erreurActu'])) {
      $erreurActu="Vous avez saisie une date déjà expirée !";
    }else {
      $erreurActu="";
    }
    include('../view/profilCoach.view.php');

  }else {
    //////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////PROFIL ADHERENT////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////
    $profil = $dao->getAdherent($_SESSION['mail']);
    $demande=$dao->demandeEnCours($profil->getMail()); // permet de savoir si l'adherent a déjà une demande en cours

    ////////////////////////CREATION D'UNE DEMANDE DE COMBAT/////////////////////////////////////////////////
    if (isset($_GET['demande'])) {
      $dao->CreeDemandeCombat($_SESSION['mail']);
      $message=true;
    }else {
      $message =false;
    }
    ////////////////////////SUPPRESSION DU COURS CHOISIE/////////////////////////////////////////////////
    if (isset($_POST['supp'])) {
      $numCours=$_POST['supp'];
      $mail = $_SESSION['mail'];
      $dao->suppParticipant($numCours,$mail);
    }
    include('../view/profilAdherent.view.php');
  }

 ?>
