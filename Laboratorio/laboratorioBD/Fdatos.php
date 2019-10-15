<?php
$numero=$_POST['numero'];
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
  <td ><input type="radio" name="femenino'.$i.'" value="male"> Femenino</td>
  <td ><input type="radio" name="masculino'.$i.'" value="male"> Masculino</td>
  <td><select name="carrera'.$i.'">
  <option value="value1">Ing. Sistemas</option> 
  <option value="value2" selected>Ing. Diseño</option>
  <option value="value3">Ing. Telecomunicaciones</option>
  </select></td>
  <td></td>
  </tr>';
}
echo '</table>
<input type="submit" name="insertar" >
</form>';
?>
<br><br>
