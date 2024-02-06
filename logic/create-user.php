<?php
include 'hash_password.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];

    $hashedPassword = hashPassword($password);

    $query = $db->prepare('INSERT INTO users (email, password, first_name, last_name) VALUES (:email, :password, :first_name, :last_name)');
    $parameters = [
        ':email' => $email,
        ':password' => $hashedPassword,
        ':first_name' => $first_name,
        ':last_name' => $last_name
    ];

    $query->execute($parameters);
    header('Location: ../index.php');
    exit;
}
?>
