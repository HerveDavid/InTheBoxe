<?php
  include('../model/DAO.class.php');
  session_start();
  $dao = new DAO();
if (isset($_POST['prenom']) && isset($_POST['nom'])
  && isset($_POST['tel']) ) {

  $prenom='prenom '.$_POST['prenom'];
  $nom='nom '.$_POST['nom'];
  $tel='tel '.$_POST['tel'];
   $res=$dao->updateAdherent($prenom , $_SESSION['mail']);
   $res=$dao->updateAdherent($nom,$_SESSION['mail']);
   $res=$dao->updateAdherent($tel,$_SESSION['mail']);
}
header('Location: profil.ctrl.php');

 ?>
