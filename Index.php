<?php 

include 'Auteur.php';
include 'Livre.php';

function affichage($auteur,$livres) {

    echo " Livres de " .$auteur;

    foreach($livres as $livre) {
         if($livre->getAuteur() == $auteur) {
         echo $livre;
        }
    }
}




$auteur = new auteur('Stephen','King','11/11/1991');


$livre1 = new Livre("Ca","1986","1138","20",$auteur);
$livre2 = new Livre("Simetierre","1983","374","15",$auteur);
$livre3 = new Livre("Le Fléau","1978","823","14",$auteur);
$livre4 = new Livre("Shinning","1977","447","16",$auteur);



affichage($auteur,$livre);


// DATE DE NAISSANCE AFFICHAGE 
// echo $auteur->getDateNaissance();
