<?php include 'includes/head.php';?>
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

        <div id="phone-block">

            <div>
                <div class="d-flex align-items-center justify-content-center mx-2">
                    <div class="circle-in-validate"> </div>
                    <div class="trait-validate"></div>
                    <div class="circle-in-progess"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                </div>
            </div>

            <?php 
            
            // Récupération des données du formulaire
            
            $appareil = $_POST['appareil']; 
            
            // query affichage du titre
            $title = $pdo->query("SELECT Id_Appareil, marque, appelation FROM `marque` JOIN `Appareil` ON marque.Id_Marque = appareil.Id_Marque JOIN `type_appareil` ON type_appareil.Id_type = marque.id_type WHERE appareil.Id_Marque = $appareil");

            // excution de la requete

            $title->execute();


            // envoie du resultat

            $ligne = $title->fetch(PDO::FETCH_ASSOC);

            // query appareil

            $query = $pdo->query("SELECT Id_appareil ,nom, marque ,image_presentation FROM `marque` JOIN `Appareil` ON marque.Id_Marque = appareil.Id_Marque WHERE appareil.Id_Marque = $appareil");

            // affichage appareil 

            $resultat = $query->fetchAll();

            //Afficher le résultat 
                        
            ?>

            <p class="text-center playfair title-page display-5"><?php echo 'Choissez votre ' . strtolower($ligne['appelation']). ' de marque ' .  $ligne['marque'];  ?></p>
            

            <form class="form-search-page d-flex" method="GET" name="recherche" action="" >
                <input class="search-bar loupe form-control me-2" type="search" placeholder="Selection un appareil"
                    aria-label="Search">
                <button class="btn btn-search btn-outline-success" type="submit">Search</button>
            </form>

            <div class="d-flex justify-content-center flex-wrap">

<form action="piece.php" method="post">

<?php foreach ($resultat as $key => $variable)
{?>
    <figure class="figure">
    <button type="submit" value="<?php echo($resultat[$key]['Id_appareil']); ?>" name="appareil">
    <img id="img-phone-1" class="img" src="asset/images/<?php echo($resultat[$key]['image_presentation']); ?>" 
    class="figure-img img-fluid rounded" alt="<?php echo($resultat[$key]['nom']); ?>"></button>
    <figcaption id="caption-phone-1" class="figure-caption caption-style"><?php echo($resultat[$key]['nom']); ?>
    </figcaption>
    </figure>
<?php };?>
</form>


            </div>
        </div>


    </section>

    <?php require('includes/footer.php'); ?>
</html>