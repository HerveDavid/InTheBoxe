<?php

include('../model/AdherentDuClub.class.php');

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

  public function getAdherent($email){
    $q = "SELECT * FROM adherent WHERE licence='$email'";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_CLASS);
    return new Adherent($res);
  }
  public function mailExistant($email){
    $q = "SELECT * FROM adherentClub WHERE mail='$email'";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_CLASS[0]);
    if (count($res)==0) {
      return false;
    }else {return true;}
  }
  public function CreeAdherent(adherent $adherent){
    $mdp = $adherent->getMdp();
    $nom=$adherent->getPrenom();
    $q = "INSERT INTO adherent VALUES ('$adherent->getNom()','$adherent->getPrenom()',
    '$adherent->getDateNaiss()','$adherent->getTaille()','$adherent->getPoids()','$adherent->getStatut()','$adherent->getCategorie()',
    '$adherent->getCombattant()','$adherent->getCertificat()','$adherent->getMail()','$adherent->getAdresse()','$adherent->getAdresse()',
    '$adherent->getApayer()','$adherent->getTel()','$adherent->getVictoire()','$adherent->getDefaite()','$adherent->getNul()',)";
    $this->db->query($q);
  }

}













 ?>
