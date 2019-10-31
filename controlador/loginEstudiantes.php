<?php 

//Conectar a la base de datos

include 'conexion.php';



$usuario=$_POST['username'];


    
    $mysqli = new  mysqli("SELECT * FROM `estudiantes` WHERE usuarioAsignado = '$usuario' ");
        
    if ($mysqli==true){
      
    echo '<br>';
     header("Location:../evaluacionAlumnos.php");
            
    
    
}

    else {
        
        echo "Datos no validos";
       
    }

?>