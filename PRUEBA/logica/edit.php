<?php
if (!isset($_GET['oculto'])) {
    //header('Location: principal.php');
}
session_start();
require '../modelo/conexion.php';//llamamos la conexion
    $id = $_GET['id_producto'];
    $producto = $_POST['txtProducto'];
    $ref = $_POST['txtRef'];
    $precio = $_POST['txtPrecio'];
    $peso = $_POST['txtPeso'];
    $categoria = $_POST['txtCategoria'];
    $stock = $_POST['txtStock'];
    $fecha_creacion = $_POST['txtCreacion'];

    $sql = "UPDATE productos SET nombre_producto =?, referencia =?, precio =?, peso =?, categoria =?, stock =?, fecha_creacion =? WHERE id_producto =?;";
    $conexion->prepare($sql)->execute([$producto, $ref,$precio,$peso,$categoria,$stock,$fecha_creacion]);
    echo "<br>";
    echo "Se han introducido los nuevos productos";
    header('Location: ../logica/registrar.php');
    
    ?>