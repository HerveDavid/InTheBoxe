<?php
  //////////////////////////MESSAGE IMPORTANT///////////////////////////////////
  // IL FAUT DEPLACER LE FICHIER DANS LE REPERTOIRE MODEL POUR QUE LES TESTS FONCTIONNES

  include('../model/DAO.class.php');
  $param = array('nom'=>'walid');
  $adh = new AdherentClub($param);
  var_dump($adh);

  $adh2 = new AdherentExterieur($param);
  var_dump($adh2);
  $dao = new DAO();
 ?>
