<?php

class CoursDLS{
  private $type;
  private $horaire;
  private $datecours;
  private $numprof;
  private $numinscrits;


    public function __construct(array $param = array()) {
    $i = 0;
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

public function getType(): INTEGER {return $this->type;}
public function getHoraire(): string {return $this->horaire;}
public function getDateCours(): date {return $this->datecours;}
public function getNumProf(): string {return $this->numprof;}
public function getNumInscrits(): string {return $this->numinscrits;}


}


 ?>
