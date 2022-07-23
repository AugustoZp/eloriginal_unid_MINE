<?php 
session_start();
require_once("../lib/connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

//VALIDA EL INICIO DE SESIÓN//
$verify = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' and password='$password' ");

if(mysqli_num_rows($verify) > 0 ){
    $_SESSION['user']= $email;
    header("Location:base.php");
    exit();
}else{
    echo '<script>
    alert("Correo o contraseña incorrectos");
    window.location="login.php";
    </script>';
    exit();
}

?>