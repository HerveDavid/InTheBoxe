<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/inscription.css">
    <link rel="icon" href="../view/src/img/logo2.png" />
    <title>InTheBoxe</title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo2.png" alt="logo-InTheBoxe" width="85" height="68">
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
    <article>
    <div id="Gauche">
      <h1>S'inscrire à des cours</h1>
      <p>Communiquez directement avec vos coachs et participez aux cours</p>
      <h1>Entrainement en ligne</h1>
      <p>Progressez avec nos exercices certifiés par nes coachs</p>
      <h1>Combats</h1>
      <p>Trouvez un adversaire qui correspond à votre niveau et participez à un combat</p>
    </div>
    <div id="Droite">
      <h1>Inscription</h1>
      <form class="inscription" action="../controle/inscription.ctrl.php" method="post">
        <fieldset>
          <p>
          <label for="M">Masculin</label>
          <input type="radio" name="choix" value="Masculin" id="M" required>
          </p>
          <p>
          <label for="F">Féminin</label>
          <input type="radio" name="choix" value="Féminin" id="F" required>
          </p>
          <p>
            <input type="text" name="prenom" id="prenom" autofocus placeholder="Prénom" required/>
          </p>
          <p>
            <input type="text" name="nom" id="nom" required placeholder="Nom" required/>
          </p>
          <p>
            <input type="email" name="mail" id="mail" required placeholder="Adresse mail" required/>
          </p>
          <p>
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required/>
          </p>
          <p>
            <input type="password" name="confim" id="confim" placeholder="Confirmation du mot de passe" required/>
          </p>
          <p>
            <input type="tel" name="tel" id="tel" placeholder="Téléphone"/>
          </p>

          <p>
            <input type="date" name="naiss" id="naiss" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required placeholder="Date de naissance"/>
          </p>
          <p>
            <input type="text" name="adresse" id="adresse" required placeholder="Adresse"required/>
          </p>
          <p>
            <input type="text" name="ville" id="ville" required placeholder="Ville" required/>
          </p>
          <p>
            <input type="number" name="cp" id="cp" required placeholder="Code postal" required/>
          </p>
          <p>
            <input type="checkbox" id="scales" name="scales" required>
            <label for="scales">En soumettant ce formulaire, j'accepte que les informations saisies soient utilisés a titre informationnelles et connus uniquement par l'équipe du Boxing Club Evian-Les-Bains</label>
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
