<!DOCTYPE html>



<head>
	<title> Log In </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	 <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
	<div id="container">
		<!--Menú-->
		<div id="nav">
			<div id="left-nav">
				<li><a href="tienda.php">Tienda</a></li>

				<li><a href="community.php">Comunidad</a></li>
				<li><a href="contact.php">Contacto</a></li>
			</div>
			
			<a href="index.php"><img class="icono_nav" src="images/MAETS.png"></a>
			
			<div id="right-nav">
				<li><a href="signUp.php">Sign Up<a></li>
				<li><a href =""><s>Log In</s></a></li>
			</div>
		</div>
		<!--Comentario en HTML -->

		<div id="content">
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
			
		</div>

		<div id="pie">
			<p>MAETS Software
				© 2015 MAETS Corporation. Todos los derechos reservados. Todas las marcas registradas son propiedad de sus respectivos dueños en Madrid, España.
				Todos los precios incluyen IVA (donde sea aplicable).   Política de Privacidad   |   Información legal   |   Acuerdo de Suscriptor a MAETS
			</p>
		</div>
	</div>

</body>
	
</html>
