<!DOCTYPE html>
<html lang="fr">
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


$sql = "SHOW TABLES FROM $dsn";
$result = $pdo->query($sql);

$result = $sql->fetchAll();

echo "Table : {$sql[0]}\n";

?>

            </div>
        </div>


    </section>

    <?php require('includes/footer.php'); ?>


</html>