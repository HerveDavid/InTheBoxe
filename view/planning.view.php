<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href='../framework/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='../framework/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='../framework/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <script src='../framework/fullcalendar/packages/core/main.js'></script>
    <script src='../framework/fullcalendar/packages/interaction/main.js'></script>
    <script src='../framework/fullcalendar/packages/daygrid/main.js'></script>
    <script src='../framework/fullcalendar/packages/timegrid/main.js'></script>

    <link rel="stylesheet" href="../view/src/style/planning.css">
    <script type="text/javascript" src="../view/src/js/profil.js"></script>

    <meta charset="utf-8">
    <title>Votre profil</title>
  </head>
  <body>
    <header>
      <img class="logo" src="../view/src/img/logo.png" alt="logo-InTheBoxe">
      <nav class="topNavigation">
        <ul>
          <?php if (!isset($_SESSION['mail'])) { ?>
          <li id="Accueil"><a href="../controle/accueil.ctrl.php">Accueil</a></li>
          <?php } ?>
          <li id="Actualités"><a href="../controle/actualite.ctrl.php">Actualités</a></li>
          <li id="Planning"><a href="../controle/planning.ctrl.php">Planning</a></li>
          <li id="Club"><a href="../controle/club.ctrl.php">Club</a></li>
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

    <div class="container" id="planning">

      <?php if (!$adhConnecter) {?>

        <div class="d-flex justify-content-around">
          <div class="card text-black bg-white">
            <h3 class="card-header text-center">Inscrivez-vous pour pourvoir vous inscrire à un cours</h3>
            <div class="card-body d-flex justify-content-center">
              <button type="button" name="button" class="btn btn-primary">
                <a href="../controle/inscription.ctrl.php">Inscription</a>

              </button>
            </div>
          </div>
        </div>
        <br>

      <?php } ?>

        <h1 class="text-center">Planning des cours</h1>
        <hr>
        <p class="text-center">
          <span>Retrouvez le planning des cours privés, semi-privés ou en groupe.</span>
        </p>
        <div id="fightclub-content-band-5" class="fightclub-content-band vc fightclub-hidden-tablet fightclub-hidden-phone man" style="background-color: transparent; padding-bottom: 40px;">
          <div class="fightclub-container-fluid max width">
            <div class="fightclub-inner-container">
              <div class="fightclub-column vc whole" style="">
                <div class="fightclub-column-inner" style="">
                  <div class="ing-schedule-wrapper" id="ing-location-all">
                    <table class="ing-schedule-normal-layout">
                      <tbody>
                        <tr>
                          <th colspan="2" class="ing-hour-col"></th>
                          <th colspan="1" data="1" class="ing-hour-col-10-00">10:00 - 11:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-11-00">11:00 - 12:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-12-00">12:00 - 13:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-13-00">13:00 - 14:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-14-00">14:00 - 15:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-15-00">15:00 - 16:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-16-00">16:00 - 17:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-17-00">17:00 - 18:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-18-00">18:00 - 19:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-19-00">19:00 - 20:00</th>
                          <th colspan="1" data="1" class="ing-hour-col-20-00">20:00 - 21:00</th>
                        </tr>
                        <tr>
                          <th colspan="2" class="ing-day-row ing-day-col-1">lundi</th>
                          <td class="ing-cell ing-hour-col-10-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-13-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-14-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-15-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-17-00 ing-day-row-1">
                            <div class="ing-td-relative">
                              <div class="ing-class-container boxe-educative">
                                <div class="ing-class-name">Boxe Educative</div>
                                <div class="ing-details-box-container">
                                  <span class="ing-qtip-box">
                                    <span class="ing-qtip-data"></span>
                                  </span>
                                  9/13 ans de 17h à 18h
                                  <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="ing-cell ing-hour-col-18-00 ing-day-row-1">
                            <div class="ing-td-relative">
                              <div class="ing-class-container boxe-loisir">
                                <div class="ing-class-name">Boxe Loisir</div>
                                <div class="ing-details-box-container">
                                  <span class="ing-qtip-box">
                                    <span class="ing-qtip-data"></span>
                                  </span>
                                  +14 ans de 18h15 à 20h
                                  <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
                          <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
                        </tr>
                      <tr>
                        <th colspan="2" class="ing-day-row ing-day-col-1">mardi</th>
                        <td class="ing-cell ing-hour-col-10-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-13-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-14-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-15-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-18-00 ing-day-row-1">
                          <div class="ing-td-relative">
                            <div class="ing-class-container cross-fit-boxing">
                              <div class="ing-class-name">Cross Fit Boxing</div>
                              <div class="ing-details-box-container">
                                <span class="ing-qtip-box">
                                  <span class="ing-qtip-data"></span>
                                </span>
                                +14 ans de 18h à 19h15
                                <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="ing-cell ing-hour-col-19-00 ing-day-row-1">
                          <div class="ing-td-relative">
                            <div class="ing-class-container cross-fit-boxing">
                              <div class="ing-class-name">Cross Fit Boxing</div>
                              <div class="ing-details-box-container">
                                <span class="ing-qtip-box">
                                  <span class="ing-qtip-data"></span>
                                </span>
                                +14 ans de 18h à 19h15
                                <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
                      </tr>
                      <tr>
                        <th colspan="2" class="ing-day-row ing-day-col-1">mercredi</th>
                        <td class="ing-cell ing-hour-col-10-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-13-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-14-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-15-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-16-00 ing-day-row-1">
                          <div class="ing-td-relative">
                            <div class="ing-class-container boxe-educative2">
                              <div class="ing-class-name">Boxe Educative</div>
                              <div class="ing-details-box-container">
                                <span class="ing-qtip-box">
                                  <span class="ing-qtip-data"></span>
                                </span>
                                6/ans ans de 16h à 17h
                                <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="ing-cell ing-hour-col-17-00 ing-day-row-1">
                          <div class="ing-td-relative">
                            <div class="ing-class-container boxe-educative">
                              <div class="ing-class-name">Boxe Educative</div>
                              <div class="ing-details-box-container">
                                <span class="ing-qtip-box">
                                  <span class="ing-qtip-data"></span>
                                </span>
                                9/13 ans de 17h à 18h
                                <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="ing-cell ing-hour-col-18-00 ing-day-row-1">
                          <div class="ing-td-relative">
                            <div class="ing-class-container boxe-loisir">
                              <div class="ing-class-name">Boxe Loisir</div>
                              <div class="ing-details-box-container">
                                <span class="ing-qtip-box">
                                  <span class="ing-qtip-data"></span>
                                </span>
                                +14 ans de 18h15 à 20h
                                <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
                      </tr>
                      <tr>
                        <th colspan="2" class="ing-day-row ing-day-col-1">jeudi</th>
                        <td class="ing-cell ing-hour-col-10-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-13-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-14-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-15-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-18-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
                      </tr>
                      <tr>
                        <th colspan="2" class="ing-day-row ing-day-col-1">vendredi</th>
                        <td class="ing-cell ing-hour-col-10-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-13-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-14-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-15-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-18-00 ing-day-row-1">
                          <div class="ing-td-relative">
                            <div class="ing-class-container boxe-loisir">
                              <div class="ing-class-name">Boxe Loisir</div>
                              <div class="ing-details-box-container">
                                <span class="ing-qtip-box">
                                  <span class="ing-qtip-data"></span>
                                </span>
                                +14 ans de 18h15 à 20h
                                <a href="../controle/connexion.ctrl.php">réserver en ligne</a>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
                      </tr>
                      <tr>
                        <th colspan="2" class="ing-day-row ing-day-col-1">samedi</th>
                        <td class="ing-cell ing-hour-col-10-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-11-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-12-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-13-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-14-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-15-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-16-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-17-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-18-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-19-00 ing-day-row-1"></td>
                        <td class="ing-cell ing-hour-col-20-00 ing-day-row-1"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
