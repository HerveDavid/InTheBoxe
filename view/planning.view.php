<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/src/style/planning.css">
    <link rel="icon" href="../view/src/img/logo.png" />
    <script type="text/javascript" src="../view/src/js/profil.js"></script>

    <meta charset="utf-8">
    <title>Votre profil</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-white">
        <a class="navbar-brand" href="#">
          <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">Menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../controle/accueil.ctrl.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../controle/actualite.ctrl.php">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../controle/planning.ctrl.php">Planning/Tarifs</a>
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

    <div class="container" id="planning">

      <?php if (!$adhConnecter) {?>

        <h1 class="text-center">Planning des cours</h1>
        <hr>
        <p class="text-center">
          <span>Retrouvez le planning des cours privés, semi-privés ou en groupe.</span>
        </p>

        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-loisir card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Boxe Loisir :</h3>
              <h5>+14 ans (après 2005)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>190€</h3>
              <h5>Lundi, Mercredi et Vendredi de 18h15 à 20h</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-educative card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Boxe Educative :</h3>
              <h5>9/13 ans (2010 à 2006)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>170€</h3>
              <h5>Lundi, Mercredi de 17h à 18h</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-educative2 card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Boxe Educative :</h3>
              <h5>6/8 ans (2013 à 2011)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>120€</h3>
              <h5>Mercredi de 16h à 17h</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="cross-fit card d-flex flex-row justify-content-around">
            <div class="p-2 text-center">
              <h3>Cross Fit Boxing :</h3>
              <h5>+14 ans (après 2005)</h5>
            </div>
            <div class="p-2 text-center">
              <h3>Compris dans la licence Boxe Loisir</h3>
              <h5>Mardi de 18h15 à 19h15</h5>
            </div>
          </div>
        </a>
        <br>
        <a href="../controle/connexion.ctrl.php">
          <div class="boxe-femmes card d-flex flex-row justify-content-around">
            <div class="p-2">
              <h3>Boxe Féminine :</h3>
              <h5>+14 ans (après 2005)</h5>
            </div>
            <div class="p-2">
              <h3>190€</h3>
              <h5>
                Mardi 20h30 à 22h, Mercredi 9h30 à 11h
                <br>
                Jeudi 19H à 20h, Samedi 11h15 à 12h45
              </h5>
            </div>
          </div>
        </a>



        <p class="text-center">
          <span>Hommes: 06 58 87 23 90 - Femmes: 06 33 83 56 77</span>
        </p>
        <hr>

      </div>
    <?php } else {  $typeCours= $adherent->getTypeCours();?>
      <?php global $confirmation; ?>
      <h5 style='color:green'> <?=$confirmation ?></h5>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col" colspan="2" class="ing-hour-col"></th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-09-00">09:00 - 11:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-11-00">11:00 - 12:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-12-00">12:00 - 13:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-16-00">16:00 - 17:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-17-00">17:00 - 18:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-18-00">18:00 - 19:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-19-00">19:00 - 20:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-20-00">20:00 - 21:00</th>
            <th scope="col" colspan="1" data="1" class="ing-hour-col-21-00">21:00 - 22:00</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" colspan="2"  class="ing-day-row ing-day-col-1">lundi</th>
            <td class="ing-cell ing-hour-col-09-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-17-00 ing-day-row-1 boxe-educative text-center">
              <h5>Boxe Educative</h5>
              <p>
                9 à 13 ans
                <br>
                <?php if ($typeCours=="Boxe éducative 9/13"): ?>
                  <?php if (containt(1)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=4">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td colspan="2" class="ing-cell ing-hour-col-18-00 ing-day-row-1 boxe-loisir text-center">
              <h5>Boxe Loisir</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxe Loisir"): ?>
                  <?php if (containt(1)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                  <a href="../controle/planning.ctrl.php?cours=1">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-21-00 ing-day-row-1"></td>
          </tr>
          <tr>
            <th scope="row" colspan="2" class="ing-day-row ing-day-col-1">mardi</th>
            <td class="ing-cell ing-hour-col-09-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-18-00 ing-day-row-1 cross-fit-boxing text-center">
              <h5>Cross Fit Boxing</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxe Loisir"): ?>
                  <?php if (containt(7)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=7">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>              </p>
            </td>
            <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
            <td colspan="2" class="ing-cell ing-hour-col-20-00 ing-day-row-1 boxe-femmes text-center">
              <h5>Boxing Femmes</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxing Ladies"): ?>
                  <?php if (containt(8)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=8">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-21-00 ing-day-row-1"></td>
          </tr>
          <tr>
            <th scope="row" colspan="2" class="ing-day-row ing-day-col-1">mercredi</th>
            <td class="ing-cell ing-hour-col-09-00 ing-day-row-1 boxe-femmes text-center">
              <h5>Boxing Femmes</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxing Ladies"): ?>
                  <?php if (containt(9)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=9">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-16-00 ing-day-row-1 boxe-educative2 text-center">
              <h5>Boxe Educative</h5>
              <p>
                6 à 8 ans
                <br>
                <?php if ($typeCours=="Boxe éducative 6/8"): ?>
                  <?php if (containt(6)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=6">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-17-00 ing-day-row-1 boxe-educative text-center">
              <h5>Boxe Educative</h5>
              <p>
                9 à 13 ans
                <br>
                <?php if ($typeCours=="Boxe éducative 9/13"): ?>
                  <?php if (containt(5)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=5">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td colspan="2" class="ing-cell ing-hour-col-18-00 ing-day-row-1 boxe-loisir text-center">
              <h5>Boxe Loisir</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxe Loisir"): ?>
                  <?php if (containt(2)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=2">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-21-00 ing-day-row-1"></td>
          </tr>
          <tr>
            <th scope="row" colspan="2"  class="ing-day-row ing-day-col-1">jeudi</th>
            <td class="ing-cell ing-hour-col-09-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-18-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-19-00 ing-day-row-1 boxe-femmes text-center">
              <h5>Boxing Femmes</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxing Ladies"): ?>
                  <?php if (containt(10)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=10">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-21-00 ing-day-row-1"></td>
          </tr>
          <tr>
            <th scope="row" colspan="2" class="ing-day-row ing-day-col-1">vendredi</th>
            <td class="ing-cell ing-hour-col-09-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
            <td colspan="2" class="ing-cell ing-hour-col-18-00 ing-day-row-1 boxe-loisir text-center">
              <h5>Boxe Loisir</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxe Loisir"): ?>
                  <?php if (containt(3)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=3">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-21-00 ing-day-row-1"></td>
          </tr>
          <tr>
            <th scope="row" colspan="2" class="ing-day-row ing-day-col-1">samedi</th>
            <td class="ing-cell ing-hour-col-09-00 ing-day-row-1"></td>
            <td colspan="2" class="ing-cell ing-hour-col-11-00 ing-day-row-1 boxe-femmes text-center">
              <h5>Boxing Femmes</h5>
              <p>
                +14 ans
                <br>
                <?php if ($typeCours=="Boxing Ladies"): ?>
                  <?php if (containt(11)): ?>
                    <p>Vous êtes déjà inscrit à ce cours</p>
                  <?php else: ?>
                    <a href="../controle/planning.ctrl.php?cours=11">réserver en ligne</a>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </td>
            <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-18-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
            <td class="ing-cell ing-hour-col-21-00 ing-day-row-1"></td>
          </tr>
        </tbody>
      </table>
    <?php } ?>
    </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
