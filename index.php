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
		<form action="registro.php" method="post">
			    <div>
				<h5>DPI</h5>
				<input type="number" class="form-control" required placeholder="dpi" name="dpi"/>
			    </div>
			    <div>
				<h5>Nombre</h5>
				<input type="text" class="form-control" required placeholder="nombre" name="nombre"/>
			    </div>   
			    <div>
				<h5>Carrera</h5>
				<input type="text" class="form-control" required placeholder="carrera" name="carrera"/>
			    </div>   
			    <button type="submit" class="btn btn-dark">Registrar</button>
		</form>		
		</div>
	</div>		
	<script type="text/javascript" src="script.js"></script>
	<div class="a-footer">
    		<p>COPYRIGHT © UNIVERSIDAD SAN CARLOS DE GUATEMALA </p>
	</div>
	</body>
	
 
</html>


