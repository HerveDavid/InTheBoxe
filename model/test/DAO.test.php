<?php
  require_once('../model/DAO.class.php');
  //////////////////////////MESSAGE IMPORTANT///////////////////////////////////
  // IL FAUT DEPLACER LE FICHIER DANS LE REPERTOIRE MODEL POUR QUE LES TESTS FONCTIONNES

  /////////////////////////METHODE TESTER //////////////////////////////////////

  //mailExistant() CreeAdherent() getAdherent() getProfil() estCoach() CreeCoach()
  //estCoach() getCoach() getAllAdherent() getActualites() CreeActualite() suppActualite()
  //suppActualitePasser()

  ///////////////////////////////////////////////////////////////////
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

  echo " test de la methode getProfil : (retourne le profil)";
  var_dump($dao->getProfil('waw@yahoo.com'));

  echo " test de la methode getProfil : (retourne null)";
  var_dump($dao->getProfil('wazdzaw@yahoo.com'));

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

  echo " test de la methode getAllAdherent : ";
  var_dump($dao->getAllAdherent());

  echo " test de la methode getActualites : ";
  var_dump($dao->getActualites());

  echo " test de la methode CreeActualite : (devrai afficher l'actualite nouveau)  ";
  $param = array("nom"=>"nouveau","type"=>"evenement","dateAct"=>"2020-02-20","description"=>"wesh ya quoi","coach"=>"walidi");
  $actu = new Actualite($param);
  $dao->CreeActualite($actu);
  var_dump($dao->getActualites());

  echo " test de la methode suppActualite : (deverai ne plus avoir 'nouveau') ";
  $dao->suppActualite("nouveau","2020-02-20");
  var_dump($dao->getActualites());

  echo "creation d'un evenement expirer 'vieux' : ";
  $param = array("nom"=>"vieux","type"=>"evenement","dateAct"=>"2019-02-20","description"=>"wesh ya quoi","coach"=>"walidi");
  $actu = new Actualite($param);
  $dao->CreeActualite($actu);

  echo " test de la methode suppActualitePasser : (deverai ne plus avoir 'vieux') <br>";
  $dao->suppActualitePasser();
  var_dump($dao->getActualites());
 ?>
