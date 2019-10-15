<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login </title>
</head>
<body>
		<div>
			<form action="autentificarse.php" method="POST">
				<label for="txtUser">Usuario</label>
				<input type="text" name="txtUser" 
				<?php
				if(isset($_COOKIE['tU'])){
					?>value=" <?php
					echo $_COOKIE['tU'];
				}
				?>
				"/><br>
				<label for="txtPassword" >Contraseña</label>
				<input type="password" name="txtPassword"<?php
				if(isset($_COOKIE['tP'])){
					?>value=" <?php
					echo $_COOKIE['tP'];
				}
				?>
				"/><br><br>
				<input type="checkbox" name="chkU"   ><label> Recordar usuario</label><br>
				<input type="checkbox" name="chkC" ><label> Recordar contraseña</label><br>
				<input type="submit" value="Ingresar"><br><br>
			</form>
		</div>
</body>
</html>