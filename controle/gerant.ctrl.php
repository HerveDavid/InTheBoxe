<?php
  include ('../model/DAO.class.php');
  $dao = new DAO;

  session_start();
  $coach = $dao->getCoach($_SESSION['mail']);

  if (isset($_POST['nomActu']) && isset($_POST['typeActu'])
  && isset($_POST['description']) && isset($_POST['date'])) {

    $nomActualite = $_POST['nomActu'];
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
  if (isset($_POST['clear'])) {
    $dao->suppActualitePasser();
    header('Location: profil.ctrl.php?tabActive=" / /show active/ "');
  }
  if (isset($_POST['supp'])) {
    $value = explode("/",$_POST['supp']);
    $nom= $value[0];
    $date = $value[1];
    $dao->suppActualite($nom,$date);
    header('Location: profil.ctrl.php?tabActive=" / /show active/ "');
  }
  // if () {
  //   header('Location: profil.ctrl.php?modifier="true");
  // }
  //header('Location: profil.ctrl.php');

 ?>
