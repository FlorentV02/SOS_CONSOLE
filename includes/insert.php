<?php


// ajout de new 

if (isset($_POST['submitNew']) AND !empty($_POST['titleNew']) AND !empty($_POST['txtNew'])){
    $titleNew = $_POST['titleNew'];
    $txtNew = $_POST['txtNew'];
    $error ="Les news ont étés modifiés";


    $updateNew = $pdo->query("UPDATE `bloc_news` SET `texte` = '$txtNew' , `titre` = '$titleNew' WHERE `bloc_news`.`Id_Block_NEWS` = 1");

    $updateNew->execute();

}

else{
    $error ="Une erreur est survenu";
}


// ajout image

if(isset($_POST['submit'])) {

    $number = $_POST['Number'];
    $title = $_POST['title'];
    $txt = $_POST['txt'];


    //$ImageName = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));

    if(isset($_FILES['image'])){
    $filename = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    
    
    echo $number;
    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png");

    var_dump($filename);
    var_dump($tmpName);
    move_uploaded_file($tmpName, './images/'.$filename );

    $updateImage = $pdo->query("UPDATE `carouselle` SET `titre` = '$title', `texte` = '$txt', `image` = '$filename '  WHERE `carouselle`.`Id_Carouselle` = $number");

    // excution de la requete


    $updateImage->execute();
    }
}





?>
