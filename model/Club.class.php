<?php

  class Club{
    //////////////////////declaration des attributs///////////////////
    private $nom;
    private $adresse;
    private $mail;
    private $tel;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
      }
    //////////////////declaration des getter//////////////////////
    public function getNom() {return $this->nom;}
    public function getAdresse() {return $this->adresse;}
    public function getMail() {return $this->mail;}
    public function getTel() {return $this->tel;}
  }


 ?>
