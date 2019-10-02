  
<?php 
include('../ejercicio3/Operaciones.php');
session_start();
$cadena=$_POST['CADENA'];
$obj= new Operaciones("","$cadena","","","");
$obj->Piramide();
?>
