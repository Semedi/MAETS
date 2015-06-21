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
			$('#enviarFormulario').click(
			 	function(){
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newAnalisis", nombreJuego:$('#nombre').val(), analisis:$('#analisis').val(), rec: $(#recomendacion) },function(data){
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

		   <form method="post" action=""> 

				<p>
					<b>
					<label for="nombre"¨>Juego: 
						<span class="required">*</span>
					</label>
					</b>
					<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre del juego" required="required" autofocus="autofocus" />  
				</p>

				<p>
				<b>
					<label for="analisis">Análisis: <span class="required">*</span></label>
				</b>
				</label> </p>
				<textarea type="analisis" id="analisis" name="analisis" value="" placeholder="Análisis del juego" required="required"></textarea>

				<p>
				<input id = "recomendado" type="radio" name="recomendacion" value="recomendado">Recomendado 
				<input id = "no_recomendado" type="radio" name="recomendacion" value="no_recomendado">No recomendado
				</p>	

				<p>  
					<input id="enviarFormulario" type="submit" value="Enviar" />
				</p>
		   </form>   
		</div>	

<?php include ('../static/mainBOT.php'); ?>

</html>