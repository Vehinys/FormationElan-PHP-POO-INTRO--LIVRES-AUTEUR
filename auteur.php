<?php

class Auteur {

    private string $prenom;
    private string $nom;
    private dateTime $dateNaissance;
    private array $livres;
// creation d'une propriété livreS qui sera un tableau 

    public function __construct(string $prenom, string $nom, string $dateNaissance) {

        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new dateTime($dateNaissance);
        $this->livres = [];
        // le tableau de livres est vide lors de la creation d'un objet auteur
    }

         //fonction personnalisé ajouté livre qui permettra de rajouté objet livre dans le tableau de livres de l'auteur

    public function ajouterLivre(Livre $livre) {
            $this->livres[] = $livre;
        }

    public function afficherBibliographie() {

            echo "Livres de " . $this . " : <br><br>";
            foreach ($this->livres as $livre) {
                echo $livre . "<br>";
            }
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

    public function getLivres(){
        return $this->livres;
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

    public function setLivres(){
        $this->livres;
    }

    // TO STRING

    public function __toString() {
        return $this-> prenom.' '. $this->nom;
    }        
}