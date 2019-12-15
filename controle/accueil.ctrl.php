<?php

  session_start();
  if (isset($_GET['deco'])) {
    $_SESSION['mail']=Null;
  }
  include('../view/accueil.view.php');
  
 ?>
