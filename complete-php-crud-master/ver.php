<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<?php
//including the database connection file
include_once("conexion.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM proveedor WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
	<title>Pagina de inicio</title>
</head>

<body>
	<a href="index.php">inicio</a> | <a href="agregar.html">Agregar</a> | <a href="cerrarsesion.php">cerrar sesion</a>
	<br/><br/>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>id_proveedor</td>
			<td>origen</td>
			<td>transporte</td>
			<td>telefono</td>
			<td>ubicacion</td>
			<td>empresa</td>
			<td>calidad</td>
			<td>categoria</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['idproveedor']."</td>";
			echo "<td>".$res['origen']."</td>";
			echo "<td>".$res['transporte']."</td>";	
			echo "<td>".$res['telefono']."</td>";
			echo "<td>".$res['ubicacion']."</td>";
			echo "<td>".$res['empresa']."</td>";	
			echo "<td>".$res['calidad']."</td>";
			echo "<td>".$res['categoria']."</td>";
			
			echo "<td><a href=\"editar.php?id=$res[id]\">Editar</a> | <a href=\"borrar.php?id=$res[id]\" onClick=\"return confirm('Estas seguro que quieres borrarlo?')\">Borrar</a></td>";		
		}
		?>
	</table>	
</body>
</html>
