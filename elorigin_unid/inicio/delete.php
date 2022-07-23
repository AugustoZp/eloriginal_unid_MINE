<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_userselect($connect, $id);
$userselect = mysqli_fetch_array($resultado);

delete_user($id);
header("Location:base.php");
?>