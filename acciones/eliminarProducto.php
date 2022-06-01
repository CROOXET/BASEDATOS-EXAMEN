<?php

include('../conec.php');

$codigoProducto = $_GET['id'];
$eliminarProducto = "DELETE FROM producto WHERE codigo = '$codigoProducto'";
$resultado = mysqli_query ($conexion,$eliminarProducto);
// Saltar de carpeta ../ //
header('Location: ../productos.php');

?>