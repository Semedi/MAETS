<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/gestorJuegos.css"/>
</head>

<?php include ('../static/mainTOP.php'); ?>

	<body>
		<div id="game-form">  

		   <center><h1>Nuevo juego</h1></center>
		   
		   <p id="failure">Algo esta mal.</p>  
		   <p id="success">Juego añadido correctamente.</p>

		   <form method="post" action=""> 

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

				<?php
					$tipos = ['Free to Play','Acesso Anticipado','Acción','Aventura','Carreras','Casual','Deportes','Estrategia','Indie','Multijugador Masivo','Rol','Simuladores'];
					$numTipos = 12;
					for($i=0; $i<$numTipos; $i++) {
						echo '<p><input type="radio" name="idiomas" value="'.$tipos[$i].'">'.$tipos[$i].'</p>';
					}
					echo '</br>';
				?>


				<p><b><label for="idiomas">Idiomas: </label></b></p>

				<?php
					$idiomas = ['Inglés','Español','Ruso','Italiano','Chino','Japones','Francés','Portugués','Árabe'];
					$numIdiomas = 9;
					for($i=0; $i<$numIdiomas; $i++) {
						echo '<p><input type="checkbox" name="idiomas" value="'.$idiomas[$i].'">'.$idiomas[$i].'</p>';
					}
					echo '</br>';
				?>

				<p><b><label for="portada">Portada: </label></b></p>				
				</br>
				 
				<form action="">  
					<p><input type=checkbox value='a' name=checked checked> Marque esta casilla para verificar que ha leído nuestros términos y condiciones del servicio.</p>
				</form>

				<p>  <input type="submit" value="enviar" /></p>
		   </form>   
		</div>	

<?php include ('../static/mainBOT.php'); ?>

</html>