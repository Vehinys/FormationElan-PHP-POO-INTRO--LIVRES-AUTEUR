<?php 

class Livre {

    private string $titre;
    private int $anneeParution;
    private int $nbPage;
    private float $prix;
    private Auteur $auteur;
    
public function __construct(string $titre, int $anneeParution, int $nbPage, float $prix, Auteur $auteur) {
        
    $this-> titre         = $titre;
    $this-> anneeParution = $anneeParution;
    $this-> nbPage        = $nbPage;
    $this-> prix          = $prix;
    $this-> auteur        = $auteur;
    $auteur -> ajouterLivre($this);
  }

// GET 

public function getTitre(){
    return $this->titre;
}

public function GetAnneeParution(){
    return $this->anneeParution;
}

public function GetNbPage(){
  return $this->nbPage;
}

public function GetPrix(){
  return $this->prix;
}

public function getAuteur() {
    return $this->auteur;
}

// SET

public function setTitre(){
  $this->titre;
}

public function setAnneeParution(){
  $this->anneeParution;
}

public function setNbPage(){
  $this->nbPage;
}

public function setPrix(){
  $this->prix;
}

public function setAuteur(){
  $this->auteur;
}

// TO STRING

public function __toString() {
  return $this-> titre . "(".$this-> anneeParution.") : ". $this-> nbPage ." pages / ". $this-> prix ." €";
}
}