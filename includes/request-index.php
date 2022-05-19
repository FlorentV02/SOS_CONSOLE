<?php 

include 'bdd.php';

// Requête pour tester la connexion


// Affichage News 

$queryNews = $pdo->query("SELECT * FROM `Bloc_news`");

$queryNews->execute();


// envoie du resultat

$News = $queryNews->fetch(PDO::FETCH_ASSOC);

//  Affichage Appareil 

$query = $pdo->query("SELECT * FROM `appareil`");

$resultat = $query->fetchAll();

?>

