<?php 

include 'bdd.php';

// Requête pour tester la connexion

$query = $pdo->query("SELECT * FROM `appareil`");

$resultat = $query->fetchAll();

?>

