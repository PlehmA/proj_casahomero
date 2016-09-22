<?php
function crearConexion() {
	$config = parse_ini_file("database.ini");
	$conexion = new mysqli ($config[0],$config[2],$config[3],$config[1]);
	if ($conexion->connect_errno > 0);
	die ( "Error en la conexión" );
	return $conexion;
}

?>