<?php
session_start();
if ($_SESSION['logeado'])
{
	echo "<h1 style=text-align:center;>¡Bienvenidos!</h1>";
	echo "</br>";
	echo "¿Como andas " .$_SESSION['username']."?";
	echo "</br>";
	echo "Horario de conexion: ". $_SESSION['time'];
	echo "</br>";
	echo "<hr>";
	echo "<a href='insert_productos.html'>LOGOUT</a>";
	echo "</br>";
	echo "<hr>";
	echo "<a href='list_productos.php'>Lista productos</a>";
}
?>
