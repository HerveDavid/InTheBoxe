<?php
 class Profil {
   private $mail;
   private $motdepasse;
   private $coach;

   public function __construct(array $param = array()) {
     foreach ($param as $key => $value) {
         $this->$key = $value;
     }
   }
   public function getMail() {return $this->mail;}
   public function getMotDePasse() {return $this->motdepasse;}
   public function estCoach() {return $this->coach;}

 }


 ?>
