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
$solicutud = "SELECT * FROM datos WHERE ID=$id";
$resultado = mysqli_query($conexion,$solicutud);

?>
<form method="POST" action="Actualizar.php">
    <?php
    while($fila = mysqli_fetch_array($resultado)){
        echo "Nombre: <input type='text' name='Nombre' Value='${fila['Nombre']}'><br>";
        echo "Apellido: <input type='text' name='Apellido' Value='${fila['Apellido']}'><br>";
        echo "Edad: <input type='text' name='Edad' Value='${fila['Edad']}'><br>";
        echo "Celular: <input type='text' name='Celular' Value='${fila['Celular']}'><br>";
       echo "<input type='hidden' name='id' Value='${fila['ID']}'><br>";
    }
    echo "<input type='submit' name='Enviar' Value='Cambiar'><br>";
    ?>
</form>
