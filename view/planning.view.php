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
          <?php if (!isset($_SESSION['mail'])) { ?>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <?php } ?>
          <li id="Actualités"><a href="../controle/actualite.ctrl.php">Actualités</a></li>
          <li id="Planning"><a href="../controle/planning.ctrl.php">Planning/Tarifs</a></li>
          <li id="Club"><a href="../controle/club.ctrl.php">Club</a></li>
          <li id="Contact"><a href="../controle/contact.ctrl.php">Contact</a></li>
          <?php if (isset($_SESSION['mail'])) {
            $nom = $_SESSION['prenom']; ?>
            <li id="Connexion"><a href="../controle/profil.ctrl.php"><?=$nom?></a></li>
            <li id="Connexion"><a href="../controle/accueil.ctrl.php?deco=1">Déconnexion</a></li>
          <?php }else { ?>
            <li id="Connexion"><a href="../controle/connexion.ctrl.php">Connexion</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>

    <div class="container" id="planning">

      <?php if (!$adhConnecter) {?>

        <div class="d-flex justify-content-around">
          <div class="card text-black bg-white">
            <h3 class="card-header text-center">Inscrivez-vous pour pourvoir vous inscrire à un cours</h3>
            <div class="card-body d-flex justify-content-center">
              <button type="button" name="button" class="btn btn-primary">
                <a href="../controle/inscription.ctrl.php">Inscription</a>

              </button>
            </div>
          </div>
        </div>
        <br>

      <?php } ?>

        <h1 class="text-center">Planning des cours</h1>
        <hr>
        <p class="text-center">
          <span>Retrouvez le planning des cours privés, semi-privés ou en groupe.</span>
        </p>

        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-loisir card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Boxe Loisir :</h3>
              <h5>+14 ans (après 2005)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>190€</h3>
              <h5>Lundi, Mercredi et Vendredi de 18h15 à 20h</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-educative card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Boxe Educative :</h3>
              <h5>9/13 ans (2010 à 2006)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>170€</h3>
              <h5>Lundi, Mercredi de 17h à 18h</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-educative2 card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Boxe Educative :</h3>
              <h5>6/8 ans (2013 à 2011)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>120€</h3>
              <h5>Mercredi de 16h à 17h</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="cross-fit card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Cross Fit Boxing :</h3>
              <h5>+14 ans (auprès 2005)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>Compris dans la licence Boxe Loisir</h3>
              <h5>Mardi de 18h15 à 19h15</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-femmes card d-flex flex-row justify-content-around">
            <div class="p-2">
              <h3>Boxe Féminine :</h3>
              <h5>+14 ans (après 2005)</h5>
            </div>
            <div class="p-2">
              <h3>190€</h3>
              <h5>
                Mardi 20h30 à 22h, Mercredi 9h30 à 11h
                <br>
                Jeudi 19H à 20h, Samedi 11h15 à 12h45
              </h5>
            </div>
          </div>
        </a>

        <br>
        <h1 class="text-center">Contact</h1>
        <hr>
        <p class="text-center">
          <span>Hommes: 06 58 87 23 90 - Femmes: 06 33 83 56 77</span>
        </p>

      </div>
    </div>
  </body>
</html>
