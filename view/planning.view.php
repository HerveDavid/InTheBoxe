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
      <div class="onglet">

      </div>
      <?php if (!$adhConnecter) {?>
        <h3>Il faut être adhérent pour pouvoir s'inscrire à un cours</h3>
        <div class="container">
          <div class="card">
            <div class="card-body" id="calendar"></div>
          </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="d-flex justify-content-around">
          <div id="gauche" class="container">
           <div class="card text-black bg-white">
               <h4 class="card-header">Inscription aux cours</h4>
               <div class="card-body">
                   <p class="card-text">Inscrivez vous aux cours que vous souhaitez et qui vous correspond.</p>
               </div>
           </div>
           <br>
           <div class="card text-black bg-white">
               <h4 class="card-header">Liste des cours</h4>
               <div class="card-body">
                 <ul class="list-group">
                  <li class="list-group-item">
                    <div class="btn-group dropright">
                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" >
                        "Jeune"places disponibles: 10
                      </button>
                      <div class="dropdown-menu">
                        Pour les jeunes de 8 à 15 ans.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-secondary">
                    <div class="btn-group dropright">
                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" >
                        "Attaque" places disponibles: 10
                      </button>
                      <div class="dropdown-menu">
                        Pour les jeunes de 8 à 15 ans.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-success">
                    <div class="btn-group dropright">
                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" >
                        "Defense" places disponibles: 10
                      </button>
                      <div class="dropdown-menu">
                        Pour les jeunes de 8 à 15 ans.
                        Coach: Jean Eude
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-danger">
                    <div class="btn-group dropright">
                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" >
                        "Pro" places disponibles: 10
                      </button>
                      <div class="dropdown-menu">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </div>
                    </div>
                  </li>
                  </ul>
               </div>
           </div>
          </div>
          <div class="container">
            <div class="card">
              <div class="card-body" id="calendar"></div>
            </div>
            </div>
          </div>

        </div>

      <?php } ?>

    </div>
  </body>
</html>
