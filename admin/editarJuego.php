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
		   <?php
				echo "<p>";
					echo "<b><label for='nombre'¨>Título: <span class='required'>*</span></label></b>";
					echo "<input type='text' id='nombre' name='nombre' value='' placeholder='Nombre del juego' required='required' autofocus='autofocus' /> ";
				echo "</p>";
					
				echo "<p>";
					echo "<b><label for='precio'>Precio: <span class='required'>*</span></label></b>";
					echo "<input type='precio' id='precio' name='precio' value='' placeholder='Precio del juego' required='required' />";  
				echo "</p>";

				echo "<p>";
					echo "<b><label for='edad'>Edad: <span class='required'>*</span></label></b>";
					echo "<input type='edad' id='edad' name='edad' value='' placeholder='Edad mínima necesaria' required='required' />";
				echo "</p>";

				echo "<p>";
				echo "<b><label for='etiquetas'>Etiquetas: <span class='required'>*</span></label></b>";
					echo "<input type='etiquetas' id='etiquetas' name='etiquetas' value='' placeholder='Etiquetas' required='required' />";
				echo "</p>";

				echo "<p><b><label for='descripcion'>Descripción: <span class='required'>*</span></label></b></p>";
				echo "<textarea type='descripcion' id='descripcion' name='descripcion' value='' placeholder='Descripción corta del juego (100 caracteres)' required='required'></textarea>";

				echo "<p><b><label for='descripcion'>Descripción completa: <span class='required'>*</span></label></b></label> </p>"
				echo "<textarea type='descripcion' id='descripcion' name='descripcion' value="" placeholder='Descripción completa del juego' required='required'></textarea>"
				
				echo "<p><b><label for='tipoJuego'>Tipo de juego: </label></b></p>";

				
					/*$tipos = ['Free to Play','Acesso Anticipado','Acción','Aventura','Carreras','Casual','Deportes','Estrategia','Indie','Multijugador Masivo','Rol','Simuladores'];
					$numTipos = 12;
					$j = 0;
					for($i=0; $i<$numTipos; $i++) {
						if($j == 4) {
							echo '</p>';
							$j = 0;
						}
						if($j == 0) 
							echo '<p>';
						echo '<input type="radio" name="idiomas" value="'.$tipos[$i].'">'. $tipos[$i] . '    ';
						$j++;
					}
					echo '</br>';
				?>

				<p><b><label for="idiomas">Idiomas: </label></b></p>

				<?php
					$idiomas = ['Inglés','Español','Ruso','Italiano','Chino','Japones','Francés','Portugués','Árabe'];
					$numIdiomas = 9;
					$j=0;
					for($i=0; $i<$numIdiomas; $i++) {
						if($j == 3) {
							echo '</p>';
							$j = 0;
						}
						if($j == 0)
							echo '<p>';
						echo '<input type="radio" name="idiomas" value="'.$idiomas[$i].'">' . $idiomas[$i] . '    ';
						$j++;
					}
					echo '</br>';*/
				

				echo "<p><b><label for='portada'>Portada: </label></b></p>";
				echo "</br>";

				?>
				<p>  <button name="anadir" id="anadir" >Editar</button>
				     <button name="eliminar" id="eliminar" >Eliminar</button></p>
		</div>	

<?php include ('../static/mainBOT.php'); ?>

</html>