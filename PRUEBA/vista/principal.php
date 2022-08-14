<?php
    session_start();
    require '../modelo/conexion.php';//llamamos la conexion
    if (isset($_SESSION['username'])) {
		header('Location: principal.php');
	}
    
    include("../vista/cabecera.php");

    include("../vista/footer.php");

    

?>

