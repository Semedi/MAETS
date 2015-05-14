<!DOCTYPE html>

</html>

<head>
	<title> Log In </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	 <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>


<?php  include ('static/mainTOP.php'); ?>

			<div id="logIn">
			<t1>Iniciar Sesion</t1>
				<p>Usuarios Registrados</p>
				<form action="include/usuariosGestor.php" method="POST">
				</br>
				<p>Nombre de la cuenta </p>
				<p>
				<input type="text" id="name" name="name" value="" placeholder="Tu nombre" required="required" autofocus="autofocus" />  
				</p>
				<p>Contraseña</p>
				<input type="text" id="passw" name="passw" value="" placeholder="Tu contraseña" required="required" autofocus="autofocus" />
				</br>
				</br>
				<div id= "logInButton">
				<button type="submit">Iniciar sesión</button>
				</div>
				</br>
				<a href="recuperarContraseña.php"><p>¿Has olvidado la contraseña?</p> </a>
			</div>
			<div id ="singUp">
			<t1>Crear una cuenta</t1>
				<p>Unirse es gratis</p>
				<br/>
				<p>Continua para crear tu cuenta, la solucion digital lider entre los jugadores de PC y Mac.</p>
				<div id="newAccount">
				<a href="signUp.php">Crear Cuenta</a>
				</div>
			</div>


<?php  include ('static/mainBOT.php'); ?>
	
</html>
