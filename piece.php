<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php';?>
    <title>SOS CONSOLES</title>
    <link href="asset/css/piece.css" rel="stylesheet">
</head>
<body>
    <?php require('includes/nav-bar.php'); ?>

</head>
  <body>
    <section id="content" class="container pb-5">
        <div id ="header" class="text-center">
          <div id ="background-entete" class="playfair position-relative">
            <div id="entete-text" class="playfair">
              <h2 class="display-2 text-shadow">Reparation de console et de smartephone</h2>
              <span class="text-36 text-shadow">Phrase d'accroche à déterminer</span>
              </div> 
        </div>

    <div class="pt-5">

      <div>
        <div class="d-flex align-items-center justify-content-center mx-2">
          <div class="circle-in-validate"></div>
          <div class="trait-validate"></div>
          <div class="circle-in-validate"></div>
          <div class="trait-validate"></div>
          <div class="circle-in-progess"></div>
          <div class="trait-empty"></div>
          <div class="circle-empty"></div>
        </div>
      </div>       

        <div id="phone-block">

          <p class="text-center playfair title-page display-4 mb-5">Choisir les pièces</p>

          <div id="arrow"><img src="./asset/images/icon/Arrow_1.png"/></div>


          <?php 

            // Récupération des données du formulaire
            
            $appareil = $_POST['appareil']; 
            
            // query affichage du titre
            $title = $pdo->query("SELECT image_1 FROM `Appareil` JOIN `Piece` ON Appareil.Id_Appareil = Piece.Id_appareil WHERE appareil.Id_Marque = $appareil");

            // excution de la requete

            $title->execute();


            // envoie du resultat

            $ligne = $title->fetch(PDO::FETCH_ASSOC);

            
            $query = $pdo->query("SELECT Id_Piece, piece.type, image_1, image_2 FROM `piece` JOIN `Appareil` ON Appareil.Id_appareil = piece.Id_appareil WHERE piece.Id_appareil = $appareil");

            // affichage appareil 

            $resultat = $query->fetchAll();

            //Afficher le résultat         
          ?>


            <div class="d-flex align-items-center justify-content-center">
                <div class="flex-column">
                <form action="devis.php" method="post">
                  <?php foreach ($resultat as $key => $variable){?>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="piece<?php echo($resultat[$key]['Id_Piece']); ?>" value="<?php echo($resultat[$key]['Id_Piece']); ?>" id="flexCheckDefault1">
                          <label class="form-check-label source-pro-sans" for="flexCheckDefault">
                          <?php echo($resultat[$key]['type']);?>
                          </label>
                      </div>
                  <?php } ?>
                </div>
                <div><img src ="./asset/images/<?php echo $ligne['image_1']?>" alt="Appareil" id="img-piece" class="my-3"/></div>
              </div>
              <div class="d-flex justify-content-center">
                <button class="btn-devis btn-search btn-outline-success mt-3 link-btn link-success" 
                type="submit">Envoyer</button>
              </form>
              </div>                

          </div>

        </div>
    </section>
    
    <?php require('includes/footer.php'); ?>

  </body>
</html>