<?php
  include('../model/DAO.class.php');
  session_start();
  $dao = new DAO();

  /////////////////////MODIFICATION DES INFORMATIONS COTE ADHERENT///////////////////////////////
  if (isset($_POST['prenom']) && isset($_POST['nom'])
    && isset($_POST['tel']) && isset($_POST['adresse'])
    && isset($_POST['codePostal']) && isset($_POST['ville']) ) {

    $prenom='prenom '.$_POST['prenom']; /// (attribut , valeur)
    $nom='nom '.$_POST['nom']; /// (attribut , valeur)
    $tel='tel '.$_POST['tel']; /// (attribut , valeur)
    $adresse='adresse '.$_POST['adresse']; /// (attribut , valeur)
    $codePostal='codePostal '.$_POST['codePostal']; /// (attribut , valeur)
    $ville='ville '.$_POST['ville']; /// (attribut , valeur)
     $res=$dao->updateAdherent($prenom , $_SESSION['mail']); /// (modif , proprietaire)
     $res=$dao->updateAdherent($nom,$_SESSION['mail']); /// (modif , proprietaire)
     $res=$dao->updateAdherent($tel,$_SESSION['mail']); /// (modif , proprietaire)
     $res=$dao->updateAdherent($adresse,$_SESSION['mail']); /// (modif , proprietaire)
     $res=$dao->updateAdherent($codePostal,$_SESSION['mail']); /// (modif , proprietaire)
     $res=$dao->updateAdherent($ville,$_SESSION['mail']); /// (modif , proprietaire)
     $adh = $dao->getAdherent($_SESSION['mail']); /// (modif , proprietaire)
     $_SESSION['prenom']= $adh->getPrenom();
  }
/////////////////////MODIFICATION DES INFORMATIONS COTE GERANT///////////////////////////////
  if (isset($_POST['mail'])) {
    $dao->updateAdherent('genre '.$_POST['choix'],$_POST['mail']);
    $dao->updateAdherent('prenom '.$_POST['prenom'],$_POST['mail']);
    $dao->updateAdherent('nom '.$_POST['nom'],$_POST['mail']);
    $dao->updateAdherent('tel '.$_POST['tel'],$_POST['mail']);
    $dao->updateAdherent('datenaiss '.$_POST['naiss'],$_POST['mail']);
    $dao->updateAdherent('adresse '.$_POST['adresse'],$_POST['mail']);
    $dao->updateAdherent('ville '.$_POST['ville'],$_POST['mail']);
    $dao->updateAdherent('codePostal '.$_POST['cp'],$_POST['mail']);
    $dao->updateAdherent('taille '.$_POST['taille'],$_POST['mail']);
    $dao->updateAdherent('poids '.$_POST['poids'],$_POST['mail']);
    $dao->updateAdherent('categorie '.$_POST['typeCategorie'],$_POST['mail']);
    $dao->updateAdherent('victoire '.$_POST['V'],$_POST['mail']);
    $dao->updateAdherent('nul '.$_POST['N'],$_POST['mail']);
    $dao->updateAdherent('defaite '.$_POST['D'],$_POST['mail']);
    header('Location: profil.ctrl.php?tabActive=" / / /show active"');
  }


  header('Location: profil.ctrl.php');

 ?>
