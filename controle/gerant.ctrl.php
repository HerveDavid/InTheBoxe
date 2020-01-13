<?php
  include('../model/DAO.class.php');
  $dao = new DAO;

  session_start();
  $coach = $dao->getCoach($_SESSION['mail']);
  ///////////////////GESTION DES ACTUALITE///////////////////////////////////////////////
  if (isset($_POST['nomActu']) && isset($_POST['typeActu'])
  && isset($_POST['description']) && isset($_POST['date'])) { // si le formulaire d'Actualite a etais rensegnier
    if ($_POST['date']<date("Y-m-d")) { // si la date est inferieur a la date d'aujoud'hui envoyer un message d'erreur
      header('Location: profil.ctrl.php?tabActive=" / /show active/ / / "&erreurActu=date');
    }else {
      $nomActualite= $_POST['nomActu'];
      $typeActualite = $_POST['typeActu'];
      $description = $_POST['description'];
      $nomCoach = $coach->getNom();
      $date=$_POST['date'];
      $param = array('nom'=>$nomActualite ,
                      'type'=>$typeActualite ,
                       'dateAct'=>$date ,
                       'description'=> $description,
                       'coach' => $nomCoach);
      $actu = new Actualite($param);
      $dao->CreeActualite($actu); // creation de l'actulite
      header('Location: profil.ctrl.php?tabActive=" / /show active/ / / "'); // revenir a la page en affichant la bonne tab
    }

  }
  if (isset($_POST['clear'])) { // si le bouton supprimer les ancienne actuaite a etais appuyer dans la gestion des actualite de combats
    $dao->suppActualitePasser(); // supprimer les actualite passer
    header('Location: profil.ctrl.php?tabActive=" / /show active/ / / "'); // revenir a la page en affichant la bonne tab
  }
  if (isset($_POST['supp'])) {
    $value = explode("/",$_POST['supp']);
    $nom= $value[0];
    $date = $value[1];
    $dao->suppActualite($nom,$date);
    header('Location: profil.ctrl.php?tabActive=" / /show active/ / / "'); // revenir a la page en affichant la bonne tab
  }
  //////////////////////////////////////////////////////////////////////////////////////////////

  /////////////////////////GESTION DES DEMANDES DE COMBATS/////////////////////////////////////////

  if (isset($_POST['refuserDemande'])) { // si le bouton refuser a etais appuyer dans la gestion des demades de combats
    $dao->suppDemandeCombat($_POST['refuserDemande']); // supprimer la demande de combat
    header('Location: profil.ctrl.php?tabActive=" /show active/ / / / "'); // revenir a la page en affichant la bonne tab
  }
  ///////////////////////////////////////////////////////////////////////////////////////


 ?>
