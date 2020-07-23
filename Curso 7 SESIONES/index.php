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

//echo session_id();
//echo session_name();
//session_unset();
//session_destroy();
$user = "Luis";
$password="Luis";
if($_POST['usuario'] == $user && $_POST['contrasena']==$password){
    session_start();
    $_SESSION['NOMBRE'] = "Luis Gerardo Perales Torres";
    $_SESSION['Edad'] =300;
    header('location: indexHelp.php');
}else{
    echo 'ES INCORRECTO';
    header('location: index_1.php');
}


/*//no usar
$nombre = "Luis";
session_register('nombre');
 */
