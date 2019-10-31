<?php 

//Conectar a la base de datos

include 'conexion.php';



$usuario=$_POST['username'];

$password=$_POST['password'];

    
    $mysqli = new  mysqli("SELECT * FROM `estudiantes` WHERE usuarioAsignado = 'mepvsd19v' AND password='$password' ");
      
        
if($mysqli){
    

    echo '<br>';
     header("Location:../panelEvaluacion.php");
            
    
    
}

    else{
        
        echo "Datos no validos";
       
    }
mysqli_close($servidor); //cierra conexion
 

?>