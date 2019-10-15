<?php
include("conexion.php");
$numero = $_POST['numero'];
$sql="Select * from carreras";
$resultado= $con->query($sql);

echo'<table>
<form action="insertar.php">
<tr>
    <td align="center">NOMBRES</td>
    <td align="center">APELLIDOS</td>
    <td align="center">CU</td>
    <td colspan=2 align="center">SEXO</td>
    <td>CARRERA</td>
</tr>';

for($i=0; $i<$numero; $i++){
  echo '<tr>
  <td><input type="text" name="nombre'.$i.'" ></td>
  <td><input type="text" name="apellidos'.$i.'" ></td>
  <td><input type="text" name="cu'.$i.'" ></td>
  <td ><input type="radio" name="femenino'.$i.'" value="F"> Femenino</td>
  <td ><input type="radio" name="masculino'.$i.'" value="M"> Masculino</td>
  <td><select name="carrera">
  ';
  while($fila=$resultado->fetch_assoc()){
   echo '<option value = "'.$fila['cod_carrera'].'">'.$fila['nombre'].'</option>';
  }
  echo '</select></td>
  </tr>';
}
echo '</table>';
?>