<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/thread.css" />

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#crearTema').click(
			 	function(){
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newTopic", content:$('#hilo').val(), title:$('#titulo').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "foros.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>	
			
			
			
			<div id="cajaThread">
				
				<p id="titulo"><b>Titulo</b> </p>
				<p>
  				<input type="text" id="titulo" name="titulo" value="" required="required" autofocus="autofocus" /> 
  				</p>
				<p id="titulo"><b>Contenido</b> </p>
				<textarea  id="hilo" name="hilo" required="required"></textarea> 


				<div id="botonThread">
				<button name="newtopic" id="crearTema">Crear tema</button>
				</div>
				
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>