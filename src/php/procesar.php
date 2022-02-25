<?php 

include('config.php');



$lastPage = $_SERVER['HTTP_REFERER'];

if($lastPage == "http://localhost/inventory-system/login.html") {
    echo "vengo de login.html";
    $lCorreo = $_POST['lmail'];
    $lPassword = $_POST['lpassword'];
    echo $lCorreo . " " . $lPassword;
} elseif($lastPage == "http://localhost/inventory-system/sign-up.html") {
    echo "vengo de sign-up.html";
    $nombre = $_POST['name'];
    $correo = $_POST['mail'];
    $password = $_POST['password'];
}


?>