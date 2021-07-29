<!DOCTYPE html>
<html>
<head>
	<title>Asignaciones</title>
<?php include("./lib/01header.php");

	?>

</head>

<!-- Encabezado  !-->
<header>
<?php include("./lib/02menu.php"); ?>
	
</header>

<!--Tablas donde se muestran los articulos !-->
<body>
	<br>
	<br>

<div class="container-fluid">
<br>
<br>
<br>

<!-- Inventario de articulos  !-->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Empresa</th>
        <th>Cantidad</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>computadora</td>
        <td>dell</td>
        <td>34</td>
        <td><button class="btn-success">Asignar</button> <button class="btn-danger">Liberar</button></td>
      </tr>
      <tr>
        <td>proyector</td>
        <td>epson</td>
        <td>178</td>
       <td><button class="btn-success">Asignar</button> <button class="btn-danger">Liberar</button></td>
      </tr>
      <tr>
        <td>mesas</td>
        <td>imesas</td>
        <td>89</td>
       <td><button class="btn-success">Asignar</button> <button class="btn-danger">Liberar</button></td>
      </tr>
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