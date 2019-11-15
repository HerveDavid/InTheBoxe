<?php
  require_once('DAO.class.php');

  $config = parse_ini_file('../model/data/db');
  var_dump($config);

  $dao = new DAO($config['database']);

  $m2=$dao->getAdherent();
  var_dump($m2);
  $m=$adherent-> CreeAdherent("1","viallon","gabi","2000-01-01","1.20","60","masculin","amateur","poids lourd","oui","certificat valide","viallon@gmail.com","25 rue de la frappe","40","0490668600","12","5","6");
  var_dump($m);


 ?>
