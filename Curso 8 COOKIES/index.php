<?php
/*COOKIES - 4:06:42
 24. Creación y manejo de cookies
  - SetCookie
  - $_cookie
 */
$mipais = $_POST['pais'];
//setcookie('pais','mexico',time()+3600,'/','www.mipagina.com',$_SERVER('HTTPS'));
setcookie("estado","$mipais",time()+3600);
echo $_COOKIE['estado'];