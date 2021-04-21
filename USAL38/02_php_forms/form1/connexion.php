<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users_simple";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connection sucessful !";
}

