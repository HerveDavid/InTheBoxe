<?php

class Exercices{
  private $nom;

    public function __construct(array $param = array()) {
    $i = 0;
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

public function getNom(): string {return $this->nom;}
public fnction setNom(nom):void{
  
  $this->nom=$nom;

}
}


 ?>
