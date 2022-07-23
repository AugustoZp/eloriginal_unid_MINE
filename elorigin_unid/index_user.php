<?php
session_start();
if(isset($_SESSION['user'])){
   header("Location:inicio/base.php");
}
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo de bases de datos</title>
</head>
<body>
   <center>
   <h1>Bienvenido</h1>
   <div class="elem">
    <h3><a href="inicio/login.php">INICIA SESIÓN AQUÍ</a></h3>
   </div>

   <div class="elem">
<h3>¿Aún no estás registrado? <a href="inicio/register.php">REGISTRATE AQUÍ</a></h3>
   </div>
   </center>
</body>
</html>