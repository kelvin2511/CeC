
<?php

// Receptor de listados creados
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtFecha=(isset($_FILES['txtFecha']['name']))?$_FILES['txtFecha']['name']:"";
$Accion=(isset($_POST['Accion']))?$_POST['Accion']:"";

// Receptor de Reportes creados


// Receptor de estudiantes inscritos


include("../Config/bd.php");

// Acciones del listado
switch($Accion){
    case "Crear";
        $sentenciaSQL = $conexion -> prepare(" CREATE TABLE '$txtNombre'(
            ID VARCHAR(6) PRIMARY KEY,
            fecha DATE,
            hora TIME,
            nombre VARCHAR(255),
            comunicacion VARCHAR(255),
            situacion VARCHAR(255),
            solucion VARCHAR(255),
            estatus VARCHAR(255),
            atendido VARCHAR(255),
            )");     
        $sentenciaSQL-> execute();  

        $sentenciaSQL = $conexion -> prepare("INSERT INTO  listado (nombre,fecha ) VALUES (:nombre, :fecha);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':fecha', $txtFecha);
        $sentenciaSQL-> execute();   

        // header("Location:Documentos.php");
 
        break;

     case "Modificar";     
        $sentenciaSQL = $conexion -> prepare("UPDATE listado SET nombre=:nombre WHERE ID=:ID");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute();          
    
        $sentenciaSQL = $conexion -> prepare("UPDATE listado SET fecha=:fecha WHERE ID=:ID");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute();   
     
       // header("Location:Documentos.php");

        break;

    case "Cancelar";
       // header("Location:Documentos.php");
        break;

    case "Seleccionar"; 
        $sentenciaSQL = $conexion -> prepare("SELECT * FROM listado WHERE ID=:ID");
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 
        $selecionado = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);

        $txtNombre=$selecionado['nombre'];
        $txtFecha=$selecionado['fecha'];
        break;

    case "Borrar";
        $sentenciaSQL = $conexion -> prepare("SELECT nombre FROM listado WHERE ID=:ID");
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 
        
        $sentenciaSQL = $conexion -> prepare("DELETE FROM listado WHERE ID=:ID");
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute();   
        // header("Location:Documentos.php");     
        break;
        
}
$sentenciaSQL = $conexion -> prepare("SELECT * FROM listado");
$sentenciaSQL -> execute();
$listarea = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);




?>
