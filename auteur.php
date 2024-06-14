<?php

class Auteur{

    private $prenom;
    private $nom;

    public function __construct($prenom,$nom) {

        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function __toString() {
        return  "{$this-> prenom} {$this->nom} : <br><br>" ;
    }
}

class Livres{

    private $titre;
    private $anneeParution;
    private $nbPage;
    private $prix;
    private $auteur;

    public function __construct($titre, $anneeParution, $nbPage, $prix, $auteur) {

        $this-> titre = $titre;
        $this-> anneeParution = $anneeParution;
        $this-> nbPage = $nbPage;
        $this-> prix = $prix;
        $this-> auteur = $auteur;
    }

    public function __toString() {
        return  " {$this-> titre} ({$this-> anneeParution}) : {$this-> nbPage} pages / {$this-> prix} €";
    }

    public function getAuteur() {
        return $this->auteur;
    }

}

class Bibliographie{

    private $livres;
    private $auteur;

    public function __construct($auteur) {

        $this-> auteur = $auteur;
        $this-> livres = [];
    }    

    public function ajouterLivre($livre) {

        if ($livre-> getAuteur() == $this-> auteur) {
            $this ->livres[] = $livre;
        }
    }

    public function afficherBibliographie() {
        echo ' Livres de ' . $this-> auteur ." ";
        foreach ($this -> livres as $livre) {
            echo $livre . "<br>";
        }
    }
}

$auteur = new Auteur('stephen','king');
$Biblio = new Bibliographie($auteur);

$Livres = [ 
$Livres =   new Livres("Ca","1986","1138","20",$auteur),    
$Livres =   new Livres("Simetierre","1983","374","15",$auteur),
$Livres =   new Livres("Le Fléau","1978","823","14",$auteur),
$Livres =   new Livres("Shinning","1977","447","16",$auteur) ];

foreach ($Livres as $livre) {
    $Biblio  -> ajouterLivre($livre);
}

$Biblio -> afficherBibliographie();

