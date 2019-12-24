<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="../view/src/style/accueil.css">
    <meta charset="utf-8">
    <title>InTheBoxe</title>
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
    <!-- Connexion formulaire -->
    <div id="Content">
      <h2>Boxing Club Evian-Les-Bains</h2>
      <h1>Explorez vos limites.</h1>
      <p>
        Inscrivez vous pour avoir accès à des cours gratuits
        <br>
        et aux tournois de boxe en ligne
      </p>
      <br>
      <a href="../controle/inscription.ctrl.php">Inscription</a>
    </div>
    <footer>
      <!-- <section> -->
        <h1>Accès aux cours et informations</h1>
        <h2>Top 3 cours</h2>
      <!-- </section> -->
      <nav>
        <ul>
          <li><a href="#Cours1"><img src="../view/src/img/accueil/cours1.png" alt="cours-1"></a></li>
          <li><a href="#Cours2"><img src="../view/src/img/accueil/cours2.png" alt="cours-2"></a></li>
          <li><a href="#Cours3"><img src="../view/src/img/accueil/cours2.png" alt="cours-3"></a></li>
        </ul>
      </nav>
    </footer>
  </body>
  <script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>
</html>
