<?php

  class Actualite{
    private $nom;
    private $type;
    private $dateAct;
    private $description;
    private $coach;

    public function __construct(array $param = array()) {
      foreach ($param as $key => $value) {
          $this->$key = $value;
      }
    }

    public function getNom() {return $this->nom;}
    public function getType() {return $this->type;}
    public function getDate(){return $this->dateAct;}
    public function getDescription() {return $this->description;}
    public function getCoach(){return $this->coach;}
    ////////////////////////////////////////////////////
    public function getDateTexte(){
      $date = $this->dateAct;
      $jour = date("d",strtotime($date));
      $mois = $this->getMois(date("m",strtotime($date)));
      $annee = date("Y",strtotime($date));
      return   "$jour $mois $annee";
    }
    public function getMois($mois){
    if ($mois==1) {
      return "Janvier";
    }elseif ($mois==2) {
      return "Février";
    }elseif ($mois==3) {
      return "Mars";
    }elseif ($mois==4) {
      return "Avril";
    }elseif ($mois==5) {
      return "Mai";
    }elseif ($mois==6) {
      return "Juin";
    }elseif ($mois==7) {
      return "Juillet";
    }elseif ($mois==8) {
      return "Août";
    }elseif ($mois==9) {
      return "Septembre";
    }elseif ($mois==10) {
      return "Octobre";
    }elseif ($mois==11) {
      return "Novembre";
    }elseif ($mois==12) {
      return "Décembre";
    }else {
      return "mois inconnue";
    }


    }

  }
 ?>
