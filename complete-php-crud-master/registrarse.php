<html>
<head>
	<title>Registro</title>
</head>

<body>
<a href="index.php">inicio</a> <br />
<?php
include("conexion.php");

if(isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['password'];

	if($usuario == "" || $pass == "" || $nombre == "" || $correo == "") {
		echo "Todos los campos deben estar llenos. Uno o varios campos están vacíos.";
		echo "<br/>";
		echo "<a href='registrarse.php'>Volver</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO iniciarsesion(nombre, correo, usuario, password) VALUES('$nombre', '$correo', '$usuario', md5('$pass'))")
			or die("No se pudo ejecutar la consulta de inserción.");
			
		echo "Registro existoso";
		echo "<br/>";
		echo "<a href='iniciarsesion.php'>Iniciar sesion</a>";
	}
} else {
?>
	<p><font size="+2">Registro</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Nombre </td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>correo</td>
				<td><input type="text" name="correo"></td>
			</tr>			
			<tr> 
				<td>usuario</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr> 
				<td>Contraseña</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</html>
