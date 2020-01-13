<?php
  session_start();

  require_once('../model/DAO.class.php');
  $dao = new DAO();
  $mail = $_SESSION['email'];
  /////////////////////////////////FONCTION ALEATOIRE//////////////////////////////////
  function random($car) { // fonction de generation de chaine aleatoire
    $string = "";
    $chaine = "AZERTYUIOPQSDFGHJKLMWXCVBN1234567890";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++) {
      $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
  }

  /////////////////////////////////ENVOI DE MAIL DE VERIFICATION////////////////////////
  if (isset($_GET['verif'])) {
    $erreur='';
    $code = random(10);
    $_SESSION['code']=$code;
    $to      = $mail;
    $subject = 'Verification';
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $email = "CODE DE VERIFICATION : $code";
    mail($to, $subject, $email,implode("\r\n", $headers));
    include('../view/verification.view.php');
    /////////////////////////////////VERIFICATION DU CODE ENTRE////////////////////////
  } elseif (isset($_POST['code'])) {
      if (strtolower($_POST['code'])==strtolower($_SESSION['code'])) {
        $newAdherent= new AdherentClub($_SESSION['param']);
        $motdepasse= $_SESSION['mdp'];
        $dao->CreeAdherent($newAdherent,$motdepasse);
        $erreur="";
         $_SESSION['mail'] = $_SESSION['email'];
        header('Location: profil.ctrl.php');
      }else {
        $erreur = "le code entré est incorrect";
        include('../view/verification.view.php');
      }
  } else {
    $erreur="email non envoyé";
    include('../view/verification.view.php');
  }


  //$dao->CreeAdherent($newAdherent,$motdepasse);

 ?>
