<?php
    
    try{
         $conexion = new PDO('mysql:host=klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306;dbname=m44g2f3mhvnwmm54', 'w61xlg76nntfapxd', 'mmy0ca819v07kxej');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>