<html>
<head>
<title> </title>
</head>
<body>

<?php

// Création du DSN

$dsn = 'mysql:host=localhost;dbname=sos_console;port=3306;charset=utf8';

// Création et test de la connexion

try {
 
$pdo = new PDO($dsn, 'root' , '');

}
catch (PDOException $exception) {
 
 mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
 exit('Erreur de connexion à la base de données');
 
}

// Requête pour tester la connexion


//$query = $pdo->query("SELECT * FROM `appareil`");

//$resultat = $query->fetchAll();

/*

//Afficher le résultat dans un tableau

print("<table border=\"1\">");

foreach ($resultat as $key => $variable)
{
print("<tr>");
print("<td>".$resultat[$key]['name']."</td>");
print("<td>".$resultat[$key]['image']."</td>");
print("<tr>");
}

print("</table>");

/*

?>

</body>
</html>
