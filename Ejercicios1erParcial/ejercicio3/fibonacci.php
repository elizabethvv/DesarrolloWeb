<?php 
include('Operaciones.php');
$n=$_POST['numeroF'];
$obj= new Operaciones("$n","","","","");
$obj->CalcularFibonaci();
?>
