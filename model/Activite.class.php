<?php

class Activite{
  private $nom;
  private $type;

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
}


 ?>
