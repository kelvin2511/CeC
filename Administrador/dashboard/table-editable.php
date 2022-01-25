<?php include 'Template/Cabecerar.php';?> 
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtAcercade=(isset($_POST['txtAcercade']))?$_POST['txtAcercade']:"";
$Accion=(isset($_POST['Accion']))?$_POST['Accion']:"";


switch($Accion){
    case "Agregar";
        $sentenciaSQL = $conexion -> prepare("INSERT INTO  categoria (nombre,Acercade) VALUES (:nombre, :Acercade);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);      
        $sentenciaSQL->bindParam(':Acercade', $txtAcercade);
        $sentenciaSQL-> execute();   

       
		
			
         $path = "../assets/categoria/".$_POST["txtNombre"];
         if (!is_dir($path)) {
             mkdir($path, 0777, true);
         }
	

       // header("Location:Libros.php");
 
        break;

     case "Modificar";     
        $sentenciaSQL = $conexion -> prepare("UPDATE categoria SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL -> execute();    
        
        $sentenciaSQL = $conexion -> prepare("UPDATE categoria SET Acercade=:Acercade WHERE id=:id");
        $sentenciaSQL->bindParam(':Acercade', $txtAcercade);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL -> execute();  
      
       // header("Location:Libros.php");

        break;

    case "Cancelar";
        //header("Location:Libros.php");
        break;

    case "Seleccionar"; 
        $sentenciaSQL = $conexion -> prepare("SELECT * FROM categoria WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL -> execute(); 
        $categoria = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);

        $txtNombre=$categoria['nombre'];
        $txtAcercade=$categoria['Acercade'];
        break;

    case "Borrar";        
     
        $sentenciaSQL = $conexion -> prepare("DELETE FROM categoria WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);        
        $sentenciaSQL -> execute();                 
       // header("Location:Libros.php");     
        break;
        
}
$sentenciaSQL = $conexion -> prepare("SELECT * FROM categoria");
$sentenciaSQL -> execute();
$liscategoria = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Categoria</h4>
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
                                       <th>Name</th>   
                                       <th>Descripcion</th>                                
                                       <th>Acciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach($liscategoria as $categoria) {?>
                                    <tr>                                      
                                       <td contenteditable="true"><?php echo $categoria['nombre'];?></td>    
                                       <td contenteditable="true"><?php echo $categoria['Acercade'];?></td>                               
                                       <td>
                                       <form method="post">
                                          <input type="hidden" name="txtID" id="txtID" value="<?php echo $categoria['id'];?>"/>
                                          <input type="submit" name="Accion" value="Seleccionar" class="btn btn-primary"/>
                                          <input type="submit" name="Accion" value="Borrar" class="btn btn-danger"/> 
                                       </form>
                                       </td>
                                    </tr>
                                    <?php }?>   
                                 </tbody>
                              </table>

                              <!--Model-->

                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">New categoria</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                     </div>
                                     <div class="modal-body">
                                       <form  method="POST">
                                         <div class="form-group">
                                           <label for="recipient-name" class="col-form-label">Recipient:</label>
                                           <input type="text" class="form-control"name="txtNombre" id="txtNombre" >
                                         </div>
                                         <div class="form-group">
                                           <label for="message-text" class="col-form-label">Message:</label>
                                           <textarea class="form-control" name="txtAcercade" id="txtAcercade"></textarea>
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