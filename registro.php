<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>	
	<body class="fondo">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item dropdown">
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="listado.php">Ver listado de estudiantes</a> 
		</div>
	      </li>
	      <li class="nav-item dropdown">
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="index.php">Ingreso</a> 
		</div>		
	      </li>
	    </ul>
	  </div>
	</nav>
	
	
	<div class="modal-content text-center center">
    		<div class="modal-content center">		
    		<h1>Registro estudiantes</h1>
		<?php
			$servername = "localhost";
			$username = "phpuser";
			$password = "password";
			$dbname = "CRUD_PRUEBA";
			
			$dpi = $_POST ["dpi"];
			$nombre = $_POST ["nombre"];
			$carrera = $_POST ["carrera"];

			echo("<h3>DPI: $dpi </h3>");
			echo("<h3>Nombre: $nombre </h3>");
			echo("<h3>Carrera: $carrera </h3>");

			$sql = "INSERT INTO Estudiantes (dpi, nombre, carrera) VALUES ('$dpi', '$nombre', '$carrera');";
			
			try {
			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  // set the PDO error mode to exception
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  // use exec() because no results are returned
			  $conn->exec($sql);
			  echo "Nuevo registro ingresado";
			} catch(PDOException $e) {
			  echo $sql . "<br>" . $e->getMessage();
			}

			$conn = null;
			
		?> 
		</div>
	</div>		
	<script type="text/javascript" src="script.js"></script>
	<div class="a-footer">
    		<p>COPYRIGHT © UNIVERSIDAD SAN CARLOS DE GUATEMALA </p>
	</div>
	</body>
	
 
</html>


