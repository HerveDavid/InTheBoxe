<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/src/style/inscription.css">
    <link rel="icon" href="../view/src/img/logo.png" />
    <title>InTheBoxe</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-white">
        <a class="navbar-brand" href="#">
          <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" href="../controle/accueil.ctrl.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/actualite.ctrl.php">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/planning.ctrl.php">Planning/Tarifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/club.ctrl.php">Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/contact.ctrl.php">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
            <?php if (isset($_SESSION['mail'])) {
                $nom = $_SESSION['prenom']; ?>
                <li class="nav-item dropdown bg-red">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?=$nom?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../controle/profil.ctrl.php">Profil</a>
                    <a class="dropdown-item" href="../controle/accueil.ctrl.php?deco=1">Déconnexion</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
            <?php }else { ?>

              <li class="nav-item my-2 my-sm-0 bg-red">
                <a class="nav-link" href="../controle/connexion.ctrl.php">Connexion</a>
              </li>
            <?php } ?>
          </ul>
        </div>
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

  <!-- Footer -->
  <footer class="page-footer font-small cyan darken-3">
    <!-- Footer Elements -->
    <div style="text-align:center;" class="container">
      <a href="https://www.start-securite.fr/">
        <img id="sponsor" src="../view/src/img/sponsor.png" alt="sponsor">
      </a>
    </div>
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="../controle/accueil.ctrl.php"> InTheBoxe.fr</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
