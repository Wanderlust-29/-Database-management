<?php
require '../config/connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['userId'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    
    $query = $db->prepare('UPDATE users SET email = :email, password = :password, first_name = :first_name, last_name = :last_name WHERE id = :user_id');
    
    $parameters = [
        ':email' => $email,
        ':password' => $password,
        ':first_name' => $first_name,
        ':last_name' => $last_name,
        ':user_id' => $user_id,
    ];

    $query->execute($parameters);
    header('Location: ../index.php');
    exit;
}
?>