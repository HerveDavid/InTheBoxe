<?php
  session_start();

  if (isset($_POST['message']) && isset($_POST['email'])
    && isset($_POST['sujet']) && isset($_POST['nom'])) {

    $to      = "wawcool0007@ymail.com"; // mail de reception
    $subject = 'CONTACT : '.$_POST['sujet'].' de '.$_POST['email'];
    $message = $_POST['message'];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $email = $_POST['nom']." vous envoi : $message";
    if (mail($to, $subject, $email,implode("\r\n", $headers))) { // envoi du mail
     $confirmation = "Le message à bien étais envoyé !";
    } else {
     $confirmation = "Le message n'a pas étais envoyé !";
    }
    include('../view/contact.view.php');

  }else {
    $confirmation = ""; // si pas d'envoi de mail pas de message de confirmation
    include('../view/contact.view.php');
  }

 ?>
