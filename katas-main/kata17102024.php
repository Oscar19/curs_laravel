<?php 
    function table($table){
        //horizontales
        for ($i = 0; $i < 3; $i++) {
            if ($table[$i][0] == $table[$i][1] && $table[$i][1] == $table[$i][2] && $table[$i][0] != '-') {
                return $table[$i][0];
            }
        }
        
    }
    $tauler1 = [
        ['X', 'O', 'O'],
        ['O', 'X', 'O'],
        ['-', 'O', 'X']
    ];
    
    $tauler2 = [
        ['O', 'X', '-'],
        ['O', 'X', '-'],
        ['O', '-', '-']
    ];
    
    $tauler3 = [
        ['O', 'X', 'O'],
        ['X', 'O', 'X'],
        ['X', 'X', 'O']
    ];
?>