
<?php 

class Livre {

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
    $this-> livres = [];

}

public function __toString() {
    return  " {$this-> titre} ({$this-> anneeParution}) : {$this-> nbPage} pages / {$this-> prix} €";
}

public function getAuteur() {
    return $this->auteur;
}

public function ajouterLivre() {

    if ($livre-> getAuteur() == $this-> auteur) {
        $this ->livre[] = $livre;
    }

}
}