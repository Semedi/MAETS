<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/insertarVideo.css" />

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#insertarVideo').click(
			 	function(){
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newVideo", link:$('#link_video').val(), title:$('#titulo_video').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "videos.php";
				 			
				 			
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
  				<input type="text" id="titulo_video" name="titulo_video" value="" required="required" autofocus="autofocus" /> 
  				</p>
				<p id="titulo"><b>Link del video</b> </p>
				<input type="text" id="link_video" name="link_video" value="" required="required" autofocus="autofocus" /> 
  				</p> 


				<div id="botonThread">
				<button name="newtopic" id="insertarVideo">Insertar video</button>
				</div>
				
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>