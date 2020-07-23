<?php
//OPERADORES ARITMETICOS
/*OPERADORES - 1:45:55
 11. Aritméticos  
 12. De Asignación
 13. Comparación  
 14. De ejecución 
 15. De incremento y decremento
 16. Lógicos
 17. De cadena y concatenación
 18. Precedencia  
 */
echo 45 + 5 . "<br>";
echo 45 - 5 . "<br>";
echo 45 * 5 . "<br>";
echo 45 / 5 . "<br>";
echo 48 % 2 . "<br>";

//igual igul
$a = 20;
$b = 20;

if($a == $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}

//Mismo Tipo
$a = 20;
$b = '20';

if($a === $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}
//diferente
$a = 20;
$b = 20;

if($a != $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}
//diferente
$a = 20;
$b = 20;

if($a <> $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}
//menos que
$a = 6;
$b = 20;

if($a < $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}
//mayor que
$a = 6;
$b = 20;

if($a > $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}
//menos igual que
$a = 20;
$b = 20;

if($a <= $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}
//mayor igual que
$a = 20;
$b = 20;

if($a <= $b){
    echo "es TRUE". "<br>";
}else{
    echo "Es FALSE". "<br>";
}

//Nave espacial
$a = 20;
$b = 20;
//si la variable a es menor  igual o mayor que
echo $a <=> $b;//si es menor me regresa -1 si es igual me regresa 0 y si es mayor me da 1


//ternario
$a = 20;
$b = 20;
echo $a == $b ? "Es IGUAL":"NO ES IGUAL";

//fucion null
$a = 20;
$b = 20;
//si la variable no existe, asignar el valor de b, si no, no existe
echo $a ?? $b ?? "No Existe";

//Ejecucion
echo `dir`."<br>";
//De Incremento Y Decremento
/*
 * ++$a (preincremento)
 * $a++ (postIncremento)
 * --$a (predecremento)
 * $a-- (postdecremento)  
 */
$a = 5;
while($a <10){
    echo $a++."<br>";
}
echo "<br>";
//---
$a = 5;
while($a <10){
    echo ++$a."<br>";
}
echo "<br>";

//---
$a = 30;
while($a > 10){
    echo --$a."<br>";
}
//---
$a = 30;
while($a > 10){
    echo $a--."<br>";
}
//Logicos
/*
 *  
 */
$a =10;
$b = 20;
//AND
if($a == 10 && $b == 20){
    echo 'CORECTO';
    
} else {
    echo 'Incorecto';
}
echo "<br>";
//OR
if($a == 10 || $b == 20){
    echo 'CORECTO';
} else {
    echo 'Incorecto';
}
echo "<br>";
//XOR
if($a == 10 xor $b == 20){
    echo 'CORECTO';
    
} else {
 echo 'Incorecto';

}
echo "<br>";
//Negacin !S
if(!$a){
    echo 'CORECTO';
} else {
    echo 'Incorecto';
}

//Concatenacion
        $a="UNO";
        $b="DOS";
        $c="TRES";
        echo "<br>";
        echo $a.$b.$c;
     
//Precedencia
        /*
         **(Potenciacion)
         *multiplicacion
         /Divicion
         %
         +
         -
         <
         <=
         >
         >=
          
         ??
         ?
         and
         xor
         or 
         */
echo "<br>";
$a = 100;
//ESTRUCTURAS DE CONTROL - 2:29:32
 //19. Condicionales
// verificamos si existe y si esta vacia
if(isset($a) && empty($a)){
    echo 'Vacia';
}
// verificamos si existe y si no esta vacia
if(isset($a) && !empty($a)){
    echo 'Vacia';
}
echo "<br>";

if(is_integer($a)){
    echo is_integer($a);
}


$a =4;
switch($a){
    case 1 :echo "Uno";break;
    case 2 :echo "dos";break;
    case 3 :echo "tres";break;
    case 4 :echo "cuatro";break;
    default :echo 'ni uno';break;
}

