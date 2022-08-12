<?php
require_once("../lib/functions.php");
//CREA UNA SESIÓN NUEVA//
$_SESSION = login_mem();

$users = get_all_users($connect);
$user_desc = get_user_desc($connect);
$user_asc = get_user_asc($connect);
error_reporting(0);
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
    <select name="filter" id="filter">
        <option value="zamudio">zamudio</option>
    </select>
<table>
        <thead>
            <tr>
                <h2>REGISTRO DE USUARIOS</h2>
                <div class="elem">
                <form action=""  method="post">
                     <select name="orden" id="orden">
                     <option value="0">--> Selecciona una opción</option>
                     <option value="1">Ordenar A-Z</option>
                     <option value="2">Ordenar Z-A</option>
                     </select>
                  <button type="submit">Ordenar</button>
                </form>
                </div>

                <br>
                <th>id</th>
                <th>Nombres</th>
                <th>Correo electrónico</th>
            </tr>
        </thead>
        <?php $orden = $_POST['orden']; ?>
<?php if ($orden == 0): 
 $userszeta = $users; 
 elseif ($orden == 1):            
 $userszeta = $user_asc; 
 elseif ($orden == 2): 
 $userszeta = $user_desc;
 endif; ?>
        <tbody>
            <?php
            while($fila = mysqli_fetch_array($userszeta))
            {
            ?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['names']?></td>
                <td><?php echo $fila['email']?></td>


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