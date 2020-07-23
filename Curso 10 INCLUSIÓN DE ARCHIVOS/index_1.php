<?php
/*
INCLUSIÓN DE ARCHIVOS - 4:48:51
 26. Inserción
  - require
  - include
  - require_once // lo mismo pero solo una vez
  - include_once // lo mismo pero solo una vez
*/
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            require("./cabecera.php");
        ?>
                <form method="POST" action="index.php">
                        Asunto: <input type="text" name="asunto"><br>
                        Mensaje: <textarea name="mensaje" rows="10" cols="30"></textarea><br>
                        <input type="submit" name="envio">
                </form>
        <?php
    include("./footer.php");
    ?>
    </body>
</html>

