<?php
if(isset($_POST['test'])){
    if(in_array('value1', $_POST['test'])){
        echo "Option1 was checked!";
    }
    if(in_array('value2', $_POST['test'])){
        echo "Option2 was checked!";
    }
}
?>