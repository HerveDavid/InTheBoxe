<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/src/style/actualite.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="icon" href="../view/src/img/logo.png" />

    <title></title>
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
              <a class="nav-link active" href="../controle/actualite.ctrl.php">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/planning.ctrl.php">Planning/Tarifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/club.ctrl.php">Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/contact.ctrl.php">Contact</a>
            </li>
            <?php if (isset($_SESSION['mail'])): ?>
              <li class="nav-item">
                <a class="nav-link" style="color:#BE1E2D" href="../controle/timer.ctrl.php">Entrainement</a>
              </li>
            <?php endif; ?>
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

    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3>Informations concernant le club</h3>
        </div>

        <div class="card-body overflow-auto">
        <?php foreach ($actualites as $actu) { ?>
            <div class="card">
              <div class="card-header">
                <!-- titre de l'informations avec date -->
                <?php
                $date = $actu->getDateTexte();
                 ?>

                <h4><?=$actu->getNom()?> - <?=$date?></h4>
                <hr class="style1">
                <?php if ($actu->getType()=='evenement'){ ?>
                  <img class="img-fluid" src="../view/src/img/actualite/evenement.png" alt="evenement">
                <?php }elseif ($actu->getType()=='match') {?>
                  <img class="img-fluid" src="../view/src/img/actualite/educative.jpg" alt="marche pas">
                <?php }else{ ?>
                  <img class="img-fluid" src="../view/src/img/actualite/info.jpg" alt="une annonce">
                <?php } ?>
              </div>
              <div class="card-body">
                <!-- contenu -->
                <?=$actu->getDescription()?>
              </div>
              <div class="card-footer">
                <!-- nom de celui qui donne l'info -->
                Informations données par le coach <?=$actu->getCoach()?>
              </div>
            </div>
          <br>
        <?php } ?>
      </div>


      </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">
      <!-- Footer Elements -->
      <div class="text-center">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
