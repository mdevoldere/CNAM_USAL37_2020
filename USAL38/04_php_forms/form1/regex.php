<?php 

// Expressions régulières
// Regular Expression
// REGEX
// début de chaine = ^
// fin de chaine = $
// [] = plage de caractères
// + = 1 ou plusieurs
// * 0 ou plusieurs

$name = "DEVOLDERE";

$pattern = '/^[a-zA-ZéèÈÉ]+$/';

if(!preg_match($pattern, $name)) {
    exit('format de $name incorrect');
}



$username = "             Dark_Shadow68           ";

$username = trim($username); // supprime les espaces en début et fin de chaine

$pattern = '/^[a-zA-Z0-9_ ]+$/';

if(!preg_match($pattern, $username)) {
    exit('format de $username incorrect');
}




$age = '40';

$age = intval($age); // convertit en nombre entier

if($age < 1) {
    exit('format de $age incorrect');
}


$price = 32.49;

$price = floatval($price); // convertit en nombre flottant (décimal)

if($price < 0.01) {
    exit('format de $price incorrect');
}




$email = "email42-ha_ha.mon+domaine@example.com";

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('format de $email incorrect');
}


$date = '2021-02-26'; // DATE

try 
{
    $date = new DateTime($date);
} 
catch (Exception $e)
{
    exit('format de $date incorrect: ' . $e->getMessage());
}



echo 'ok';

















