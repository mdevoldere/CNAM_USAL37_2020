<?php 
require_once 'Voiture.php';





$v1 = new Voiture('Renault', 'Megane');

$v2 = new Voiture('Peugeot', '3008');

$v1->set_marque("Opel");

$v1->afficherVoiture();

$v2->afficherVoiture();



