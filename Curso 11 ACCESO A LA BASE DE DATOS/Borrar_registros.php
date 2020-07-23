<?php
/*
ACCESO A LA BASE DE DATOS - 5:00:04
 27. Crear base de datos
 28. Conectarse a una base de datos
 29. Crear tablas
 30. Crear registros
 31. Consultar y ordenar registros
 32. Borrar registros
 33. Actualizar registros
 */
//obsoleto
//mysql_connect();

include './Conexion.php';
$id = $_GET['id'];
$solicutud = "DELETE FROM datos WHERE ID=${id}";
$resultado = mysqli_query($conexion,$solicutud);

header("location: Consultar.php");
?>
