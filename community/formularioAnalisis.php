<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="css/formularioAnalisis.css"/>
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
					<b><label for="nombre"¨>Juego: <span class="required">*</span></label></b>
					<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre del juego" required="required" autofocus="autofocus" />  
				</p>

				<p><b><label for="analisis">Análisis: <span class="required">*</span></label></b></label> </p>
				<textarea type="analisis" id="analisis" name="analisis" value="" placeholder="Análisis del juego" required="required"></textarea>

				<p><input type="radio" name="recomendado" value="recomendado">Recomendado <input type="radio" name="noRecomendado" value="noRecomendado">No recomendado</p>	

				<p>  <input type="submit" value="enviar" /></p>
		   </form>   
		</div>	

<?php include ('../static/mainBOT.php'); ?>

</html>