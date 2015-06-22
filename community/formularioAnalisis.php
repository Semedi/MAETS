<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="css/formularioAnalisis.css"/>
	
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#crearAnalisis').click(
		 	function(){
		 		var elemento;
		 			if(!$("#recomendadoSi").is(':checked')) {  
            			elemento = "si";
        			} else {  	
            			elemento = "no";
        			}  
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newAnalisis", juego:$('#juego').val(), texto:$('#texto').val(), puntuacion: elemento },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "analysis.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>

<?php include ('../static/mainTOP.php'); ?>

	<body>
		<div id="analysis-form">  

			</br>
		   <center><h1>Análisis juego</h1></center>
		   
		   <p id="failure">Algo esta mal.</p>
		   <p id="success">Juego añadido correctamente.</p>
			
				<p>
					<b><label for="nombre"¨>Juego: <span class="required">*</span></label></b>
					<input type="text" id="juego" name="juego" value="" placeholder="Nombre del juego" required="required" autofocus="autofocus" />  
				</p>

				<p><b>
					<label for="texto">Análisis: <span class="required">*</span></label>
				</b></p>
				<textarea type="texto" id="texto" name="texto" value="" placeholder="Análisis del juego" required="required"></textarea>

				<p>
					<input id = "puntuacionSi" type="radio" name="puntuacionSi" value="recomendado">Recomendado 
					<input id = "puntuacionNo" type="radio" name="puntuacionNo" value="no_recomendado">No recomendado
				</p>
				<button name="crearAnalisis" id="crearAnalisis">Crear análisis<button/>
		</div>	

<?php include ('../static/mainBOT.php'); ?>

</html>