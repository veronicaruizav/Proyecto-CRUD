<?php session_start(); ?>
<html>
<head>
	<title>Pagina principal</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Bienvenid@ a mi pagina!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("conexion.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM iniciarsesion");
	?>
				
		Bienvenid@ <?php echo $_SESSION['name'] ?> ! <a href='cerrarsesion.php'>cerrar sesion</a><br/>
		<br/>
		<a href='ver.php'>ver y agregar</a>
		<br/><br/>
	<?php	
	} else {
		echo "Usted debe iniciar sesion para ver esta página.<br/><br/>";
		echo "<a href='iniciarsesion.php'>Iniciar sesion</a> | <a href='registrarse.php'>Registrarse</a>";
	}
	?>
	<div id="footer">
		<a href="https://veronicaruizav.github.io/accesoriosparacelular/webmaster.html">Creada por Veronica Ruiz</a>  </a>
	</div>
</body>
</html>
