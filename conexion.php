<?php
    
    try{
         $conexion = new PDO('mysql:host=127.0.0.1;dbname=dbtlaxroom', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>