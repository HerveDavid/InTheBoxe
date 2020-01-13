<?php
  class Match{
  //////////////////////declaration des attributs///////////////////
  private $mailBoxeurInt;
  private $boxeurExt;
  private $clubExt;
  private $datecombat;
  private $lieu;

  //////////////////declaration du constructeur//////////////////////
  public function __construct(array $param = array()) {
    foreach ($param as $key => $value) {
        $this->$key = $value;
    }
  }
  //////////////////declaration des getter//////////////////////
  public function getMailBoxeurInt(){return $this->mailBoxeurInt;}
  public function getBoxeurExt(){return $this->boxeurExt;}
  public function getClubExt(){return $this->clubExt;}
  public function getDateCombat(){return $this->datecombat;}
  public function getLieu(){return $this->lieu;}
  }

?>
