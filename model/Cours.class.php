<?php

class Cours{
  private $num;
  private $type;
  private $horaireDebut;
  private $horaireFin;
  private $jours;

  public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }

public function getType() {return $this->type;}
public function getHoraireDebut(){return $this->horaireDebut;}
public function getHoraireFin() {return $this->horaireFin;}
public function getJour() {return $this->jours;}







}



 ?>
