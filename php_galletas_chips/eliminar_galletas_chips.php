<?php
$id_nutriente = $_GET['id'];

$conexion = mysqli_connect("localhost", "root", "", "foodmp");
$consulta = "DELETE FROM galletas_chips WHERE id_nutriente = '$id_nutriente'";
$rta = mysqli_query($conexion, $consulta);
header("Location: galletas_chips.php");
?>


