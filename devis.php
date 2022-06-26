    <?php require('includes/head.php');
        require('includes/requestDevis.php');    
    ?>
        
    <link href="asset/css/devis.css" rel="stylesheet">
    <title>SOS CONSOLE</title>
</head>
  <body>
  <?php 
  require('includes/nav-bar.php'); ?>
  <div id="content" class="container">

<?php require('includes/imageHeader.php')?>

   <main>


        <div class="text-center">
            <div class="d-flex align-items-center justify-content-center my-5">
                <div class="circle-in-validate"> </div>
                    <div class="trait-validate"></div>
                <div class="circle-in-validate"> </div>
                <div class="trait-validate"></div>
                <div class="circle-in-validate"></div>
                <div class="trait-validate"></div>
                <div class="circle-in-progess"></div>
            </div>
            <small style="color:grey; font-size:7px;">L'auteur est du symbole validé est <a href="https://creativecommons.org/licenses/by/3.0/legalcode">Creative Common BY</a></small>
        </div>  

        <div id="block-formulaire">
            <form action="actions/pdf.php" method="post">
            
            <p class="text-center my-5 playfair title-page display-5">Votre récapitulatif</p>

            <div>
                <div id="devis-header" class="d-flex mb-3 mx-3 justify-content-around align-items-center">
                    <img class="align-items-center" 
                    src="images/<?php echo $rappel['image_presentation']; ?>" 
                    alt="" width="250" height="250">
                    <div id="bloc-appareil" class="px-5 playfair font-18">
                        <p class="color-green display-6">Appareil séléctionné :<input id="prodId1" name="appareil" type="hidden" value="<?php echo ($rappel['Id_appareil'])?>"> 
                                    <?php echo $rappel['nom']; ?></input></p>
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
                                    <?php 
                                    $i=1;
                                    $a=1;
                                    $b=1;
                                    foreach ($resultat as $key => $variable){?>
                                <tr>
                                    <th scope="row"><?php echo $i;?> </th>
                                    <?php  ?>
                                    <td><input id="prodId1" name="<?php echo 'piece'.$a; ?>" type="hidden" value="<?php echo ($resultat[$key]['Id_piece'])?>"> 
                                    <?php echo ($resultat[$key]['type']); ?></input></td>
                                    <td><?php echo intval($resultat[$key]['prix']).' €'; ?></td>
                                </tr>
                                <?php  $a =$a+1; $i =$i+1; $b =$b+1; } ?>
                                <tr>
                                    <th scope="row"></th>
                                    <td class="fw-bold text-uppercase">Total</td>
                                    <td class="fw-bold font-weight-bold"><?php echo $global['total']. ' €';?></td>
                                </tr>
                                </tbody>
                        </table>
                    
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn-devis btn-search btn-outline-success m-3 link-success text-center link-btn">
                Obtenir un devis en Pdf</button>
                    <input id="prodId" name="appareil" type="hidden" value="<?php echo $rappel['Id_Appareil']?>">
            </form>
            </div>


            <p id="last" class="text-center title-page h1 my-3 playfair">Vous pouvez recevoir votre devis par mail</p>
            <p id="mail" class="text-center my-3 source-pro-sans">
             Pour recevoir votre devis, vous pouvez indiquer une adresse email, le devis sera envoyé directement à l'adresse notée</p>

             <form id="formulaire" method="post" action="confirmation-devis.php" class="source-pro-sans">

  <div class="mb-3 px-3 text-center w-100">
      <label for="exampleInputEmail1" class="form-label">
        Indiquez votre adresse email ci-dessous  <span class="text-danger font-weight-bold">*</span></label></label>
      <input type="text" class="form-control form-style" id="mail" placeholder="Votre email"  aria-describedby="emailHelp">
  </div>

  <div class="d-flex justify-content-center">
      <button type="submit" name="envoyer" class="btn btn-search btn-outline-success playfair">Envoiez l'email</button>
  </div>
</form>

<p class="text-danger text-right">Champs obligatoire *</p>
        </div>

            
            </main>
        </div>
    
    <?php require('includes/footer.php'); ?>

</body>
</html>