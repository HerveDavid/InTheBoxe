<?php
  /////////////////////////DECLARATION DES CLASSES//////////////////////////////
  require_once('../model/Adherent.class.php');
  require_once('../model/Actualite.class.php');
  require_once('../model/Coach.class.php');
  require_once('../model/profil.class.php');
  require_once('../model/Cours.class.php');
  require_once('../model/Club.class.php');
  //////////////////////////////////////////////////////////////////////////////
  class DAO {
    
    private $db;
    private $database = '../model/data/db/boxe.db';

    public function __construct() {
      global $test;
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
    /////////////////////////////////////////////////////////////////////////////
    //////////////////  ADHERENT ////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    public function getAllAdherent(){ // recuperer tous les adherents du club
      $query = "SELECT * FROM adherentClub ORDER BY nom";
      $sql= $this->db->query($query);
      $adherents = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listAdherents = array();
      foreach ($adherents as $adh ) {
        array_push($listAdherents,new AdherentClub($adh));
      }
      return $listAdherents;
    }
    //----------------------------------------------------------------------------
    public function getAdherent($email){ // recuperer l'adherent du mail = $email
      $query = "SELECT * FROM adherentClub WHERE mail='$email'";
      $sql= $this->db->query($query);
      $adherent = $sql->fetchAll(PDO::FETCH_ASSOC)[0];

      if (count($adherent)==0) {
        return null;
      }else {return new AdherentClub($adherent);}
    }
    //----------------------------------------------------------------------------
    public function getAdherentAttente(){ // recuperer la list des adherent en status = 'attente'
      $query = "SELECT * FROM adherentClub WHERE statut='attente' ORDER BY nom";
      $sql= $this->db->query($query);
      $adherents = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listAdherents = array();
      foreach ($adherents as $adh ) {
        array_push($listAdherents,new AdherentClub($adh));
      }
      return $listAdherents;
    }
    //----------------------------------------------------------------------------
    public function getAdherentsTrier($attribut){ // list des adherent du club avec un ordre precis donner par $attribut
      $query = "SELECT * FROM adherentClub WHERE statut='adherent' ORDER BY '$attribut'";
      $sql= $this->db->query($query);
      $adherents = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listAdherents = array();
      foreach ($adherents as $adh ) {
        array_push($listAdherents,new AdherentClub($adh));
      }
      return $listAdherents;
    }
    //----------------------------------------------------------------------------
    public function getAdversaires($categorie,$genre){ // recupere la list des adherentExterieur avec le meme $genre et la meme $categorie
      $query = "SELECT * FROM adherentExterieur WHERE categorie='$categorie' and genre='$genre'";
      $sql= $this->db->query($query);
      $adversaires = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listAdversaires = array();
      foreach ($adversaires as $adv ) {
        array_push($listAdversaires, new AdherentExterieur($adv));
      }
      return $listAdversaires;
    }
    //----------------------------------------------------------------------------
    public function CreeAdherent(adherent $adherent , $mdp){ // permet l'insertion d'un adherent dans la base de donnee
      $nom = $adherent->getNom();
      $prenom = $adherent->getPrenom();
      $mail = $adherent->getMail();
      $tel = $adherent->getTel();
      $adresse = $adherent->getAdresse();
      $codePostal = $adherent->getCodePostal();
      $ville = $adherent->getVille();
      $date = $adherent->getDateNaiss();
      $statut=$adherent->getStatut();
      $genre=$adherent->getGenre();

      $query = "INSERT INTO adherentClub (mail,nom,prenom,datenaiss,adresse,codePostal,ville,tel,statut,genre) VALUES ('$mail','$nom' ,'$prenom','$date','$adresse', '$codePostal', '$ville','$tel','$statut','$genre')";
      $insertAdherent=$this->db->query($query);

      $query = "INSERT INTO profil (mail,motdepasse,coach) VALUES ('$mail','$mdp', false)";
      $insertProfil=$this->db->query($query);

      return $insertAdherent && $insertProfil;

    }
    //----------------------------------------------------------------------------
    public function updateAdherent($modif, $mail){ // modifier une information specifique ($modif) d'un adherent dans la base de donnee
      $attribut =explode(" ",$modif);
      $nouvelle =explode("$attribut[0] ",$modif);
      $query = "UPDATE adherentClub SET '$attribut[0]'='$nouvelle[1]' WHERE mail= '$mail'";
      return $this->db->query($query);
    }
    //----------------------------------------------------------------------------
    public function suppAdherent($mail){ // suppression d'un adherent donne par $mail dans la base de donnee
      $suppAdherent = "DELETE FROM adherentClub WHERE mail= '$mail'";
      $suppProfil = "DELETE FROM profil WHERE mail= '$mail'";

      return $this->db->query($suppAdherent) && $this->db->query($suppProfil) ;
    }
    /////////////////////////////////////////////////////////////////////////////
    //////////////////  COACH ///////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    public function getCoach($email){
      $query = "SELECT * FROM coach WHERE mail='$email'";
      $sql= $this->db->query($query);
      $coach = $sql->fetchAll(PDO::FETCH_ASSOC);
      if (count($coach)==0) {
        return null;
      }else {return new Coach($coach[0]);}
    }
    //----------------------------------------------------------------------------
    public function CreeCoach(Coach $coach , $mdp){
      $nom = $coach->getNom();
      $prenom = $coach->getPrenom();
      $mail = $coach->getMail();
      $tel = $coach->getTel();
      $adresse = $coach->getAdresse();

      $query = "INSERT INTO coach (mail,nom,prenom,tel,adresse) VALUES ('$mail','$nom' ,'$prenom','$tel','$adresse')";
      $insertCoach=$this->db->query($query);

      $query = "INSERT INTO profil (mail,motdepasse,coach) VALUES ('$mail','$mdp', true)";
      $insertProfil=$this->db->query($query);

      return $insertCoach && $insertProfil;
    }

    //----------------------------------------------------------------------------
    public function updateCoach($modif, $mail){
      $attribut =explode(" ",$modif);
      $query = "UPDATE coach SET '$attribut[0]'='$attribut[1]' WHERE mail= '$mail'";
      return $this->db->query($query);
    }
    /////////////////////////////////////////////////////////////////////////////
    //////////////////  COURS ///////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    public function getAllCours($email){ // recuperer la list de tous les cours au quelle l'adherent ($email) est i
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
    //----------------------------------------------------------------------------
    public function getCours($num){
      $query = "SELECT num,type,horaireDebut,horaireFin,jours FROM cours WHERE num='$num'";
      $sql= $this->db->query($query);
      $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
      $cours = new Cours($resultat[0]);
      return $cours;
    }
    //----------------------------------------------------------------------------
    public function reserveCours($num,$mail){
      $query = "INSERT INTO participant VALUES ($num,'$mail')";

      return $insertParticipant=$this->db->query($query);
    }
    //----------------------------------------------------------------------------
    public function suppParticipant($num,$mail){
      $suppParticipant = "DELETE FROM participant WHERE numCours='$num' and mail='$mail'";
      return $this->db->query($suppParticipant);
    }
    /////////////////////////////////////////////////////////////////////////////
    //////////////////  ACTUALITE ///////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////

    public function getActualites(){
      $query = "SELECT * FROM actualite ORDER BY dateAct";
      $sql= $this->db->query($query);
      $actualites = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listActulaites = array();
      foreach ($actualites as $actu ) {
        array_push($listActulaites,new Actualite($actu));
      }
      return $listActulaites;
    }
    //----------------------------------------------------------------------------
    public function CreeActualite(Actualite $actu){
      $nom = str_replace('"','\'',$actu->getNom());
      $type = $actu->getType();
      $date = $actu->getDate();
      $description = str_replace('"','\'',$actu->getDescription());
      $coach = $actu->getCoach();

      $query = "INSERT INTO actualite (nom,type,dateAct,description,coach) VALUES ('$nom','$type' ,'$date',\"$description\",'$coach')";
      $insertActualite=$this->db->query($query);
    }
    //----------------------------------------------------------------------------
    public function suppActualite($nom,$date){
      $nom= str_replace('"','\'',$nom);
      $suppActualite = "DELETE FROM Actualite WHERE nom= \"$nom\" and dateAct='$date'";
      var_dump($suppActualite);
      return $this->db->query($suppActualite)  ;
    }
    //----------------------------------------------------------------------------
    public function suppActualitePasser(){
      $today = date("Y-m-d");
      $actualites = $this->getActualites();
      foreach ($actualites as $actu) {
        $date=$actu->getDate();

        if ($date<$today) {
          //echo " <br> $date est plus petit que $today";
          $this->suppActualite($actu->getNom(),$actu->getDate());
        }
      }
    }
    /////////////////////////////////////////////////////////////////////////////
    ////////////////// DEMANDE DE COMBATS ///////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    public function getDemandesCombats(){
      $query = "SELECT * FROM demandeCombats ORDER BY num ";
      $sql= $this->db->query($query);
      $demandesCombats = $sql->fetchAll(PDO::FETCH_ASSOC);
      $listDemandes= array();
      if (count($demandesCombats)>0) {
        foreach ($demandesCombats as $demande) {
          array_push($listDemandes,$this->getAdherent($demande['mail']));
        }
      }
      return $listDemandes;
    }
    //----------------------------------------------------------------------------
    public function demandeEnCours($mail){
      $query = "SELECT * FROM demandeCombats WHERE mail='$mail'";
      $sql =  $this->db->query($query);
      $resultat = $sql->fetchAll(PDO::FETCH_CLASS[0]);
      return count($resultat);
    }
    //----------------------------------------------------------------------------
    public function CreeDemandeCombat($mail){
      $query = "SELECT num FROM demandeCombats ORDER BY num DESC LIMIT 1";
      $sql= $this->db->query($query);
      $numMax = $sql->fetch(PDO::FETCH_ASSOC);
      $num= intval($numMax['num'])+1;
      $query = "INSERT INTO demandeCombats VALUES ($num,'$mail')";

      return $insertProfil=$this->db->query($query);
    }
    //----------------------------------------------------------------------------
    public function suppDemandeCombat($mail){
      $suppDemande = "DELETE FROM demandeCombats WHERE mail='$mail'";
      return $this->db->query($suppDemande);
    }
    /////////////////////////////////////////////////////////////////////////////
    ////////////////// PROFIL ///////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    public function getProfil($email){ //
      $query = "SELECT * FROM profil WHERE mail='$email'";
      $sql= $this->db->query($query);
      $profil = $sql->fetchAll(PDO::FETCH_ASSOC);

      if (count($profil)==0) {
        return null;
      }else {return new Profil($profil[0]);}
    }
    //----------------------------------------------------------------------------
    public function estCoach($email){
      return $this->getProfil($email)->estCoach()=='true';
    }
    //----------------------------------------------------------------------------
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
    /////////////////////////////////////////////////////////////////////////////
    ////////////////// CLUB ///////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    public function getClub($nom){
      $query = "SELECT * FROM Club WHERE nom='$nom'";
      $sql= $this->db->query($query);
      $club = $sql->fetchAll(PDO::FETCH_ASSOC);

      if (count($club)==0) {
        return null;
      }else {return new Club($club[0]);}
    }













  }









 ?>
