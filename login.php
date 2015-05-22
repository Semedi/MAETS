<?php  include ('include/session.php'); ?>

<!DOCTYPE html>

</html>

<head>
	<title> Log In </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	 <link rel="stylesheet" type="text/css" href="css/main.css" />
	 <script type="text/javascript" src="js\jquery-1.9.1.min.js"> </script>

	 <script type="text/javascript">

	 $( document ).ready(function() {

		 $('#login').click(
		 	function(){

		 			$.get("include/usuariosGestor.php",{ functionName:"login", user:"admin", pass:"admin" },function(data){

		 					trimmed_data = $.trim(data);
		 					
		 					alert(data);


		 					if (trimmed_data == "correcto"){
		 						alert ("funciona");}
		 					else {

		 						alert ("no funciona");
		 					}



		 	}



		 	);



	});


		});

	 </script>

</head>


<?php  include ('static/mainTOP.php'); ?>

			<div id="logIn">
				<t1>Iniciar Sesion</t1>
				<p>Usuarios Registrados</p>
				
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
				<button type="button" id="login">Iniciar sesión</button>
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
