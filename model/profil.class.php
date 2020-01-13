<?php
 class Profil {
   //////////////////////declaration des attributs///////////////////
   private $mail;
   private $motdepasse;
   private $coach;
   //////////////////declaration du constructeur//////////////////////
   public function __construct(array $param = array()) {
     foreach ($param as $key => $value) {
         $this->$key = $value;
     }
   }
   //////////////////declaration des getter//////////////////////
   public function getMail() {return $this->mail;}
   public function getMotDePasse() {return $this->motdepasse;}
   public function estCoach() {return $this->coach;}

 }


 ?>
