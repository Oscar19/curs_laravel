
<?php

    function isBitten() {
        $random_number = rand(0, 1);
        if ($random_number <= 0.5) {
            return true;
        } else {
            return false;
        }
    }
    
    if (isBitten()) {
        echo "<h3>Charlie te ha mordido el dedo.</h3>";
    } else {
        echo "<h3>Charlie no te ha mordido el dedo.</h3>";
    }
?>

 