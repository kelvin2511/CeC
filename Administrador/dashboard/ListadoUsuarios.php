<?php include 'Template/Cabecerar.php';?> 
<?php include 'Modales.php';?> 
<?php include 'Acciones.php';?>

<?php 

$sentenciaSQL = $conexion -> prepare("SELECT * FROM empleados");
$sentenciaSQL -> execute();
$listado = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

?>
<!-- Page Content  -->

<div id="content-page" class="content-page">
   <div class="container-fluid">
   
   <h2 class="font-weight-bold mb-2">Listado de monitores</h2>
    <p class="font-italic text-muted mb-4">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Nota!⠀</strong> En este listado solo aparecen los monitores activos.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </p>

  <div class="row pb-5 mb-4">    
    <?php foreach($listado as $lis) { ?>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0"><img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" alt="" class="w-100 card-img-top">
          <div class="p-4">
            <h5 class="mb-0"><?php echo $lis['nombre']?></h5>
            <p class="small text-muted"><?php echo $lis['cargo']?></p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
             VER MAS
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php }  ?>

    </div>
  </div>


    </div>
</div> 
<!-- Final Modal para agregar estudiantes-->

<?php include 'Template/Pie.php';?> 

<!-- <td><span class="badge iq-bg-success">Active</span></td>
<td><span class="badge iq-bg-primary">Block</span></td>
<td><span class="badge iq-bg-warning">Pending</span></td> -->