<?php

//classe des adhérents
class Adherent {

  private $mail;
  private $nom;
  private $prenom;
  private $datenaiss;
  private $taille;
  private $poids;
  private $genre;
  private $statut;
  private $categorie;
  private $combattant;
  private $certifivat;
  private $licence;
  private $adresse;
  private $apayer;
  private $tel;
  private $victoire;
  private $defaite
  private $nul;
  private $motdepasse;
  private $id;

public function __construct(array $param = array()) {
    $i = 0;
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

public function getLicence(): INTEGER {return $this->licence;}
public function getNom(): string {return $this->nom;}
public function getPrenom(): string {return $this->prenom;}
public function getDateNaiss(): date {return $this->datenaiss;}
public function getTaille(): float {return $this->taille;}
public function getPoids(): INTEGER {return $this->poids;}
public function getStatut(): string {return $this->statut;}
public function getCategorie(): string {return $this->categorie;}
public function getCombattant(): string {return $this->combattant;}
public function getCertificat(): string {return $this->certificat;}
public function getMail(): string {return $this->mail;}
public function getAdresse(): string {return $this->adhérents;}
public function getApayer(): float {return $this->apayer;}
public function getTel(): string {return $this->tel;}
public function getVictoire(): INTEGER {return $this->victoire;}
public function getDefaite(): INTEGER {return $this->defaite;}
public function getNul(): INTEGER {return $this->nul;}
public function getMdp(): string {return $this->$motdepasse;}
public function getId(): string {return $this->id;}











}
 ?>
