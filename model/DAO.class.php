<?php

include('../model/Adherent.class.php');

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
  public function getNewId(){
    $q = "SELECT id FROM adherentClub ORDER BY id DESC LIMIT 1 ";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_CLASS[0]);
    $newId = $res[0][0] +1; //a modifier
    return $newId;
  }
  public function getAdherent($email){
    $q = "SELECT * FROM adherentClub WHERE mail='$email'";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_ASSOC)[0];
    var_dump($res);
    foreach ($res as $key => $value) {
      var_dump($key);
    }
    if (count($res)==0) {
      return null;
    }else {return new AdherentClub($res);}

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
    $id = $adherent->getId();
    $mdp = $adherent->getMotDePasse();
    $nom = $adherent->getNom();
    $prenom = $adherent->getPrenom();
    $mail = $adherent->getMail();
    $tel = $adherent->getTel();
    $adresse = $adherent->getAdresse();
    $date = $adherent->getDateNaiss();
    $q = "INSERT INTO adherentClub (id,mail,motdepasse,nom,prenom,datenaiss,adresse,tel) VALUES ($id,'$mail','$mdp','$nom' ,'$prenom','$date','$adresse','$tel')";

    $query=$this->db->query($q);
    return $query;
  }
}

/*
$q = "INSERT INTO adherent VALUES ('$adherent->getNom()','$adherent->getPrenom()',
'$adherent->getDateNaiss()','$adherent->getTaille()','$adherent->getPoids()','$adherent->getStatut()','$adherent->getCategorie()',
'$adherent->getCombattant()','$adherent->getCertificat()','$adherent->getMail()','$adherent->getAdresse()','$adherent->getAdresse()',
'$adherent->getApayer()','$adherent->getTel()','$adherent->getVictoire()','$adherent->getDefaite()','$adherent->getNul()',)";
*/











 ?>
