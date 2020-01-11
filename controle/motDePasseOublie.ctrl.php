<?php
  require_once('../model/DAO.class.php');
  $dao = new DAO;

  if (isset($_POST['mail'])) {
    $mail=$_POST['mail'];
    $profil= $dao->getProfil($mail);
    if ($profil!=null) {
      $mdp=$profil->getMotDePasse();
      $to      = $mail;
      $subject = "Mot de Passe Oublier";
      $headers[] = 'MIME-Version: 1.0';
      $headers[] = 'Content-type: text/html; charset=iso-8859-1';
      $email = "
          <html>
            <head>
             <title></title>
            </head>
            <body>
             <h1>Mot de passe oublié : </h1>
             <br>
             <p>Votre mot de passe est : </p>
             <h3>$mdp</h3>
             <br>
            </body>
           </html>";
      if (mail($to, $subject, $email,implode("\r\n", $headers))) {
       $confirmation = "Le message à bien était envoyé !";
      } else {
       $confirmation = "Le message n'a pas était envoyé !";
      }
      $erreur="";
      include('../view/motDePasseOublie.view.php');
    }else {
      $confirmation="";
      $erreur="Vous n'êtes pas inscrit à notre site";
      include('../view/motDePasseOublie.view.php');
    }
  }else {
    $confirmation="";
    $erreur="";
    include('../view/motDePasseOublie.view.php');
  }

 ?>
