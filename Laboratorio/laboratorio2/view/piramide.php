  
<?php 
include('Operaciones.php');
session_start();
$cadena=$_POST['CADENA'];
$obj= new Operaciones("","$cadena","","","");
$obj->Piramide();
?>
<a href="../index.html">Volver Menu</a>