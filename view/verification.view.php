<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/src/style/connexion.css">
    <link rel="icon" href="../view/src/img/logo.png" />
    <title>InTheBoxe</title>
  </head>
  <body>


    <article>
    <div id="divco">
      <h1>Vérification</h1>
      <form class="verif" action="../controle/verification.ctrl.php" method="post">
        <fieldset>
          <p>
             Entrez le code de vérification envoyé à l'adresse <?=$mail?> :
            <input type="text" placeholder="Code de vérification" name="code" id="code" required/>
          </p>
          <input type="submit" id="submit" value="Valider">
          <br>
          <a href="../controle/verification.ctrl.php?verif=1">Renvoyer un mail de vérification</a>
          <br>
          <?php global $erreur; ?>
          <p style='color:red'> <?=$erreur ?></p>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
