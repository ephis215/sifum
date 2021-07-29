<!DOCTYPE html>
<html>
<head>
	<title>Reportes</title>
<?php include("./lib/01header.php");	?>


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

<!--Codigo para generar reportes !-->
<body>
<div class="container-fluid">
	<br>
	<br>
	<br>
	<br>

<form>
	<select>
		<option selected="selected">Usuarios</option>
        <option>Articulos</option>
        <option>Departamentos</option>
        <option>Personal</option>
        <option>Departamentos</option>
        <option>Edificios</option>

	</select>
</form>

<!-- Boton para generar los reportes!-->
<div class="row">
	<div class="col-sm-2">
		
	</div>
	<div class="col-sm-8">
		
	</div>
	<div class="col-sm-2">
		<button class="btn-success">Generar reporte</button>
	</div>
</div>

<br>

<!-- Tabla que muestra el reporte a generar!-->
<div class="container-fluid">       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id_articulo</th>
        <th>Nombre</th>
        <th>Id_empresa</th>
        <th>cantidad</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $sql="SELECT * FROM articulos";
    $result=mysqli_query($conexion,$sql);
    
    while($mostrar=mysqli_fetch_array($result)){ 

    ?>


      <tr>
        <td><?php echo $mostrar['id_articulo']?></td>
        <td><?php echo $mostrar['nombre']?></td>
        <td><?php echo $mostrar['id_empresa']?></td>
        <td><?php echo $mostrar['cantidad']?></td>
      </tr>
      <?php
        }
        mysqli_close($conexion);
       ?>
    </tbody>
  </table>
</div>
<br>
<br>

</div>
</body>


<!-- Pie de pagina !-->
<footer>
	<?php include("./lib/04footer.php");  ?>
</footer>
</html>