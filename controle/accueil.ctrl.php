<?php

  session_start();
  if (isset($_GET['deco'])) { // pour deconnecter le compte
    $_SESSION['mail']=Null;
  }

  include('../view/accueil.view.php');

 ?>
