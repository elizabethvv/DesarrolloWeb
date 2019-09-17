<?php 
include('Operaciones.php');
$n=$_POST['numeroF'];
$obj= new Operaciones("$n","","","","");
$obj->CalcularFibonaci();
?>
<br><a href="../index.html">Volver Menu</a>