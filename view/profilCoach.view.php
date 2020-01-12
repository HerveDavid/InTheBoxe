

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/src/style/profilCoach.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="icon" href="../view/src/img/logo.png" />

    <title></title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-white">
        <a class="navbar-brand" href="#">
          <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">Menu</span>
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

    <?php

      $nom = $profil->getNom() ;
      $prenom = $profil->getPrenom();
      $mail= $profil -> getMail();
      $nombreActualites = count($actualites);
      $nombreAdherents= count($listAdherents);
      $nombreDemandesCombats = count($demandesCombats);
      $nombreAttente = count($listAttente);
      if ($disabled=="disabled") {
        $active="";
      }else {
        $active="active";
      }
     ?>
    <div class="container d-flex justify-content-around">
      <div class="user-details">
              <div class="user-image text-center">
                  <img src="../view/src/img/profil/connexion_logo.png" alt="Mon nom" title="Mon nom" class="img-thumbnail">
              </div>
              <div class="user-info-block">
                <div class="user-heading">
                    <h3><?=$nom?> <?=$prenom?></h3>
                    <span class="help-block"><?=$mail?></span>
                    <hr class="style1">
                </div>
                <div class="user-body d-flex flex-row">
                    <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link <?=$active?><?=$disabled?>" id="home-tab" data-toggle="tab" href="#infoCompte" role="tab" aria-controls="contact" aria-selected="true">Informations du compte</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?=$disabled?>" id="profile-tab" data-toggle="tab" href="#combat" role="tab" aria-controls="profile" aria-selected="false">Demandes de combat</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?=$disabled?>" id="contact-tab" data-toggle="tab" href="#actualite" role="tab" aria-controls="contact" aria-selected="false">Gestion de l'actualité</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?=$disabled?>" id="contact-tab" data-toggle="tab" href="#adherent" role="tab" aria-controls="contact" aria-selected="false">Gestion des adhérents</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link <?=$disabled?>" id="contact-tab" data-toggle="tab" href="#attente" role="tab" aria-controls="contact" aria-selected="false">Profil</a>
                      </li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent">

                      <!--/////////////////////////////////////////////////////////////section informations///////////////////////////////////////////////////////////-->

                      <div class="tab-pane fade <?=$InfClub?> card" id="infoCompte" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                          <section>
                            <h3>Nombre d'adherents: <?=$nombreAdherents?> </h3>
                            <br>
                            <div class="card">
                              Nombre de personnes en attente: <?=$nombreAttente?>
                            </div>
                            <div class="card">
                              Nombre de demandes de combats: <?=$nombreDemandesCombats?>
                            </div>
                            <div class="card">
                              Nombre de matchs : <?=$nombreDemandesCombats?>
                            </div>
                          </section>
                        </div>
                      </div>
                      <!--/////////////////////////////////////////////////////////////section Demandes de combats///////////////////////////////////////////////////////////-->

                      <div class="tab-pane fade <?=$DemComb?> card" id="combat" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="card-header">Nombre de demandes: </h3>
                        <div class="card-body d-flex justify-content-between align-self-baseline align-content-between flex-wrap">
                          <?php foreach ($demandesCombats as $adh) { ?>
                          <div class="card">
                            <div class="card-body">
                              <img src="../view/src/img/profil/connexion_logo.png" alt="Mon nom" title="Mon nom" class="img-thumbnail" width="150" height="150">
                              <br><br>
                              <h6><?=$adh->getNom()?> <?=$adh->getPrenom()?> </h6>
                              <hr class="style1">
                              <div class="card">
                                Catégorie : <?=$adh->getCategorie()?>
                              </div>
                              <div class="card">
                                Age : <?=$adh->getAge()?>
                              </div>
                              <div class="card">
                                Victoires : <?=$adh->getVictoire()?>
                              </div>
                              <div class="card">
                                Nuls : <?=$adh->getNul()?>
                              </div>
                              <div class="card">
                                Défaites : <?=$adh->getDefaite()?>
                              </div>
                            </div>
                            <div class="card-footer">
                              <button type="" class="btn btn-secondary">Accepter</button>
                              <button type="" class="btn btn-danger">Refuser</button>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                      <!--/////////////////////////////////////////////////////////////section Actualités///////////////////////////////////////////////////////////-->

                      <div class="tab-pane fade <?=$GestActu?>" id="actualite" role="tabpanel" aria-labelledby="contact-tab">
                        <form action="../controle/gerant.ctrl.php"  method="post">
                          <div class="form-group">
                            <label for="formControlInput">Nom de l'actualité</label>
                            <input name="nomActu" type="nom" class="form-control" id="formControlInput" required>
                          </div>
                          <div class="form-group">
                            <label for="formControlSelectType">Type</label>
                            <select name="typeActu" class="form-control" id="formControlSelectType">
                              <option>Evenement</option>
                              <option>Match</option>
                              <option>Annonce</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="formControlSelectDate">Date</label>
                            <br>
                            <input type="date" name="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" id="formControlSelectDate" required>
                          </div>
                          <div class="form-group">
                            <label for="formControlTextarea">Description</label>
                            <textarea name="description" class="form-control" id="formControlTextarea" rows="3" required></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Poster</button>
                          <?php global $erreurActu; ?>
                          <p style='color:red'> <?= $erreurActu ?></p>
                        </form>
                        <br>
                        <h3>Historique des actualités</h3>
                        <hr class="style1">
                        <form method="post" action="../controle/gerant.ctrl.php">
                          <button type="submit" name="clear" value="true" class="btn btn-secondary">Supprimer les actualités</button>
                        </form>
                        <br>
                        <br>

                        <?php foreach ($actualites as $actu) {
                          $nom = $actu->getNom();
                          $date = $actu->getDate();
                          $description=$actu->getDescription();
                           ?>
                        <div class="historique">
                          <div class="row">
                            <div class="col-sm">
                              <?=$nom?>
                            </div>
                            <div class="col-sm">
                              <?=$date?>
                            </div>
                            <div class="col-sm">
                              <?=substr($description, 0, 45).'...'?>  <!-- pour limite laffichage de la discription a 45 caractéres -->
                            </div>
                            <form method="post" action="../controle/gerant.ctrl.php">
                              <button type="submit" name="supp" value='<?=$nom?>/<?=$date?>' class="btn btn-danger">Supprimer</button>
                            </form>
                          </div>
                        </div>
                        <br>
                        <?php } ?>
                      </div>
                      <!--/////////////////////////////////////////////////////////////section List Adherents///////////////////////////////////////////////////////////-->

                      <div class="tab-pane fade <?=$GestAdh?> card" id="adherent" role="tabpanel" aria-labelledby="contact-tab">
                        <h3 class="card-header">Liste des adhérents du club : </h3>
                        <div class="card-body d-flex justify-content-between align-self-baseline align-content-between flex-wrap">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Trier par :
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">A-Z</a>
                              <a class="dropdown-item" href="#">Z-A</a>
                              <a class="dropdown-item" href="#">Age croissant</a>
                              <a class="dropdown-item" href="#">Age décroissant</a>
                            </div>
                          </div>
                          <div class="card-body d-flex justify-content-between align-self-baseline align-content-between flex-wrap">
                            <?php foreach ($listAdherents as $adh) { ?>
                            <div class="card">
                              <div class="card-body">
                                <img src="../view/src/img/profil/connexion_logo.png" alt="Mon nom" title="Mon nom" class="img-thumbnail" width="150" height="150">
                                <br><br>
                                <h6><?=$adh->getNom()?> <?=$adh->getPrenom()?> </h6>
                                <hr class="style1">
                                <div class="card">
                                  Catégorie : <?=$adh->getCategorie()?>
                                </div>
                                <div class="card">
                                  Age : <?=$adh->getAge()?>
                                </div>
                                <div class="card">
                                  Victoires : <?=$adh->getVictoire()?>
                                </div>
                                <div class="card">
                                  Nuls : <?=$adh->getNul()?>
                                </div>
                                <div class="card">
                                  Défaites : <?=$adh->getDefaite()?>
                                </div>
                              </div>
                              <div class="card-footer">
                                <form action="../controle/profil.ctrl.php" method="POST"  >
                                  <input type="text" name="disabled" value="disabled" hidden>
                                  <button type="submit" name="modifier" value="<?=$adh->getMail()?>" class="btn btn-secondary">Modifier</button>
                                </form>
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <!--/////////////////////////////////////////////////////////////section Modifier///////////////////////////////////////////////////////////-->
                      <div class="tab-pane fade <?=$modifier?>" id="attente" role="tabpanel" aria-labelledby="contact-tab">
                          <?php
                            if (isset($modifAdh)) {
                             $nomAdh = $modifAdh->getNom();
                             $prenomAdh = $modifAdh->getPrenom();
                             $emailAdh = $modifAdh->getMail();
                             $dateAdh = $modifAdh->getDateNaiss();
                             $telAdh = $modifAdh->getTel();
                             $adresseAdh = $modifAdh->getAdresse();
                             $villeAdh = $modifAdh->getVille();
                             $codeAdh = $modifAdh->getCodePostal();
                             $poidsAdh = $modifAdh->getPoids();
                             $tailleAdh = $modifAdh->getTaille();
                             $categrAdh = $modifAdh->getCategorie();
                             $victAdh = $modifAdh->getVictoire();
                             $defAdh = $modifAdh->getDefaite();
                             $nulAdh = $modifAdh->getNul();
                             $genre = $modifAdh->getGenre();
                             $listCategories= $modifAdh->getListCategorie();

                            }
                           ?>
                           <form class="modifier" action="../controle/parametrage.ctrl.php" method="post">
                             <input value="<?=$emailAdh?>" type="email" name="mail" id="mail"  hidden/>

                             <div class="card">
                               <div class="card-body">
                                 <?php if (strtolower($genre)=="masculin"): ?>
                                   <p> <label for="M">Masculin</label><input checked="checked" type="radio" name="choix" value="Masculin" id="M" required> </p>
                                   <p> <label for="F">Féminin</label><input  type="radio" name="choix" value="Féminin" id="F" required> </p>
                                 <?php else: ?>
                                   <p> <label for="M">Masculin</label><input  type="radio" name="choix" value="Masculin" id="M" required> </p>
                                   <p> <label for="F">Féminin</label><input checked="checked" type="radio" name="choix" value="Féminin" id="F" required> </p>
                                 <?php endif; ?>

                                 <p>
                                   <label for="">Prénom :</label><input value="<?=$prenomAdh?>" value="" type="text" name="prenom" id="prenom" autofocus placeholder="Prénom" required/>
                                 </p>
                                 <p>
                                   <label for="">Nom :</label><input value="<?=$nomAdh?>"  type="text" name="nom" id="nom" required placeholder="Nom" required/>
                                 </p>

                                 <p>
                                   <label for="">Téléphone :</label><input value="<?=$telAdh?>" type="tel" name="tel" id="tel" placeholder="Téléphone"/>
                                 </p>
                                 <p>
                                   <label for="">Date de naissance :</label><input value="<?=$dateAdh?>" type="date" name="naiss" id="naiss" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required placeholder="Date de naissance"/>
                                 </p>
                                 <p>
                                   <label for="">Adresse :</label><input value="<?=$adresseAdh?>" type="text" name="adresse" id="adresse" required placeholder="Adresse"required/>
                                 </p>
                                 <p>
                                   <label for="">Ville :</label><input value="<?=$villeAdh?>" type="text" name="ville" id="ville" required placeholder="Ville" required/>
                                 </p>
                                 <p>
                                   <label for="">Code Postal :</label> <input value="<?=$codeAdh?>" type="number" name="cp" id="cp" required placeholder="Code postal" required/>
                                 </p>
                                 <p>
                                   <label for="">Taille:</label><input value="<?=$tailleAdh?>" type="text" name="taille" id="metre" required placeholder="Taille" required/>
                                 </p>
                                 <p>
                                   <label for="">Poids (en kg):</label><input value="<?=$poidsAdh?>" type="number" name="poids" id="kg" required placeholder="Poids" required/>
                                 </p>
                                 <p>
                                   <label for="">Catégorie :</label>
                                   <select name="typeCategorie" >
                                     <?php
                                            ?>
                                     <?php foreach ($listCategories as $categ): ?>
                                       <?php if ($categ==$categrAdh): ?>
                                         <option selected="selected"><?=$categ?></option>
                                       <?php else: ?>
                                         <option><?=$categ?></option>
                                       <?php endif;?>
                                     <?php endforeach; ?>
                                   </select>
                                 </p>
                                 <p>
                                   <label for="">Victoires :</label><input value="<?=$victAdh?>" type="number" name="V" id="win" required placeholder="Victoires" required/>
                                   <label for="">Nuls :</label><input value="<?=$nulAdh?>" type="number" name="N" id="draw" required placeholder="Nuls" required/>
                                   <label for="">Défaite :</label><input  value="<?=$defAdh?>" type="number" name="D" id="loss" required placeholder="Défaites" required/>
                                 </p>
                               </div>

                             </div>
                             <div class="card-footer">
                               <input class="btn btn-danger" type="submit" value="Valider">
                             </div>
                           </form>
                           <form action="../controle/profil.ctrl.php" method="POST"  >
                             <button id="buttonRetour" type="submit" name="tabActive" value=" / / /show active" class="btn btn-secondary">retour</button>
                           </form>

                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
