<?php 

include('config.php');



$lastPage = $_SERVER['HTTP_REFERER'];

if($lastPage == "http://localhost/inventory-system/login.html") {

    $lCorreo = $_POST['lmail'];
    $lPassword = $_POST['lpassword'];
    $query = "SELECT correo FROM usuario WHERE contraseña='$lPassword' AND correo='$lCorreo'";

    if(!$conn){
        die("Conexión fallida - " . mysqli_connect_error());
    }

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)  == 1){
        echo "Inicio de sesion exitoso";
    } else {
        echo "error de datos de inicio de sesion";
    }



} elseif($lastPage == "http://localhost/inventory-system/sign-up.html") {

    $nombre = $_POST['name'];
    $correo = $_POST['mail'];
    $password = $_POST['password'];

    if(!$conn) {
        die("Conexión fallida - " . mysqli_connect_error());
    }

    if(isset($nombre) && isset($correo) && isset($password)){
        
        $query0 = "INSERT INTO usuario (correo, contraseña, nombre) VALUES ('$correo', '$password', '$nombre')";
        $query1 = "SELECT correo FROM usuario WHERE correo='$correo'";
        $result = mysqli_query($conn, $query1);

        if(mysqli_num_rows($result) > 0){
            echo 'Ya existe una cuenta asociada a este correo';
        } else {
            if(mysqli_query($conn, $query0)) {
                echo "Ingresado correctamente a la base de datos";
            } else {
                echo "Error " . mysqli_errno($conn);
            }
        }
        
    }
}

mysqli_close($conn);

?>
