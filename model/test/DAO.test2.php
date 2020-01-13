<?php
  require_once('../model/DAO.class.php');
  //////////////////////////MESSAGE IMPORTANT///////////////////////////////////
  // IL FAUT DEPLACER LE FICHIER DANS LE REPERTOIRE MODEL POUR QUE LES TESTS FONCTIONNES

  /////////////////////////METHODE TESTER //////////////////////////////////////

  //getDemandesCombat() CreeDemandeCombat() suppDemandeCombat() demandeEnCours()

  ///////////////////////////////////////////////////////////////////

  $dao = new DAO();
  $adh = $dao->getAdherent('amine@gmail.com');
  var_dump($adh);
  echo "<h2>test de la methode getDemandesCombat()</h2>
  <br> resultat attendu : affichage de tous les demandes de combat ";
  var_dump($dao->getDemandesCombat());

  echo " <h2>test de la methode CreeDemandeCombat() </h2>
  <br> resultat attendu : ajout de la demande de amine ";
  var_dump($dao->CreeDemandeCombat($adh->getMail()));
  var_dump($dao->getDemandesCombat());

  echo " <h2>test de la methode suppDemandeCombat()</h2>
  <br> resultat attendu : suppression de la demande de amine ";
  var_dump($dao->suppDemandeCombat($adh->getMail()));
  var_dump($dao->getDemandesCombat());

  echo " <h2>test de la methode demandeEnCours()</h2>
  <br> resultat attendu : false puis true <br>";
  if ($dao->demandeEnCours($adh->getMail())) {
    echo 'true' ;
  }else {
    echo 'false';
  }
  echo"<br>";
  if ($dao->demandeEnCours("walidi@gmail.com")) {
    echo 'true' ;
  }else {
    echo 'false';
  }
  var_dump($dao->demandeEnCours("walidi@gmail.com"));
 ?>
