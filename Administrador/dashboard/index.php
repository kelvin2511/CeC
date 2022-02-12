<?php include 'Template/Cabecerar.php';?> 
<?php include 'Modales.php';?> 
<?php include 'Acciones.php';?>

<?php 

$sentenciaSQL = $conexion -> prepare("SELECT * FROM listado ORDER BY ID desc ");
$sentenciaSQL -> execute();
$listado = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

?>

      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">

                <!-- Opcionador -->
               <?php if($cargo=="Supervisor" || $cargo=="Secretaria" || $cargo=="Administrador"){ ?>
                  <!-- Fila 1 -->
                  <div class="row">
                  <!-- Primer recuadro -->
                  <div class="col-sm-7 col-lg-7 col-xl-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="iq-cart-text text-capitalize">
                                 <p class="mb-0">
                                    Listado   
                                 </p>
                              </div>
                              <div class="icon iq-icon-box-top rounded-circle bg-primary">
                                <i class="las la-folder-plus"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center justify-content-between mt-4">

                              <!--Boton de llamada al Modal-->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Crear-Listado">
                              Crear nuevo listado
                              </button>
                              <!--Fin Boton de llamada al Modal-->          

                           </div>
                        </div>
                     </div>
                  </div>

                   <!-- Segundo recuadro -->
                  <div class="col-sm-7 col-lg-7 col-xl-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="iq-cart-text text-capitalize">
                                    <p class="mb-0">
                                       Reportes
                                    </p>
                                 </div>
                              <div class="icon iq-icon-box-top rounded-circle bg-info">
                                 <i class="las la-envelope"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center justify-content-between mt-4">
                           <!--Boton de llamada al Modal-->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                              Enviar Reporte
                           </button>
                           <!--Fin Boton de llamada al Modal-->
                            
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <!-- Tercer recuadro -->
                  <div class="col-sm-7 col-lg-7 col-xl-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="iq-cart-text text-capitalize">
                                    <p class="mb-0">
                                       Inscribir Estudiante
                                    </p>
                                 </div>
                              <div class="icon iq-icon-box-top rounded-circle bg-success">
                                 <i class="lar la-user"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center justify-content-between mt-3">
                          
                           <form action="Listado.php" method="POST">
                              <input type="hidden" name="txtID" id="txtID" value="<?php echo $txtID; ?>"/>                                       
                              <button type="submit" name="Accion" <?php echo ($Accion!="Seleccionar")?"disabled":""; ?> value="Seleccionar" class="btn btn-primary btn-lg">Incribir Estudiante</button>
                           </form>  
                                                  
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>

                   <!-- Fila 2 -->
                   <div class="row">
                  <!-- Primer recuadro -->
                  <div class="col-sm-7 col-lg-7 col-xl-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="iq-cart-text text-capitalize">
                                 <p class="mb-0">
                                    Proximamente  
                                 </p>
                              </div>
                              <div class="icon iq-icon-box-top rounded-circle bg-primary">
                                <i class="las la-question-circle"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center justify-content-between mt-4">

                              <!--Boton de llamada al Modal-->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Crear-Listado">
                              Proximamente
                              </button>
                              <!--Fin Boton de llamada al Modal-->          

                           </div>
                        </div>
                     </div>
                  </div>

                   <!-- Segundo recuadro -->
                  <div class="col-sm-7 col-lg-7 col-xl-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="iq-cart-text text-capitalize">
                                    <p class="mb-0">
                                      Proximamente 
                                    </p>
                                 </div>
                              <div class="icon iq-icon-box-top rounded-circle bg-info">
                                <i class="las la-question-circle"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center justify-content-between mt-4">
                           <!--Boton de llamada al Modal-->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                              Proximamente
                           </button>
                           <!--Fin Boton de llamada al Modal-->
                            
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <!-- Opcionador -->
                  <div class="col-sm-7 col-lg-7 col-xl-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="iq-cart-text text-capitalize">
                                    <p class="mb-0">
                                       Proximamente
                                    </p>
                                 </div>
                              <div class="icon iq-icon-box-top rounded-circle bg-success">
                                <i class="las la-question-circle"></i>
                              </div>
                           </div>
                           <div class="d-flex align-items-center justify-content-between mt-3">
                           <button type="button" class="btn btn-primary btn-lg">
                              Proximamente
                           </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End Opcionador -->
               <?php }else{ ?>
                  <div class="row">
                     <!-- Primer recuadro -->
                     <div class="col-sm-7 col-lg-7 col-xl-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="iq-cart-text text-capitalize">
                                    <p class="mb-0">
                                       Listado  
                                    </p>
                                 </div>
                                 <div class="icon iq-icon-box-top rounded-circle bg-primary">
                                 <i class="las la-folder-plus"></i>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mt-4">

                                 <!--Boton de llamada al Modal-->
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Crear-Listado">
                                 Crear nuevo listado
                                 </button>
                                 <!--Fin Boton de llamada al Modal-->          

                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Segundo recuadro -->
                     <div class="col-sm-7 col-lg-7 col-xl-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="iq-cart-text text-capitalize">
                                       <p class="mb-0">
                                          Reportes
                                       </p>
                                    </div>
                                 <div class="icon iq-icon-box-top rounded-circle bg-info">
                                    <i class="las la-envelope"></i>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mt-4">
                              <!--Boton de llamada al Modal-->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                 Enviar Reporte
                              </button>
                              <!--Fin Boton de llamada al Modal-->
                              
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <!-- Tercer recuadro -->
                     <div class="col-sm-7 col-lg-7 col-xl-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="iq-cart-text text-capitalize">
                                       <p class="mb-0">
                                          Inscribir Estudiante
                                       </p>
                                    </div>
                                 <div class="icon iq-icon-box-top rounded-circle bg-success">
                                    <i class="lar la-user"></i>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mt-3">
                              <button type="button" class="btn btn-primary btn-lg">Primary</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>            
               <?php }?>

                  <!--Lista de listados-->
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Registro de Listados </h4>  
                        </div>
                        <div id="top-rated-item-slick-arrow" class="slick-aerrow-block "></div>
                     </div>

                     <div class="iq-card-body">
                        <ul class="list-unstyled row top-rated-item mb-0">
                        
                       <?php foreach($listado as $lis) { ?>
                           <li class="col-sm-6 col-lg-4 col-xl-7 iq-rated-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-2">
                                    <div class="iq-thumb">
                                       <a href="javascript:void(0)">
                                          <img src="../assets/images/Listado/Registro2.png" width="205" height="140" class="  img-border-radius" alt="">
                                       </a>
                                    </div>
                                    <div class="iq-feature-list">
                                                                           
                                       <h6 class="font-weight-600 mb-0">Nombre : <?php echo $lis['nombre']?></h6>
                                       <p class="mb-0 mt-2">Fecha: <?php echo $lis['fecha']?></p>
                                       <p class="mb-0 mt-2">Hora: <?php echo $lis['hora']?></p>
                                       <div class="d-flex align-items-center my-2 iq-ltr-direction">

                                       <form method="POST">
                                       <input type="hidden" name="txtID" id="txtID" value="<?php echo $lis['ID'];?>"/>                                       
                                        <button type="submit" name="Accion" value="Seleccionar" class="btn  btn-primary btn-lg "><i class="las la-clipboard-check"></i>Seleccionar Lista</button>

                                       </form>  
                                                                            
                                       </div>                                    
                                    </div>
                                 </div>
                              </div>
                           </li> 

                           <?php }  ?>
                         
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
        
                   
   <!-- Wrapper END -->
   <?php include 'Template/Pie.php';?> 

