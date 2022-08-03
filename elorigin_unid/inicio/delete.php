<?php
//CREA UNA SESIÓN NUEVA//
session_start();

//VERIFICA QUE LA SESIÓN ESTÉ INICIADA//
if(!isset($_SESSION['user'])){
    echo '<script>
    alert("No crack, así no funcionan las cosas");
    window.location="../index_user.php";
    </script>';
    session_destroy();
    die(); //<----  FINALIZA LA EJECUCIÓN ACTUAL//
}

require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_userselect($connect, $id);
$userselect = mysqli_fetch_array($resultado);

delete_user($id);
header("Location:base.php");
?>