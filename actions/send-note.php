<?php


//echo mail(); 


if (isset($_POST['Email'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From:'. $_POST['Email'] . "\r\n";
    $entete .= 'Reply-to: email@mail.com' ;
    $entete .= 'Reply-to: ' . $_POST['Email'];
    $entete .= 'Objet:' . $_POST['object'];


    $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
    <p><b>Email : </b>' . $_POST['Email'] . '<br>
    <b>Message : </b>' . htmlspecialchars($_POST['Message']) . '</p>';

    $retour = mail('florviev@gmail.com', 'Envoi depuis page Contact', $message, $entete);
    if($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
        else{
            echo 'Message non envoyé';
            echo '<p>'. $_POST['Email'] .'<br>' . $_POST['Name'] . '<br>' . $_POST['FirstName'] . '<br>' . $_POST['object'] .'</p>';

        }
}

else{
    echo 'Mdr j\'ai pas lu';
    echo $_POST['Email'];
    echo $_POST['object'];
    echo $_POST['Message'];
}

/*if(isset($_POST('send'))){
    
    if(!empty($_POST['Name']) AND !empty($_POST['FirstName']) AND !empty($_POST['Email']) AND !empty($_POST['Email']) AND !empty($_POST['Object']) AND !empty($_POST['Message'])){

    }

    else {
        $errorMsg ="Veuillez complété les champs obligatoire *";
    }
}
*/

?>