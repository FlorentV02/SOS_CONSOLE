<?php

// Création du DSN

$dsn = 'mysql:host=localhost;dbname=sos_consoles;port=3306;charset=utf8';

// Création et test de la connexion

try {
 
$pdo = new PDO($dsn, 'root' , '');

}
catch (PDOException $exception) {
 
 //mail('florviev@gmail.com', 'PDOException', $exception->getMessage());
 die('Erreur de connexion à la base de données');
 
}
?>