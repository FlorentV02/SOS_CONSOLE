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
                    <div class="circle-in-progess"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                </div>
            </div>

            <p class="text-center playfair title-page display-5">Choisir une marque de console</p>

            <form class="form-search-page d-flex">
                <input class="search-bar loupe form-control me-2" type="search" placeholder="Selection un appareil"
                    aria-label="Search">
                <button class="btn btn-search btn-outline-success" type="submit">Search</button>
            </form>

            <div class="d-flex justify-content-center flex-wrap">

                <?php 
                $mark = $_POST['type']; 
                $query = $pdo->query("
                SELECT Id_Marque, marque, marque.image 
                FROM `Marque` JOIN `Type_appareil`
                ON type_appareil.id_type = marque.Id_type 
                WHERE type_appareil.Id_type = $mark
                ");
                $resultat = $query->fetchAll();
//Afficher le résultat dans un tableau

foreach ($resultat as $key => $variable)
{?>

<form action="console.php" method="post">

    <figure class="figure">
    <button type="submit" value="<?php echo($resultat[$key]['Id_Marque']); ?>" name="appareil"><img id="img-phone-1" class="img" src="asset/images/<?php echo($resultat[$key]['image']); ?>" 
    class="figure-img img-fluid rounded" alt="..."></button>
    <figcaption id="caption-phone-1" class="figure-caption caption-style"><?php echo($resultat[$key]['marque']); ?>
    </figcaption>
    </figure>
</form>

<?php };
?>

            </div>
        </div>


    </section>

    <?php require('includes/footer.php'); ?>
</html>