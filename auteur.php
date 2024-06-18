<?php

class Auteur {                                                                         // Déclare une nouvelle class avec ses propriétés

    private string $prenom;                                                            // la propriété $prénom [String] est uniquement accessible depuis la class où il est déclaré.
    private string $nom;                                                               // L'élément privé $nom    [String] est uniquement accessible depuis la class où il est déclaré.
    private dateTime $dateNaissance;                                                   // L'élément privé $dateNaissance   [String] est uniquement accessible depuis la class où il est déclaré.
    private array $livres;                                                             // creation d'une propriété livres qui sera un tableau 

    public function __construct(string $prenom, string $nom, string $dateNaissance) {  // Une fonction qui déclare un contructeur public pour une class qui prend en compte trois parametres.
        $this->prenom = $prenom;                                                       // $prenom est affecté à la variable prenom de $this = (Objet courant).
        $this->nom = $nom;                                                             // $prenom est affecté à la variable prenom de $this = (Objet courant).
        $this->dateNaissance = new dateTime($dateNaissance);                           // Ca récrée une nouvelle instance [DateTime] en utilisant la valeur $dateNaissance pour assigné à la propriété $dateNaissance de l'objet $this = (Objet courant).
        $this->livres = [];                                                            // Le tableau de livres est vide lors de la creation d'un objet auteur
    }

    // FUNCTION                                                                        // Un bloc de code réutilisable qui effectue une instruction specifique.

    public function ajouterLivre(Livre $livre) {                                       // Fonction AjouterLivre.
            $this->livres[] = $livre;                                                  // Cette instruction ajoute la valeur de la variable $livre à la fin du tableau livres de $this = (Objet courant).
    }

    public function afficherBibliographie() {                                          // Fonction afficherBibliographie.
            echo "Livres de " . $this . " : <br><br>";                                 // Afficher " Livres de " : "$this = (Objet courant)"  => Auteur.
        foreach ($this->livres as $livre) {                                            // Tableau qui affiche les differents livre de l'auteur.
            echo $livre . "<br>";                                                      
        }
    }

    // GET                                                                             // Une méthode (GET) qui permet de recuperer un attribut de l'objet instancié. 

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDateNaissance() {                      
        return $dateNaissance = date_format($this->dateNaissance,"d/m/Y");             //Ca récrée une nouvelle instance [DateTime] en utilisant la valeur $dateNaissance pour assigné à la propriété $dateNaissance de l'objet $this = (Objet courant).
    }

    public function getLivres() {
        return $this->livres;
    }

    // SET // Un mutateur (SET) est une méthode qui permettra la modification d'un attribut.

    public function setPrenom() {
               $this->prenom;
    }

    public function setNom() {
               $this->nom;
    }

    public function setDateNaissance() {
        $this->dateNaissance;
    }

    public function setLivres() {
        $this->livres;
    }

    // TO STRING

    public function __toString() {
        return $this-> prenom.' '. $this->nom;
    }        
}