<?php

/* mail(
    $to,
    $name,
    $firstName,
    //string ($email),
    $numberPhone,
    $subject,
    $message,
    array ($additional_headers),
);
*/

if (isset($_POST['message'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From:'. $_POST['email'] . "\r\n";
    $entete .= 'Reply-to: email@mail.com' ;
    $entete .= 'Reply-to: ' . $_POST['email'];
    $entete .= 'Objet:' . $_POST['object'];


    $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
    <p><b>Email : </b>' . $_POST['email'] . '<br>
    <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

    $retour = mail('destinataire@free.fr', 'Envoi depuis page Contact', $message, $entete);
    if($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
        else{
            echo 'Message non envoyé';
        }
}

else{
    echo 'Non lu';
    echo $_POST['email'];
    echo $_POST['object'];
    echo $_POST['message'];
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