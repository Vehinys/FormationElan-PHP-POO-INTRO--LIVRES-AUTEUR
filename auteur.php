<?php

class Auteur {

    private string $prenom;
    private string $nom;
    private dateTime $dateNaissance;


    public function __construct(string $prenom, string $nom, string $dateNaissance) {

        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new dateTime($dateNaissance);
    }


    // GET 

    public function getPrenom(){
        return $this->prenom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getDateNaissance(){
        return $dateNaissance = date_format($this->dateNaissance,"d/m/Y");
    }

    // SET

    public function setPrenom(){
               $this->prenom;
    }

    public function setNom(){
               $this->nom;
    }

    public function setDateNaissance(){
        $this->dateNaissance;
    }

    // TO STRING

    public function __toString() {
        return $this-> prenom.' '. $this->nom;
    }        
}

 