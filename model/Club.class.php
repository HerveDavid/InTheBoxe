<?php

class Club{
  private $nom;
  private $adresse;
  private $mail;
  private $tel;

  public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }

  public function getNom() {return $this->nom;}
  public function getAdresse() {return $this->adresse;}
  public function getMail() {return $this->mail;}
  public function getTel() {return $this->tel;}
}


 ?>
