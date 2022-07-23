<?php
require_once("connect.php");

//FUNCIÓN DE ALL USERS//
function get_all_users($connect){
$consulta="SELECT * FROM users";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//FUNCIÓN DE USUARIO SELECCIONADO//
function get_userselect($connect, $id){
    $consulta="SELECT * FROM users WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
    }

//FUNCIÓN DE ELIMINAR USUARIO//
function delete_user($id){
    global $connect;
    $consulta="DELETE FROM users WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
        //return $resultado;
    }

//FUNCIÓN DE ACTUALIZAR USUARIO//
Function update_user($names, $email, $status, $id){
    global $connect;
    $consulta= "UPDATE users SET names='$names', email='$email', status='$status' WHERE  id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

?>