<?php
//classe des adhérents
abstract class Adherent {
  //////////////////////declaration des attributs///////////////////
  protected $nom;
  protected $prenom;
  protected $datenaiss;
  protected $taille;
  protected $poids;
  protected $genre;
  protected $categorie;
  protected $licence;
  protected $victoire;
  protected $defaite;
  protected $nul;

  // public function __construct(array $param = array()) {
  //     $i = 0;
  //     foreach ($this as $key => $value) {
  //       if ($i < count($param)) {
  //         $this->$key = $param[$i++];
  //       }
  //     }
  //   }

  //////////////////declaration des getter//////////////////////
  public function getLicence(): INTEGER {return $this->licence;}
  public function getNom(): string {return $this->nom;}
  public function getPrenom(): string {return $this->prenom;}
  public function getDateNaiss() {return $this->datenaiss;}
  public function getTaille(): float {return $this->taille;}
  public function getPoids(): INTEGER {return $this->poids;}
  public function getCategorie(): string {return $this->categorie;}
  public function getTel() {return $this->tel;}
  public function getVictoire(): INTEGER {return $this->victoire;}
  public function getDefaite(): INTEGER {return $this->defaite;}
  public function getNul(): INTEGER {return $this->nul;}
  //////////////////autres Methodes//////////////////
  public function getPalmares():string{return "Adherent : '$this->getNom()' '$this->getPrenom()' Nombre de victoire : '$this->getVictoire()' Nombre de match nul : '$this->getNul' Nombre de défaite : '$this->getDefaite' ";}

}
class AdherentClub extends Adherent {
  private $mail;
  private $motdepasse;
  private $adresse;
  private $tel;
  private $statut;
  private $combattant;
  private $certificat;
  private $apayer;

  public function __construct(array $param = array()) {
      $i = 0;
      var_dump($GLOBALS[$this->mail]);
      foreach ($this as $key => $value) {
        if ($i < count($param)) {
          $this->$key = $param[$i++];
        }
      }
    }

  public function getMotDePasse():string{return $this->motdepasse;}
  public function getStatut(): string {return $this->statut;}
  public function getCombattant(): string {return $this->combattant;}
  public function getCertificat(): string {return $this->certificat;}
  public function getMail(): string {return $this->mail;}
  public function getAdresse() {return $this->adresse;}
  public function getApayer(): float {return $this->apayer;}
  public function getTel() {return $this->tel;}
}
class AdherentExterieur extends Adherent{

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
  }
 ?>
