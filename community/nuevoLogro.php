<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/insertarVideo.css" />

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#insertarVideo').click(
			 	function(){
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newVideo", link:$('#link_video').val(), title:$('#titulo_video').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "videos.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>	
			
			
			
			<div id="formulario">
				
				<p>Nombre del logro: </p>
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
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>