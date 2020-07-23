<?php
/*SESIONES - 3:40:47
 23. Manejo de sesiones
  - session_start
  - $_session
  - sesion_id
  - session_name
  - session_register
  - session_unset
  - session_destroy
  - header
 */
session_start();
//echo session_id();
//echo session_name();
//session_unset();
//session_destroy();
$_SESSION['NOMBRE'] ="LUIS";
$_SESSION['Edad'] =50;

/*//no usar
$nombre = "Luis";
session_register('nombre');
 */
?>
<form method="POST" action="index.php">
    Nombre de usuario: <input type="text" name="usuario"><br>
    Contrasena: <input type="password" name="contrasena"><br>
    <input type="submit" name="envio">
</form>
