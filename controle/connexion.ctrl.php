<?php

/////////////////declaration/////////////////////////////////////////////

// Utilisation de la classe View du framework
require_once('../framework/view.class.php');
// Utilisation de la DAO
require_once('../model/AdherentDAO.class.php');
$adherents = new AdherentDAO();

/////////////////////////////////////////////////////////////////////////

///////////////// Si message d'erreur detecter //////////////////////////

if (isset($_GET['erreur'])) {
  $erreur= $_GET['erreur'];
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
    $MDPofficiel = $adherents->getMDP($email);

    // Vérification que le pseudo existe
    if (count($MDPofficiel)>0) {
      if ($MDPofficiel[0][0]==$motdepasse) {
        $profil=$adherents->getProfil($email);
        // Affichage du profil
        header('Location: profil.ctrl.php?id='.$profil[0]['id']);
      } else {
        // Si le profil n'est pas trouvé
        header('Location: connexion.ctrl.php?erreur=1');
      }
    } else {
      // Si il n'y a pas de MDPofficiel
      header('Location: connexion.ctrl.php?erreur=1');
    }
// Si formulaire non rempli afficher la vue inscription
} else {
  include('../view/connexion.view.php');
}

 ?>
