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
    		<h1 class="color-violeta">Registro estudiantes: Se elimina el registro</h1>
    		<table class="table modal-content1 text-center color-operator">
    		<tr>
    			<th class="text-center datos color-title">DPI</th>
    			<th class="text-center datos color-title">Nombre</th>
    			<th class="text-center datos color-title">Carrera</th>
    		</tr>
		<?php
			//echo "<table class=\"table modal-content1 text-center color-operator\">";
			//echo "<tr><th>DPI</th><th>Nombre</th><th>Carrera</th></tr>";
			//$dpi = "--";
			class TableRows extends RecursiveIteratorIterator {			  
			  
			  function __construct($it) {
			    parent::__construct($it, self::LEAVES_ONLY);
			  }

			  function current() {
			    return "<td class=\"text-center datos color-dato\">" . parent::current(). "</td>";
			  }

			  function beginChildren() {
			    echo "<tr>";
			  }

			  function endChildren() {	    
			    echo "</tr>" . "\n";
			    //$dpi = "--";
			  }
			} 
		
			$servername = "localhost";
			$username = "phpuser";
			$password = "password";
			$dbname = "CRUD_PRUEBA";


			try {
			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  //echo('dpi recibido: '. $_POST ["eliminar"]);
			  $sql = "SELECT dpi, nombre, carrera FROM Estudiantes WHERE dpi = '" . $_POST ["eliminar"] . "';";
			  //echo($sql);
			  $stmt = $conn->prepare($sql);
			  $stmt->execute();

			  // set the resulting array to associative
			  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			    echo $v;
			  }
			  
			  
			} catch(PDOException $e) {
			  echo "Error: " . $e->getMessage();
			}
			$conn = null;
			
			try {
			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  // set the PDO error mode to exception
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			  // sql to delete a record
			  $sql = "DELETE FROM Estudiantes WHERE dpi = '" . $_POST ["eliminar"] . "';";

			  // use exec() because no results are returned
			  $conn->exec($sql);
			  echo "Registro eliminado exitosamente";
			} catch(PDOException $e) {
			  echo $sql . "<br>" . $e->getMessage();
			}

			$conn = null;
			//echo "</table>";
			
		?> 
		</table>
		</div>
	</div>		
	<script type="text/javascript" src="script.js"></script>
	<div class="a-footer">
    		<p>COPYRIGHT © UNIVERSIDAD SAN CARLOS DE GUATEMALA </p>
	</div>
	</body>
	
 
</html>


