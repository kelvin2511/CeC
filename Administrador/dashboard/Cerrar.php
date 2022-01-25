<?php include("../template/cabecera.php")?>
<?php
session_start();
session_destroy();
header('Location:../Login.php')
?>
<?php include("../template/pie.php")?>