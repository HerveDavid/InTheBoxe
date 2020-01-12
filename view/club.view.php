<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/src/style/club.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="icon" href="../view/src/img/logo.png" />
    <title>InTheBoxe</title>
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
              <a class="nav-link active" href="../controle/club.ctrl.php">Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/contact.ctrl.php">Contact</a>
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

    <div class="club" id="Club-1">
      <img src="../view/src/img/club/background.png">
      <div class="container">
        <section>
          <h1>L’Histoire du club</h1>
          <p>Créé en 2015 par Aissat CHAOIKI, le Boxing Club
            d’Evian-Les-Bains n’a cessé de croitre au fil des années.
            Aujourd’hui, c’est plus de 170 adhérents qui viennent
            s’affronter quotidiennement au sein du club.
          </p>
          <h1>Nos valeurs</h1>
          <p>
            Notre club porte des valeurs sportives importantes afin de
            permettre à nos adhérents de pratiquer la boxe dans un
            environnement accueillant et propice à la progression personelle.
          </p>
          <div id="icones">
            <figure>
              <img src="../view/src/img/club/combativite.png" alt="">
              <figcaption>Combativité</figcaption>
            </figure>
            <figure>
              <img src="../view/src/img/club/respect.png" alt="">
              <figcaption>Respect</figcaption>
            </figure>
            <figure>
              <img src="../view/src/img/club/honneur.png" alt="">
              <figcaption>Honneur</figcaption>
            </figure>
          </div>
          <h1>Des coachs certifiés</h1>
          <p>
            Le boxing club d’Evian-Les-Bains vous propose des cours
            encadrés par des professionnels du monde de la boxe.
            Leur expérience est essentielle pour assurer la sécurité et le
            bon déroulement des séances.
          </p>
          <h1>Un cadre idéal</h1>
          <p>
            Notre club vous acueille dans son établissement situé à
            quelques pas du lac Léman.
          </p>
          <img src="" alt="">
        </div>
      </section>
      </div>
    <div class="club" id="Club-2">
      <div class="container">
        <section>
          <h1>Nos locaux</h1>
          <p>
            Parce que le bien être de nos adhérents est notre
            priorité, nous mettons à votre disposition une salle
            équipée, lumineuse et spacieuse pour vous assurer
            la meilleure expérience sportive possible.
          </p>
        </section>
      </div>
      <img src="../view/src/img/club/local.png">
    </div>
    <div class="club" id="Club-3">
      <img src="../view/src/img/club/equipement.png">
      <div class="container">
        <section>
          <h1>Nos équipements</h1>
          <p>
            Durant les séances d’entraînement, vous serez en
            capacité d’utiliser les différentes machines prévues
            à cet effet afin de développer votre technique ou
            votre condition physique.
          </p>
        </section>
      </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">
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
        <a href="#">Site web crée par la WaliTeam</a>
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
