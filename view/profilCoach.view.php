<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/src/style/profilCoach.css">

    <title></title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <?php if (!isset($_SESSION['mail'])) { ?>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <?php } ?>          <li id="Actualités"><a href="../controle/actualite.ctrl.php">Actualités</a></li>
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
    <?php
      $nom = $profil->getNom() ;
      $prenom = $profil->getPrenom();
      $mail= $profil -> getMail();

      $nombreAdherents= count($listAdherents);
      $nombreDemandesCombats = count($demandesCombats);
      $nombreAttente = count($listAttente);
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#infoCompte" role="tab" aria-controls="home" aria-selected="true">Informations du compte</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#combat" role="tab" aria-controls="profile" aria-selected="false">Demandes de combat</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#actualite" role="tab" aria-controls="contact" aria-selected="false">Gestion de l'actualité</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#adherent" role="tab" aria-controls="contact" aria-selected="false">Gestion des adhérents</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active card" id="infoCompte" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                          <section>
                            <h4>Nombre d'adherents: <?=$nombreAdherents?> </h4>
                            <br>
                            Nombre de personnes en attente: <p id="numAtt"><?=$nombreAttente?></p>

                            Nombre de demandes de combats: <p id="numDC"> <?=$nombreDemandesCombats?></p>

                            Nombre de matchs de combats: <p id="numMatch"> <?=$nombreDemandesCombats?></p>

                          </section>
                        </div>
                      </div>
                      <div class="tab-pane fade card" id="combat" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="card-header">Nombre de demandes: </h3>
                        <div class="card-body d-flex justify-content-between align-self-baseline align-content-between flex-wrap">
                          <?php foreach ($demandesCombats as $demande) { ?>
                          <div class="card">
                            <div class="card-body">
                              <?=$demande?> <?=$demande->getPrenom()?>
                            </div>
                            <div class="card-footer">
                              auteur
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="actualite" role="tabpanel" aria-labelledby="contact-tab">
                        <form>
                          <div class="form-group">
                            <label for="formControlInput">Adresse mail</label>
                            <input type="email" class="form-control" id="formControlInput" placeholder="coach@example.com">
                          </div>
                          <div class="form-group">
                            <label for="formControlSelectType">Type</label>
                            <select class="form-control" id="formControlSelectType">
                              <option>Gala</option>
                              <option>Combats</option>
                              <option>Entrainements</option>
                              <option>Matériels</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="formControlSelectDate">Date</label>
                            <br>
                            <input type="date" name="date" id="formControlSelectDate">
                          </div>
                          <div class="form-group">
                            <label for="formControlTextarea">Message</label>
                            <textarea class="form-control" id="formControlTextarea" rows="3"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                        <h3>Historique des actualités</h3>
                        <hr class="style1">
                        <?php for ($i=0; $i < 100; $i++) { ?>
                        <div class="historique">
                          <div class="row">
                            <div class="col-sm">
                              Actu <?php echo $i ?>
                            </div>
                            <div class="col-sm">
                              Date
                            </div>
                            <div class="col-sm">
                              Description
                            </div>
                            <button type="" class="btn btn-danger">Supprimer</button>
                          </div>
                        </div>
                        <br>
                        <?php } ?>
                      </div>
                      <div class="tab-pane fade" id="adherent" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Trié par :
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">A-Z</a>
                            <a class="dropdown-item" href="#">Z-A</a>
                            <a class="dropdown-item" href="#">Age croissant</a>
                            <a class="dropdown-item" href="#">Age décroissant</a>
                          </div>
                        </div>
                        <div class="">
                          <?php for ($i=0; $i < 100; $i++) { ?>
                          <div class="card">
                            <div class="card-header">
                              <div class="user-image text-center">
                                  <img src="../view/src/img/profil/connexion_logo.png" alt="Mon nom" title="Mon nom" class="img-thumbnail">
                              </div>
                              Noms
                            </div>
                            <div class="card-body">
                              Description
                            </div>
                            <div class="card-footer">
                              <button type="" class="btn btn-secondary">Modifier</button>
                            </div>
                          </div>
                          <br>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                      <!-- <div class="tab-content">
                          <div id="information" class="tab-pane active">
                              <h4>Information de compte</h4>

                              <section>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </section>
                              <hr class="style1">
                          </div>
                          <div id="email" class="tab-pane active">
                              <h4>Envoyer un message</h4>
                              <hr class="style1">
                          </div>
                          <div id="settings" class="tab-pane active">
                            <h4>Réglages</h4>

                          </div>
                      </div> -->
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
  </body>
</html>
