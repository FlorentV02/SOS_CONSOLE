<!DOCTYPE html>
<html lang="fr">
<?php require('includes/head.php'); ?>
<link href="asset/css/contact.css" rel="stylesheet">


</head>
<body>
    <div id="background-body">

    <?php include('includes/nav-bar.php'); ?>


    <section>


        <div id="block-formulaire" class="my-5">

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