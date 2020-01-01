<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="../view/src/style/profilAdherent.css">
    <meta charset="utf-8">
    <title>Votre profil</title>
  </head>
  <body>
    <?php

    $mail= $profil->getMail();
    $adresse= $profil->getAdresse();
    $statut = $profil->getStatut();
    $nom= $profil->getNom();
    $prenom=$profil->getPrenom();
    $dateNaiss= $profil->getDateNaiss();
    $tel = $profil->getTel();
    $codePostal = $profil->getCodePostal();
    $ville = $profil->getVille();
    $listCours = $dao->getCours($mail);
    // var_dump($profil);
    var_dump($listCours);
    //demande de competition
    //affichage des informations (info , stats , status , docs a fournir )
    //les cours a la quelle il ses inscrit

     ?>
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
            $prenom = $_SESSION['prenom']; ?>
            <li id="Connexion"><a href="../controle/profil.ctrl.php"><?=$prenom?></a></li>
            <li id="Connexion"><a href="../controle/accueil.ctrl.php?deco=1">Déconnexion</a></li>
          <?php }else { ?>
            <li id="Connexion"><a href="../controle/connexion.ctrl.php">Connexion</a></li>
          <?php } ?>

        </ul>
      </nav>
    </header>

  <div class="container d-flex justify-content-around">
    <div class="user-details">
            <div class="user-image text-center">
                <img src="../view/src/img/profil/connexion_logo.png" alt="Mon nom" title="Mon nom" class="img-thumbnail">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3><?= $prenom ?> <?= $nom ?></h3>
                    <span class="help-block"><?= $mail ?></span>
                    <hr class="style1">
                </div>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Informations</h4>
                            <ul>
                              <li>Poids (en kg): <?=$profil->getPoids()?> </li>
                              <li>Taille : <?=$profil->getTaille()?></li>
                              <li>Licence : <?=$profil->getLicence()?></li>
                              <li>Catégorie : <?=$profil->getCategorie()?></li>

                              <li>Victoires : <?=$profil->getVictoire()?></li>
                              <li>Défaites : <?=$profil->getDefaite()?> </li>
                              <li>Matchs Nul : <?=$profil->getNul()?></li>
                            </ul>
                            <hr class="style1">
                        </div>

                        <div id="email" class="tab-pane active">
                            <h4><a href="#">Envoyer une demande de combat </a></h4>

                            <hr class="style1">
                        </div>

                        <section class="portfolio-experiment">
                          <a href="../controle/Circuit-Training/Timer.php">
                            <span class="text">Je m'entraine</span>
                            <span class="line -right"></span>
                            <span class="line -top"></span>
                            <span class="line -left"></span>
                            <span class="line -bottom"></span>
                          </a>
                        </section>

                        <hr class="style1">

                        <div id="cours" class="tab-pane active">
                            <h4>Cours inscrit</h4>
                            <br>
                            <?php if (isset($listCours)) {
                                    foreach ($listCours as $cours) { ?>
                                      <h6> <?= $cours->getType() ?></h6>
                                      <p>  <?= $cours->getHoraireDebut() ?> - <?= $cours->getHoraireFin() ?> le <?= $cours->getJour() ?></p>
                                      <br>
                                    <?php }
                                  } else { ?>
                                    <p>  Vous n'êtes inscrit a aucun cours </p>

                                  <?php } ?>
                            <hr class="style1">
                        </div>
                        <div id="settings" class="tab-pane active">
                          <h4>Modifier les informations personnelles</h4>
                          <form class="parametrage" action="../controle/parametrage.ctrl.php" method="post">
                            <fieldset>
                              <p>
                                <label for="prenom"><h6>Prénom</h6></label>
                                <input type="text" name="prenom" id="prenom" autofocus placeholder="Prénom" value="<?=$prenom ?>" required/>
                              </p>
                              <p>
                                <label for="nom"><h6>Nom</h6></label>
                                <input type="text" name="nom" id="nom" required placeholder="Nom" value="<?=$nom ?>" required/>
                              </p>

                              <p>
                                <label for="tel"><h6>Téléphone</h6></label>
                                <input type="tel" name="tel" id="tel" placeholder="Téléphone" value="<?=$tel ?>"/>
                              </p>

                              <p>
                                <label for="adresse"><h6>Adresse</h6></label>
                                <input type="text" name="adresse" id="adresse" required placeholder="Adresse" value="<?=$adresse ?>" required/>
                              </p>
                              <p>
                                <label for="ville"><h6>Ville</h6></label>
                                <input type="text" name="ville" id="ville" required placeholder="Ville" value="<?=$ville ?>" required/>
                              </p>
                              <p>
                                <label for="cp"><h6>Code postal</h6></label>
                                <input type="number" name="codePostal" id="codePostal" required placeholder="Code postal" value="<?=$codePostal ?>" required/>
                              </p>
                              <input type="submit" value="validé">
                            </fieldset>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>




  </body>
</html>
