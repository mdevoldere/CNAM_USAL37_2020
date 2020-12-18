<?php 

namespace Vehicules;


class Voiture 
{
    public $marque = "Peugeot";

}  // fin de la classe Voiture  


$v1 = new Voiture();

echo $v1->marque;

echo "\n";

$v2 = new Voiture();

echo $v2->marque;

$v1->marque = "Citroën";

echo "\n";
echo $v1->marque;
echo "\n";
echo $v2->marque;
