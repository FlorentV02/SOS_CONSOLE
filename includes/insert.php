<?php


// ajout de new 

if (isset($_POST['submitNew'])){
    $titleNew = $_POST['titleNew'];
    $txtNew = $_POST['txtNew'];

    $updateNew = $pdo->query("UPDATE `bloc_news` SET `texte` = '$txtNew', `titre` = '$titleNew' WHERE `bloc_news`.`Id_bloc_new` = 1");

    $updateNew->execute();

}

// ajout image

if(isset($_POST['submit'])) {

    $number = $_POST['Number'];
    $title = $_POST['title'];
    $txt = $_POST['txt'];


    //$ImageName = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));


    $filename = $_FILES['image']['name'];
    
    
    echo $number;
    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png");

    var_dump($filename);
    var_dump($title);

    $updateImage = $pdo->query("UPDATE `carouselle` SET `titre` = '$title', `texte` = '$txt', `image` = 'test.png'  WHERE `carouselle`.`Id_Carouselle` = $number");

    $updateImage->execute();
}

// excution de la requete


?>