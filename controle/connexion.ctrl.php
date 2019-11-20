<?php

/////////////////declaration/////////////////////////////////////////////

// Utilisation de la classe View du framework
require_once('../framework/view.class.php');
// Utilisation de la DAO
require_once('../model/DAO.class.php');
$dao = new DAO;

/////////////////////////////////////////////////////////////////////////

///////////////// Si message d'erreur detecter //////////////////////////

if (isset($_GET['erreur'])) {
  if ($_GET['erreur']==1) {
    $erreur = "Le mail que vous avez entre est incorrect";
  }else {
    $erreur = "Le mot de passe que vous avez entre est incorrect";
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
    $adh = $dao->getAdherent($email);
    var_dump($adh);
    // Vérification que le pseudo existe
    if ($adh!=null) {
      var_dump($adh->getMotDePasse());
      if ($adh->getMotDePasse()==$motdepasse) {

        session_start();
        $_SESSION['mail'] = $adh.getMail(); //a modifier
        // Affichage du profil
        header('Location: profil.ctrl.php?');
      } else {
        // Si le mot de passe est faut
        //header('Location: connexion.ctrl.php?erreur=2');
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
