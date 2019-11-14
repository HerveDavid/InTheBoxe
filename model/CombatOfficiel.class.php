<?php
//classe des Combats Officiels
class CombatOfficiel{

}
private $licenceint;
private $licenceext;
private $dateprevue;
private $horaire;

public function __construct(array $param = array()) {
  //
  // Position dans le tableau $param
  $i = 0;
  // Passe tout les attributs en revue
  foreach ($this as $key => $value) {
    if ($i < count($param)) {
      $this->$key = $param[$i++];
    }
  }
}
public function getLicenceInt():INTEGER{return $this->licenceint;}
public function getLicenceExt():INTEGER{return $this->licenceext;}
public function getDatePrevue():date{return $this->dateprevue;}
public function getHoraire():INTEGER{return $this->horaire;}
}
?>
