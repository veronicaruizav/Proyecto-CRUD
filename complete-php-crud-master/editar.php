<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<?php
// including the database connection file
include_once("conexion.php");

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$idproveedor = $_POST['idproveedor'];
	$origen = $_POST['origen'];
	$transporte = $_POST['transporte'];
	$telefono = $_POST['telefono'];
	$ubicacion = $_POST['ubicacion'];
	$empresa = $_POST['empresa'];
	$calidad = $_POST['calidad'];
	$categoria = $_POST['categoria'];


	// checking empty fields
	if (empty($idproveedor) || empty($origen) || empty($transporte) || empty($telefono) || empty($ubicacion) || empty($empresa) || empty($calidad) || empty($categoria)) {

		if (empty($idproveedor)) {
			echo "<font color='red'>el campo id_proveedor esta vacio.</font><br/>";
		}

		if (empty($origen)) {
			echo "<font color='red'>el campo origen esta vacio.</font><br/>";
		}

		if (empty($transporte)) {
			echo "<font color='red'>el campo transporte esta vacio.</font><br/>";
		}
		if (empty($telefono)) {
			echo "<font color='red'>el campo telefono esta vacio.</font><br/>";
		}

		if (empty($ubicacion)) {
			echo "<font color='red'>el campo ubicacion esta vacio.</font><br/>";
		}

		if (empty($empresa)) {
			echo "<font color='red'>el campo empresa esta vacio.</font><br/>";
		}
		if (empty($calidad)) {
			echo "<font color='red'>el campo calidad esta vacio.</font><br/>";
		}

		if (empty($categoria)) {
			echo "<font color='red'>el campo categoria esta vacio.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE proveedor SET idproveedor='$idproveedor', origen='$origen', transporte='$transporte',telefono='$telefono',ubicacion='$ubicacion',empresa='$empresa',calidad='$calidad',categoria='$categoria' WHERE id='$id'");

		//redirectig to the display page. In our case, it is view.php
		header("Location: ver.php");
	}
}
?>
<?php
//getting id from url
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM proveedor WHERE id=$id");
if ($result) {

	while ($res = mysqli_fetch_array($result)) {

		$idproveedor = $res['idproveedor'];
		$origen = $res['origen'];
		$transporte = $res['transporte'];
		$telefono = $res['telefono'];
		$ubicacion = $res['ubicacion'];
		$empresa = $res['empresa'];
		$calidad = $res['calidad'];
		$categoria = $res['categoria'];
	}
}
?>
<html>

<head>
	<title>Editar</title>
</head>

<body>
	<a href="index.php">inicio</a> | <a href="ver.php">Ver</a> | <a href="cerrarsesion.php">cerrar sesion</a>
	<br /><br />

	<form name="form" method="post" action="editar.php">
		<table border="0">
			<tr>
				<td>id_proveedor</td>
				<td><input type="text" name="idproveedor" value="<?php echo $idproveedor; ?>"></td>
			</tr>
			<tr>
				<td>origen</td>
				<td><input type="text" name="origen" value="<?php echo $origen; ?>"></td>
			</tr>
			<tr>
				<td>transporte</td>
				<td><input type="text" name="transporte" value="<?php echo $transporte; ?>"></td>
			</tr>
			<tr>
				<td>telefono</td>
				<td><input type="text" name="telefono" value="<?php echo $telefono; ?>"></td>
			</tr>
			<tr>
				<td>ubicacion</td>
				<td><input type="text" name="ubicacion" value="<?php echo $ubicacion; ?>"></td>
			</tr>
			<tr>
				<td>empresa</td>
				<td><input type="text" name="empresa" value="<?php echo $empresa; ?>"></td>
			</tr>
			<tr>
				<td>calidad</td>
				<td><input type="text" name="calidad" value="<?php echo $calidad; ?>"></td>
			</tr>
			<tr>
				<td>categoria</td>
				<td><input type="text" name="categoria" value="<?php echo $categoria; ?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>

</html>