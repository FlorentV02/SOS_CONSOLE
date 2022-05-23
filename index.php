<!DOCTYPE html>
<html lang="fr">
<?php require('includes/head.php');
      require('includes/request-index.php')?>
<link href="asset/css/accueil.css" rel="stylesheet">
<title>SOS CONSOLES</title>

</head>
  <body>
<?php require('includes/nav-bar.php'); ?>

    <section id="content" class="container">
      <div id ="header" class="text-center">
        <div id ="background-entete" class="playfair position-relative">
          <div id="entete-text" class="playfair">
            <h2 class="display-2 text-shadow">Reparation de console et de smartephone</h2>
            <span class="display-6 text-shadow">Phrase d'accroche à déterminer</span>
          </div> 
        </div>
      </div>
      
      <div id ="new" class="playfair py-4 px-4">
        <p class="font-weight-bold text-center display-6"><?php echo $News['titre']; ?></p>
        <p class='text-center font-weight-bold text-48 '>
          <?php if(empty($News['texte'])){
            echo " Aucune news aujourd'hui ! ";
          }
          
          else {
            echo $News['texte'];
          }?>
          </p>

      </div>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/images/274332131_466244378576661_3517310084040936391_n.jpg" class="d-block h-30 w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="asset/images/274332131_466244378576661_3517310084040936391_n.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="asset/images/274332131_466244378576661_3517310084040936391_n.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="asset/images/274332131_466244378576661_3517310084040936391_n.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Fourth slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div id="choice" class="playfair text-center text-white">

        <h2 class="title-page display-4">Choisir votre appareil</h2>

      <?php
      
      $query = $pdo->query("SELECT * FROM `Type_appareil`");

      $resultat = $query->fetchAll();
      ?>
        <form action="marque.php" method="post">
        <div class="card-group justify-content-center choice-card py-2">
          <?php
        foreach ($resultat as $key => $variable)
        {
          ?>
          <button class="btn-no-style card-link card-bloc pb-2" name="type" type="submit" value="<?php echo($resultat[$key]['Id_type']); ?>">
            <div class="card bg-dark text-white bloc-card">
              <img class="card-img" src="<?php echo'./asset/images/'.$resultat[$key]['image'];?>" alt="<?php print $resultat[$key]['appelation'] ?>">
              <div class="card-img-overlay">
                <h5 class="card-title"><?php print $resultat[$key]['appelation'] ?></h5>
              </div>
            </div>
          </button>
        <?php 
        }
        ?>
          </div>
        </form>


    </section>
    
   <?php require('includes/footer.php'); ?>
  </body>
</html>