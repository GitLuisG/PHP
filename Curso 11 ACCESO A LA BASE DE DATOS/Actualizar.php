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
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Edad = $_POST['Edad'];
$Celular = $_POST['Celular'];
$id = $_POST['id'];
$solicutud = "UPDATE datos SET Nombre='$Nombre',Apellido='$Apellido',Edad='$Celular',Celular='$Celular' WHERE id=$id";

$resultado = mysqli_query($conexion,$solicutud);
header("location: Consultar.php");