<?php

<<<<<<< HEAD
=======
include('../model/Adherent.class.php');

>>>>>>> 88ffd820f2fd7b88ef8cc4fd2f00a00852e8f3e5
class DAO {
  private $db;
  private $database = '../model/data/db/boxe.db';

  public function __construct() {
    if (! file_exists($this->database)) {
      die ("Database error: file not found '".$this->database."'\n");
    }
    if (!is_writable($this->database)) {
      die ("Database error: file not writable '".$this->database."'\n");
    }

    try {
      $this->db = new PDO("sqlite:".$this->database);
      if (!$this->db) {
        die ("Database error: cannot open '".$this->database."'\n");
      }
    } catch (PDOException $e) {
      die("PDO Error :".$e->getMessage()." '".$this->database."'\n");
    }
  }

  public function getAdherent($licence){
    $q = "SELECT * FROM adherent WHERE licence='$licence'";
<<<<<<< HEAD
    try{
      $r= $this->db->query($q);
    }
    $res = $r->fetchAll(PDO::FETCH_CLASS,'Adherent');
    return new Adherent();
=======
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_CLASS[0]);
    return new Adherent($res);
>>>>>>> 88ffd820f2fd7b88ef8cc4fd2f00a00852e8f3e5
  }

  public function CreeAdherent(adherent $adherent){
    $q = "INSERT INTO adherent VALUES ('$adherent->getLicence()','$adherent->getNom()','$adherent->getPrenom()',
    '$adherent->getDateNaiss()',$adherent->getTaille(),$adherent->getPoids(),'$adherent->getStatut()','$adherent->getCategorie()',
    '$adherent->getCombattant()','$adherent->getCertificat()','$adherent->getMail()','$adherent->getAdresse()','$adherent->getAdresse()',
    $adherent->getApayer(),'$adherent->getTel()',$adherent->getVictoire(),$adherent->getDefaite(),$adherent->getNul(),'$adherent->getMdp()')";
    $this->db->query($q);
  }

}













 ?>
