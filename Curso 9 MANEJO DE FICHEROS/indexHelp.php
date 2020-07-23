<?php
session_start();
echo "Bienvenido ".$_SESSION['NOMBRE']."<br>";
echo $_SESSION['NOMBRE'];
echo $_SESSION['Edad'];
echo "<br><a href='indexFin.php'>Cerrar session</a>";