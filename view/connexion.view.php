<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/connexion.css">
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
        <a href="../view/inscription.view.php">Inscription</a>
      </nav>
    </header>
    <article>
    <div id="Gauche">
      <h1>Planning en ligne</h1>
      <p>Communiquez directement avec vos coachs et gérez votre planning selon vos besoins</p>
      <h1>Entrainement en ligne</h1>
      <p>Progressez avec +100 cours personnalisés certifiés par des coachs</p>
      <h1>Inscription au combat en ligne</h1>
      <p>Participez à des combats et trouvez un adversaire qui vous correspond</p>
    </div>
    <div id="Droite">
      <h1>Connexion</h1>
      <form class="connexion" action="" method="post">
        <fieldset>
          <p>
            <label for="mail"><h2>Adresse mail</h2></label>
            <input type="email" placeholder="Entrer votre email" name="mail" id="mail" required/>
          </p>
          <p>
            <label for="mdp"><h2>Mot de passe </h2></label>
            <input type="mdp" placeholder="Entrer votre mot de passe" name="mdp" id="mdp" required/>
          </p>
          <input type="submit" id="submit" value="Connexion">
          <p style='color:red'> <?=$erreur ?></p>
        </fieldset>
      </form>
    </div>
  </article>
  </body>
</html>
