
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../view/src/style/actualite.css">

    <title></title>
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
          <li id= "Club"><a href="../controle/club.ctrl.php">Club</a></li>
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
                $date = date("d-m-Y",strtotime($actu->getDate()));
                 ?>

                <h4><?=$actu->getNom()?> - <?=$date?></h4>
                <?php if ($actu->getType()=='evenement'){ ?>
                  <img src="../view/src/img/actualite/evenement.png" alt="evenement">
                <?php }elseif ($actu->getType()=='match') {?>
                  <img src="../view/src/img/actualite/educative.jpg" alt="marche pas">
                <?php }else{ ?>
                  <img src="../view/src/img/actualite/info.jpg" alt="une annonce">
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
  </body>
</html>
