<?php
session_start();
if ($_SESSION['logeado'])
{
	echo "<h1 style=text-align:center;>¡Bienvenidos!</h1>";
	echo "</br>";
	echo "¿Como andas " .$_SESSION['username']."?";
	echo "</br>";
	echo "Horario de conexion: ". $_SESSION['time'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<hr>
		<a href='insert_productos.html'>LOGOUT</a>
		<br>
		<hr>
		<a href='list_productos.php'>Lista productos</a>
	</body>
</html>
