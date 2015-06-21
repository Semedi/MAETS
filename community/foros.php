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
					<caption > </caption>
					<th id = "titulo_foro" colspan=4>Foro de MAETS </th>
						<tr>
						
						  <td id = "cabecera_foro">
							<h4>Título</h4>
							</td>
							<td id = "cabecera_foro">
							<h4> Creador del hilo</h4>
							</td>
							<td id = "cabecera_foro">
							<h4> Respuestas al hilo</h4>
							</td>
							<td id = "cabecera_foro">
							<h4> Última respuesta</h4>
							</td>
						  
						</tr>
						<div id = "cuerpo_foro">
							<?php generarForo();?>
						</div>

					</table>		
	    	</div>





<?php  include ('../static/mainBOT.php'); ?>	

	
</html>