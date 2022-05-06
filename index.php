<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/accueil.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./asset/images/icon/logo_sos_consoles.png">
    <title>SOS CONSOLE</title>
    <?php include 'bdd.php';?>
</head>
  <body>
    <header>
      <div id="background-body">
        <nav id="slider" class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="./asset/images/icon/logo_sos_consoles.png" alt="SOS_CONSOLE"></a>
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
              <form class="form-search-nav-bar form-search-page d-flex">
                <input class="search-bar loupe form-control me-2" type="search" placeholder="Selection un appareil" aria-label="Search">
              <button class="btn btn-search btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <section id="content" class="container">
      <div id ="header" class="text-center">
        <div id ="background-entete" class="playfair position-relative">
          <div id="entete-text" class="playfair">
            <h2 class="display-2 text-shadow">Reparation de console et de smartephone</h2>
            <span class="display-6 text-shadow">Phrase d'accroche à déterminer</span>
          </div> 
        </div>
      </div>

      <?php include 'request_index.php'; ?>


      <div id ="new" class="playfair py-4 px-4">
        <p class="font-weight-bold text-center text-48">NEWS !</p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nulla mi, ultricies elementum est quis, 
          vestibulum faucibus purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 
          ac turpis egestas. Praesent sit amet est massa. Aliquam congue ipsum sit amet neque cursus sollicitudin.
          Proin sollicitudin vel mauris rhoncus fermentum. Nulla eu tincidunt ligula, at fringilla odio. 
          Cras pulvinar tortor quis urna iaculis, et convallis sapien commodo. 
          Pellentesque quis magna orci. Proin vitae urna sollicitudin justo venenatis fringilla. 
          In sit amet pretium elit, sed dapibus ante. Suspendisse vel venenatis nisl, non commodo ligula.
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

        <p class="display-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta ipsum vulputate enim euismod, nec.</p>

      </div>

      <?php
      
      $query = $pdo->query("SELECT * FROM `appareil`");

      $resultat = $query->fetchAll();

      print '<div class="card-group justify-content-center choice-card">';
      foreach ($resultat as $key => $variable)
      {
        print '<a class="card-link card-bloc" href="telephone.php">';
        print '<div class="card mr-1">';
        print '<div class="card-body p-5 card-font img-choice" id="img-console">';
              print'<h5 class="card-title mt-5 text-center playfair">'.$resultat[$key]['name'].'</h5>';
          print'</div>';
        print'</div>';
      print '</a>';
    }
      print'</div>'; 

      ?>

    </section>
    
    <footer id="footer" class="d-flex text-center align-items-center justify-content-center">
      <ul id ="contact" class="playfair">
        <li class="fw-bolder text-36">Contactez nous !</li>
        <li><img class="logo-contact" src="asset/images/icon/facebook.png" class="card-img-top" alt="Facebook">
          <a target="_blank" href="https://www.facebook.com/jeremy.verhoye.3" title="Facebook" 
          class="link-nav-bar">Notre page facebook</a></li>
        <li><img class="logo-contact" src="asset/images/icon/mail.png"/><a href="contact.html" 
          title="Facebook" class="link-nav-bar">Laissez un message</a></li>
        </ul>
      </footer>
    
    <script src="./asset/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>