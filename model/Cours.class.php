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

public function getType(): string {return $this->type;}
public function getHoraire(): string {return $this->horaire;}
public function getJour(): string {return $this->jour;}
public function getParticipantMoy(): INTEGER {return $this->participantmoy;}







}



 ?>
