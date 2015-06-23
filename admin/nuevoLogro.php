<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> Nuevo Logro</title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/singup.css" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<script type="text/javascript" src="..\js\jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#signUp').click(
		 		function(){
		 			$.get("../AJAX/comunidadGestor.php",{ functionName:"newAchievement", game: $('#juego').val(), name: $('#name').val(), puntos: $('#puntos').val(), img: "../images/logros/logroETS.jpg", tipe: $('#tipo').val()},function(data){
		 				trimmed_data = $.trim(data);
		 					alert (data);
		 					window.location.href = "../admin/gestorComunidad.php";
		 					
		 				
		 						
		 					
		 				}
				 	);
				});
		});

	</script>


</head>

<?php  include ('../static/mainTOP.php'); ?>

			<h1>Crear nuevo logro</h1>
		<div id="formulario">
				<p>Juego seleccionado: </p>
				<p><select name="juego" id ="juego">
					<?php require_once ('../include/vComunidad.php');
						generarListaJuegos();
					?>
				</select>
				</p>
				<p>Nombre del logro: </p>
				<p>  
				<input type="text" id="name" name="name" value="" placeholder="Nombre" required="required" autofocus="autofocus" />  
				</p>
			
				<p>Puntos que se pueden conseguir: </p>
				<p> 
				<input type="number" id="puntos" name="puntos" value="" placeholder="Puntos" required="required" />  
				</p>
				<p>Tipo de logro: </p>
				<p>
				<select name="tipe" id="tipo">
					<option>Platino</option>
					<option>Oro</option>
					<option>Plata</option>
					<option>Bronce</option>
				</select>
				</p>
				
				
				
				<div id= "signUpButton">
				<button type="button" id="signUp">Crear logro</button>
				</div>
			
		</div>	
		

<?php  include ('../static/mainBOT.php'); ?>
	
</html>
