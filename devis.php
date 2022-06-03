<!DOCTYPE html>
<html lang="fr">
    <?php require('includes/head.php');?>
    <link href="asset/css/devis.css" rel="stylesheet">
    <title>SOS CONSOLE</title>
</head>
  <body>
  <?php 
  ob_start();
  require('includes/nav-bar.php'); ?>
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

                
                <?php 

                //$ligne=array($_POST['piece1'], $_POST['piece2'], $_POST['piece3']);
                //print_r(array_values($ligne));

                //piece.type, piece.prix,SUM(piece.prix + piece.prix) AS total;

                    //$_POST['piece1'] =  $_POST['piece2'] = $_POST['piece3'] ="";




                // affichage appareil 

                //$resultat = $query->fetchAll();                    

                error_reporting(E_ERROR | E_PARSE);

                    if($_POST['piece1'] == "" AND $_POST['piece2'] == "" AND $_POST['piece3'] == ""){
                        header("Location: http://127.0.0.1/dev/SOS_CONSOLES/piece.php");
                        exit();
                    }

                    $dev1="0";
                    $dev2="0";
                    $dev3="0";

                    if($_POST['piece1']==""){$dev1='0';}else{$dev1=$_POST['piece1'];}
                    if($_POST['piece2']==""){$dev2='0';}else{$dev2=$_POST['piece2'];}
                    if($_POST['piece3']==""){$dev3='0';}else{$dev3=$_POST['piece3'];}

                    $ligne= array($dev1, $dev2, $dev3);

                    $variables_joins = join(',',$ligne);

                    $query1 = $pdo->query("SELECT piece.prix , SUM(piece.prix) AS total FROM piece where Id_Piece IN ($variables_joins)");
                       
                        $query1->execute();



                        // envoie du resultat
            
                        $relt = $query1->fetch(PDO::FETCH_ASSOC);
                      
                        $variables_joins = join(',',$ligne);  

                        $query = $pdo->query(
                            "SELECT piece.type, piece.prix FROM piece where Id_Piece IN ($variables_joins)");
    
                        $resultat = $query->fetchAll();
    

                    

                // Récupérer les 3 variables - Les convertir en entier


                    //$total = array_sum($ligne);



                    //$test = $query1->fetch(PDO::FETCH_ASSOC);

                    //print_r($test) ;




/*                    $foundRows=array();
                    $query="SELECT * FROM piece WHERE ";
                    foreach($ligne as $name)
                    {
                        $query="SELECT * FROM piece WHERE name='$name'";
                        $res=mysql_query($query,$ligne);
                        while($row=mysql_fetch_assoc($res))
                        {
                        //Push the rows you have found to the foundRows array declared above
                        array_push($foundRows,$row);
                        }
                    }

                    print_r($foundRows);
*/



                //echo $piece;
                //foreach ($variables_imploded AS $key => $piece){

                
                //$query = $pdo->query("SELECT * FROM piece where Id_Piece IN ($variables_joins)");

                //}

                // affichage appareil 
    
    
                //Afficher le résultat         
                ?>
                
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
                            foreach ($resultat as $key => $variable){?>
                        <tr>
                            <th scope="row"><?php echo $i?> </th>
                            <?php $i =$i+1; ?>
                            <td>Repération <?php echo($resultat[$key]['type']); ?></td>
                            <td><?php echo intval($resultat[$key]['prix']).' €'; ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <th scope="row"></th>
                            <td class="fw-bold text-uppercase">Total</td>
                            <td class="fw-bold font-weight-bold"><?php echo $relt['total'];?></td>
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