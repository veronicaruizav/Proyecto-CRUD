<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<html>
<head>
	<title>Agregar</title>
</head>

<body>
<?php
//including the database connection file
include_once("conexion.php");

if(isset($_POST['Submit'])) {	
	$idproveedor = $_POST['idproveedor'];
	$origen = $_POST['origen'];
	$transporte = $_POST['transporte'];
	$telefono = $_POST['telefono'];
	$ubicacion = $_POST['ubicacion'];
	$empresa = $_POST['empresa'];
	$calidad = $_POST['calidad'];
	$categoria = $_POST['categoria'];                                          
	$loginId = $_SESSION['id'];
		
	// checking empty fields
	if(empty($idproveedor) || empty($origen) || empty($transporte)|| empty($telefono)|| empty($ubicacion)|| empty($empresa)|| empty($calidad)|| empty($categoria)) {
				
		if(empty($idproveedor)) {
			echo "<font color='red'>El campo de id_proveedor está vacío.</font><br/>";
		}
		
		if(empty($origen)) {
			echo "<font color='red'>El campo de origen está vacío.</font><br/>";
		}
		
		if(empty($transporte)) {
			echo "<font color='red'>El campo de transporte está vacío.</font><br/>";
		}
		if(empty($telefono)) {
			echo "<font color='red'>El campo de telefono está vacío.</font><br/>";
		}
		
		if(empty($ubicacion)) {
			echo "<font color='red'>El campo de ubicacion está vacío.</font><br/>";
		}
		
		if(empty($empresa)) {
			echo "<font color='red'>El campo de empresa está vacío.</font><br/>";
		}
		if(empty($calidad)) {
			echo "<font color='red'>El campo de calidad está vacío.</font><br/>";
		}
		
		if(empty($categoria)) {
			echo "<font color='red'>El campo de categoria está vacío.</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Atras</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO proveedor(idproveedor, origen, transporte, telefono, ubicacion, empresa, calidad, categoria, login_id) VALUES('$idproveedor','$origen','$transporte','$telefono','$ubicacion','$empresa','$calidad','$categoria', '$loginId')");
		
		//display success message
		echo "<font color='green'>Datos agregados exitosamente.";
		echo "<br/><a href='ver.php'>Ver resultados</a>";
	}
}
?>
</body>
</html>
