<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/src/style/connexion.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="icon" href="../view/src/img/logo.png" />
    <title>InTheBoxe</title>
  </head>
  <body>


    <article>
    <div id="divco">
      <img src="../view/src/img/connexion_logo.png" alt="">
      <h1>Connexion</h1>
      <form class="connexion" action="../controle/motDePasseOublie.ctrl.php" method="post">
        <fieldset>
          <p>
             Entrez votre email pour récupérer votre mot de passe :
            <input type="email" placeholder="Adresse mail" name="mail" id="mail" required/>
          </p>
          <input type="submit" id="submit" value="Envoyer">
          <a id="inscription" href="../controle/connexion.ctrl.php">Connexion</a>
          <br>
          <br>
          <?php global $erreur; ?>
          <p style='color:red'> <?=$erreur ?></p>
          <?php global $confirmation; ?>
          <p style='color:green'> <?=$confirmation ?></p>
        </fieldset>
      </form>
    </div>
  </article>

  <!-- Footer -->
  <footer class="page-footer font-small cyan darken-3">
    <!-- Footer Elements -->
    <div style="text-align:center;" class="container">
      <a href="https://www.start-securite.fr/">
        <!-- <img id="sponsor" src="../view/src/img/sponsor.png" alt="sponsor"> -->
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
