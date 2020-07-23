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
$host = "localhost";
$user = "root";
$pass = "";
$db = "clientes";

$conexion = mysqli_connect($host, $user, $pass, $db);

mysqli_set_charset($conexion, "utf8");

?>
