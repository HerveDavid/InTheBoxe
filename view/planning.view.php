<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href='../framework/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='../framework/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='../framework/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <script src='../framework/fullcalendar/packages/core/main.js'></script>
    <script src='../framework/fullcalendar/packages/interaction/main.js'></script>
    <script src='../framework/fullcalendar/packages/daygrid/main.js'></script>
    <script src='../framework/fullcalendar/packages/timegrid/main.js'></script>

    <link rel="stylesheet" href="../view/src/style/planning.css">
    <script type="text/javascript" src="../view/src/js/profil.js"></script>

    <meta charset="utf-8">
    <title>Votre profil</title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <li id="Actualités"><a href="../controle/actualite.ctrl.php">Actualités</a></li>
          <li id="Planning"><a href="../controle/planning.ctrl.php">Planning</a></li>
          <li id="Club"><a href="../controle/club.ctrl.php">Club</a></li>
          <li id="Contact"><a href="../controle/contact.ctrl.php">Contact</a></li>
          <?php
            if (isset($_SESSION['mail'])) {
              $nom = $_SESSION['prenom'];
              echo "<li id=\"Connexion\"><a href=\"../controle/profil.ctrl.php\">$nom</a></li>";
              echo "<li id=\"Connexion\"><a href=\"../controle/accueil.ctrl.php?deco=1\">Déconnexion</a></li>";
            }else {
              echo "<li id=\"Connexion\"><a href=\"../controle/connexion.ctrl.php\">Connexion</a></li>";
            }
           ?>
        </ul>
      </nav>
    </header>

    <div class="container" id="planning">
      <div class="onglet">
        <ul>
          <li><a href="#planning">Mon planning</a></li>
          <li><a href="#cours">Cours en ligne</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col">
          <div class="container">
            <div class="row">
              Information
            </div>
            <div class="row">
            </div>
            <div class="row">
              Contact client
            </div>
          </div>
        </div>
        <div class="col" id="calendar"></div>
      </div>
    </div>
  </body>
</html>
