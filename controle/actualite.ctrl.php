<?php
  session_start();
  include('../model/DAO.class.php');
  $dao = new DAO;
  $actualites = $dao->getActualites(); // recuperer les actualites de la BD pour les afficher 
  include('../view/actualite.view.php');


 ?>
