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
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newAnswer", nombreForo:$('#titulo'), texto:$('#texto').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "foros.php";
				 			
				 			
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
									generarThreadAns($_GET['foro']);
								?>
						</center>
				</div>	
			
					
<?php  require_once ('../static/mainBOT.php'); ?>	
  	

</html>