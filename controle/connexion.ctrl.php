<?php

/////////////////declaration/////////////////////////////////////////////
// Utilisation de la DAO
require_once('../model/DAO.class.php');
$dao = new DAO;

/////////////////////////////////////////////////////////////////////////

///////////////// Si message d'erreur detecter //////////////////////////

if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==1) {
    $erreur = "Le mail que vous avez entré est incorrect";
  }else {
    $erreur = "Le mot de passe que vous avez entré est incorrect";
  }
}
else {
  $erreur="";
}

/////////////////////////////////////////////////////////////////////////

///////////////// Si formulaire est rempli /////////////////////////////

if (isset($_POST['mail'])
  && isset($_POST['mdp'])) {

    // Initialisation des variables
    $email=$_POST['mail'];
    $motdepasse=$_POST['mdp'];

    $profil = $dao->getProfil($email);
    // Vérification que le mail existe
    if ($profil!=null) {
      if ($profil->getMotDePasse()==$motdepasse) {
        //recuperer le prenom du profil
        if ($dao->estCoach($email)) {
          $adh = $dao->getCoach($email);
        } else {
          $adh = $dao->getAdherent($email);
        }
        session_start();
        $_SESSION['mail'] = $email;
        $_SESSION['prenom'] = $adh->getPrenom();
        // Affichage du profil
        header('Location: profil.ctrl.php?');
      } else {

        // Si le mot de passe est faut
        header('Location: connexion.ctrl.php?erreur=2');
      }
    } else {
      // Si le mail n'existe pas
      header('Location: connexion.ctrl.php?erreur=1');
    }
// Si formulaire non rempli afficher la vue inscription
} else {
  include('../view/connexion.view.php');
}

 ?>
