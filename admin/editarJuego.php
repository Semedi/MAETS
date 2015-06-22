<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/formularioJuego.css"/>

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#eliminar').click(
		 	function(){
		 		var elemento = "<?php Print($_GET['juego']); ?>";  
					$.get("../AJAX/juegosGestor.php",{ functionName:"deleteGame", juego: elemento},function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "gestorJuegos.php";
				 			
				 			
			 			}
			 		);
				});
			$('#editar').click(
		 	function(){
		 		var juego = "<?php Print($_GET['juego']); ?>";  
					$.get("../AJAX/juegosGestor.php",{  functionName:"modifyGame", id: juego, titulo:$('#nombre').val(), precio:$('#precio').val(),
														edad:$('#edad').val()},function(data), etiquetas:$('#etiquetas').val(), descipcion:$('#descripcion').val(), 
														descripcionLarga:$('#descripcionLarga').val(), tipoJuego:$('#tipoJuego').val(), idiomas:$('#idiomas').val()}, function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "gestorJuegos.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>

<?php require_once ('../static/mainTOP.php'); ?>

	<body>
		<div id="game-form">  

			</br>
		   <center><h1>Nuevo juego</h1></center>
		   
		   <p id="failure">Algo esta mal.</p>  
		   <p id="success">Juego añadido correctamente.</p>
		   <?php
		   		require_once ('../include/shopOp.php');
		   		$juego = getJuegoById($_GET['juego'], 'tienda');

		   		print_r($juego);

				echo "<p>";
					echo "<b><label for='nombre'¨>Título: <span class='required'>* </span></label></b>";
					echo "<input type='text' id='nombre' name='nombre' value='" .$juego['Titulo']. "' placeholder='Nombre del juego' required='required' autofocus='autofocus' /> ";
				echo "</p>";
					
				echo "<p>";
					echo "<b><label for='precio'>Precio: <span class='required'>* </span></label></b>";
					echo "<input type='precio' id='precio' name='precio' value='" .$juego['Precio']. "' placeholder='Precio del juego' required='required' />";  
				echo "</p>";

				echo "<p>";
					echo "<b><label for='edad'>Edad: <span class='required'>* </span></label></b>";
					echo "<input type='edad' id='edad' name='edad' value='" .$juego['Edad']. "' placeholder='Edad mínima necesaria' required='required' />";
				echo "</p>";

				echo "<p>";
				echo "<b><label for='etiquetas'>Etiquetas: <span class='required'>* </span></label></b>";
					echo "<input type='etiquetas' id='etiquetas' name='etiquetas' value='" .$juego['Etiquetas']. "' placeholder='Etiquetas' required='required' />";
				echo "</p>";

				echo "<p><b><label for='descripcion'>Descripción: <span class='required'>* </span></label></b></p>";
				echo "<textarea type='descripcion' id='descripcion' name='descripcion' value='" .$juego['Descripcion']. "' placeholder='Descripción corta del juego (100 caracteres)' required='required'></textarea>";

				echo "<p><b><label for='descripcion'>Descripción completa: <span class='required'>* </span></label></b></label> </p>";
				echo "<textarea type='descripcionLarga' id='descripcionLarga' name='descripcionLarga' value='" .$juego['DescripcionLarga']. "' placeholder='Descripción completa del juego' required='required'></textarea>";
				
				echo "<p>";
					echo "<b><label for='tipoJuego'>Tipo de juego: <span class='required'>* </span></label></b>";
					echo "<input type='tipoJuego' id='tipoJuego' name='tipoJuego' value='" .$juego['Tipo']. "' placeholder='Etiquetas' required='required' /></p>";
					echo "<p><em> Free to Play, Acesso Anticipado, Acción, Aventura, Carreras, Casual, Deportes, Estrategia, Indie, Multijugador Masivo, Rol, Simuladores</em></p>";


				echo "<p>";
					echo "<b><label for='idiomas'>Idiomas: </label></b>";
					echo "<input type='idiomas' id='idiomas' name='idiomas' value='" .$juego['Idiomas']. "', placeholder='Idiomas' required='required'/></p>";
					echo "<p><em> Inglés, Español, Ruso, Italiano, Chino, Japones, Francés, Portugués, Árabe</em></p>";

				echo "<p><b><label for='portada'>Portada: </label></b></p>";
				echo "</br>";

				?>
				<p>  <button name="editar" id="editar" >Editar</button>
				     <button name="eliminar" id="eliminar" >Eliminar</button></p>
		</div>	

<?php require_once ('../static/mainBOT.php'); ?>

</html>