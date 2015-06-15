<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/thread.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>	
			
			
			
			<div id="cajaThread">
				
				<p id="titulo"><b>Titulo</b> </p>
				<p>
  				<input type="text" id="titulo" name="titulo" value="" required="required" autofocus="autofocus" /> 
  				</p>
				<textarea  id="hilo" name="hilo" required="required"></textarea> 


				<div id="boton">
				<button id="crearTema">crear tema</button>
				</div>
				
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>