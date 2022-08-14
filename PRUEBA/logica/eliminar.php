<?php

require_once"../modelo/conexion.php";

$id = $_GET['id'];
$sql = $conexion->prepare("DELETE FROM productos WHERE id_producto =:id");
$sql -> bindParam(":id",$id);

if ($sql->execute()) {
    echo "Datos eliminados";
}

?>