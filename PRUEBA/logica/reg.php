<?php
session_start();
require '../modelo/conexion.php';//llamamos la conexion

    $producto = $_POST['txtProducto'];
    $ref = $_POST['txtRef'];
    $precio = $_POST['txtPrecio'];
    $peso = $_POST['txtPeso'];
    $categoria = $_POST['txtCategoria'];
    $stock = $_POST['txtStock'];
    $fecha_creacion = $_POST['txtCreacion'];

    $sql = "INSERT INTO productos (nombre_producto, referencia, precio, peso, categoria, stock, fecha_creacion) VALUES (?,?,?,?,?,?,?)";
    $conexion->prepare($sql)->execute([$producto, $ref,$precio,$peso,$categoria,$stock,$fecha_creacion]);
    echo "<br>";
    echo "Se han introducido los nuevos productos";
    header('Location: ../logica/registrar.php');
    
    ?>