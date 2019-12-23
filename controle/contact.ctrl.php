<?php
  session_start();

  if (isset($_POST['message']) && isset($_POST['email'])) {
    $to      = "wawcool0007@ymail.com";
    $subject = 'Contact Site';
    $message = $_POST['message'];
    $headers = array(
      'From' => 'webmaster@example.com',
      'Reply-To' => 'webmaster@example.com'
    );

    include('../view/contact.view.php');
    if (mail($to, $subject, $message,$headers)) {
      echo "votre message a bien etais envoyer ";
    } else {
      echo "votre message a pas etais envoyer";
    }
  }else {
    include('../view/contact.view.php');
  }

 ?>
