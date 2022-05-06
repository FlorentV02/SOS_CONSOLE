<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/phone.css" rel="stylesheet">

    <title>SOS CONSOLE</title>
    <?php include 'bdd.php';?>
</head>

<body>
    <header>
        <div id="background-body">
            <nav id="slider" class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="./asset/images/icon/logo_sos_consoles.png"
                            alt="SOS_CONSOLE"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="form-search-nav-bar d-flex">
                            <input class="search-bar loupe form-control me-2" type="search"
                                placeholder="Selection un appareil" aria-label="Search">
                            <button class="btn btn-search btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
    </header>

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

            <p class="text-center playfair title-page display-4">Choisir un téléphone</p>

            <form class="form-search-page d-flex">
                <input class="search-bar loupe form-control me-2" type="search" placeholder="Selection un appareil"
                    aria-label="Search">
                <button class="btn btn-search btn-outline-success" type="submit">Search</button>
            </form>

            <div class="d-flex justify-content-center flex-wrap">

                <?php 


$phone = $pdo->query("SELECT class FROM `Iphone`");

$resultat = $phone->fetchAll();

//Afficher le résultat dans un tableau


foreach ($resultat as $key => $variable)
{
  print('<figure class="figure">');
  print(' <a href="piece.html"><img id="img-phone-1" class="img" src="'.$resultat[$key]['image'].'" 
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

    <footer id="footer" class="d-flex text-center align-items-center justify-content-center">
        <ul id="contact" class="playfair">
            <li class="fw-bolder text-36">Contactez nous !</li>
            <li><img class="logo-contact" src="asset/images/icon/facebook.png" class="card-img-top" alt="Facebook">
                <a target="_blank" href="https://www.facebook.com/jeremy.verhoye.3" title="Facebook"
                    class="link-nav-bar">Notre page facebook</a>
            </li>
            <li><img class="logo-contact" src="asset/images/icon/mail.png" />
                <a href="contact.html" title="Facebook" class="link-nav-bar">Laissez un message</a>
            </li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</html>