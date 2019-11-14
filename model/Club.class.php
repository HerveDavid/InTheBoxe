<?php

class Club{
  private $nom;
  private $adresse;
  private $tel;

    public function __construct(array $param = array()) {
    $i = 0;
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

public function getNom(): string {return $this->nom;}
public function getAdresse(): string {return $this->adresse;}
public function getTel(): string {return $this->tel;}
}


 ?>
