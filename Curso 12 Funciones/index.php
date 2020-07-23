<?php
/*
FUNCIONES - 6:17:41
 34 Funciones propias
  - Sin parámetros
  - Con parámetros
 35. Funciones predefinidas mas usadas
 */

function uno(){
    return 'Hola a todos <br>';
}

echo uno();

function dia($uno,$dos,$tres){
    
    echo $uno;
}
dia("Lunes","Marte","Miercoles");
/*
 * Funciones principales o mas usadas de php
 * 1.Funciones de cadena /texto
 *  -strtoupper($variable);-todo en Mayuscula
 *  -strtolower($variable);-todo en minusculas
 *  -ucfirst($variable);-capitalice
 *  -ucwords($variable);-primera letra de cada palabra
 *  -strtr($variable);
 *  -strlen($variable);-cantidad de letras
 *  -strrev($variable);-devuelve al reves
 *  -chr($variable);-devuelve el codigo ASCII
 * 
 * 2.Funciones Matematicas
 *  -is_int();-Comprueba si es entero 
 *  -is_float();-comprueva si es de coma flotante
 *  -is_numeric();- comprueva si es numero
 *  -round($a,numeroderedondeo);-redondea el valor
 *  -intval($variable);-Obtiene el valor del entero, sin redondear
 *  -rand(5,15);-aleatorio
 *  -min(2,9,7,6);-el valor mas bajo
 *  -max(2,9,7,6);-el valor mas alto
 *      -Ejemplo $a = array(5,9,8,7,4,5,6);echo min($a);
 *  -pow($valor, exponente);-exprecion exponencial
 *  -sqrt($numero);- raiz cuadrada
 * 
 * 3 Funciones de feechas
 *  -checkdate(_,_,_);-verifica si la fechaes correcta
 *  -date(_-_-_);-ponela fecha
 *      -L - devuelve el dia
 *      -M -mes numero con 0 inicial
 *      -Y - ano
 *      -d - dia
 *      -w - el numero del dia comenzando en lunes
 *  -getdate();
 *      -seconds
 *      -minutes
 *      -hours
 *      -mday
 *      -mon
 *      -year
 *      -yday
 *      -weekday
 *      -mounth
 *      -EJ:$a=getdate();print_r($a);
 *  4. Funciones de array
 *      -range(_,_);
 *      -count($variable);
 *      -in_array('rojo',$color);
 *      -unset($a[2]);
 *      -current();
 *      -next();
 *      -recorre();
 *      -prev();
 *      -end();
 *      -key();
 *      -array_flip();
 *      -array_reverse();
 *      -shuffle();
 *      -array_push();
 *      -array_pop();
 *      PARA ORDENAR
 *      -Asort();-ascendente
 *      -Arsort();-descendente
 *      -ksort();-ascendente con el indice
 *      -krsort();-descendente con el indice
 *      -sort();-ascendente
 *      -rsort();-descendente
 *  5.Funciones de control
 *      -isset(); = determina si una variable esta DECLARADA(si existe) y si no es null(variable sin valor)
 *      -!isset();
 *      -empty(); -determina si una variable esta vacia
 *      -!empty();
 *      -unset();- destruye una variable
 *      -is_null();
 *      -is_integer();
 *      -is_double();
 *      -is_string();
 *      -intval();
 *      -doubleval();
 *      -strval();
 *      -request['variable'];
 *  6.Funciones de acabado o finalizacion
 *      -exit()
 *      -Die()
 *      -Endif
 *      -Endfor
 *      -endwitch
 *  7.Funciones de insercion
 *      -include('nombreDocumento');
 *      -include_Once('Doumento');
 *      -require("Doumento");
 *      -reqire_once('Doumento');
 *  
 */
$letra = 'esto esta en minusculas';

echo "<br>".strtoupper($letra);

$letra = 'ESTO ESTA EN MAYUSCULA';

echo "<br>".strtolower($letra);
//-------------------------------
$letra = 'esto esta en Capital';
echo "<br>".ucfirst($letra);
//-------------------------------
$letra = 'tiene';
echo "<br>".ucwords($letra);
//-------------------------------
$letra = 'tiene';
//mal echo "<br>".strtr($letra);
//-------------------------------
$letra = 'tiene';
echo "<br>".strlen($letra);
//-------------------------------
$letra = 'tiene';
echo "<br>".strrev($letra);
//===============

echo "<br>".date('Y - m - d');
//================================
