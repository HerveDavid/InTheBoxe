<?php
  include('../model/DAO.class.php');
  session_start();
  $dao = new DAO();
if (isset($_POST['prenom']) && isset($_POST['nom'])
  && isset($_POST['tel']) && isset($_POST['adresse'])
  && isset($_POST['codePostal']) && isset($_POST['ville']) ) {

  $prenom='prenom '.$_POST['prenom'];
  $nom='nom '.$_POST['nom'];
  $tel='tel '.$_POST['tel'];
  $adresse='adresse '.$_POST['adresse'];
  $codePostal='codePostal '.$_POST['codePostal'];
  $ville='ville '.$_POST['ville'];
   $res=$dao->updateAdherent($prenom , $_SESSION['mail']);
   $res=$dao->updateAdherent($nom,$_SESSION['mail']);
   $res=$dao->updateAdherent($tel,$_SESSION['mail']);
   $res=$dao->updateAdherent($adresse,$_SESSION['mail']);
   $res=$dao->updateAdherent($codePostal,$_SESSION['mail']);
   $res=$dao->updateAdherent($ville,$_SESSION['mail']);
   $adh = $dao->getAdherent($_SESSION['mail']);
   $_SESSION['prenom']= $adh->getPrenom();
}
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
