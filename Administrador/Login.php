<?php
session_start();
include_once 'Config/bd.php';
$sentenciaSQL = $conexion -> prepare("SELECT * FROM empleados");
$sentenciaSQL -> execute();
$lisempleado = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);

foreach($lisempleado as $empleado) { 

  $usuario=$empleado['user'];
  $contra=$empleado['contra'];
  $nombre=$empleado['nombre'];
}

if($_POST){
    if(($_POST['usuario']==$usuario) && ($_POST['contraceña']==$contra)){
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']=$usuario;
        header('Location:dashboard/index.php');
    }else if(($_POST['usuario']==$nombre) && ($_POST['contraceña']=="$contra")){ 
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="$usuario";       
        header('Location:dashboard/index.php');
    }else{
        $mensaje="Error usted no ingreso los datos correctamente o ya no forma parte de los centros de computo por favor contactar a su supervisor";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cybernet Login</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- Favicons -->
  <link href="../assets/img/Logo de empresa/cybernet.png" rel="icon">

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/Login.css" />

     <!--Icono-->
     <link rel="shortcut icon" href="assets/images/Logo de empresa/CeC.png" />
  

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
</head>
<body>
  <div class="section">
    <div class="container">

    <?php if(isset($mensaje)) {?>
          <div class="alert alert-danger" role="alert">
              <?php echo $mensaje?>
          </div>
      <?php } ?>

      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3">
              <span>Monitor</span>
              <span>Usuarios</span>
            </h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
            <label for="reg-log"></label>

            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">

                      <form method="POST">

                        <h4 class="mb-4 pb-3">Sala de maquinas</h4>
                        <div class="form-group">
                        <input type="text" class="form-style" name="usuario" placeholder="Nombre de usuario" id="logemail" autocomplete="on">                                                  
                          <i class="input-icon uil uil-at"></i>
                        </div>  
                        <div class="form-group mt-2">
                        <input type="password" class="form-style" name="contraceña" placeholder="Your Password" id="logpass" autocomplete="off" >                                                  
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btn mt-4">Login</button>                        
                          
                      </form>
                      
                    </div>
                  </div>
                </div>

                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                                                 
                    <a href="../index.html" ><button class="btn mt-4">Volver al inicio</button></a>
                                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>