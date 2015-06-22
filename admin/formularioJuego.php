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
			$('#crearTema').click(
			 	function(){
					$.get("../AJAX/juegosGestor.php",{ functionName:"newTopic", content:$('#hilo').val(), title:$('#titulo_hilo').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "foros.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>

<?php include ('../static/mainTOP.php'); ?>

	<body>
		<div id="game-form">  

			</br>
		   <center><h1>Nuevo juego</h1></center>
		   
		   <p id="failure">Algo esta mal.</p>  
		   <p id="success">Juego añadido correctamente.</p>

				<p>
					<b><label for="nombre"¨>Título: <span class="required">*</span></label></b>
					<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre del juego" required="required" autofocus="autofocus" />  
				</p>
					
				<p>
					<b><label for="precio">Precio: <span class="required">*</span></label></b>
					<input type="precio" id="precio" name="precio" value="" placeholder="Precio del juego" required="required" />  
				</p>

				<p>
					<b><label for="edad">Edad: <span class="required">*</span></label></b>
					<input type="edad" id="edad" name="edad" value="" placeholder="Edad mínima necesaria" required="required" />  
				</p>

				<p>
					<b><label for="etiquetas">Etiquetas: <span class="required">*</span></label></b>
					<input type="etiquetas" id="etiquetas" name="etiquetas" value="" placeholder="Etiquetas" required="required" />  
				</p>

				<p><b><label for="descripcion">Descripción: <span class="required">*</span></label></b></p>
				<textarea type="descripcion" id="descripcion" name="descripcion" value="" placeholder="Descripción corta del juego (100 caracteres)" required="required"></textarea>

				<p><b><label for="descripcion">Descripción completa: <span class="required">*</span></label></b></label> </p>
				<textarea type="descripcion" id="descripcion" name="descripcion" value="" placeholder="Descripción completa del juego" required="required"></textarea>
				
				<p><b><label for="tipoJuego">Tipo de juego: </label></b></p>

				



				<p>
					<b><label for='tipoJuego'>Tipo de juego: <span class='required'>* </span></label></b>
					<input type='tipoJuego' id='tipoJuego' name='tipoJuego' value='' placeholder='Etiquetas' required='required' /></p>
					<p><em> Free to Play, Acesso Anticipado, Acción, Aventura, Carreras, Casual, Deportes, Estrategia, Indie, Multijugador Masivo, Rol, Simuladores</em></p>

				<p><b><label for="idiomas">Idiomas: </label></b></p>

				<p>;
					<b><label for='idiomas'>Idiomas: </label></b>
					<input type='idiomas' id='idiomas' name='idiomas' value='', placeholder='Idiomas' required='required'/></p>
					<p><em> Inglés, Español, Ruso, Italiano, Chino, Japones, Francés, Portugués, Árabe</em></p>
				<p><b><label for="portada">Portada: </label></b></p>				
				</br>
				 
				<form action="">  
					<p><input type=checkbox value='a' name=checked checked> Marque esta casilla para verificar que ha leído nuestros términos y condiciones del servicio.</p>
				</form>

				<p>  <input type="submit" value="Añadir" /></p>
		   </form>   
		</div>	

<?php include ('../static/mainBOT.php'); ?>

</html>