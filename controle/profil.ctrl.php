<?php
  session_start();

  if(estCoach($_SESSION['mail']){
    include('../view/coach.view.php');

  }else include('../view/profil.view.php');


 ?>
