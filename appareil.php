<?php include 'includes/head.php';?>
    <link href="asset/css/phone.css" rel="stylesheet">
    <title>SOS CONSOLES</title>
</head>
<body>
    <?php require('includes/nav-bar.php'); ?>

    <div id="content" class="container">

 <?php require('includes/imageHeader.php')?>

    <main>


        <div id="border-bloc">

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



            
            //$recherche = $_GET['recherche'];

            $request = $pdo->query("SELECT Id_Appareil, nom FROM `Appareil`");

            if(isset($_GET['recherche']) AND !empty($_GET['recherche'])) {
                $recherche = $_GET['recherche'];
                 // query affichage du titre
                $title = $pdo->query('SELECT type_appareil.Id_type , appareil.nom, appelation ,marque FROM `marque` JOIN `Appareil` ON marque.Id_Marque = appareil.Id_Marque JOIN `type_appareil` ON type_appareil.Id_type = marque.id_type WHERE appareil.nom LIKE "%'.$recherche.'%"');

                // excution de la requete

                $title->execute();


                // envoie du resultat

                $ligne = $title->fetch(PDO::FETCH_ASSOC);

                // query appareil

                $queryAppareil = $pdo->query('SELECT Id_appareil ,nom, marque, logo FROM `marque` JOIN `Appareil` ON marque.Id_Marque = appareil.Id_Marque WHERE appareil.nom LIKE "%'.$recherche.'%"');
                $count = $queryAppareil->rowCount();

                // affichage appareil 
                


                $resultatAppareil = $queryAppareil->fetchAll();


                //Afficher le résultat 
            }

            else if(isset($_POST['appareil']) AND !empty($_POST['appareil']) ){
                //$recherche = htmlspecialchars($_POST['recherche']);

                $appareil = $_POST['appareil'];
                // query affichage du titre
                $title = $pdo->query("SELECT type_appareil.Id_type, Id_Appareil, marque, appareil.nom, appelation, logo FROM `marque` JOIN `Appareil` ON marque.Id_Marque = appareil.Id_Marque JOIN `type_appareil` ON type_appareil.Id_type = marque.id_type WHERE appareil.Id_Marque = $appareil");

                // excution de la requete

                $title->execute();


                // envoie du resultat

                $ligne = $title->fetch(PDO::FETCH_ASSOC);

                // query appareil

                $queryAppareil = $pdo->query("SELECT Id_appareil , nom, marque , logo FROM `marque` JOIN `Appareil` ON marque.Id_Marque = appareil.Id_Marque WHERE appareil.Id_Marque = $appareil");
                $count = $queryAppareil->rowCount();

                // affichage appareil 

                $resultatAppareil = $queryAppareil->fetchAll();

                //Afficher le résultat 
            }



            else {

                //ob_start();
                //header('Location: index.php');      
                //exit(); 
                $count = 0;

            }
            
                                    
            ?>

            <p class="text-center playfair title-page display-5"><?php if($count > 0){echo 'Choissez votre ' . mb_strtolower($ligne['appelation']). ' de marque ' .  $ligne['marque'];} else{ echo 'Aucun résultat';} ?></p>
            

            <form class="form-search-page d-flex" method="GET"  action="" >
                <input class="search-bar loupe form-control me-2" name="recherche" type="search" placeholder="Selection un appareil"
                    aria-label="Search">
                <button class="btn btn-search btn-outline-success" name="envoyer" type="submit">Recherchez</button>
            </form>


            <div class="d-flex justify-content-center flex-wrap">


                <form action="piece.php" method="post">

                <?php 

                    if($count > 0 ) {
    
                        foreach ($resultatAppareil as $key => $variable)
                        {?>
                        <figure class="figure">
                            <button type="submit" value="<?php echo($resultatAppareil[$key]['Id_appareil']); ?>" name="appareil">
                            <img id="img-phone-1" class="img" src="images/<?php echo($resultatAppareil[$key]['logo']); ?>" 
                            class="figure-img img-fluid rounded" alt="<?php echo($resultatAppareil[$key]['nom']); ?>"></button>
                            <figcaption id="caption-phone-1" class="figure-caption caption-style"><?php echo($resultatAppareil[$key]['nom']); ?>
                            </figcaption>
                        </figure>  
                        <?php }
                    }
                    else {
                        echo 'Aucun résultat';
                    };
                    ?>
                </form>
            </div> 
            <form action="marque.php" method="post" >
                <div class="d-flex justify-content-end ml-5">      
                    <button class="layfair btn text-end btn-outline-success" name="type" type="submit" value="<?php echo $ligne['Id_type'];?>">
                        <h5 class="">Retournez à la page précédente </h5>
                    </button>
            </div>
            </form>
        </div>
        </main>
    </div>

    <?php require('includes/footer.php'); ?>
</html>