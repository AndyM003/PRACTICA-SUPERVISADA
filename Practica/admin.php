
<!DOCTYPE html>


<html>
<head>
	<title>Administrador</title>
	<?php require_once "scripts.php"; ?>
<script type="text/javascript">
	

</script>


</head>
<body>
	<div class="container">
<div class="jumbotron">
<h1>Registrar alumnos</h1>
<a href="registro.php" class="btn btn-danger">Registrar Alumnos</a>
				</div>
			</div>
		</div>
<div class="container">
<div class="jumbotron">
	<h1>Registrar Administradores</h1>

			<a href="RegistroAdmin.php" class="btn btn-danger">Registrar Administradores</a>
			</div>
			</div>
		</div>

		<div class="container">
			<div class="jumbotron" style="background-color:#008FFF">
	<h1 id="titulo-consulta">Alumnos</h1>

	<?php

	include('php/conexion2.php');
	$conexion = $conexion;


	$sql = "CALL verusuarios";
	$result = $conexion->query($sql);

	if($result->num_rows > 0){

		echo "<table border='1'; class='table table-hover'>";
		echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Nombre</th>";
			echo "<th>Apellido</th>";
			echo "<th>Usuario</th>";
			echo "<th>Contrseña</th>";
			
			
		echo "</tr>";
		
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>{$row["id"]}</td>";
				echo "<td>{$row["nombre"]}</td>";
				echo "<td>{$row["apellido"]}</td>";
				echo "<td>{$row["usuario"]}</td>";
				echo "<td>{$row["password"]}</td>";
				
				
			echo "</tr>";
		}

		echo "</table>";
	}
    



	?>

</div>
</div>
<br>
<div class="container">
			<div class="jumbotron" style="background-color:#008FFF">
	<h1 id="titulo-consulta">Alumnos</h1>

<?php

	include('php/conexion2.php');
	$conexion = $conexion;


	$sql = "CALL veradmin";
	$result = $conexion->query($sql);

	if($result->num_rows > 0){

		echo "<table border='1'; class='table table-hover'>";
		echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Nombre Administrador</th>";
			echo "<th>Apellido Administrador</th>";
			echo "<th>Usuario Administrador</th>";
			echo "<th>Contrseña Administrador</th>";
			
			
		echo "</tr>";
		
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>{$row["id"]}</td>";
				echo "<td>{$row["nombre"]}</td>";
				echo "<td>{$row["apellido"]}</td>";
				echo "<td>{$row["usuario"]}</td>";
				echo "<td>{$row["password"]}</td>";
				
				
			echo "</tr>";
		}

		echo "</table>";
	}
    



	?>
</div>
</div>

</body>
</html>

 <div id="cr">
 <a href="php/salir.php" class="btn btn-info" >Cerrar sesion</a>
</div>