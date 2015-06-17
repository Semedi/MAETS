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
					$.get("../include/comunidadGestor.php",{ functionName:"newTopic", content:$('#hilo').val(), title:$('#titulo').val() },function(data){
			 			trimmed_data = $.trim(data);
				 			if (trimmed_data == ""){
				 				window.location.href = "../index.php";
				 			}
				 			else {
				 				alert (data);
				 			}
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
				<textarea  id="hilo" name="hilo" required="required"></textarea> 


				<div id="botonThread">
				<button name="newtopic" id="crearTema">crear tema</button>
				</div>
				
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>