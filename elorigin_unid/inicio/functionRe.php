<?php 
require_once("../lib/connect.php");


$names = $_POST['names'];
$email = $_POST['email'];
$password = $_POST['password'];
$consulta = "INSERT INTO users(names,email,password) VALUES ('$names','$email','$password')";


//VERIFICA QUE EL CORREO NO SE REPITA EN EL REGISTRO//
$verify = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' ");
if(mysqli_num_rows($verify) >0 ){
    echo '<script>
    alert("Este correo ya está registrado, introduce uno distinto");
    window.location="register.php";
    </script>';
    exit();
}

//REGISTRANDO NUEVO USUARIO//
$resultado = mysqli_query($connect, $consulta);
if($resultado){
    echo '<script>
    alert("Usuario registrado exitosamente");
    window.location="../index_user.php";
    </script>';
}else{
    echo '<script>
    alert("Ha ocurrido un error al momento de registrarse");
    window.location="register.php";
    </script>';
}
?>