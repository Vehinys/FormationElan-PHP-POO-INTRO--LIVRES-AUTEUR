<?php 

// Inclure les fichiers contenant les classes

include 'Auteur.php';
include 'Livre.php';

// Fonction d'affichage des livres d'un auteur
function affichage(Auteur $auteur, array $livres) {
    echo "Livres de " . $auteur . " : <br><br>";

    foreach($livres as $livre) {
        if ($livre->getAuteur() == $auteur) {
            echo $livre . "<br>";
        }
    }
}

// Création de l'objet Auteur
$auteur = new Auteur('Stephen', 'King', '11/11/1991');

// Création des objets Livre
$livre1 = new Livre("Ca", 1986, 1138, 20.0, $auteur);
$livre2 = new Livre("Simetierre", 1983, 374, 15.0, $auteur);
$livre3 = new Livre("Le Fléau", 1978, 823, 14.0, $auteur);
$livre4 = new Livre("Shining", 1977, 447, 16.0, $auteur);

// Stocker les livres dans un tableau
$livres = [$livre1, $livre2, $livre3, $livre4];

// Afficher la date de naissance
// echo "Date de naissance: " . $auteur->getDateNaissance();

// Utiliser la fonction d'affichage pour afficher les livres de l'auteur

affichage($auteur, $livres);

