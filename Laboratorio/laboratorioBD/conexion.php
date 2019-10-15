<?php 
	$server="localhost";
	$user="admin";
	$pass="Elizabeth";
	$bd="bd_laboratorio";
	$con=new mysqli($server,$user,$pass,$bd);
	if ($con->connect_error) die("Conexion Fallada ".$con->connect_error);
?>