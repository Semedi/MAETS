﻿<?php require_once __DIR__.'\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> Sing Up </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/singup.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script type="text/javascript" src="js\jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#signUp').click(
		 		function(){
		 			$.get("AJAX/usuariosGestor.php",{ functionName:"addUser", user:$('#name').val(), pass:$('#passw').val(), mail: $('#mail').val() },function(data){
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

	</script>


</head>

<?php  include ('static/mainTOP.php'); ?>

			<h1>Crear una cuenta</h1>
		<div id="formulario">
			
				<p>Crea un nombre para tu cuenta de Maets</p>
				<p>  
				<input type="text" id="name" name="name" value="" placeholder="Tu nombre" required="required" autofocus="autofocus" />  
				</p>
			
				<p>Escoge una contraseña</p>
				<p> 
				<input type="password" id="passw" name="passw" value="" placeholder="tu contraseña" required="required" />  
				</p>
				<p>Vuelve a introducir la contraseña</p>
				<p> 
				<input type="password" id="passw" name="passw" value="" placeholder="tu contraseña" required="required" />  
				</p>
			
				<p>Dirección de email actual:</p>
				<p> 
				<input type="text" id="mail" name="mail" value="" placeholder="tu email" required="required" />  
				</p>
				<p>Vuelve a introducir tu email</p>
				<p> 
				<input type="text" id="mail" name="mail" value="" placeholder="tu email" required="required" />  
				</p>
				<div id= "signUpButton">
				<button type="button" id="signUp">Crear cuenta</button>
				</div>
			
		</div>	
		<div ="acuerdo">
				<h1>ACUERDO DE SUSCRIPCIÓN</h1>
				<t1>
				El presente Acuerdo de suscriptor a MAETS («acuerdo») es un documento legal en el que se explican sus derechos y obligaciones como suscriptor. Léalo atentamente.

				Si usted es un suscriptor cuya residencia principal está situada en uno de los países miembros de la Unión Europea («suscriptor de la UE»), se entiende que su relación como suscriptor es con MAETS («MAETS UE»). Para todos los demás suscriptores, su relación como suscriptores es con MAETS Corporation (MAETS EE. UU.»). Excepto si se indica expresamente lo contrario en el momento de la compra, como en el caso de compras realizadas a otros suscriptores en algún bazar de suscripciones, cualquier compra realizada se obtiene de la empresa MAETS con la que esté contratando. A no ser que se indique lo contrario en los siguientes términos, cualquier referencia que en este documento se haga a «MAETS» se entenderá como «MAETS UE», si usted es un suscriptor de la UE, y como «MAETS EE. UU.», si usted es cualquier otro suscriptor. Cualquier referencia a MAETS en las normas de uso o en los términos de suscripción significará, si el contexto lo requiere, MAETS UE», siempre que se trate de un suscriptor de la UE, y, en caso contrario, significará «MAETS EE. UU.».
				</t1>
		</div>

<?php  include ('static/mainBOT.php'); ?>
	
</html>
