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
                           <!--Model-->                                                   

                           <div class="modal fade bd-example-modal-lg" id="Nuevo-Usuario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                        <div class="iq-card-body">
                           <div class="table-view">
                              <table class="data-tables table movie_table" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th style="width: 10%;">Profile</th>
                                       <th style="width: 10%;">Name</th>
                                       <th style="width: 20%;">Contact</th>
                                       <th style="width: 20%;">Email</th>
                                       <th style="width: 10%;">Country</th>
                                       <th style="width: 10%;">Status</th>
                                       <th style="width: 10%;">Join Date</th>
                                       <th style="width: 10%;">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <img src="../assets/images/user/01.jpg" class="img-fluid avatar-50" alt="author-profile">
                                       </td>
                                       <td>Anna Sthesia</td>
                                       <td>0123456789</td>
                                       <td>anna@gmail.com</td>
                                       <td>India</td>
                                       <td><span class="badge iq-bg-success">Active</span></td>
                                       <td>21 Jul, 2020</td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                class="ri-pencil-line"></i></a>
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                   class="ri-delete-bin-line"></i></a>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <img src="../assets/images/user/03.jpg" class="img-fluid avatar-50" alt="author-profile">
                                             </td>
                                             <td>Brock Lee</td>
                                             <td>2586253125</td>
                                             <td>brock@gmail.com</td>
                                             <td>India</td>
                                             <td><span class="badge iq-bg-primary">Block</span></td>
                                             <td>12 Jun, 2020</td>
                                             <td>
                                                <div class="flex align-items-center list-user-action">                                             
                                                   <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                      class="ri-pencil-line"></i></a>
                                                      <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                         class="ri-delete-bin-line"></i></a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <img src="../assets/images/user/05.jpg" class="img-fluid avatar-50" alt="author-profile">
                                                   </td>
                                                   <td>Nick Allen</td>
                                                   <td>6523456856</td>
                                                   <td>nick@gmail.com</td>
                                                   <td>India</td>
                                                   <td><span class="badge iq-bg-warning">Pending</span></td>
                                                   <td>10 Aug, 2020</td>
                                                   <td>
                                                      <div class="flex align-items-center list-user-action">
                                                         <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                            class="ri-pencil-line"></i></a>
                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                               class="ri-delete-bin-line"></i></a>
                                                            </div>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <img src="../assets/images/user/08.jpg" class="img-fluid avatar-50" alt="author-profile">
                                                         </td>
                                                         <td>Lynn Guini</td>
                                                         <td>2563456589</td>
                                                         <td>lynn@gmail.com</td>
                                                         <td>India</td>
                                                         <td><span class="badge iq-bg-success">Active</span></td>
                                                         <td>29 Jul, 2020</td>
                                                         <td>
                                                            <div class="flex align-items-center list-user-action">
                                                               <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                                  class="ri-pencil-line"></i></a>
                                                                  <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                                     class="ri-delete-bin-line"></i></a>
                                                                  </div>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td>
                                                                  <img src="../assets/images/user/06.jpg" class="img-fluid avatar-50" alt="author-profile">
                                                               </td>
                                                               <td>Eric Shun</td>
                                                               <td>5625456589</td>
                                                               <td>eric@gmail.com</td>
                                                               <td>India</td>
                                                               <td><span class="badge iq-bg-primary">Block</span></td>
                                                               <td>01 Aug, 2020</td>
                                                               <td>
                                                                  <div class="flex align-items-center list-user-action">
                                                                     <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                                        class="ri-pencil-line"></i></a>
                                                                        <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                                           class="ri-delete-bin-line"></i></a>
                                                                        </div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>
                                                                        <img src="../assets/images/user/10.jpg" class="img-fluid avatar-50" alt="author-profile">
                                                                     </td>
                                                                     <td>Marge Arita</td>
                                                                     <td>2563456589</td>
                                                                     <td>marge@gmail.com</td>
                                                                     <td>India</td>
                                                                     <td><span class="badge iq-bg-warning">Pending</span></td>
                                                                     <td>09 May, 2020</td>
                                                                     <td>
                                                                        <div class="flex align-items-center list-user-action">
                                                                           <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                                              class="ri-pencil-line"></i></a>
                                                                              <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i
                                                                                 class="ri-delete-bin-line"></i></a>
                                                                              </div>
                                                                           </td>
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
                                          </div>
                                          <!-- Wrapper END -->
                                          <?php include 'Template/Pie.php';?> 