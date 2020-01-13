<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="../view/src/style/contact.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
      <link rel="icon" href="../view/src/img/logo.png" />
    <title>Contact</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-white">
        <a class="navbar-brand" href="#">
          <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">Menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../controle/accueil.ctrl.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/actualite.ctrl.php">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/planning.ctrl.php">Planning/Tarifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/club.ctrl.php">Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../controle/contact.ctrl.php">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
            <?php if (isset($_SESSION['mail'])) {
                $nom = $_SESSION['prenom']; ?>
                <li class="nav-item dropdown bg-red">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?=$nom?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../controle/profil.ctrl.php">Profil</a>
                    <a class="dropdown-item" href="../controle/accueil.ctrl.php?deco=1">Déconnexion</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
            <?php }else { ?>

              <li class="nav-item my-2 my-sm-0 bg-red">
                <a class="nav-link" href="../controle/connexion.ctrl.php">Connexion</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </header>

    <!-- <img id="sponsor" src="../view/src/img/sponsor.png" alt="sponsor"> -->

    <div class="px-0 mx-0 mt-5 text-center">
      <article class="boxe-article">
          <div class="boxe-map">
            <h5>CONTACT</h5>
            <h1>Restons en contact</h1>
            <p>
                <img src="../view/src/img/contact/gantsBoxe.png" alt="gantsBoxe">
            </p>

              <iframe
                class="embed-responsive-item embed-responsive-21by9"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2751.449025643487!2d6.586565315525784!3d46.40015197912312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c3cab6d4c055f%3A0x4fa7470265a3f22a!2sImpasse%20Dr%20Dumur%2C%2074500%20%C3%89vian-les-Bains!5e0!3m2!1sfr!2sfr!4v1575628999904!5m2!1sfr!2sfr"
                >
              </iframe>

          </div>
      </article>
    </div>

    <div class="d-flex flex-wrap text-center pt-5 align-items-start justify-content-around">
      <div class="">
          <p>
              <img src="../view/src/img/contact/mail.png" alt="enveloppe">
          </p>
          <p id="question">
              Pour toutes informations complémentaires n'hésitez pas à nous contacter
          </p>

          <form action="../controle/contact.ctrl.php" method="post" class="formulaire-email">
            <input type="email" name="email" size="40" required placeholder="E-mail" >
            <br>
            <input type="text" name="nom"  size="40" required  placeholder="Nom" >
            <br>
            <input type="text" name="sujet" size="40"  required placeholder="Sujet" >
            <br>
            <textarea name="message" required placeholder="Entrez votre message" ></textarea>
            <br>
            <input type="submit" class="bouton" value="ENVOYER">
          </form>
          <?php     global $confirmation; ?>
          <p style='color:green'> <?= $confirmation ?></p>
      </div>
      <div class="">
        <p id="place">
            <img src="../view/src/img/contact/place.png" alt="place">
        </p>
        <h5>
          Boxing Club Evian
        </h5>
        <br>
        <p class="">
          Impasse du Docteur Dumur
          <br>
          74500 Évian-les-Bains
          <br>
          06 58 87 23 90
          <br>
          boxingclubevian@gmail.com
          <br>
          Parking à proximité du club
        </p>
        <br>
        <h5>
          Horaires d'ouvertures
        </h5>
        <br>
        <p class="text-justify" id="horaires">
          Lundi ……………….…......................…. 17h > 20h
          <br>
          Mardi ………………...............……. 18h30 > 20h
          <br>
          Mercredi ………….......…….….....…. 18h > 20h
          <br>
          Jeudi   ..........................9h > 10h30 | 18h > 20h
          <br>
          Vendredi ……………..…............……. 17h > 20h
          <br>
          Samedi ……......……….....….……. 9h > 10h30
          <br>
          Dimanche …................…………….……. FERMÉ
        </p>

      </div>
    </div>

    <div class="mt-5 text-center" id="fb-root">
      <script async defer crossorigin="anonymous"
              src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0"></script>
      <div class="fb-page"
      data-href="https://www.facebook.com/Boxing-Club-Evian-1779416988982586/"
      data-tabs="timeline" data-width="2000"
      data-height="0"
      data-small-header="false"
      data-adapt-container-width="true"
      data-hide-cover="true"
      data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/Boxing-Club-Evian-1779416988982586/"
                    class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/Boxing-Club-Evian-1779416988982586/">Boxing Club Evian</a>
        </blockquote>
      </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5 page-footer font-small cyan darken-3">
      <!-- Footer Elements -->
      <div style="text-align:center;" class="container">
        <a href="https://www.start-securite.fr/">
          <img id="sponsor" src="../view/src/img/sponsor.png" alt="sponsor">
        </a>
      </div>
      <!-- Footer Elements -->
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">Copyright BOXING CLUB EVIAN © 2020 |
        <a href="../RGPD/mentionsLegals.html"> Mentions Légales</a>
        |
        <a href="../RGPD/politiqueDeConfidentialite.html"> Politique de Confidentialité</a>
        |
        <a href="#">Site web créé par la WaliTeam</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
"palette": {
  "popup": {
    "background": "#eaf7f7",
    "text": "#5c7291"
  },
  "button": {
    "background": "#BE1E2D",
    "text": "#ffffff"
  }
},
"content": {
  "message": "Le site Boxing Club Evian-les-Bains utilise des cookies pour améliorer son utilisation. En continuant sur notre site vous acceptez l'utilisation de ces cookies.",
  "dismiss": "Accepter",
  "link": "En savoir plus",
  "href": "../RGPD/mentionsLegals.html"
}
});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
