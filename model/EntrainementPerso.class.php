<?php
//classe des entrainements personalisés
class entrainementPerso{

  private $numlicence;
  private $numentrainement;
  private $nomexercice;
  private $nbrep;

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

  public function getNumLicense():INTEGER{return $this->numlicence;}
  public function getNumEntrainement():INTEGER{return $this->numentrainement;}
  public function getNomExercice():string{return $this->nomexercice;}
  public function getNbRep():INTEGER{return $this->nbrep;}

  public function setNumLicence(int $numlic):void{
    $this->numlicence=$numlic;
  }

  public function setNumEntrainement(int $nument):void{
    $this->numentrainement=$nument;
  }

  public function setExercice(string $exercice): void{
    $this->nomexercice=$exercice;
  }
  public function setNbRep(string $rep): void{
    $this->nbrep=$rep;

  }

?>
