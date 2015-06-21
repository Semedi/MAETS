<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css"/>
	<link rel="stylesheet" type="text/css" href="css/foros.css"/>
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>	
<?php  include ('../include/vComunidad.php'); ?>
			

			<button name="newThread" id="nuevoTema" onclick="location.href ='thread.php';">Nuevo Tema</button>
			
		
			<div id ="cajaCentral">
					<div id="foros">
					
					</div>
					
					
					<table>
					
						<tr>
						  <td id = "cabecera_foro">
							<h4>Foro</h4>
							<h4> Último mensaje...</h4>
							<h4> ...en el tema</h4>
							<h4> Temas creados</h4>
						  </td>
						</tr>
						<div id = "cuerpo_foro">
							<?php generarForo();?>
						</div>

						<!--
						<tr>
						   <td id = "tema"> 
							<h5>Normas y ayuda</h5>
							<p id="ult_mens">Hace 5 minutos</p>
							<p id="en_tema">Ayuda DBX!!</p>
							<p id="creados">50</p>
						   </td>
						</tr>
						-->

					</table>		
	    	</div>





<?php  include ('../static/mainBOT.php'); ?>	

	
</html>