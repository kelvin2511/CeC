<?php include 'Template/Cabecerar.php';?>


<!-- Page Content  -->

<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">                        
                  <div class="iq-header-title">
                     <h4 class="card-title">Listado de estudiantes</h4> 
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
                          
                              <tr>
                                 <td>
                                    20-EISM-1-013
                                 </td>
                                 <td>31/01/2022</td>
                                 <td>10:00 PM</td>
                                 <td>Maria teresa</td>
                                 <td>1</td> 
                                 <td>Seleccion y retiro</td>                                                               
                                 <td>Se le atendio por la plataforma</td>
                                 <td><span class="badge iq-bg-success">Active</span></td> 
                                 <td>kelvin</td>
                                 <td>
                                    <div class="flex align-items-center list-user-action">
                                       <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                       
                                    </div>
                                 </td>
                              </tr>
                              
                           </tr>    
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
<td><span class="badge iq-bg-warning">Pending</span></td> -->