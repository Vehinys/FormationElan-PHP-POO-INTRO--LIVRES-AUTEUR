<?php 

// Inclure les fichiers contenant les classes

include 'Auteur.php';
include 'Livre.php';

// Création de l'objet Auteur

$auteur = new Auteur('Stephen', 'King', '11/11/1991');

// Création des objets Livre

$livre1 = new Livre("Ca", 1986, 1138, 20.0, $auteur);
$livre2 = new Livre("Simetierre", 1983, 374, 15.0, $auteur);
$livre3 = new Livre("Le Fléau", 1978, 823, 14.0, $auteur);
$livre4 = new Livre("Shining", 1977, 447, 16.0, $auteur);

// Stocker les livres dans un tableau

$livre = [$livre1, $livre2, $livre3, $livre4];

// Afficher la date de naissance

// echo "Date de naissance: " . $auteur->getDateNaissance();

// var_dump($auteur);

$auteur->afficherBibliographie();

