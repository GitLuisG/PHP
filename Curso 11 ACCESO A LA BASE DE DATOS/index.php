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

$solicitud = "CREATE TABLE datos(ID int NOT NULL AUTO_INCREMENT,Nombre varchar(15), Apellido varchar(15), Edad int,Celular int,PRIMARY KEY(ID))";
$resultado = mysqli_query($conexion,$solicitud);
?>

<form method="POST" action="Enviar_datos.php">
    Nombre: <input type="text" name="nombre"><br>
    apellido: <input type="text" name="apellido"><br>
    Edad: <input type="text" name="Edad"><br>
    Celular: <input type="text" name="Celular"><br>
    <input type="submit" name="Enviar" value="1"> 
</form>
    
</form>