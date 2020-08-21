<?php
include("base.php");
$email=$_POST['email'];
$name1=$_POST['name1'];
$mensaje1=$_POST['mensaje1'];


    
        if(strlen($mensaje1)>1000){
            echo "Súpero los 1000 caracteres";
        }else{
            $variable="INSERT INTO comentarios( nombre, correo, mensaje) VALUES('$name1', '$email', '$mensaje1')";
            $query= mysqli_query($db, $variable);
    
        }
    ?>
    


