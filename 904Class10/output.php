<?php
if (isset($_POST['submit']) ) {
    $name = $_POST['name'];
    $email = $_POST['useremail'];
    echo $name ."<br>".$email. "<br>";
    echo "<pre>";
    print_r($_POST) ;
    echo "</pre>";
}


?>