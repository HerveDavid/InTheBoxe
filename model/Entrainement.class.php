<?php
  class Entrainement{
    //////////////////////declaration des attributs///////////////////
    private $numEnt;
    private $typeEnt;
    private $tempsTotal;
    private $tempsRepos;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }
    //////////////////declaration des getter//////////////////////
    public function getNumEnt(){return $this->numEnt;}
    public function getTypeEnt(){return $this->typeEnt;}
    public function getTempsTotal(){return $this->tempsTotal;}
    public function getTempsRepos(){return $this->tempsRepos;}
  }

?>
