<?php
/*
 * CLASES
 * OBJETO(INSTANCIACION)
 * CONSTRUCTOR
 * DESTRUCTOR
 * HERENCIA
 *   public function __construct($atributoUno,$atributoDos,$Correo){
        $this->uno =$atributoUno;
        $this->dos = $atributoDos;
        $correo = $Correo;
    }
 */

//Mi clase
class miClase{
    public $parametroUno;
    public $parametroDos;
    private $correo = 'eprimo68@gmail.com';
    public static $uno = "ESTO ES UN ATRIBUTO ESTATICO ";
    const MI_CONSTANTE = 3.1416;
    
    public function miMetodo1($parametroUno,$parametroDos){
        echo 'Su Nombre es: ',$parametroUno,"<br> Su edad es: ",$parametroDos;
    }
    
    public function miMetodo1_1(){
        echo $this -> correo;
    }
    
  
    
};

//Mis Objetos - Instanciacion
$miObjetoUno = new miClase;

//Insercion de datos
$miObjetoUno -> atributoUno = "Luis Gerardo";
$miObjetoUno -> atributoDos = "33";

//LLAMADO DE DATOS
echo $miObjetoUno -> atributoUno . "<br>";
echo $miObjetoUno -> atributoDos . "<br>";
$miObjetoUno->miMetodo1("Luis","33");


echo miClase::$uno . "<br>";
echo miClase::MI_CONSTANTE."<br>";

$miObjetoUno->miMetodo1_1();