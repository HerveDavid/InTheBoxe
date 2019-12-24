<?php
  session_start();

  if (isset($_POST['message']) && isset($_POST['email'])
    && isset($_POST['sujet']) && isset($_POST['nom'])) {

    $to      = "wawcool0007@ymail.com"; // a changer avec le mail du serveur
    $subject = $_POST['nom'].' : '.$_POST['sujet'];
    $message = $_POST['message'];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $email = "
        <html>
          <head>
           <title></title>
          </head>
          <body>
           <h1>Voici un message de ".$_POST['nom']."</h1>
           <br>
           <p>$message </p>
           <br>
           <h2>repondre : ".$_POST['email']."</h2>
          </body>
         </html>";
    if (mail($to, $subject, $email,implode("\r\n", $headers))) {
     $confirmation = "Le message à bien étais envoyé !";
    } else {
     $confirmation = "Le message n'a pas étais envoyé !";
    }
    include('../view/contact.view.php');

  }else {
    $confirmation = "";
    include('../view/contact.view.php');
  }

 ?>
