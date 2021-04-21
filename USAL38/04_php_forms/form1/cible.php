<?php

// ?   username=Mike&password=azerty
// ?   username=Tim&password=sdfghj

require_once 'connexion.php';





echo 'SELECT * FROM users WHERE user_name=\'com1\' ORDER BY user_name;';
echo '<hr>';

$username = $_POST['username'];


/*
$sql = "SELECT * FROM users WHERE user_name='$username' ORDER BY user_name;";

echo $sql;


$result = $conn->query($sql);

$user = $result->fetch_assoc();

if($user) {
    echo $user['user_email'];
}
else {
    echo 'non trouvé';
}


//echo $_POST['username'];



//header('location: index.php?ok=1'); */