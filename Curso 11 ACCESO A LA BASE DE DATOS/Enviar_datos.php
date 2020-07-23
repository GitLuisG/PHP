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
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $Edad = $_POST['Edad'];
    $Celular = $_POST['Celular'];
    //no olvides las comas en lasconsultas
    $solicitud = "INSERT INTO datos(Nombre,Apellido, Edad, Celular)VALUES('$nombre','$apellido','$Edad','$Celular')";
    $resultado = mysqli_query($conexion,$solicitud);
    header("location: index.php");

?>
