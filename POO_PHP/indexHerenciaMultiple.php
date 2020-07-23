<?php
/*
 * CLASES
 * OBJETO(INSTANCIACION)
 * CONSTRUCTOR
 * DESTRUCTOR
 * HERENCIA
 *   
 */

//Mi clase

trait herenciaMultiple{
    public function multiple(){
        echo "Esto es una herencia multiple";
    }
}

class dos{
    use herenciaMultiple;
}

class tres{
    use herenciaMultiple;
}

$a = new dos;
$a -> multiple();

echo "<br>";

$a = new tres;
$a -> multiple();