<?php

  class Exercice{
    //////////////////////declaration des attributs///////////////////
    private $nom;
    private $nbRep;
    private $nbSerie;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }
    //////////////////declaration des getter//////////////////////
    public function getNom() {return $this->nom;}
    public function getNbRep() {return $this->nbRep;}
    public function getNbSerie() {return $this->nbSerie;}
  }


 ?>
