<?php
//classe des entrainements personalisés
class matchPotentiel{

}
private $boxeurint;
private $licenceint;
private $boxeurext;
private $licenceext;
private $clubext;
private $categorie;
private $datecombat;
private $lieu;


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
public function getBoxeurInt():string{return $this->boxeurint;}
public function getLicenceInt():INTEGER{return $this->licenceint;}
public function getBoxeurExt():string{return $this->boxeurext;}
public function getLicenceExt():INTEGER{return $this->licenceext;}
public function getClubExt():string{return $this->clubext;}
public function getCategorie():string{return $this->categorie;}
public function getDateCombat():date{return $this->datecombat;}
public function getLieu():string{return $this->lieu;}
}
?>
