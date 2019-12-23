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
header('Location: profil.ctrl.php');

 ?>
