
<?php
  class Coach{
    //////////////////////declaration des attributs///////////////////
    private $mail;
    private $nom;
    private $prenom;
    private $tel;
    private $adresse;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }
    //////////////////declaration des getter//////////////////////
    public function getMail() {return $this->mail;}
    public function getNom() {return $this->nom;}
    public function getPrenom() {return $this->prenom;}
    public function getTel() {return $this->tel;}
    public function getAdresse() {return $this->adresse;}
  }
?>
