<?php
  require_once('../model/DAO.class.php');
    require_once('../model/Adherent.class.php');
    require_once('../model/Coach.class.php');


  $dao = new DAO();
  echo " test de la methode mailExistant : (retourn normalement false)";
  var_dump($dao->mailExistant("wadzelid@gmail.com"));

  echo " test de la methode mailExistant : (retourn normalement true)";
  var_dump($dao->mailExistant("walid@gmail.com"));

  $param = array("mail"=>"waw@yahoo.com","nom"=>"w","prenom"=>"w","tel"=>"06","datenaiss"=>"24/04/1999","adresse"=>"wesh");
  $adh = new AdherentClub($param);

  echo " test de le constructeur de Adherent : ";
  var_dump($adh);

  echo " test de la methode CreeAdherent : (retourn true si premier execution)";
  var_dump($dao->CreeAdherent($adh,"w"));

  echo " test de la methode getAdherent : (retourn l'adherent cree)";
  var_dump($dao->getAdherent('waw@yahoo.com'));

  echo " test de la methode estCoach : (retourn normalement false)";
  var_dump($dao->estCoach('waw@yahoo.com'));

  $param = array("mail"=>"arabe2@yahoo.com","nom"=>"w","prenom"=>"w","tel"=>"06","adresse"=>"wesh");
  $adh = new Coach($param);

  echo " test de la methode CreeCoach : (retourn true si premier execution)";
  var_dump($dao->CreeCoach($adh,"w"));

  echo " test de la methode getCoach : (retourn le coach cree)";
  var_dump($dao->getCoach('arabe2@yahoo.com'));

  echo " test de la methode estCoach : (retourn normalement true)";
  var_dump($dao->estCoach('arabe2@yahoo.com'));

  echo " test de la methode updateProfil sur le compte waw@yahoo.com : (deverai afficher walidia comme prenom) ";
  $dao->updateAdherent("prenom walidia",'waw@yahoo.com');
  var_dump($dao->getAdherent('waw@yahoo.com'));

  echo " test de la methode suppAdherent sur le compte waw@yahoo.com : (deverai retourner false) ";
  $dao->suppAdherent('waw@yahoo.com');
  var_dump($dao->mailExistant('waw@yahoo.com'));
 ?>
