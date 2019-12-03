<?php 
$con =new mysqli("localhost", "admin", "Elizabeth","bd_laboratorioaAjax");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>