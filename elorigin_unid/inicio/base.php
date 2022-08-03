<?php

//CREA UNA SESIÓN NUEVA//
session_start();

//VERIFICA QUE LA SESIÓN ESTÉ INICIADA//
if(!isset($_SESSION['user'])){
    echo '<script>
    alert("Por favor debe iniciar sesión para continuar");
    window.location="../index_user.php";
    </script>';
    session_destroy();
    die();
}
require_once("../lib/functions.php");
$users = get_all_users($connect);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
</head>
<body>
<center>
<table>
        <thead>
            <tr>
                <h2>REGISTRO DE USUARIOS</h2>
                <th>id</th>
                <th>Nombres</th>
                <th>Correo electrónico</th>
                <th>Contraseña</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while($fila = mysqli_fetch_array($users))
            {
            ?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['names']?></td>
                <td><?php echo $fila['email']?></td>
                <td><?php echo $fila['password']?></td>


                <td><a href=base_update.php?id=<?php echo $fila['id'] ?>>Editar</a></td>
                <td><a href=delete.php?id=<?php echo $fila['id'] ?>>Eliminar usuario</a></td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

    <div class="elem">
    <h3><a href="close_session.php">CERRAR SESIÓN</a></h3>
   </div>
</center>
</body>
</html>