<?php 
// Déclaration d'un tableau associatif
$pays = [
    'France'     => 'Paris',
    'Belgique'   => 'Bruxelles',
];


var_export($pays); // export de la variable vers l'affichage

echo "\n"; // saut de ligne dans la console

$pays_inverse = array_flip($pays); // inversion des clés et des valeurs du tableau $pays

var_export($pays_inverse); // export de la variable vers l'affichage


exit; // fin du script (la suite ne sera JAMAIS exécutée)


$nom_pays = 'France';

$capitale = $pays[$nom_pays]; // on accède à $pays['France']

echo $capitale; // affichage de la capitale


echo $pays_inverse[$capitale]; // affichage du pays correspondant à la capitale



