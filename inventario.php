<!DOCTYPE html>
<html>
<head>
	<title>Inventario</title>
<?php include("./lib/01header.php");


	?>
  
  <?php
$servername = "localhost";
$database = "siafum";
$username = "root";
$password = "";
// Crear conexion
$conexion = mysqli_connect($servername, $username, $password, $database);
// comprobar conexion
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

</head>

<!-- Encabezado  !-->
<header>
<?php include("./lib/02menu.php"); ?>
	
</header>

<!--Tablas donde se muestra el inventario !-->
<body>
	
	<br>
	<br>

<div class="container-fluid">
<br>
<br>
<br>
<!-- Opciones del combobox !-->
<form>
	<select>
  <option>Personal</option>
  <option selected="selected">Articulos</option>
  <option>Edificios</option>
  <option>Departamentos</option>
  <option>Usuarios</option>
	</select>
</form>

<br>

<!-- Tablas del inventario !-->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id_articulo</th>
        <th>Nombre</th>
        <th>Id_empresa</th>
        <th>Cantidad</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
   <!-- llenar la tabla !-->
   <?php
   $sql="SELECT * FROM articulos";
   $result=mysqli_query($conexion, $sql);
   while($mostrar=mysqli_fetch_array($result)){
   	?>
   
      <tr>
        <td><?php echo $mostrar['id_articulo']?></td>
        <td><?php echo $mostrar['nombre']?>     </td>
        <td><?php echo $mostrar['id_empresa']?> </td>
        <td><?php echo $mostrar['cantidad']?>   </td>

        <td>  <a href="crud/agregar.php"><button class="btn-success">Agregar</button></a>     <button class="btn-danger">Eliminar</button> <button class="btn-warning">Editar</button></td>
      </tr>
       <?php
        }
        mysqli_close($conexion);
        ?>

     
    </tbody>
  </table>
</div>

</body>


<!-- Pie de pagina !-->
<footer>
	<br>
	<br>

	<?php include("./lib/04footer.php");  ?>
</footer>
</html>