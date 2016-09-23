<?php
function crearConexion() {
	$config = parse_ini_file("database.ini");
	$conexion = new mysqli ($config['SERVER'],$config['USER'],$config['PASSWORD'],$config['NAMEBDD']);
	if ($conexion->connect_errno > 0)
	die ( "Error en la conexión" );
	return $conexion;
}

?>