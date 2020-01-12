<?php
  session_start();

  if (isset($_POST['message']) && isset($_POST['email'])
    && isset($_POST['sujet']) && isset($_POST['nom'])) {

    $to      = "wawcool0007@ymail.com"; // a changer avec le mail du serveur
    $subject = 'CONTACT : '.$_POST['sujet'].' de '.$_POST['email'];
    $message = $_POST['message'];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $email = $_POST['nom']." vous envoi : $message";
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
