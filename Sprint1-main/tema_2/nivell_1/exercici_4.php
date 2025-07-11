
<?php 
   
        $num = readline("Introdueix el número final: \n");
        $comptar = readline("De cuant en cuant vols comptar: \n");
       
      
        function calcula($num =10, $comptar = 1){
            for($i = 0; $i <= $num; $i += $comptar)
            { 
                
                echo $i ." => ". $comptar. "\n";  
            }
        }
       calcula($num, $comptar);
        calcula();
        
        
    
?>

