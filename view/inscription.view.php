<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>InTheBoxe</title>
  </head>
  <body>
    <header>
      <h1 class="logo"><img src="src/img/logo.png" alt="logo-InTheBoxe"></h1>
      <nav class="topNavigation">
        <ul>
          <li id="Accueil"><a href="../view/accueil.view.php">Accueil</a></li>
          <li id= "Club"><a href="../view/club.view.php">Club</a></li>
          <li id="Entrainement"><a href="#Entrainement">Entrainement</a></li>
          <li id="Competition"><a href="#Competition">Competition</a></li>
          <li id="Contact"><a href="#Contact">Contact</a></li>
        </ul>
        <button type="button" name="connexion">Connexion</button>
      </nav>
    </header>
    <div id="Gauche">
      <h1>Planning en ligne</h1>
      <p>Communiquez directement avec vos coachs et gérez votre planning selon vos besoins</p>
      <h1>Entrainement en ligne</h1>
      <p>Progressez avec +100 cours personnalisés certifiés par des coachs</p>
      <h1>Inscription au combat en ligne</h1>
      <p>Participez à des combats et trouvez un adversaire qui vous correspond</p>
    </div>
    <div id="Droite">
      <h1>Inscription</h1>
      <form class="inscription" action="" method="post">
        <fieldset>
          <p>
            <label for="prenom"><h2>Prénom</h2></label>
            <input type="text" name="prenom" id="prenom" autofocus/>
          </p>
          <p>
            <label for="nom"><h2>Nom</h2></label>
            <input type="text" name="nom" id="nom" required/>
          </p>
          <p>
            <label for="mail"><h2>Adresse mail</h2></label>
            <input type="email" name="mail" id="mail" required/>
          </p>
          <p>
            <label for="mdp"><h2>Mot de passe </h2></label>
            <input type="mdp" name="mdp" id="mdp" />
          </p>
          <p>
            <label for="confim"><h2>Confirmation du mot de passe :</h2></label>
            <input type="confim" name="confim" id="confim" />
          </p>
          <p>
            <label for="tel"><h2>Téléphone</h2></label>
            <input type="tel" name="tel" id="tel" />
          </p>

          <p>
            <label for="naiss"><h2>Date de naissance</h2></label>
            <input type="date" name="naiss" id="naiss" required/>
          </p>
          <p>
            <label for="adresse"><h2>Adressse</h2></label>
            <input type="text" name="adresse" id="adresse" required/>
          </p>
          <p>
            <label for="ville"><h2>Ville</h2></label>
            <input type="text" name="ville" id="ville" required/>
          </p>
          <p>
            <label for="cp"><h2>Code postal</h2></label>
            <input type="number" name="cp" id="cp" required/>
          </p>
          <input type="submit" value="Inscription">
          <p style='color:red'> <?=$erreur ?></p>
        </fieldset>
      </form>
    </div>
  </body>
</html>
