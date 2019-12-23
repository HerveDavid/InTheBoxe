<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="../framework/boostrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../framework/bootstrap/js/boostrap.min.js"></script>
    <script type="text/javascript" src="../framework/jquery.js"></script>

    <link href='../framework/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='../framework/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='../framework/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <script src='../framework/fullcalendar/packages/core/main.js'></script>
    <script src='../framework/fullcalendar/packages/interaction/main.js'></script>
    <script src='../framework/fullcalendar/packages/daygrid/main.js'></script>
    <script src='../framework/fullcalendar/packages/timegrid/main.js'></script>

    <link rel="stylesheet" href="../view/src/style/profilAdherent.css">
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
          <li id= "Club"><a href="../controle/club.ctrl.php">Club</a></li>
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
    <!-- <div id="calendar"></div> -->
    <?php
    $mail= $profil->getMail();
    $adresse= $profil->getAdresse();
    $statut = $profil->getStatut();
    $nom= $profil->getNom();
    $prenom=$profil->getPrenom();
    $dateNaiss= $profil->getDateNaiss();
    $tel = $profil->getTel();
    $codePostal = $profil->getCodePostal();
    $ville = $profil->getVille();
    $cours = $dao->getCours($mail);
    var_dump($profil);
    var_dump($cours);
    //demande de competition
    //affichage des informations (info , stats , status , docs a fournir )
    //les cours a la quelle il ses inscrit

     ?>
     <form class="parametrage" action="../controle/parametrage.ctrl.php" method="post">
       <fieldset>
         <p>
           <!-- <label for="prenom"><h2>Prénom</h2></label> -->
           <input type="text" name="prenom" id="prenom" autofocus placeholder="Prénom" value="<?=$prenom ?>" required/>
         </p>
         <p>
           <!-- <label for="nom"><h2>Nom</h2></label> -->
           <input type="text" name="nom" id="nom" required placeholder="Nom" value="<?=$nom ?>" required/>
         </p>

         <p>
           <!-- <label for="tel"><h2>Téléphone</h2></label> -->
           <input type="tel" name="tel" id="tel" placeholder="Téléphone" value="<?=$tel ?>"/>
         </p>

         <p>
           <!-- <label for="adresse"><h2>Adresse</h2></label> -->
           <input type="text" name="adresse" id="adresse" required placeholder="Adresse" value="<?=$adresse ?>" required/>
         </p>
         <p>
           <!-- <label for="ville"><h2>Ville</h2></label> -->
           <input type="text" name="ville" id="ville" required placeholder="Ville" value="<?=$ville ?>" required/>
         </p>
         <p>
           <!-- <label for="cp"><h2>Code postal</h2></label> -->
           <input type="number" name="codePostal" id="codePostal" required placeholder="Code postal" value="<?=$codePostal ?>" required/>
         </p>
         <input type="submit" value="validé">
         <?php global $erreur; ?>
         <p style='color:red'> <?= $erreur ?></p>
       </fieldset>
     </form>
  </body>
</html>
