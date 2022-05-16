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
                <div class="d-flex align-items-center justify-content-center">
                    <div class="circle-in-progess"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                    <div class="trait-empty"></div>
                    <div class="circle-empty"></div>
                </div>
            </div>

            <?php 
            
            
            //echo(($_POST['console']));
            $test = $_POST['console']; 
            echo($test);?>

            


            <p class="text-center playfair title-page display-4">Choisir une marque de console</p>

            <form class="form-search-page d-flex">
                <input class="search-bar loupe form-control me-2" type="search" placeholder="Selection un appareil"
                    aria-label="Search">
                <button class="btn btn-search btn-outline-success" type="submit">Search</button>
            </form>

            <div class="d-flex justify-content-center flex-wrap">

                <?php 

function list_tables()
{
    $sql = 'SHOW TABLES';
    if($this->is_connected)
    {
        $table = $this->pdo->query($sql);
        return $table->fetchAll(PDO::FETCH_COLUMN);

    }
    return FALSE;
}


$query = $pdo->query("SELECT `name`, `mark` , `image_presentation` FROM `marque_console` JOIN `nintendo_switch` ON marque_console.Id_Marque_Console = nintendo_switch.Marque_Console_id WHERE `Marque_Console_id` = "echo($test);"");
$query->bind_param($test);

$resultat = $query->fetchAll();

//Afficher le résultat dans un tableau

foreach ($resultat as $key => $variable)
{?>
    <figure class="figure">
    <a href="piece.php"><img id="img-phone-1" class="img" src="asset/images/<?php echo($resultat[$key]['image_presentation']); ?>" 
    class="figure-img img-fluid rounded" alt="..."></a>
    <figcaption id="caption-phone-1" class="figure-caption caption-style"><?php echo($resultat[$key]['mark']. ' ' . $resultat[$key]['name']); ?>
    </figcaption>
    </figure>``
<?php };?>


            </div>
        </div>


    </section>

    <?php require('includes/footer.php'); ?>
</html>