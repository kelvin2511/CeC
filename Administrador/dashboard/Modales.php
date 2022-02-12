
<?php 

$sentenciaSQL = $conexion -> prepare("SELECT * FROM empleados ");
$sentenciaSQL -> execute();
$lisesmpleado = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

?>
<!-- Modal de crear listas -->
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
                             <form method="POST">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Escribe aqui">
                                </div>
                         </div>
                     </div>                                          
                 </div>
                 <!-- End Cuerpo Modal-->
             </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="Accion" value="Crear" class="btn btn-primary">Crear lista</button>
                </div></form>
         </div>
     </div>
 </div>
 <!-- Fin Modal de crear listas -->

<!--Modal de crear reportes-->
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
<!-- Fin Modal de crear reportes-->

