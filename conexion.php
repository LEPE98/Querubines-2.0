<?php 
    $nombrebase='Proyecto_querubines';
    $user='root';
    $contrasena='';

    try{

    $conex = new PDO('mysql:host=localhost; dbname=Proyecto_querubines', $user ,$contrasena);
        echo"conexion exitosa";

          //$resultados=$conex->query('SELECT * FROM ninos');
           
          $resultados=$conex->query('INSERT INTO ninos VALUES (null,"José", "negro","28")');
           $resultados=$conex->query('SELECT * FROM ninos');

           foreach($resultados as $resultado){
           echo $resultado['id_nino'] .$resultado['nombre'] .$resultado['fecha_nacimiento'] .$resultado['genero'];
           echo '</br>';
           }

    }catch(PDOexception $e){
        echo 'Ocurrrio un error'.$e->getmessage();
    }

    ?>