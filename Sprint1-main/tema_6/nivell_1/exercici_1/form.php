<?php session_start(); 
          
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $lenguaje = $_POST['lenguaje'];
            
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    echo "Sesión : " . $_SESSION['nombre'] . " ".$_SESSION['apellido'] ;
            

    echo "Tus datos";
    echo "Nombre de usuario: ". $nombre ."\n";
    echo "Apellido: ". $apellido ."\n";
    echo "lenguaje: ". $lenguaje ."\n";
 ?>
