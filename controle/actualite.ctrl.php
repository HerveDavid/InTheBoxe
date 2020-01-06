<?php
  session_start();
  include('../model/DAO.class.php');
  $dao = new DAO;
  $actualites = $dao->getActualites();
  include('../view/actualite.view.php');


 ?>
