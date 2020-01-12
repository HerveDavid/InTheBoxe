<?php
  include ('../model/DAO.class.php');
  $dao = new DAO;

  session_start();
  $coach = $dao->getCoach($_SESSION['mail']);

  if (isset($_POST['nomActu']) && isset($_POST['typeActu'])
  && isset($_POST['description']) && isset($_POST['date'])) {
    if ($_POST['date']<date("Y-m-d")) {
      header('Location: profil.ctrl.php?tabActive=" / /show active/ "&erreurActu=date');
    }else {
      $nomActualite= $_POST['nomActu'];
      $typeActualite = $_POST['typeActu'];
      $description = $_POST['description'];
      $nomCoach = $coach->getNom();
      $date=$_POST['date'];
      $param = array('nom'=>$nomActualite ,
                      'type'=>$typeActualite ,
                       'dateAct'=>$date ,
                       'description'=> $description,
                       'coach' => $nomCoach);
      $actu = new Actualite($param);
      $dao->CreeActualite($actu);
      header('Location: profil.ctrl.php?tabActive=" / /show active/ "');
    }

  }
  if (isset($_POST['accepterDemande']) ) {
    header('Location: profil.ctrl.php?adv=1&disabled=disabled');
  }
  if (isset($_POST['refuserDemande'])) {
    $dao->suppDemandeCombat($_POST['refuserDemande']);
    header('Location: profil.ctrl.php?tabActive=" /show active/ / / / "');
  }
  if (isset($_POST['clear'])) {
    $dao->suppActualitePasser();
    header('Location: profil.ctrl.php?tabActive=" / /show active/ / / "');
  }
  if (isset($_POST['supp'])) {
    $value = explode("/",$_POST['supp']);
    var_dump($value);
    $nom= $value[0];
    $date = $value[1];
    var_dump($nom);
    var_dump($date);
  //  $dao->suppActualite($nom,$date);
    var_dump($dao->suppActualite($nom,$date));
    //header('Location: profil.ctrl.php?tabActive=" / /show active/ "');
  }
  // if () {
  //   header('Location: profil.ctrl.php?modifier="true");
  // }
  //header('Location: profil.ctrl.php');

 ?>
