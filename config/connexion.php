<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "ryanroudaut_prenomnom_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "ryanroudaut";
$password = "d5eb7817da268ddd4f55484fc69f8474";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

