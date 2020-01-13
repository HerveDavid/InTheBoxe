<?php
//classe des entrainements personalisés
  class matchPotentiel{
  //////////////////////declaration des attributs///////////////////
  private $boxeurint;
  private $licenceint;
  private $boxeurext;
  private $licenceext;
  private $clubext;
  private $categorie;
  private $datecombat;
  private $lieu;

  //////////////////declaration du constructeur//////////////////////
  public function __construct(array $param = array()) {
    foreach ($param as $key => $value) {
        $this->$key = $value;
    }
  }
  //////////////////autres Methodes//////////////////

  public function getBoxeurInt(){return $this->boxeurint;}
  public function getLicenceInt(){return $this->licenceint;}
  public function getBoxeurExt(){return $this->boxeurext;}
  public function getLicenceExt(){return $this->licenceext;}
  public function getClubExt(){return $this->clubext;}
  public function getCategorie(){return $this->categorie;}
  public function getDateCombat(){return $this->datecombat;}
  public function getLieu(){return $this->lieu;}
  public function getPerdant(){return $adherent->getPerdant;}
  }

  }

?>
