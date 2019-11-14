<?php
session_start();
var_dump($_SESSION['essai']);

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

  if (isset($_POST['prenom']) && isset($_POST['nom'])
    && isset($_POST['mail']) && isset($_POST['tel'])
    && isset($_POST['naiss']) && isset($_POST['adresse'])
    && isset($_POST['ville']) && isset($_POST['cp'])
    && isset($_POST['mdp']) && isset($_POST['conf'])) {

    // Initialisation des variables
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $email=$_POST['mail'];
    $motdepasse=$_POST['mdp'];
    $confimMdp=$_POST['$confim'];
    $telephone=$_POST['tel'];
    $dateNaiss=$_POST['naiss'];
    $adresse=$_POST['adresse'];
    $ville=$_POST['ville'];
    $cpostal=$_POST['cp'];

    // Vérifier que le mail n'éxiste pas dans la base de données
    if (!$adherents->mailExistant($email)) {

      // Vérifier que les mots de passes correspondents
      if ($motdepasse == $confimMdp) {

        // Creation de l'Adherent
        $newAdherent= new Adherent($prenom,$nom,$email,$motdepasse,$confimMdp,$telephone,$dateNaiss,$adresse,$ville,$cpostal);

        // Insertion de l'Adherent dans la base de données
        $adherents->CreeAdherent($newAdherent);

        // Afficher le nouveau profil
        header('Location: profil.ctrl.php?numAdh='.$adherents->getNumAdherent($email));


        // Si le mot de passe sasie et le mot de passe de Confirmation ne correspondents pas
      } else {
        header('Location :inscription.ctrl.php?erreur=Les mot de passes ne correspondents pas');//ORTHOGRAPHE
      }

    // Si le mail saisie a déjà etais utiliser
    } else {
      header('Location :inscription.ctrl.php?erreur=Cette email a déjà étais attribuer');//ORTHOGRAPHE
    }
  ///////////////////////////////////////////////////////////////////////



  // Si formulaire non rempli afficher la vue inscription
  } else {
    //include('../view/inscription.view.php');
  }






 ?>
