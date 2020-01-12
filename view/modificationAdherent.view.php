<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/profilCoach.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="icon" href="../view/src/img/logo.png" />

    <title></title>
  </head>

  <body>
    <div class="tab-pane fade card" id="attente" role="tabpanel" aria-labelledby="contact-tab">
      <?php if (isset($_POST['walid'])): ?>
        <p>dhîzaeohdẑeuihduizefhuizehfpuizefhpuize</p>
      <?php endif; ?>
    </div>
    <!-- <?php
      // $nom = $profil->getNom() ;
      // $prenom = $profil->getPrenom();
      // $mail= $profil -> getMail();
      // $nombreActualites = count($actualites);
      // $nombreAdherents= count($listAdherents);
      // $nombreDemandesCombats = count($demandesCombats);
      // $nombreAttente = count($listAttente);
     ?> -->


    <?php
    //var_dump($profil);

    // accepter/refuser les demande de competition
    //affichage les informations des adherent
    //mesagerie
    //message a transmettre

     ?>

     <!-- Footer -->
     <footer class="page-footer font-small cyan darken-3">
       <!-- Footer Elements -->
       <div style="text-align:center;" class="container">
         <a href="https://www.start-securite.fr/">
           <!-- <img id="sponsor" src="../view/src/img/sponsor.png" alt="sponsor"> -->
         </a>
       </div>
       <!-- Footer Elements -->
       <!-- Copyright -->
       <div class="footer-copyright text-center py-3">Copyright BOXING CLUB EVIAN © 2020 |
         <a href="../RGPD/mentionsLegals.html"> Mentions Légales</a>
         |
         <a href="../RGPD/politiqueDeConfidentialite.html"> Politique de Confidentialité</a>
         |
         <a href="#">Site web crée par la WaliTeam</a>
       </div>
       <!-- Copyright -->
     </footer>
     <!-- Footer -->

  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
"palette": {
  "popup": {
    "background": "#eaf7f7",
    "text": "#5c7291"
  },
  "button": {
    "background": "#BE1E2D",
    "text": "#ffffff"
  }
},
"content": {
  "message": "Le site Boxing Club Evian-les-Bains utilise des cookies pour améliorer son utilisation. En continuant sur notre site vous acceptez l'utilisation de ces cookies.",
  "dismiss": "Accepter",
  "link": "En savoir plus",
  "href": "../RGPD/mentionsLegals.html"
}
});
</script>
