<?php 
require_once("../lib/connect.php");
//CREA UNA SESIÓN NUEVA//
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//VALIDA EL INICIO DE SESIÓN COMPROBANDO EMAIL Y PASSWORD//
$verify = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' and password='$password'");

if(mysqli_num_rows($verify) > 0 ){

    //ALMACENA LOS DATOS DE LA SESION EN user//
    $_SESSION['user']= $email;
    header("Location:base.php");
    exit(); //<----  FINALIZA LA EJECUCIÓN ACTUAL - ESTE ES SIMILAR AL DIE//
}else{
    //MUESTRA MENSAJE DE ERROR MEDIANTE UNA VENTANA//
    echo '<script>
    alert("Correo o contraseña incorrectos");
    window.location="login.php";
    </script>';
    exit();
}

?>