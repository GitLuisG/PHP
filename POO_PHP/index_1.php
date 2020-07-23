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
class miClase{
    
    
    private $correo;
    const MI_CONSTANTE = 3.1416;
    
    public function __construct($atributoUno,$atributoDos,$Correo){
        $this->uno =$atributoUno;
        $this->dos = $atributoDos;
        $correo = $Correo;
    }
    
    public function miMetodo1(){
        echo 'Su Nombre es: ',$this->uno ,"<br> Su edad es: ",$this->dos;
    }
    
    public function miMetodo1_1(){
        echo $this -> correo;
    }
    
    public function __destruct() {
        echo "<br>esto es un Destructor";
    }
    
    
};

class miHerencia extends miClase{
    public function miMetodoHerencia() {
        echo $this -> dos;
        
    }
};

$miObjetoUno = new miClase("Luis",30,'eprimo68@gmail.com');

$miObjetoUno->miMetodo1();

$miObjetoUno = new miHerencia("Gerardo",12,'primo68@gmail.com');

$miObjetoUno->miMetodoHerencia();