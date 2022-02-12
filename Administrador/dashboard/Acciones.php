
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
$txtMatricula=(isset($_POST['txtMatricula']))?$_POST['txtMatricula']:"";
$txtFecha=(isset($_POST['txtFecha']))?$_POST['txtFecha']:"";
$txtHora=(isset($_POST['txtHora']))?$_POST['txtHora']:"";
$txtEstudiante=(isset($_POST['txtEstudiante']))?$_POST['txtEstudiante']:"";
$txtComunicacion=(isset($_POST['txtComunicacion']))?$_POST['txtComunicacion']:"";
$txtSituacion=(isset($_POST['txtSituacion']))?$_POST['txtSituacion']:"";
$txtSolucion=(isset($_POST['txtSolucion']))?$_POST['txtSolucion']:"";
$txtEstatus=(isset($_POST['txtEstatus']))?$_POST['txtEstatus']:"";
$txtAtendido=(isset($_POST['txtAtendido']))?$_POST['txtAtendido']:"";
$txtSeleccion=(isset($_POST['txtSeleccion']))?$_POST['txtSeleccion']:"";


// Acciones del listado
switch($Accion){
    case "Crear";
      
        $sentenciaSQL = $conexion -> prepare("INSERT INTO  listado (nombre,fecha,hora ) VALUES (:nombre, :fecha, :hora);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':fecha', $fechaActual);
        $sentenciaSQL->bindParam(':hora', $horaActual);
        $sentenciaSQL-> execute();   

        $sentenciaSQL = $conexion -> prepare(" CREATE TABLE $txtNombre(
             ID int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
             matricula VARCHAR(255),
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
        $FechaSeleccionado=$selecionado['fecha'];
        $HoraSeleccionado=$selecionado['hora'];

    
        break;

        case"Agregar";
        $sentenciaSQL = $conexion -> prepare("INSERT INTO  $txtSeleccion (matricula,fecha,hora,nombre,comunicacion,situacion,solucion,estatus,atendido ) VALUES (:matricula, :fecha, :hora, :nombre, :comunicacion, :situacion, :solucion, :estatus, :atendido);");
        $sentenciaSQL->bindParam(':matricula', $txtMatricula);
        $sentenciaSQL->bindParam(':fecha', $txtFecha);
        $sentenciaSQL->bindParam(':hora', $txtHora);
        $sentenciaSQL->bindParam(':nombre', $txtEstudiante);
        $sentenciaSQL->bindParam(':comunicacion', $txtComunicacion);
        $sentenciaSQL->bindParam(':situacion', $txtSituacion);
        $sentenciaSQL->bindParam(':solucion', $txtSolucion);
        $sentenciaSQL->bindParam(':estatus', $txtEstatus);
        $sentenciaSQL->bindParam(':atendido', $txtAtendido);
        $sentenciaSQL-> execute();  

        
        
         header('Location: ');
        break;


        
}






?>
