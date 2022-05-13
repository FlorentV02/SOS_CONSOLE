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

            <p class="text-center playfair title-page display-4">Choisir une marque de console</p>

            <form class="form-search-page d-flex">
                <input class="search-bar loupe form-control me-2" type="search" placeholder="Selection un appareil"
                    aria-label="Search">
                <button class="btn btn-search btn-outline-success" type="submit">Search</button>
            </form>

            <div class="d-flex justify-content-center flex-wrap">

                <?php 
$query = $pdo->query("SELECT * FROM `marque_console`");

$resultat = $query->fetchAll();

//Afficher le résultat dans un tableau

foreach ($resultat as $key => $variable)
{
  print('<figure class="figure">');
  print(' <a href="piece.html"><img id="img-phone-1" class="img" src="asset/images/'.$resultat[$key]['image'].'" 
  class="figure-img img-fluid rounded" alt="..."></a>
  ');
  print(' <figcaption id="caption-phone-1" class="figure-caption caption-style">'.$resultat[$key]['name'].'
  </figcaption>
  ');
  print("</figure>
  ");

}

?>

            </div>
        </div>


    </section>

    <?php require('includes/footer.php'); ?>
</html>