<?php
  $to      = "wawcool0007@ymail.com";
  $subject = "walid";
  $message = "
    <html>
        <head>
         <title>Calendrier des anniversaires pour Août</title>
        </head>
        <body>
         <p>Voici les anniversaires à venir au mois d\'Août !</p>
         <table>
          <tr>
           <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
          </tr>
          <tr>
           <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
          </tr>
          <tr>
           <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
          </tr>
         </table>
        </body>
       </html>";
     $headers[] = 'MIME-Version: 1.0';
          $headers[] = 'Content-type: text/html; charset=iso-8859-1';

          // En-têtes additionnels
          $from = "walid.kadura@yahoo.com";
          $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
          $headers[] = 'From : '.$from;
          $headers[] = "-f ".$from

if (mail($to, $subject, $message,implode("\r\n", $headers))) {
  echo "votre message a bien etais envoyer ";
} else {
  echo "votre message a pas etais envoyer";
}


 ?>
