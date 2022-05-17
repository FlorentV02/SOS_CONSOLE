<!DOCTYPE html>
<html lang="fr">
    <?php require('includes/head.php');?>
    <link href="asset/css/devis.css" rel="stylesheet">
    <title>SOS CONSOLE</title>
</head>
  <body>
  <?php require('includes/nav-bar.php'); ?>
    <section id="content" class="container pb-5">
        <div id ="header" class="text-center">
            <div id ="background-entete" class="playfair position-relative">
                <div id="entete-text" class="playfair">
                    <h2 class="text-48 text-shadow">Reparation de console et de smartephone</h2>
                    <span class="text-36 text-shadow">Phrase d'accroche à déterminer</span>
                </div> 
            </div>
        </div>

        <div>
          <div class="d-flex align-items-center justify-content-center my-5">
            <div class="circle-in-validate"> </div>
            <div class="trait-validate"></div>
            <div class="circle-in-validate"> </div>
            <div class="trait-validate"></div>
            <div class="circle-in-validate"></div>
            <div class="trait-validate"></div>
            <div class="circle-in-progess"></div>
          </div>
        </div>  

        <div id="block-formulaire">

     

            <p class="text-center my-5 playfair title-page">Votre récapitulatif</p>

            <div>
                <div id="devis-header" class="d-flex mb-3 mx-3 justify-content-around align-items-center">
                    <img class="align-items-center" 
                    src="asset/images/amazon-prime-day-deals-nintendo-switch-1562596166.webp" 
                    alt="" width="250" height="250">
                    <div id="bloc-appareil" class="px-5 playfair font-18">
                        <p class="color-green">Rappel appareil</p>
                        <p class="color-green">Appareil séléctionné</p>
                    </div>
                </div>
                <div class="d-flex mx-3">

                    <table class="table table-striped table-bordered background-devis">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Service</th>
                            <th scope="col">Prix</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Repération 1</td>
                            <td>23€</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Répération 2</td>
                            <td>50€</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="fw-bold text-uppercase">Total</td>
                            <td class="fw-bold font-weight-bold">83€</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="d-flex justify-content-center">
              <a href="confirmation_devis.html" 
              class="btn-devis btn-search btn-outline-success m-3 link-success text-center link-btn">
                 Obtenir un devis</a>
            </div>
        </div>



    </section>
    
    <?php require('includes/footer.php'); ?>

</body>
</html>