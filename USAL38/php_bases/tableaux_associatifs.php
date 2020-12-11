<?php 

$pays = [
    'France'     => 'Paris',
    'Belgique'   => 'Bruxelles',
];

var_export($pays);
echo "\n";

$pays_inverse = array_flip($pays);

var_export($pays_inverse);


exit;

$nom_pays = 'France';

$capitale = $pays[$nom_pays];

echo $capitale;


echo $pays_inverse[$capitale];



