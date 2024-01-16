<?php
require '../config/connexion.php';
if (isset($_GET['id'])) {
	$query = $db->prepare('DELETE FROM users WHERE id = :id');
	$parameters = [
    'id' => $_GET['id']
	];
	$query->execute($parameters);
	header('Location: ../index.php');
    exit;
}
?>
