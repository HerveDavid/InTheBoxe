<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../view/src/style/contact.css">
    <title></title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <li id= "Club"><a href="../controle/club.ctrl.php">Club</a></li>
          <li id="Entrainement"><a href="../controle/entrainement.ctrl.php">Entrainement</a></li>
          <li id="Compétition"><a href="#Competition">Competition</a></li>
          <li id="Contact"><a href="../controle/contact.ctrl.php">Contact</a></li>
          <li id="Connexion"><a href="../controle/connexion.ctrl.php">Connexion</a></li>
        </ul>
      </nav>
    </header>

    <div class="boxe-main-full">
      <article class="boxe-article">
          <div class="boxe-map">
            <h5>CONTACT</h5>
            <h1>Restons en contact</h1>
            <p>
                <img src="../view/src/img/contact/gantsBoxe.png" alt="gantsBoxe">
            </p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2751.449025643487!2d6.586565315525784!3d46.40015197912312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c3cab6d4c055f%3A0x4fa7470265a3f22a!2sImpasse%20Dr%20Dumur%2C%2074500%20%C3%89vian-les-Bains!5e0!3m2!1sfr!2sfr!4v1575628999904!5m2!1sfr!2sfr" width="1200" height="250" frameborder="0" align="middle" style="border:0;" allowfullscreen=""></iframe>

          </div>
      </article>
    </div>
    <div class="boxe-main-gauche">
        <p>
            <img src="../view/src/img/contact/mail.png" alt="enveloppe">
        </p>
        <p id="question">
            Pour toutes questions n'hésitez pas à nous contacter
        </p>

        <form action="" method="post" class="formulaire-email" novalidate="novalidate">
          <input type="email" name="votre-email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="E-mail">
          <br>
          <textarea name="votre-message" aria-invalid="false" placeholder="Entrez votre message"></textarea>
          <br>
          <input type="submit" class="bouton" value="ENVOYER">
        </form>
    </div>

    <div class="boxe-main-droite">
      <p id="place">
          <img src="../view/src/img/contact/place.png" alt="place">
      </p>
      <h5>
        Boxing Club Evian
      </h5>
      <p>
        Impasse du Docteur Dumur
        <br>
        74500 Évian-les-Bains
        <br>
        06 58 87 23 90
        <br>
        boxingclubevian@gmail.com
      </p>
      <p id="titreHoraires">
        Horaires d'ouverture
      </p>
      <p id="horaires">
        Lundi ……………….……. 9h > 21h
        <br>
        Mardi ……………….……. 9h > 21h
        <br>
        Mercredi ……………….……. 9h > 21h
        <br>
        Jeudi .…….………….…. 9h > 21h
        <br>
        Vendredi ……………….……. 9h > 21h
        <br>
        Samedi ……………….……. 9h > 21h
        <br>
        Dimanche …...........…………….……. OFF
      </p>

    </div>


  </body>
</html>
