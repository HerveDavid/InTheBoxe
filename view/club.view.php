<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/club.css">
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
    <div class="club" id="Club-1">
      <img src="../view/src/img/club/background.png">
      <div class="container">
        <section>
          <h1>L’Histoire du club</h1>
          <p>Créé en 2015 par Monsieur INSERERNOM, le Boxing Club
            d’Evian-Les-Bains n’a cessé de croitre au fil des années.
            Aujourd’hui, c’est plus de 150 adhérents qui viennent
            s’affronter quotidiennement au sein du club.
          </p>
          <h1>Nos valeurs</h1>
          <p>
            Notre club prône des valeurs sportives importantes afin de
            permettre à nos adhérents de pratiquer la boxe dans un
            environnement accueillant et propice au progrès.
          </p>
          <div id="icones">
            <figure>
              <img src="../view/src/img/club/combativite.png" alt="">
              <figcaption>Combativité</figcaption>
            </figure>
            <figure>
              <img src="../view/src/img/club/respect.png" alt="">
              <figcaption>Respect</figcaption>
            </figure>
            <figure>
              <img src="../view/src/img/club/honneur.png" alt="">
              <figcaption>Honneur</figcaption>
            </figure>
          </div>
          <h1>Des coachs certifiés</h1>
          <p>
            Le boxing club d’Evian-Les-Bains vous propose des cours
            encadrés par des professionnels du monde de la boxe.
            Leur expérience est essentielle pour assurer la sécurité et le
            bon déroulement des séances.
          </p>
          <h1>Un cadre idéal</h1>
          <p>
            Notre club vous acueille dans son établissement situé à
            quelques pas du lac Léman.
          </p>
          <img src="" alt="">
        </div>
      </section>
      </div>
    <div class="club" id="Club-2">
      <div class="container">
        <section>
          <h1>Nos locaux</h1>
          <p>
            Parce que le bien être de nos adhérents est notre
            priorité, nous mettons à votre disposition une salle
            équipée, lumineuse et spacieuse pour vous assurer
            la meilleure expérience sportive possible.
          </p>
        </section>
      </div>
      <img src="../view/src/img/club/local.png">
    </div>
    <div class="club" id="Club-3">
      <img src="../view/src/img/club/equipement.png">
      <div class="container">
        <section>
          <h1>Nos équipements</h1>
          <p>
            Durant les séances d’entraînement, vous serez en
            capacité d’utiliser les différentes machines prévues
            à cet effet afin de développer votre technique ou
            votre condition physique.
          </p>
        </section>
      </div>
    </div>
  </body>
</html>
