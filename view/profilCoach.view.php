<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/profilCoach.css">

    <title></title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <li id="Actualités"><a href="../controle/actualite.ctrl.php">Actualités</a></li>
          <li id="Planning"><a href="../controle/planning.ctrl.php">Planning</a></li>
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

    <?php
    var_dump($profil);

    // accepter/refuser les demande de competition
    //affichage les informations des adherent
    //mesagerie
    //message a transmettre

     ?>
  </body>
</html>
