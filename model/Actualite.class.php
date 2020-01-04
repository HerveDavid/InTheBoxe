<?php

class Actualite{
  private $nom;
  private $type;
  private $dateAct;
  private $description;
  private $coach;

  public function __construct(array $param = array()) {
    foreach ($param as $key => $value) {
        $this->$key = $value;
    }
  }

public function getNom() {return $this->nom;}
public function getType() {return $this->type;}
public function getDate(){return $this->dateAct;}
public function getDescription() {return $this->description;}
public function getCoach(){return $this->coach;}


}
 ?>
