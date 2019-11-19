<?php
// Classe minimaliste pour normaliser l'usage d'une vue
// Impose que l'acces aux données de la vue se fassent par $this
class View {
  private $path=""; // Chemin vers le fichier de la vue

  // Constructeur d'une vue
  function __construct(string $path="") {
    $this->path = $path;
  }
  // Pour rendre plus joli le lancement de la vue
  function show(string $path="") {
    // prend l'attribut si le paramètre est vide
    $p = $path ? $path : $this->path;
    // Regarde si le chemin est relatif
    if ($p[0] != '.') {
      // Ajoute le chemin relatif
      $p = "../view/".$p;
    }
    // Comme l'inclusion est dans le contexte de l'instance
    // il faut utiliser $this pour acceder aux attributs
    // Toute autre variable est invisible
    include($p);
  }
}


 ?>
