<?php
include('../model/Adherent.class.php');
include('../model/DAO.class.php');
 $param = array('nom'=>'walid');
  $adh = new AdherentClub($param);
  var_dump($adh);

  $adh2 = new AdherentExterieur($param);
  var_dump($adh2);
  $dao = new DAO();
 ?>
