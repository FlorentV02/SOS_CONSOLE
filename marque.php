<?php include 'includes/head.php';

if(isset($_GET['recherche']) AND !empty($_GET['recherche'])) {
    $recherche = $_GET['recherche'];
     // query affichage du titre
    $title = $pdo->query('SELECT type_appareil.appelation , marque.marque FROM `marque` JOIN `type_appareil` ON type_appareil.Id_type = marque.id_type WHERE marque.marque LIKE "%'.$recherche.'%"');

    // excution de la requete

    $title->execute();


    // envoie du resultat

    $ligne = $title->fetch(PDO::FETCH_ASSOC);

    // query affichage marque

    $query = $pdo->query('SELECT Id_Marque , marque ,marque.image FROM `marque` WHERE marque.marque LIKE "%'.$recherche.'%"');
    $count = $query->rowCount();

    // affichage appareil 
    

    $resultat = $query->fetchAll();


    //Afficher le résultat 
}

// récupération de l'ID appareil


    else if(isset($_POST['type']) AND !empty($_POST['type'])){

    $IdAppareil = $_POST['type']; 
    
    $title = $pdo->query("SELECT Type_appareil.appelation FROM `Type_appareil` WHERE Type_appareil.Id_type = $IdAppareil");

    $title->execute();

    $ligne = $title->fetch(PDO::FETCH_ASSOC);

    $query = $pdo->query("SELECT Id_Marque, marque, marque.image 
    FROM `Marque` JOIN `Type_appareil`
    ON type_appareil.id_type = marque.Id_type 
    WHERE type_appareil.Id_type = $IdAppareil
    ");
        $count = $query->rowCount();
        $resultat = $query->fetchAll();
    }

    else {

        $count = 0;
    }


    ?>

    <link href="asset/css/phone.css" rel="stylesheet">
    <title>SOS CONSOLES</title>
</head>
<body>
    <?php require('includes/nav-bar.php'); ?>

    <section id="content" class="container">
        <div id="header" class="text-center">
            <div id="background-entete" class="playfair position-relative">
                <div id="entete-text" class="playfair">
                    <h2 class="text-48 text-shadow">Reparation de console et de smartephone</h2>
                    <span class="text-36 text-shadow">Phrase d'accroche à déterminer</span>
                </div>
            </div>
        </div>

        <div id="border-bloc">

            <div>
                <div class="d-flex align-items-center justify-content-center mx-2">
                    <div class="circle-in-progess"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                </div>
            </div>

            <p class="text-center playfair title-page display-5"><?php if($count > 0){echo 'Choisez une marque de '.mb_strtolower($ligne['appelation'], 'UTF-8');} else{ echo 'Aucun résultat';} ?></p>

            <form class="form-search-page d-flex" method="GET"  action="" >
                <input class="search-bar loupe form-control me-2" name="recherche" type="search" placeholder="Selection un appareil"
                    aria-label="Search">
                <button class="btn btn-search btn-outline-success" name="envoyer" type="submit">Search</button>
            </form>
            <div class="d-flex justify-content-center flex-wrap">

                <?php  
            //Afficher le résultat dans un tableau
            if($count > 0 ) {
                foreach ($resultat as $key => $variable)
                {?>

<form action="appareil.php" method="post">

    <figure class="figure">
    <button type="submit" value="<?php echo($resultat[$key]['Id_Marque']); ?>" name="appareil"><img class="img" src="images/<?php echo($resultat[$key]['image']); ?>" 
    class="figure-img img-fluid rounded" alt="<?php echo($resultat[$key]['marque']); ?>"></button>
    <figcaption id="caption-phone-1" class="figure-caption caption-style"><?php echo($resultat[$key]['marque']); ?>
    </figcaption>
    </figure>
</form>
    <?php 
                };
            }
        else{
            echo 'Aucun résultat';
        }?>
            </div>
        </div>


    </section>

    <?php require('includes/footer.php'); ?>
</html>