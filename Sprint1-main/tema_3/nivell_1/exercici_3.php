
   <?php 
  
 

        $arrayDePalabras = ["Oscar", "Sacapuntas", "Lapices"];
        $caracter = readline("Escribe un caracter a ver si coincide con las tres palabras: ");

        function mirar_Caracteres($arrayDePalabras, $caracter) {
            
            foreach ($arrayDePalabras as $palabra) {
                $resultado = strpos($palabra, $caracter);
                if($resultado === false){
                    return false;
                }
                else{
                    return true;
                }
            }
        }
        if (mirar_Caracteres($arrayDePalabras, $caracter)) {
            echo "Todas las palabras contienen el carácter '$caracter'.";
        } else {
            echo "No todas las palabras contienen el carácter '$caracter'.";
        }
        
    
   ?> 
