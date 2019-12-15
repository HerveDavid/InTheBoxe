<?php

include('../model/Adherent.class.php');
include('../model/Coach.class.php');
include('../model/profil.class.php');

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

    if (count($res)==0) {
      return null;
    }else {return new AdherentClub($res);}
  }
  public function getCoach($email){
    $q = "SELECT * FROM coach WHERE mail='$email'";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res);
    if (count($res)==0) {
      return null;
    }else {return new Coach($res[0]);}
  }
  public function getProfil($email){
    $q = "SELECT * FROM profil WHERE mail='$email'";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_ASSOC)[0];

    if (count($res)==0) {
      return null;
    }else {return new Profil($res);}
  }
  public function estCoach($email){
    $q = "SELECT coach FROM profil WHERE mail='$email'";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_CLASS[0]);
    if ($res[0][0]=='0') {
      return false;
    }else {return true;}

  }
  public function mailExistant($email){
    $q = "SELECT mail FROM adherentClub WHERE mail='$email'
          UNION
          SELECT mail FROM coach WHERE mail='$email'";
    $r= $this->db->query($q);
    $res = $r->fetchAll(PDO::FETCH_CLASS[0]);
    if (count($res)==0) {
      return false;
    }else {return true;}
  }
  public function CreeAdherent(adherent $adherent , $mdp){
    $nom = $adherent->getNom();
    $prenom = $adherent->getPrenom();
    $mail = $adherent->getMail();
    $tel = $adherent->getTel();
    $adresse = $adherent->getAdresse();
    $date = $adherent->getDateNaiss();

    $query = "INSERT INTO adherentClub (mail,nom,prenom,datenaiss,adresse,tel) VALUES ('$mail','$nom' ,'$prenom','$date','$adresse','$tel')";
    $insertAdherent=$this->db->query($query);

    $query = "INSERT INTO profil (mail,motdepasse,coach) VALUES ('$mail','$mdp', false)";
    $insertProfil=$this->db->query($query);

    return $insertAdherent && $insertProfil;

  }
  public function CreeCoach(Coach $coach , $mdp){
    $nom = $coach->getNom();
    $prenom = $coach->getPrenom();
    $mail = $coach->getMail();
    $tel = $coach->getTel();
    $adresse = $coach->getAdresse();

    $query = "INSERT INTO coach (mail,nom,prenom,adresse,tel) VALUES ('$mail','$nom' ,'$prenom','$adresse','$tel')";
    $insertCoach=$this->db->query($query);

    $query = "INSERT INTO profil (mail,motdepasse,coach) VALUES ('$mail','$mdp', true)";
    $insertProfil=$this->db->query($query);

    return $insertCoach && $insertProfil;
  }
}

/*
$q = "INSERT INTO adherent VALUES ('$adherent->getNom()','$adherent->getPrenom()',
'$adherent->getDateNaiss()','$adherent->getTaille()','$adherent->getPoids()','$adherent->getStatut()','$adherent->getCategorie()',
'$adherent->getCombattant()','$adherent->getCertificat()','$adherent->getMail()','$adherent->getAdresse()','$adherent->getAdresse()',
'$adherent->getApayer()','$adherent->getTel()','$adherent->getVictoire()','$adherent->getDefaite()','$adherent->getNul()',)";
*/











 ?>
