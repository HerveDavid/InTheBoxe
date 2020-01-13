<?php

  class Cours{
    //////////////////////declaration des attributs///////////////////
    private $num;
    private $type;
    private $horaireDebut;
    private $horaireFin;
    private $jours;
    //////////////////declaration du constructeur//////////////////////
    public function __construct(array $param = array()) {
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
      }
    //////////////////declaration des getter//////////////////////
    public function getNumCours() {return $this->num;}
    public function getType() {return $this->type;}
    public function getHoraireDebut(){return $this->horaireDebut;}
    public function getHoraireFin() {return $this->horaireFin;}
    public function getJour() {return $this->jours;}
  }
 ?>
