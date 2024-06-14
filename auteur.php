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




