<?php 
    // ejemplos de uso de constantes mágicas:
   // He creado una clase para poner en contexto el uso de __METHOD__
    class Users{
        public $nombre;
        public $email;
        protected $password;
    
        public function __construct($nombre, $email, $password){
            $this->nombre = $nombre;
            $this->email = $email;
            $this->password = $password;
        }
        
        public function get_nombre(){
            return __METHOD__;
        }
        public function get_email(){
            return $this->email;
        }
        public function get_password(){
            return $this->password;
        }
    }
    $user1 = new Users("oscar","oscar@elmio.com","12345");
  
   

    // uso de constante del metodo 
    echo "Método actual: " . $user1->get_nombre() . "<br>";
    //otro ejemplo de uso de constante esta el para acceder al directorio del archivo actual
   echo "<a href='".__DIR__."/exercici_1/index.php'>Ir al formulario</a>";

?>