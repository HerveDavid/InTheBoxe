<?php

class Activite{
  private $nom;
  private $type;
  private $dateactivite;

    public function __construct(array $param = array()) {
    $i = 0;
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

public function getNom(): string {return $this->nom;}
public function getType(): string {return $this->type;}
public function getDateActivite():date{return $this->dateactivite;}

public function setDate(date $dateact):void{
  $this->dateactivite=$dateact;
}
public function setType(string $type):void{
  $this->type=$type;
}

public function setNom(string $nom):void{
  $this->nom=$nom;
}

}
 ?>
