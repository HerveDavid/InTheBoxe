<?php

class Participe{
  private $numlicence;
  private $type;
  private $jour;
  private $horaire;

    public function __construct(array $param = array()) {
    $i = 0;
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

public function getNumLicence(): INTEGER {return $this->numlicence;}
public function getType(): string {return $this->type;}
public function getJour(): string {return $this->jour;}
public function getHoraire(): string {return $this->horaire;}

}


 ?>
