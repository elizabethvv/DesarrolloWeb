<?php 
include('Operaciones.php');

$a=$_POST['numeroa'];
$b=$_POST['numerob'];
$c=$_POST['numeroc'];
$obj = new Operaciones("","","$a","$b","$c");
$obj->CalcularMenor();
?>