<?php 
    /*
     Donada una expressió matemàtica de l'estil:

    (3 + 4) * 2
    o
    (5 + 3) * (3 - 1)

    Fes un programa que avaluï que els parells de parèntesis estàn correctament equilibrats en una expressió matemàtica.
    Input

        (3 + 4) * 2
        (5 + 3) * (3 - 1)
        (5 + 3 * (3 - 1)

    Output

        Correcte
        Correcte
        Incorrecte

     */
    
    function verificarParentesis($formula) {
        $buscar = [];
    
   
        for ($i = 0; $i < strlen($formula); $i++) {
            $caracter = $formula[$i];
    
            if ($caracter == '(') {
                array_push($buscar, '(');
            }
    
        
            if ($caracter == ')') {
            
                if (empty($buscar)) {
                    return "No has abierto parentesis $i\n";
                }
                array_pop($buscar);
            }
        }
    
        if (!empty($buscar)) {
            return "Faltan paréntesis de cerrar.\n";
        } else {
            return "La fórmula está bien.\n";
        }
    }
    
 
    $formula = readline("Escribe la formula: ");
    

    echo verificarParentesis($formula);