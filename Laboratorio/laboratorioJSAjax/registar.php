<?php 
include ("conexion.php");
$usuario=$_GET['txtUsuario'];
$nombres=$_GET['txtNombres'];
$apellidos=$_GET['txtApellidos'];
$correo=$_GET['txtCorreo'];
$password=$_GET['txtPassword'];
	$sql="insert into usuarios (usuario,nombre,apellido,correo,password) values ('$usuario','$nombres','$apellidos','$correo','$password')";
	$resultado=$con->query($sql);
if ($resultado){
	$sql="select usuario,nombre,apellido,correo from usuarios limit 1";
	$resultado=$con->query($sql);
	while($fila=$resultado->fetch_assoc()){
		  
	   echo '<ul>
	   <li>Usuario:'. $fila['usuario'] .'</li>
	   <li>Nombre:'.$fila['nombre'] .'</li>
	   <li>Apellido:'.$fila['apellido'].'</li>
	   <li>Correo:'.$fila['correo'].'</li>
   </ul>';
	  }


}
else
	{echo "Ocurrio un error";}
?> 	 
