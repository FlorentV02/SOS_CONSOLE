<?php


// ajout image

if(isset($_POST['submit'])) {

    $number = $_POST['Number'];
    $title = $_POST['title'];
    $txt = $_POST['txt'];

    //$ImageName = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));


    //$file = $_FILES['image'];
    
    echo $number;
}

else{
    echo 'Erreur';
}

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./asset/images/" . $filename;

echo $filename;

if(isset($_POST['submit'])){

    if(preg_match("/\S+/", $_FILES['uploadfile']) === 0){
        $errors['uploadfile'] = "*The image field is required.";
    }


    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png");

    if(in_array($imageFileType,$extensions_arr) ){
        if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],'c:/xampp/htdocs/upload/'.$filename)){
            $insert = "INSERT INTO `carouselle` (`Id_Carouselle`, `titre`, `texte`, `image`) VALUES ('$number', '$title', '$txt', '$filename')";
        
            if(mysqli_query($conn, $insert)){
                $successful = '<h5 class="alert alert-success">Image store successfully!</h5>';
            }else{
                echo 'Error: '.mysqli_error($conn);
            }
        }else{
            echo 'Error in uploading file - '.$_FILES['uploadfile']['name'].'<br/>';
        }
    }
} 

?>