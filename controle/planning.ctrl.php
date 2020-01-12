<?php
  include('../model/DAO.class.php');
  $dao = new DAO();

  session_start();

  if (isset($_SESSION['mail'])) {
    if (!$dao->estCoach($_SESSION['mail'])) {
      $adhConnecter=true;
      $adherent= $dao->getAdherent($_SESSION['mail']);
      $listCours=$dao->getAllCours($_SESSION['mail']);
      function containt($num){
        global $listCours;
        foreach ($listCours as $cours) {
          if ($cours->getNumCours()==$num) {
            return true;
          }
        }
        return false;
      }
      if (isset($_GET['cours'])) {
        $cours = $dao->getCours($_GET['cours']);
        $dao->reserveCours($_GET['cours'],$adherent->getMail());
        $type = $cours->getType();
        $jour = $cours->getJour();
        $horaireDebut=$cours->getHoraireDebut();
        $horaireFin=$cours->getHoraireFin();
        $listCours=$dao->getAllCours($_SESSION['mail']);
        $confirmation = "Vous êtes bien inscrit au cours $type de $horaireDebut à $horaireFin le $jour !";
      }else {
        $confirmation="";
      }
    }
  }else {
    $confirmation="";
    $adhConnecter=false;
  }

  global $adhConnecter;
  include('../view/planning.view.php');

 ?>
