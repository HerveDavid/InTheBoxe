<?php

class Cours{
  private $type;
  private $horaire;
  private $jour;
  private $participantmoy;

  public function __construct(array $param = array()) {
    $i = 0;
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

public function getType(): string {return $this->type;}
public function getHoraire(): string {return $this->horaire;}
public function getJour(): string {return $this->jour;}
public function getParticipantMoy(): INTEGER {return $this->participantmoy;}







}



 ?>
