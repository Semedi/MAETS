<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/vthread.css" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#crearRespuesta').click(
			 	function(){
					var elemento = "<?php Print($_GET['foro']); ?>";
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newAnswer", idHilo: elemento, texto:$('#texto').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.reload();
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>

</head>


<?php  require_once ('../static/mainTOP.php'); ?>	
<?php  require_once ('../static/communityMenu.php'); ?>
				<div id="ContenidoCentral">
						<center>
							<div id="espacio">
							</div>
									<?php
									require_once ('../include/vComunidad.php');
									generarThread($_GET['foro']);
									?>
									
								<div id="cajaText">
									<br />
									<textarea  id='texto' name='texto' required='required'></textarea> 
									<div id='botonThread'>
										<button name='crearRespuesta' id='crearRespuesta'>Responder</button>
									</div>
								</div>
								
								
								
						</center>
				</div>	
			
					
<?php  require_once ('../static/mainBOT.php'); ?>	
  	

</html>