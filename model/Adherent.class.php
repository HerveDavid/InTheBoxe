<?php
  //classe des adhérents
  abstract class Adherent { // classe abstract d'adherent
    //////////////////////declaration des attributs///////////////////
    protected $nom;
    protected $prenom;
    protected $datenaiss;
    protected $taille;
    protected $poids;
    protected $genre;
    protected $categorie;
    protected $victoire;
    protected $defaite;
    protected $nul;

    //////////////////declaration des getter//////////////////////
    public function getNom() {return $this->nom;}
    public function getPrenom() {return $this->prenom;}
    public function getDateNaiss() {return $this->datenaiss;}
    public function getTaille() {return $this->taille;}
    public function getGenre() {return $this->genre;}
    public function getPoids() {return $this->poids;}
    public function getCategorie() {return $this->categorie;}
    public function getTel() {return $this->tel;}
    public function getVictoire() {return $this->victoire;}
    public function getDefaite() {return $this->defaite;}
    public function getNul() {return $this->nul;}
    //////////////////autres Methodes//////////////////
    public function getAge(){return round((time() - strtotime($this->datenaiss)) / 3600 / 24 / 365.242); } // convertir la date de naissance en age
    public function getListCategorie(){ // permet d'avoir la list des categoris
      return array("poids mi-mouches","poids mouches","poids coqs","poids légers","poids super-légers","poids moyens","poids mi-lourds","poids lourds");
    }

  }

  //////////////////////////////ADHERENT CLUB/////////////////////

  class AdherentClub extends Adherent {

    //////////////////////declaration des attributs///////////////////
    private $mail;
    private $adresse;
    private $codePostal;
    private $ville;
    private $tel;
    private $statut;
    private $typeCours;

    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
      }
    //////////////////declaration des getter//////////////////////
    public function getStatut() {return $this->statut;}
    public function getMail() {return $this->mail;}
    public function getAdresse() {return $this->adresse;}
    public function getCodePostal() {return $this->codePostal;}
    public function getVille() {return $this->ville;}
    public function getTypeCours() {return $this->typeCours;}
    public function getTel() {return $this->tel;}
  }


  //////////////////////////////ADHERENT EXTERIEUR/////////////////////
  class AdherentExterieur extends Adherent{
    //////////////////////declaration des attributs///////////////////
    private $club;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
    }
      //////////////////declaration des getter//////////////////////
    public function getClub() {return $this->club;}
  }
 ?>
