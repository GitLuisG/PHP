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
    //Ordenar ASC ES ASENDENTE
    //Ordenar DESC ES Desendente
    $solicitud = "select * from datos ORDER BY Edad ASC";
    $resultado = mysqli_query($conexion,$solicitud);
    echo "<table border= '1'><tr><td>Nombre</td><td>Apellido</td><td>Edad</td><td>Celular</td><td colspan='2'>Acciones</td></tr>";
    
    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>${fila['Nombre']}</td>";
        echo "<td>${fila['Apellido']}</td>";
        echo "<td>${fila['Edad']}</td>";
        echo "<td>${fila['Celular']}</td>";
        echo "<td><a href='Borrar_registros.php?id=${fila['ID']}'>Eliminar</a></td>";
        echo "<td><a href='Actualizar_registros.php?id=${fila['ID']}'>Modificar</a></td>";
        echo '<tr>';
    }
    echo '</table>';
?>
