<?php
/*ARREGLOS O ARRAYS - 3:18:40
 21. Unidimensional
  - Predefinidos 
  - Asociativos
 22. Multidimensional
  - Predefinidos 
  - Asociativos
 */
$dia["Uno"] = "Lunes";
$dia["Dos"] = "Martes";
$dia["Tres"] = "Miercoles";
$dia["Cuatro"] = "Jueves";
$dia["Cinco"] = "Viernes";
$dia1[] = "Lunes";
$dia1[] = "Martes";
$dia1[] = "Miercoles";
$dia1[] = "Jueves";
$dia1[] = "Viernes";
echo $dia1[0];
echo $dia["Uno"];

$semana = array("Lunes","Martes","Miercles","Jueves","Viernes");
echo $semana[3];
$semanaall = ["Lunes","Martes","Miercles","Jueves","Viernes","sabado","DOMINGO"];
echo $semanaall[6];

$semana = array("Uno" => "Lunes","Dos" => "Martes","Tres" => "Miercles","Cuatro" => "Jueves","Cinco" => "Viernes");
echo $semana["Uno"];

$semana = [
    [10,20,30,40,50],
    [100,200,[300,301],400,500],
    ["Gato","Perro","Loro"],
];
echo $semana[1][2][1];

$semana = [
    "Uno"=>  [  10,
                20,
                30,
                40,
                50],
    "Dos"=>  [
        100,
        200,
        [300,301],
        400,
        500],
    "Tres"=> [
        "Gato",
        "Perro",
        "Loro"],
];
echo "<br>".$semana["Uno"][2];