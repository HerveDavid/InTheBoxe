<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Timer.css">
    <link rel="icon" href="icons/timer.png" />
    <title>Timer BOXE</title>
  </head>
  <body id="body">

    <div id="plateforme"></div>

    <div class="chronometre">

      <div class="tim">
  	     <span >0 h</span> :
  	     <span >0 min</span> :
  	     <span >0 s</span> :
  	     <span >0 ms</span>
      </div>

      <button id="start" onclick="adapt()">Lancer</button>
      <button id="stop" onclick="stop()">Arrêter</button>
      <button id="reset" onclick="reset(); supprime()">Réinitialiser</button>
      <section class="portfolio-experiment">
        <a href="../profil.ctrl.php">
          <span class="text">Quitter</span>
          <span class="line -right"></span>
          <span class="line -top"></span>
          <span class="line -left"></span>
          <span class="line -bottom"></span>
        </a>
      </section>

    </div>

    <div id="LesTours">
      <p id="starteur"></p>
      <p id="exercice"></p>
    </div>

    <div id="navigation_up_down_5417">
      <noscript>Javascript is disable - <a href="http://www.supportduweb.com/">http://www.supportduweb.com/</a> - <a href="http://www.supportduweb.com/generateur-boutons-navigation-haut-bas-scroll-defilement-racourcis-page-monter-descendre-up-down.html">Générateur de boutons de navigation</a></noscript>
    <script type="text/javascript" src="http://services.supportduweb.com/navigation_up_down/1-5417-right.js"></script>
    </div>

    <script src="Timer.js"></script>
  </body>
</html>
