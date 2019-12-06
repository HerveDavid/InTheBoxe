
<?php
  class Prof{
    private $numprof;
    private $nomprof;
    private $prenomprof;

    public function __construct(array $param = array()) {
      $i = 0;
      foreach ($this as $key => $value) {
        if ($i < count($param)) {
          $this->$key = $param[$i++];
        }
      }
    }
    public function getNumProf(): INTEGER {return $this->numprof;}
    public function getNomProf(): string {return $this->nomprof;}
    public function getPrenomProf(): string {return $this->prenomptof;}
  }
?>
