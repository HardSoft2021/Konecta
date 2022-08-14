<?php
    session_start();
    require '../modelo/conexion.php';//llamamos la conexion
    if (isset($_SESSION['username'])) {
		header('Location: ../logica/registrar.php');
	}
 
    




    /* $producto = $_POST['txtProducto'];
    $ref = $_POST['txtRef'];
    $precio = $_POST['txtPrecio'];
    $peso = $_POST['txtPeso'];
    $categoria = $_POST['txtCategoria'];
    $stock = $_POST['txtStock'];
    $fecha_creacion = $_POST['txtCreacion'];

    $consulta = $conexion->prepare("INSERT INTO productos(nombre_producto,referencia,precio,peso,categoria,stock,fecha_creacion)
                                    VALUES(:txtProducto,:txtRef,:txtPrecio,:txtPeso,:txtCategoria,:txtStock,:txtCreacion) ");
    $consulta->bindParam(':txtProducto',$producto);
    $consulta->bindParam(':txtRef',$ref);
    $consulta->bindParam(':txtPrecio',$precio);
    $consulta->bindParam(':txtPeso',$peso);
    $consulta->bindParam(':txtCategoria',$categoria);
    $consulta->bindParam(':txtStock',$stock);
    $consulta->bindParam(':txtCreacion',$fecha_creacion); */
    

    include("../vista/cabecera.php");
?>


<div class="form-group">
    <form action="reg.php" method="POST">
    <label for="my-input">Nombre producto</label><br>
    <input id="producto" class="form-control" type="text" name="txtProducto" required><br><br>
    <label for="my-input">Referencia</label><br>
    <input id="ref" class="form-control" type="text" name="txtRef" required><br><br>
    <label for="my-input">Precio</label><br>
    <input id="ref" class="form-control" type="text" name="txtPrecio" required><br><br>
    <label for="my-input">Peso</label><br>
    <input id="ref" class="form-control" type="text" name="txtPeso" required><br><br>
    <label for="my-input">Categoría</label><br>
    <input id="ref" class="form-control" type="text" name="txtCategoria" required><br><br>
    <label for="my-input">Stock</label><br>
    <input id="ref" class="form-control" type="text" name="txtStock" required><br><br>
    <label for="start">Start date:</label>
    <input type="date" id="start" name="txtCreacion"
       value="2018-07-22"
       min="2018-01-01" max="2022-12-31"><br>
    <button type="submit">Registrar</button>
    </form>

</div>






<?phpinclude("../vista/footer.php");?>