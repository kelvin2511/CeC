<?php include 'Template/Cabecerar.php';?>
<<<<<<< HEAD
<?php include 'Modales.php';?> 
<?php include 'Acciones.php';?>

<?php 

$sentenciaSQL = $conexion -> prepare("SELECT * FROM  prueba ");
$sentenciaSQL -> execute(); 
$listaestudiantes = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);



?>
<!-- Page Content  -->



=======


<!-- Page Content  -->

>>>>>>> 38fa94264d67ff8130b18b3d12cfaa2b766a963f
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">                        
                  <div class="iq-header-title">
<<<<<<< HEAD
                     <h4 class="card-title">Listado de estudiantes <?php 
                  
                  if($txtNombre!=""){
                     echo $txtNombre;
                     
                   }else{

                     echo "No hay nada seleccionado";
                   }      
                  
                  ?>  
                  </div> </h4>               
=======
                     <h4 class="card-title">Listado de estudiantes</h4> 
                  </div>
>>>>>>> 38fa94264d67ff8130b18b3d12cfaa2b766a963f
                  
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

                         <?php   foreach($listaestudiantes as $Estudiantes) { ?>
                              <tr>
                                 <td><?php echo $Estudiantes['ID']?></td>
                                 <td><?php echo $Estudiantes['fecha']?></td>
                                 <td><?php echo $Estudiantes['hora']?></td>
                                 <td><?php echo $Estudiantes['nombre']?></td>
                                 <td><?php echo $Estudiantes['comunicacion']?></td> 
                                 <td><?php echo $Estudiantes['situacion']?></td>                                                               
                                 <td><?php echo $Estudiantes['solucion']?></td>
                                 <td><span class="badge iq-bg-success"><?php echo $Estudiantes['estatus']?></span></td> 
                                 <td><?php echo $Estudiantes['atendido']?></td>
                                 <td>
                                    <div class="flex align-items-center list-user-action">
                                       <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                       
                                    </div>
                                 </td>
                              </tr>
                           </tr>
                           <?php }  ?>  

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
<?php include 'Template/Pie.php';?> 

<!-- <td><span class="badge iq-bg-success">Active</span></td>
<td><span class="badge iq-bg-primary">Block</span></td>
<<<<<<< HEAD
<td><span class="badge iq-bg-warning">Pending</span></td> -->

=======
<td><span class="badge iq-bg-warning">Pending</span></td> -->
>>>>>>> 38fa94264d67ff8130b18b3d12cfaa2b766a963f
