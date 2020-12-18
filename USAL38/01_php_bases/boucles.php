<?php 

$a = 1;

/**
 * TANT QUE $a est inférieur à 10
 */
while($a <= 10) 
{
    echo $a . "\n";
    $a++;
}

echo "FIN WHILE \n";

$a = 1;

/**
 * Faire (au moins une fois) ....
 */
do 
{
    echo $a . "\n";
    $a++;
}
while($a <= 10); // tant que la condition est vraie, on recommence...

echo "FIN DO..WHILE \n";


$a = ['a','b','c'];



$a = [
    0 => 'Mike', 
    1 => 'Jon', 
    2 => 'Leo',
    3 => 'aaa',
    4 => 'bbb',
    5 => 'Cindy'
];


$i = 0; // création d'une variable qui servira de "compteur"

$nbElements = count($a); // count() retourne le nompbre d'éléments dans la tableau fourni en argument. JS = a.length

/**
 * TANT QUE $i EST INFERIEUR à $nbElements
 */
while($i < $nbElements) 
{
    echo $a[$i] . "\n"; // affiche l'élément du tableau $a se trouvant à la position $i
    $i++; // incrémentation de $i;
}

