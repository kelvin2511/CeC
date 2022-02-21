<?php include 'Template/Cabecerar.php';?> 
<?php include 'Modales.php';?> 
<?php include 'Acciones.php';?>
<!-- Page Content  -->

<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">                        
                  <div class="iq-header-title">
                     <h4 class="card-title">Listado de estudiantes</h4> <?php 
                  
                  if($txtNombre!=""){
                     echo $txtNombre;

                     $sentenciaSQL = $conexion -> prepare("SELECT * FROM $txtNombre ");
                     $sentenciaSQL -> execute();
                     $liscategoria = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);
                     
                   }else{

                     echo "No hay nada seleccionado";
                   }      
                  
                  ?> 
                  </div>
                  
                  <button class="btn btn-sm iq-bg-success" data-toggle="modal" data-target="#Nuevo-Usuario">
                     <span class="pl-1">Añadir nuevo</span>
                  </button>
                 
                       
               </div>
               <div class="iq-card-body">
                  <div class="table-view">
                     <table class="data-tables table movie_table" style="width:100%">
                        <thead>
                           <tr>
                              <th >Matricula</th>
                              <th >Fecha</th>
                              <th >Hora</th>
                              <th >Nombre</th>
                              <th >Via de Comunicacion</th>
                              <th >Situacion</th>
                              <th >Solucion</th>
                              <th >Estatus</th>
                              <th >Atendido por</th>
                              <th >Acciones</th>
                           </tr>
                        </thead>
                        <tbody>
                          
                        <?php if($txtNombre!=""){ foreach($liscategoria as $categoria) { ?>
                           <tr>                                      
                              <td><?php echo $categoria['matricula']?></td>
                              <td><?php echo $categoria['fecha']?></td>
                              <td><?php echo $categoria['hora']?></td>
                              <td><?php echo $categoria['nombre']?></td>
                              <td><?php  echo $categoria['comunicacion']?></td> 
                              <td><?php echo $categoria['situacion']?></td>                                                               
                              <td><?php  echo $categoria['solucion']?></td>
                              <td><span class="badge iq-bg-success"><?php echo $categoria['estatus']?></span></td> 
                              <td><?php  echo $categoria['atendido']?></td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>   
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver" href="#"><i class="las la-eye"></i></a>   
                                 </div>
                              </td>
                           </tr>
                           <?php }  } else{}?>        
                        </tbody>
                     </table>
                  </div>
               </div>                     
            </div>                     
         </div>                  
      </div>
   </div>   
</div>
<!-- Wrapper END -->



<!--Modal para agregar estudiantes-->                                                   
<div class="modal fade bd-example-modal-lg" id="Nuevo-Usuario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="POST">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Matricula:</label>
                        <input type="text" class="form-control" name="txtMatricula" id="txtMatricula" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Fecha:</label>
                        <input  type="text" class="form-control"  name="txtFecha" id="txtFecha">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora:</label>
                        <input  type="text" class="form-control" name="txtHora" id="txtHora" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre del Estudiante:</label>
                        <input type="text" class="form-control" name="txtEstudiante" id="txtEstudiante" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Via de Comunicacion:</label>
                        <!-- <input type="text" class="form-control"  > -->
                        <select name="txtComunicacion" id="txtComunicacion" class="form-control mb-3">
                            <option selected="">Elija una opcion</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Situacion:</label>
                        <!-- <input type="text" class="form-control"  > -->
                        <select name="txtSituacion" id="txtSituacion" class="form-control mb-3" <?php echo $txtID ?> >
                            <option selected="">Elija una opcion</option>
                            <option value="Seleccion de materia">Seleccion de materia</option>
                            <option value="Ayuda con la plataforma">Ayuda con la plataforma</option>
                            <option value="Revision de asignaturas">Revision de asignaturas</option>
                        </select> 
                    </div>  
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Solucion:</label>
                        <!-- <input type="text" class="form-control"  > -->
                        <select name="txtSolucion" id="txtSolucion" class="form-control mb-3">
                            <option selected="">Elija una opcion</option>
                            <option value="Se le atendio por la plataforma">Se le atendio por la plataforma</option>
                            <option value="Se le transfirio a servicio">Se le transfirio a servicio</option>
                            <option value="3">Proximamente</option>
                        </select> 
                    </div>                  
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Estatus: </label>
                        <!-- <input type="text" class="form-control"  > -->                                                     
                        <select name="txtEstatus" id="txtEstatus" class="form-control mb-3">
                            <option selected="">Elija una opcion</option>
                            <option value="1">Resuelto</option>
                            <option value="2">No Resuelto</option>
                            <option value="3">Proximamente</option>
                        </select>                         
                    </div>                    
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Atendido por:</label>
                        <!-- <input type="text" class="form-control" name="txtAtendido" id="txtAtendido" > -->
                        <select name="txtAtendido" id="txtAtendido" class="form-control mb-3">
                            <option selected="">Elija una opcion</option>
                            <?php foreach($lisesmpleado as $lista) { ?>
                            <option value="<?php echo $lista['nombre'] ?>"><?php echo $lista['nombre'] ?></option>
                            <?php }  ?>
                        </select> 
                    </div>
                    <div class="form-group">
                        
                        <input hidden type="text" class="form-control" value="<?php echo $txtNombre?>" name="txtSeleccion"  id="txtSeleccion" >
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" name="Accion" data-dismiss="modal">Close</button>
                    <button type="submit" name="Accion" value="Agregar" class="btn  btn-primary">Guardar</button>                                       
                </div>
            </form>
        </div>
    </div>
</div> 
<!-- Final Modal para agregar estudiantes-->

<?php include 'Template/Pie.php';?> 

<!-- <td><span class="badge iq-bg-success">Active</span></td>
<td><span class="badge iq-bg-primary">Block</span></td>
<td><span class="badge iq-bg-warning">Pending</span></td> -->
