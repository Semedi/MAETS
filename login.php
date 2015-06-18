<!DOCTYPE html>

<html>

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
					$.get("include/usuariosGestor.php",{ functionName:"login", user:$('#name').val(), pass:$('#passw').val() },function(data){
			 			trimmed_data = $.trim(data);
				 			if (trimmed_data == ""){
				 				window.location.href = "index.php";
				 			}
				 			else {
				 				alert (data);
				 			}
			 			}
			 		);
				});
		});
		$(document).keypress(function(e) {
   			if(e.which == 13) {
       			$.get("include/usuariosGestor.php",{ functionName:"login", user:$('#name').val(), pass:$('#passw').val() },function(data){
		 			trimmed_data = $.trim(data);
			 			if (trimmed_data == ""){
			 				window.location.href = "index.php";
			 			}
			 			else {
			 				alert (data);
			 			}
		 			}
		 		);
   			}
		});
	 </script>

</head>


<?php  include ('static/mainTOP.php'); ?>

			<div id="logIn">
				<t1>Iniciar Sesión</t1>
				<p>Usuarios Registrados</p>
				
				</br>
				<p>Nombre de la cuenta </p>
				<p>
				<input type="text" id="name" name="name" value="" placeholder="Tu nombre" required="required" autofocus="autofocus" />  
				</p>
				<p>Contraseña</p>
				<input type="password" id="passw" name="passw" value="" placeholder="Tu contraseña" required="required" autofocus="autofocus"/>
				</br>
				</br>
				<button type="button" id="login">Iniciar sesión</button>
				</br>
				<a href="recuperarContraseña.php"><p>¿Has olvidado la contraseña?</p> </a>
			</div>

			<div id ="singUp">

				<t1>Crear una cuenta</t1>
				<p>Unirse es gratis</p>
				<br/>
				<p>Continua para crear tu cuenta, la solución digital lider entre los jugadores de PC y Mac.</p>
				<form action="signUp.php">
   					<input type="submit" value="Crea tu cuenta">
				</form>
				
			</div>


<?php  include ('static/mainBOT.php'); ?>
	
</html>
