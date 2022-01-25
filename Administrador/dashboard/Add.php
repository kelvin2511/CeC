<?php include 'Template/Cabecerar.php';?> 
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtTitulo=(isset($_POST['txtTitulo']))?$_POST['txtTitulo']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtGenero=(isset($_POST['txtGenero']))?$_POST['txtGenero']:"";
$txtDuracion=(isset($_POST['txtDuracion']))?$_POST['txtDuracion']:"";
$txtEnlace=(isset($_POST['txtEnlace']))?$_POST['txtEnlace']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$Accion=(isset($_POST['Accion']))?$_POST['Accion']:"";


switch($Accion){
    case "Agregar";
        $sentenciaSQL = $conexion -> prepare("INSERT INTO  peliculas (titulo, descripcion, genero, duracion, enlace, imagen) VALUES (:titulo, :descripcion, :genero, :duracion, :enlace, :imagen);");
        $sentenciaSQL->bindParam(':titulo', $txtTitulo);      
        $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);
        $sentenciaSQL->bindParam(':genero', $txtGenero);
        $sentenciaSQL->bindParam(':duracion', $txtDuracion);
        $sentenciaSQL->bindParam(':enlace', $txtEnlace);
          

        $fecha = new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if($tmpImagen!=""){

            move_uploaded_file($tmpImagen,"../assets/images/Peliculas/".$nombreArchivo);
        } 

        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL-> execute();   
		


       // header("Location:Libros.php");
 
        break;

     case "Modificar";     
        $sentenciaSQL = $conexion -> prepare("UPDATE peliculas SET titulo=:titulo WHERE ID=:ID");
        $sentenciaSQL->bindParam(':titulo', $txtTitulo);
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute();    
        
        $sentenciaSQL = $conexion -> prepare("UPDATE peliculas SET descripcion=:descripcion WHERE ID=:ID");
        $sentenciaSQL->bindParam(':descripcion', $txtDescripcion);
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 

        $sentenciaSQL = $conexion -> prepare("UPDATE peliculas SET genero=:genero WHERE ID=:ID");
        $sentenciaSQL->bindParam(':genero', $txtGenero);
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 

        $sentenciaSQL = $conexion -> prepare("UPDATE peliculas SET duracion=:duracion WHERE ID=:ID");
        $sentenciaSQL->bindParam(':duracion', $txtDuracion);
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 

        $sentenciaSQL = $conexion -> prepare("UPDATE peliculas SET enlace=:enlace WHERE ID=:ID");
        $sentenciaSQL->bindParam(':enlace', $txtEnlace);
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 

        if($txtImagen != ""){

         $fecha = new DateTime();
         $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";            
         $tmpImagen=$_FILES["txtImagen"]["tmp_name"];
         
         move_uploaded_file($tmpImagen,"../assets/img/Peliculas/".$nombreArchivo);
         
         $sentenciaSQL = $conexion -> prepare("SELECT imagen FROM libros WHERE id=:id");
         $sentenciaSQL->bindParam(':id', $txtID);
         $sentenciaSQL -> execute(); 
         $tarea = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);

         if(isset($tarea["imagen"]) && ($tarea["imagen"]!="imagen.jpg")){

             if(file_exists("../assets/img/Peliculas/".$tarea["imagen"])){
                 unlink("../assets/img/Peliculas/".$tarea["imagen"]);
             };
         }

         $sentenciaSQL = $conexion -> prepare("UPDATE peliculas SET imagen=:imagen WHERE id=:id");
         $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
         $sentenciaSQL->bindParam(':id', $txtID);
         $sentenciaSQL -> execute(); 

         } 
      
         break;
    case "Cancelar";
        //header("Location:Libros.php");
        break;

        
    case "Seleccionar"; 
        $sentenciaSQL = $conexion -> prepare("SELECT * FROM peliculas WHERE id=:id");
        $sentenciaSQL->bindParam(':ID', $txtID);
        $sentenciaSQL -> execute(); 
        $Pelicula = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);

        $txtTitulo=$Pelicula['titulo'];
        $txtDescripcion=$Pelicula['descripcion'];
        $txtDuracion=$Pelicula['duracion'];
        $txtImagen=$Pelicula['imagen'];
        $txtEnlace=$Pelicula['enlace'];
        $txtGenero=$Pelicula['genero'];
        break;

    case "Borrar";        
     
        $sentenciaSQL = $conexion -> prepare("DELETE FROM peliculas WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);        
        $sentenciaSQL -> execute();                 
       // header("Location:Libros.php");     
        break;
        
}
$sentenciaSQL = $conexion -> prepare("SELECT * FROM peliculas");
$sentenciaSQL -> execute();
$lispelicula = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Peliculas</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                              <button class="btn btn-sm iq-bg-success" data-toggle="modal" data-target="#exampleModal">
                                <span class="pl-1">Añadir nuevo</span>
                              </button>
                              </span>
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                                 <thead>
                                    <tr>
                                       <th>Titulo</th>   
                                       <th>Descripcion</th>                                
                                       <th>Genero</th>
                                       <th>Duracion</th>
                                       
                                       <th>Opciones</th>
                                    </tr>
                                 </thead> 
                                 <tbody>
                                 <?php foreach($lispelicula as $Pelicula) {?>
                                    <tr>                                                                          
                                       <td contenteditable="true"><?php echo $Pelicula['titulo'];?></td>                               
                                       <td contenteditable="true"><?php echo $Pelicula['descripcion'];?></td>    
                                       <td contenteditable="true"><?php echo $Pelicula['genero'];?></td>                               
                                       <td contenteditable="true"><?php echo $Pelicula['duracion'];?></td>    
                                                                 
                                       <td>
                                       <form method="post">
                                          <input type="hidden" name="txtID" id="txtID" value="<?php echo $Pelicula['ID'];?>"/>
                                          
                                          <imput type="submit" class="btn btn-sm iq-bg-success" name="Accion" value="Seleccionar" data-toggle="modal" data-target="#exampleModal">
                                          
                                           
                                          <input type="submit" name="Accion" value="Borrar" class="btn btn-danger"/> 
                                       </form>
                                       </td>
                                    </tr>
                                    <?php }?>   
                                 </tbody>
                              </table>

                              <!--Model-->                                                   

                              <div class="modal fade bd-example-modal-lg" id="exampleModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg" role="document">


                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">New Pelicula</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                     </div>
                                     <div class="modal-body">
                                       <form  method="POST">
                                         <div class="form-group">
                                           <label for="recipient-name" class="col-form-label">Titulo:</label>
                                           <input type="text" class="form-control" name="txtTitulo" id="txtTitulo" >
                                         </div>
                                         <div class="form-group">
                                           <label for="message-text" class="col-form-label">Descripcion:</label>
                                           <textarea class="form-control" name="txtDescripcion" id="txtDescripcion"></textarea>
                                         </div>
                                         <div class="form-group">
                                           <label for="recipient-name" class="col-form-label">Genero:</label>
                                           <input type="text" class="form-control" name="txtGenero" id="txtGenero" >
                                         </div>
                                         <div class="form-group">
                                           <label for="recipient-name" class="col-form-label">Duracion:</label>
                                           <input type="text" class="form-control" name="txtDuracion" id="txtDuracion" >
                                         </div>
                                         <div class="form-group">
                                           <label for="recipient-name" class="col-form-label">Enlace de Mega:</label>
                                           <input type="text" class="form-control" name="txtEnlace" id="txtEnlace" >
                                         </div>
                                         <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Imagen de Portada:</label>
                                            <div class="custom-file">
                                               <input type="file" class="custom-file-input" name="txtImagen" id="txtImagen">
                                               <label class="custom-file-label" for="customFile">Seleciona una imagen</label>
                                             </div>
                                          </div>
                                       
                                     </div>
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" name="Accion" data-dismiss="modal">Close</button>
                                       <button type="submit" name="Accion" value="Agregar"class="btn  btn-primary">Guardar</button>                                       
                                     </div>
                                     </form>
                                   </div>


                                 </div>
                               </div> 

                              <!---->

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
<?php include 'Template/Pie.php';?> 