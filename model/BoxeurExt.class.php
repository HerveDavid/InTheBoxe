<?php
//classe des entrainements personalisés
class boxeurExt{

}
private $licence;
private $nom;
private $datenaiss;
private $categorie;
private $statut;
private $victoire;
private $defaite;
private $nul;


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
public function getLicence():INTEGER{return $this->licence;}
public function getNom():string{return $this->nom;}
public function getDateNaiss():date{return $this->datenaiss;}
public function getCategorie():string{return $this->categorie;}
public function getStatut():string{return $this->statut;}
public function getVictoire():INTEGER{return $this->victoire;}
public function getDefaite():INTEGER{return $this->defaite;}
public function getNul():INTEGER{return $this->nul;}
}
?>
