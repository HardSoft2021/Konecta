<?php
$servidor="localhost";
$usuario="root";
$password="";

try {
    $conexion=new PDO("mysql:host=$servidor;dbname=cafeteria", $usuario,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    echo "Conexion establecida";
} catch (PDOException $error) {
    echo "Conexion erronea".$error;
}

?>