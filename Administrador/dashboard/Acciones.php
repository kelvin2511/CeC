<?php

  // Receptor de fecha actual 
  $fechaActual = date('d-m-Y');
   

  // Receptor de hora, minutos y segundos actual
  $horaActual = date('H:i:s');
   

// Receptor de listados creados
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$Accion=(isset($_POST['Accion']))?$_POST['Accion']:"";

// Receptor de Reportes creados


// Receptor de estudiantes inscritos



// Acciones del listado
switch($Accion){
    case "Crear";
      
        $sentenciaSQL = $conexion -> prepare("INSERT INTO  listado (nombre,fecha,hora ) VALUES (:nombre, :fecha, :hora);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':fecha', $fechaActual);
        $sentenciaSQL->bindParam(':hora', $horaActual);
        $sentenciaSQL-> execute();   

        $sentenciaSQL = $conexion -> prepare(" CREATE TABLE $txtNombre(
             ID int(255) PRIMARY KEY,
             fecha VARCHAR(255),
             hora VARCHAR(255),
             nombre VARCHAR(255),
             comunicacion VARCHAR(255),
             situacion VARCHAR(255),
             solucion VARCHAR(255),
             estatus VARCHAR(255),
             atendido VARCHAR(255)
             );");     
         $sentenciaSQL-> execute();  

        // header("Location:Documentos.php");
 
        break;
  
     
       // header("Location:Documentos.php");

        break;


    case "Seleccionar"; 
        $sentenciaSQL = $conexion -> prepare("SELECT * FROM listado WHERE ID=:ID");
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 
        $selecionado = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);

        $txtNombre=$selecionado['nombre'];

      
       
        

    
        break;


        
}






?>
