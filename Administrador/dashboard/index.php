<?php include 'Template/Cabecerar.php';?> 

      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">

               
               <?php if($cargo=="Supervisor" || $cargo=="Secretaria" || $cargo=="Administrador"){ ?>
                  <!-- Opcionador -->
                  <div class="row">
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
                              <!-- Modal -->
                              <div class="modal fade" id="Crear-Listado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Nuevo Listado</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>                                            
                                       </div>
                                       <div class="modal-body">

                                       <!-- Cuerpo Modal-->
                                       <div class="row">
                                       <div class="col-lg-4">
                                       
                                          
                                       <img src="https://images.vexels.com/media/users/3/151869/isolated/preview/767ca771755f4675d4063c03e17c8595-icono-de-lista-de-verificacion-medica.png" width="140" height="140">
                                    
                                       
                                       </div>
                                       <div class="col-lg-6">
                                       <div class="iq-header-title">
                                          <h4 class="card-title">Nonbre del listado </h4>                                        
                                          <form>                                               
                                             <div class="form-group">
                                                
                                                <input type="text" class="form-control" placeholder="Escribe aqui">
                                             </div>                                                                                                                                          
                                       </div>                                          
                                       </div>                                          
                                       </div>
                                       <!-- End Cuerpo Modal-->

                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                          <button type="button" class="btn btn-primary">Crear lista</button>
                                       </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

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
                           <!--Modal-->
                           <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title">Envio de Reportes</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">

                                       <!-- Cuerpo Modal-->
                                       <div class="row">
                                       <div class="col-lg-4">
                                       
                                          
                                       <img src="../assets/images/Licen/Licen.jpg" class="rounded-circle" width="240" height="240">
                                       <br>
                                       <br>
                                       <h4 class="card-title"><center>Lic. Angel Perez</center></h4> 
                                       
                                       </div>
                                       <div class="col-lg-6">
                                       <div class="iq-header-title">
                                          <h4 class="card-title"></h4>                                        
                                          <form>    
                                          <div class="form-group">
                                             <label for="exampleInputText1">Nonbre del Supervisor o Secretaria</label>
                                             <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech" disabled="">
                                          </div>
                                          <div class="form-group">
                                             <label for="exampleInputEmail3">Correo del Supervisor o Secretaria</label>
                                             <input type="email" class="form-control" id="exampleInputEmail3" value="markTech@gmail.com" disabled="">
                                          </div>                                           
                                          <div class="form-group">
                                             <label>Seleccione una opcion</label>
                                             <select class="form-control mb-3">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                             </select>
                                          </div>                                                                                                                                         
                                       </div>                                          
                                       </div>                                          
                                       </div>
                                       <!-- End Cuerpo Modal-->

                                       </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                       <button type="button" class="btn btn-primary">Enviar</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  </div>
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

                  <div class="row">
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
                           No disponible
                           </button>
                           <!--Fin Boton de llamada al Modal-->
                              <!-- Modal -->
                              <div class="modal fade" id="Crear-Listado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Nuevo Listado</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>                                            
                                       </div>
                                       <div class="modal-body">

                                       <!-- Cuerpo Modal-->
                                       <div class="row">
                                       <div class="col-lg-4">
                                       
                                          
                                       <img src="https://images.vexels.com/media/users/3/151869/isolated/preview/767ca771755f4675d4063c03e17c8595-icono-de-lista-de-verificacion-medica.png" width="140" height="140">
                                    
                                       
                                       </div>
                                       <div class="col-lg-6">
                                       <div class="iq-header-title">
                                          <h4 class="card-title">Nonbre del listado </h4>                                        
                                          <form>                                               
                                             <div class="form-group">
                                                
                                                <input type="text" class="form-control" placeholder="Escribe aqui">
                                             </div>                                                                                                                                          
                                       </div>                                          
                                       </div>                                          
                                       </div>
                                       <!-- End Cuerpo Modal-->

                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                          <button type="button" class="btn btn-primary">Crear lista</button>
                                       </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

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
                              No disponible
                           </button>
                           <!--Fin Boton de llamada al Modal-->
                           <!--Modal-->
                           <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title">Envio de Reportes</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">

                                       <!-- Cuerpo Modal-->
                                       <div class="row">
                                       <div class="col-lg-4">
                                       
                                          
                                       <img src="../assets/images/Licen/Licen.jpg" class="rounded-circle" width="240" height="240">
                                       <br>
                                       <br>
                                       <h4 class="card-title"><center>Lic. Angel Perez</center></h4> 
                                       
                                       </div>
                                       <div class="col-lg-6">
                                       <div class="iq-header-title">
                                          <h4 class="card-title"></h4>                                        
                                          <form>    
                                          <div class="form-group">
                                             <label for="exampleInputText1">Nonbre del Supervisor o Secretaria</label>
                                             <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech" disabled="">
                                          </div>
                                          <div class="form-group">
                                             <label for="exampleInputEmail3">Correo del Supervisor o Secretaria</label>
                                             <input type="email" class="form-control" id="exampleInputEmail3" value="markTech@gmail.com" disabled="">
                                          </div>                                           
                                          <div class="form-group">
                                             <label>Seleccione una opcion</label>
                                             <select class="form-control mb-3">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                             </select>
                                          </div>                                                                                                                                         
                                       </div>                                          
                                       </div>                                          
                                       </div>
                                       <!-- End Cuerpo Modal-->

                                       </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                       <button type="button" class="btn btn-primary">Enviar</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  </div>
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
                           <button type="button" class="btn btn-primary btn-lg">No disponible</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  <!--End Opcionador -->
                 


                  <?php }else{ ?>
                     <div class="row">
                  <div class="col-sm-7 col-lg-7 col-xl-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="iq-cart-text text-capitalize">
                                 <p class="mb-0">
                                    Listado <?php echo $cargo?>
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
                              <!-- Modal -->
                              <div class="modal fade" id="Crear-Listado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Nuevo Listado</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>                                            
                                       </div>
                                       <div class="modal-body">

                                       <!-- Cuerpo Modal-->
                                       <div class="row">
                                       <div class="col-lg-4">
                                       
                                          
                                       <img src="https://images.vexels.com/media/users/3/151869/isolated/preview/767ca771755f4675d4063c03e17c8595-icono-de-lista-de-verificacion-medica.png" width="140" height="140">
                                    
                                       
                                       </div>
                                       <div class="col-lg-6">
                                       <div class="iq-header-title">
                                          <h4 class="card-title">Nonbre del listado </h4>                                        
                                          <form>                                               
                                             <div class="form-group">
                                                
                                                <input type="text" class="form-control" placeholder="Escribe aqui">
                                             </div>                                                                                                                                          
                                       </div>                                          
                                       </div>                                          
                                       </div>
                                       <!-- End Cuerpo Modal-->

                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                          <button type="button" class="btn btn-primary">Crear lista</button>
                                       </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

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
                           <!--Modal-->
                           <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title">Envio de Reportes</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">

                                       <!-- Cuerpo Modal-->
                                       <div class="row">
                                       <div class="col-lg-4">
                                       
                                          
                                       <img src="../assets/images/Licen/Licen.jpg" class="rounded-circle" width="240" height="240">
                                       <br>
                                       <br>
                                       <h4 class="card-title"><center>Lic. Angel Perez</center></h4> 
                                       
                                       </div>
                                       <div class="col-lg-6">
                                       <div class="iq-header-title">
                                          <h4 class="card-title"></h4>                                        
                                          <form>    
                                          <div class="form-group">
                                             <label for="exampleInputText1">Nonbre del Supervisor o Secretaria</label>
                                             <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech" disabled="">
                                          </div>
                                          <div class="form-group">
                                             <label for="exampleInputEmail3">Correo del Supervisor o Secretaria</label>
                                             <input type="email" class="form-control" id="exampleInputEmail3" value="markTech@gmail.com" disabled="">
                                          </div>                                           
                                          <div class="form-group">
                                             <label>Seleccione una opcion</label>
                                             <select class="form-control mb-3">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                             </select>
                                          </div>                                                                                                                                         
                                       </div>                                          
                                       </div>                                          
                                       </div>
                                       <!-- End Cuerpo Modal-->

                                       </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                       <button type="button" class="btn btn-primary">Enviar</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  </div>
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
                  <!--End Opcionador -->
                                 
                  <?php }?>
                  <!--Lista de listados-->
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Top Rated Item </h4>
                        </div>
                        <div id="top-rated-item-slick-arrow" class="slick-aerrow-block "></div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row top-rated-item mb-0">
                           <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <a href="javascript:void(0)">
                                          <img src="../assets/images/dashboard/01.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                       </a>
                                    </div>
                                    <div class="iq-feature-list">
                                       <h6 class="font-weight-600 mb-0">The Last Breath</h6>
                                       <p class="mb-0 mt-2">T.v show</p>
                                       <div class="d-flex align-items-center my-2 iq-ltr-direction">
                                          <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 134</p>
                                          <p class="mb-0 "><i class="las la-download ml-2"></i> 30 k</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <a href="javascript:void(0)">
                                          <img src="../assets/images/dashboard/02.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                       </a>
                                    </div>
                                    <div class="iq-feature-list">
                                       <h6 class="font-weight-600 mb-0">Last Night</h6>
                                       <p class="mb-0 mt-2">Movie</p>
                                       <div class="d-flex align-items-center my-2 iq-ltr-direction">
                                          <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 133</p>
                                          <p class="mb-0 "><i class="las la-download ml-2"></i> 20 k</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <a href="javascript:void(0)">
                                          <img src="../assets/images/dashboard/03.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                       </a>
                                    </div>
                                    <div class="iq-feature-list">
                                       <h6 class="font-weight-600 mb-0">Jeon Woochie</h6>
                                       <p class="mb-0 mt-2">Movie</p>
                                       <div class="d-flex align-items-center my-2 iq-ltr-direction">
                                          <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 222</p>
                                          <p class="mb-0 "><i class="las la-download ml-2"></i> 40 k</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <a href="javascript:void(0)">
                                          <img src="../assets/images/dashboard/04.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                       </a>
                                    </div>
                                    <div class="iq-feature-list">
                                       <h6 class="font-weight-600 mb-0">Dino Land</h6>
                                       <p class="mb-0 mt-2">T.v show</p>
                                       <div class="d-flex align-items-center my-2 iq-ltr-direction">
                                          <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 122</p>
                                          <p class="mb-0 "><i class="las la-download ml-2"></i> 25 k</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <a href="javascript:void(0)">
                                          <img src="../assets/images/dashboard/05.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                       </a>
                                    </div>
                                    <div class="iq-feature-list">
                                       <h6 class="font-weight-600 mb-0">Last Race</h6>
                                       <p class="mb-0 mt-2">T.v show</p>
                                       <div class="d-flex align-items-center my-2 iq-ltr-direction">
                                          <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 144</p>
                                          <p class="mb-0 "><i class="las la-download ml-2"></i> 35 k</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <a href="javascript:void(0)">
                                          <img src="../assets/images/dashboard/06.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                       </a>
                                    </div>
                                    <div class="iq-feature-list">
                                       <h6 class="font-weight-600 mb-0">Opend Dead Shot</h6>
                                       <p class="mb-0 mt-2">T.v show</p>
                                       <div class="d-flex align-items-center my-2 iq-ltr-direction">
                                          <p class="mb-0 mr-2"><i class="lar la-eye mr-1"></i> 134</p>
                                          <p class="mb-0 "><i class="las la-download ml-2"></i> 30 k</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
        
                   
   <!-- Wrapper END -->
   <?php include 'Template/Pie.php';?> 