<?php

include('../model/Adherent.class.php');
include('../model/Coach.class.php');
include('../model/profil.class.php');
include('../model/Cours.class.php');

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
  // public function getNewId(){
  //   $query = "SELECT id FROM adherentClub ORDER BY id DESC LIMIT 1 ";
  //   $r= $this->db->query($query);
  //   $res = $r->fetchAll(PDO::FETCH_CLASS[0]);
  //   $newId = $res[0][0] +1; //a modifier
  //   return $newId;
  // }
  public function getAdherent($email){
    $query = "SELECT * FROM adherentClub WHERE mail='$email'";
    $sql= $this->db->query($query);
    $adherent = $sql->fetchAll(PDO::FETCH_ASSOC)[0];

    if (count($adherent)==0) {
      return null;
    }else {return new AdherentClub($adherent);}
  }
  public function getCoach($email){
    $query = "SELECT * FROM coach WHERE mail='$email'";
    $sql= $this->db->query($query);
    $coach = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (count($coach)==0) {
      return null;
    }else {return new Coach($coach[0]);}
  }


  public function getCours($email){
    $query = "SELECT num,type,horaireDebut,horaireFin,jours FROM cours , participant WHERE mail='$email' and num=numCours";
    $sql= $this->db->query($query);
    $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
    $listCours=array();
    foreach ($resultat as $value) {
      $cours = new Cours($value);
      array_push($listCours,$cours);
    }
    return $listCours;
  }
  public function getProfil($email){
    $query = "SELECT * FROM profil WHERE mail='$email'";
    $sql= $this->db->query($query);
    $profil = $sql->fetchAll(PDO::FETCH_ASSOC)[0];

    if (count($profil)==0) {
      return null;
    }else {return new Profil($profil);}
  }
  public function estCoach($email){
    return $this->getProfil($email)->estCoach()=='true';

  }
  public function mailExistant($email){
    $query = "SELECT mail FROM adherentClub WHERE mail='$email'
              UNION
              SELECT mail FROM coach WHERE mail='$email'";
    $sql= $this->db->query($query);
    $resultat = $sql->fetchAll(PDO::FETCH_CLASS[0]);
    if (count($resultat)==0) {
      return false;
    }else {return true;}
  }

  public function CreeAdherent(adherent $adherent , $mdp){
    $nom = $adherent->getNom();
    $prenom = $adherent->getPrenom();
    $mail = $adherent->getMail();
    $tel = $adherent->getTel();
    $adresse = $adherent->getAdresse();
    $codePostal = $adherent->getCodePostal();
    $ville = $adherent->getVille();
    $date = $adherent->getDateNaiss();

    $query = "INSERT INTO adherentClub (mail,nom,prenom,datenaiss,adresse,codePostal,ville,tel) VALUES ('$mail','$nom' ,'$prenom','$date','$adresse', '$codePostal', '$ville','$tel')";
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
    $codePostal = $coach->getCodePostal();
    $ville = $coach->getVille();

    $query = "INSERT INTO coach (mail,nom,prenom,tel,adresse,codePostal,ville) VALUES ('$mail','$nom' ,'$prenom','$tel','$adresse', '$codePostal', '$ville')";
    $insertCoach=$this->db->query($query);

    $query = "INSERT INTO profil (mail,motdepasse,coach) VALUES ('$mail','$mdp', true)";
    $insertProfil=$this->db->query($query);

    return $insertCoach && $insertProfil;
  }
  public function updateAdherent($modif, $mail){
    $attribut =explode(" ",$modif);
    $query = "UPDATE adherentClub SET '$attribut[0]'='$attribut[1]' WHERE mail= '$mail'";
    return $this->db->query($query);
  }

  public function updateCoach($modif, $mail){
    $attribut =explode(" ",$modif);
    $query = "UPDATE coach SET '$attribut[0]'='$attribut[1]' WHERE mail= '$mail'";
    return $this->db->query($query);
  }
  public function suppAdherent($mail){
    $query = "DELETE FROM adherentClub WHERE mail= '$mail'";
    return $this->db->query($query);
  }
}









 ?>
