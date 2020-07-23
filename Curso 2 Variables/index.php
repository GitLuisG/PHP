<?php
/* 5. Variables 
  - Palabras reservadas en PHP 
  - Buenas prácticas
  - Averiguar el tipo de variable  
 */
//---------------------------
//-Declaracion
//-Inicializacion

$_uno = 1234;

echo $_uno,"<br>";

//------------
//Metodologia de camel case
$estudianteColegioUniversidad = "Jose Gonzales";
//-------------------------
//gettype menciona el tipo de dato de la variable
//var_dump menciona 
$dia = 'Lunes';
echo $dia,"<br>";
echo gettype($dia),"<br>";
echo var_dump($dia);

$dia = "Lunes";
echo $dia,"<br>";
echo gettype($dia),"<br>";
echo var_dump($dia);
$dia = 12345;
echo $dia,"<br>";
echo gettype($dia),"<br>";
echo var_dump($dia);
//--------
$dia = 12345;
echo "<br>Hola , el numero es: $dia <br>";
echo 'Hola , el numero es: $dia <br>';
//----------------
$x = "TIPOS DE DATOS ESCALARES";

$x = "Enteros";
    $a = 1236;//Enteros
    $b = -45;//negativos
    $c = 0350;//octales
    $d = 0xa5;//hexadecimales
    
$x = "Float";
    $e = 2.8e4;//float
    $f = 10.123;//double
    
$x = "Cadena";
    $g = 'Juan Jose Gonzales';
    
    /*
     * \n : nueva linea
     * \r : retorno de carro
     * \t : tabulacion
     * \\ : barra invertida
     * \$ : signo de dolar
     * \" :Commillas dobles
     *      
     */
    //===========
    $nombre = "Jose Gonzales";
    
    echo "<p>$nombre</p>";
    //----------------------------------
    echo "<br>"."ninos\\as";
    echo "<br>"."Todas las personas de la \"TERCERA\"EDAD";
    echo "<br>"."El precio es 15\$us";
    //-----------------------------------
    $nombre = "Jose jose";
    $apellido = "Gonzales mendez";
    echo "<br>".$nombre. " " .$apellido;
    
   //--------------------------------
    $x = "Boleanos - valores logicos";
        $h = FALSE;
        $i = TRUE;
    //-------------------------------