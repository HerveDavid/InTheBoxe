<?php
session_start();

  /////////////////declaration/////////////////////////////////////////////

  // Utilisation de la classe View du framework
  require_once('../framework/view.class.php');
  // Utilisation de la DAO
  require_once('../model/DAO.class.php');
  $dao = new DAO();

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
    && isset($_POST['mail']) && isset($_POST['choix'])
    && isset($_POST['naiss']) && isset($_POST['adresse'])
    && isset($_POST['ville']) && isset($_POST['cp'])
    && isset($_POST['mdp']) && isset($_POST['confim'])) {

    // Initialisation des variables
    if (isset($_POST['tel']) ) {
      $telephone=$_POST['tel'];
     } else {
      $telephone=null;
    }

    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $email=$_POST['mail'];
    $motdepasse=$_POST['mdp'];
    $confimMdp=$_POST['confim'];

    $dateNaiss=$_POST['naiss'];
    $adresse=$_POST['adresse'];
    $ville=$_POST['ville'];
    $cpostal=$_POST['cp'];
    $genre= $_POST['choix'];
    // Vérifier que le mail n'éxiste pas dans la base de données
    if (!$dao->mailExistant($email)) {

      // Vérifier que les mots de passes correspondents
      if ($motdepasse == $confimMdp) {
        // Creation de l'Adherent
        $param = array("mail"=>$email,"nom"=>$nom,"prenom"=>$prenom,"tel"=>$telephone,"datenaiss"=>$dateNaiss,"adresse"=>$adresse,"codePostal"=> $cpostal , "ville"=>$ville, "statut"=>'En attente', "genre"=>$genre);

        $newAdherent= new AdherentClub($param);

        // Insertion de l'Adherent dans la base de données
        if ($dao->CreeAdherent($newAdherent,$motdepasse)){
          echo "un nouvel adherent a bien étais créé !";
        }else {
          echo "Echec";
        }
        $_SESSION['mail'] = $email;
        $_SESSION['prenom'] = $prenom;
        // Afficher le nouveau profil
        header('Location: profil.ctrl.php');

        // Si le mot de passe sasie et le mot de passe de Confirmation ne correspondents pas
      } else {
        header('Location: inscription.ctrl.php?erreur=Les mot de passes ne correspondents pas');//ORTHOGRAPHE
        //var_dump($motdepasse);
      }

    // Si le mail saisie a déjà etais utiliser
    } else {
      header('Location: inscription.ctrl.php?erreur=Cette email a deja etais attribuer');//ORTHOGRAPHE
      //header('Location: inscription.ctrl.php?erreur=Cette email a déjà étais attribuer');//ORTHOGRAPHE
      //var_dump($email);
    }
  ///////////////////////////////////////////////////////////////////////



  // Si formulaire non rempli afficher la vue inscription
  } else {
    include('../view/inscription.view.php');
  }






 ?>
