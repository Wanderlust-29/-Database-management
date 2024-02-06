<?php

require('../config/connexion.php');


function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

$query = $db->prepare('SELECT id, password FROM users');
$query->execute();
$users = $query->fetchAll();

foreach ($users as $user) {

    $hashedPassword = hashPassword($user['password']);

    $updateQuery = $db->prepare('UPDATE users SET password = :hashedPassword WHERE id = :userId');
    $updateQuery->bindParam(':hashedPassword', $hashedPassword);
    $updateQuery->bindParam(':userId', $user['id']);
    $updateQuery->execute();
}

?>
