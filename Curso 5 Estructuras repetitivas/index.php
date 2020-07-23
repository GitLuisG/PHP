<?php
/*20. Estructuras repetitivas
  - While
  - Do - while
  - For 
  - Foreach
  - Break
 */

$a = 10;
while($a < 20){
    echo $a++."<br>";
}
echo "<br>";
echo "<br>";
$a=10;
do{
    echo $a++."<br>";
}while($a < 20);
echo "<br>";
echo "<br>";

for($b=0;true;$b++){
    echo $b."<br>"; 
    
    if($b >= 10){
       break; 
    }
}

$semana = array("Lunes","Martes","Miercoles","Jueves","Viernes");

echo $semana[0]."<br>";
echo $semana[1]."<br>";

foreach($semana as $indice => $nueva){
    echo $indice."-".$nueva."<br>";
}

for($i=1; $i <= 50;$i++){
    if($i>=10 and $i<=20){
        continue;
    }
    
    echo $i.'<br>'; 
    if($i == 49){
        break;
    }
    
}