<?php
    session_start();
    require '../modelo/conexion.php';//llamamos la conexion
    if (isset($_SESSION['username'])) {
		header('Location: ../logica/listar.php');
	}
  
    include("../vista/cabecera.php");


    $sql = "SELECT * FROM productos"; 
    $query = $conexion -> prepare($sql); 
    $query -> execute(); 
    $results = $query -> fetchAll(PDO::FETCH_OBJ); 

  ?>
  <table>
  <?php
  foreach($results as $result){
    echo "<tr>
            <td>".$result -> id_producto."</td>
            <td>".$result -> nombre_producto."</td>
            <td>".$result -> referencia."</td>
            <td>".$result -> precio."</td>
            <td>".$result -> peso."</td>
            <td>".$result -> categoria."</td>
            <td>".$result -> stock."</td>
            <td>".$result -> fecha_creacion."</td>
          </tr>";

  }

  ?>
  </table>

    <?phpinclude("../vista/footer.php"); ?>

    



