<?php require('includes/head.php');
    
    if(isset() AND )
    $ligneNom1 = $_POST['devis-nom-1'];
    $ligneNom2 = $_POST['devis-nom-2'];
    $ligneNom3 = $_POST['devis-nom-3'];
    $ligneNom4 = $_POST['devis-nom-4'];
    $ligneNom5 = $_POST['devis-nom-5'];
    $ligneNom6 = $_POST['devis-nom-6'];
    $ligneNom7 = $_POST['devis-nom-7'];
    $ligneNom8 = $_POST['devis-nom-8'];
    $ligneNom9 = $_POST['devis-nom-9'];
    $ligneNom10 = $_POST['devis-nom-10'];


    ?>

<!DOCTYPE html>
<html lang="fr">

    <link href="asset/css/contact.css" rel="stylesheet">
    <title>SOS CONSOLE</title>
  </head>
  <body>
    <header>
      <div id="background-body">
        <nav id="slider" class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./asset/images/icon/logo_sos_consoles.png" alt="SOS_CONSOLE"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <div class="navbar-toggler-icon">
                <div id="navbar-trait-1" class="navbar-trait"></div>
                <div id="navbar-trait-1" class="navbar-trait"></div>
                <div id="navbar-trait-1" class="navbar-trait"></div>
              </div>            
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="form-search-nav-bar d-flex">
                <input class="search-bar loupe form-control me-2" type="search" placeholder="Selection un appareil" aria-label="Search">
              <button class="btn btn-search btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <section>

      <div>
        <div class="d-flex align-items-center justify-content-center my-5 mx-2">
          <div class="circle-in-validate"></div>
          <div class="trait-validate"></div>
          <div class="circle-in-validate"></div>
          <div class="trait-validate"></div>
          <div class="circle-in-validate"></div>
          <div class="trait-validate"></div>
          <div class="circle-in-validate"></div>
        </div>
      </div>  


        <div id="block-formulaire" class="mb-3">

          <p id="last" class="text-center title-page display-4 my-3 playfair">Dernière étape</p>
          <p id="mail" class="text-center my-3 source-pro-sans">
            Pour recevoir votre devis, vous devez indiqué une adresse email, le devis sera envoyé directement à l'adresse noté</p>

        
          <form id="formulaire" class="source-pro-sans">
          
            <div class="mb-3 px-3 text-center w-100">
                <label for="exampleInputEmail1" class="form-label">
                  Indiqué votre adresse email <span class="text-danger font-weight-bold">*</span></label></label>
                <input type="text" class="form-control form-style" id="mail" placeholder="Votre email"  aria-describedby="emailHelp">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" name="envoyer" class="btn btn-search btn-outline-success playfair">Téléchargez</button>
            </div>
          </form>
          
          <p class="text-danger text-right">Champs obligatoire *</p>

    </div>
        
        </div>
    </section>
    
    <?php require('includes/footer.php'); ?>

  </body>
</html>