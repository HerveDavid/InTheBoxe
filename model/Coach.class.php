
<?php
  class Coach{
    private $mail;
    private $nom;
    private $prenom;
    private $tel;
    private $adresse;

    public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }
    public function getMail() {return $this->mail;}
    public function getNom() {return $this->nom;}
    public function getPrenom() {return $this->prenom;}
    public function getTel() {return $this->tel;}
    public function getAdresse() {return $this->adresse;}
  }
?>
