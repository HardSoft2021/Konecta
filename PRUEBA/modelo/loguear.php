<?php

    session_start();
    require 'conexion.php';//llamamos la conexion

    $user = $_POST['txtUsuario'];
    $pass = $_POST['txtPass'];
    $sentencia = $conexion->prepare('SELECT * FROM usuario WHERE nombre = ? and pass = ?; ');
    $sentencia->execute([$user, $pass]);
    $datos = $sentencia->fetch(PDO::FETCH_OBJ);

    if ($datos === FALSE) {
        header('Location: ../modelo/login.php');
    } elseif ($sentencia->rowCount() == 1) {
        $_SESION['username'] = $datos->nombre;
        header("location: ../vista/principal.php");
        
    }


    
    





?>