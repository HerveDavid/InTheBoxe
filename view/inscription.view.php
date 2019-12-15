<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/inscription.css">
    <title>InTheBoxe</title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <li id="Actualités"><a href="#Evènement">Actualités</a></li>
          <li id="Planning"><a href="../controle/entrainement.ctrl.php">Planning</a></li>
          <li id= "Club"><a href="../controle/club.ctrl.php">Club</a></li>
          <li id="Contact"><a href="../controle/contact.ctrl.php">Contact</a></li>
          <?php
            if (isset($_SESSION['mail'])) {
              $nom = $_SESSION['mail'];
              echo "<li id=\"Connexion\"><a href=\"../controle/profil.ctrl.php\">$nom</a></li>";
              echo "<li id=\"Connexion\"><a href=\"../controle/accueil.ctrl.php?deco=1\">Déconnexion</a></li>";
            }else {
              echo "<li id=\"Connexion\"><a href=\"../controle/connexion.ctrl.php\">Connexion</a></li>";
            }
           ?>
        </ul>
      </nav>
    </header>
    <article>
    <div id="Gauche">
      <h1>Planning en ligne</h1>
      <p>Communiquez directement avec vos coachs et gérez votre planning selon vos besoins</p>
      <h1>Entrainement en ligne</h1>
      <p>Progressez avec +100 cours personnalisés certifiés par des coachs</p>
      <h1>Combat en ligne</h1>
      <p>Participez à des combats et trouvez un adversaire qui vous correspond</p>
    </div>
    <div id="Droite">
      <h1>Inscription</h1>
      <form class="inscription" action="" method="post">
        <fieldset>
          <p>
            <!-- <label for="prenom"><h2>Prénom</h2></label> -->
            <input type="text" name="prenom" id="prenom" autofocus placeholder="Prénom" required/>
          </p>
          <p>
            <!-- <label for="nom"><h2>Nom</h2></label> -->
            <input type="text" name="nom" id="nom" required placeholder="Nom" required/>
          </p>
          <p>
            <!-- <label for="mail"><h2>Adresse mail</h2></label> -->
            <input type="email" name="mail" id="mail" required placeholder="Adresse mail" required/>
          </p>
          <p>
            <!-- <label for="mdp"><h2>Mot de passe </h2></label> -->
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required/>
          </p>
          <p>
            <!-- <label for="confim"><h2>Confirmation du mot de passe :</h2></label> -->
            <input type="password" name="confim" id="confim" placeholder="Confirmation du mot de passe" required/>
          </p>
          <p>
            <!-- <label for="tel"><h2>Téléphone</h2></label> -->
            <input type="tel" name="tel" id="tel" placeholder="Téléphone"/>
          </p>

          <p>
            <!-- <label for="naiss"><h2>Date de naissance</h2></label> -->
            <input type="date" name="naiss" id="naiss" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required placeholder="Date de naissance"/>
          </p>
          <p>
            <!-- <label for="adresse"><h2>Adresse</h2></label> -->
            <input type="text" name="adresse" id="adresse" required placeholder="Adresse"required/>
          </p>
          <p>
            <!-- <label for="ville"><h2>Ville</h2></label> -->
            <input type="text" name="ville" id="ville" required placeholder="Ville" required/>
          </p>
          <p>
            <!-- <label for="cp"><h2>Code postal</h2></label> -->
            <input type="number" name="cp" id="cp" required placeholder="Code postal" required/>
          </p>
          <input type="submit" value="Inscription">
          <?php global $erreur; ?>
          <p style='color:red'> <?= $erreur ?></p>
        </fieldset>
      </form>
    </div>
  </article>
  </body>
</html>
