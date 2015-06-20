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
					<center><h1></h1></center>
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
						<?php generarForo();?>

						
						<tr>
						   <td id = "tema"> 
							<h5>Normas y ayuda</h5>
							<p id="ult_mens">Hace 5 minutos</p>
							<p id="en_tema">Ayuda DBX!!</p>
							<p id="creados">50</p>
						   </td>
						</tr>
						<tr>
						   <td id = "tema"> 
							<h5>Nuevo en MAETS</h5>
							<p id="ult_mens">Hace 2 minutos</p>
							<p id="en_tema">Me presento</p>
							<p id="creados">12</p>
						   </td>
						</tr>
						<tr>
						   <td id = "tema"> 
							<h5>Intercambios</h5>
							<p id="ult_mens">Hace 45 minutos</p>
							<p id="en_tema">Busco FIFA15</p>
							<p id="creados">22</p>
						   </td>
						</tr>
						<tr>
						   <td id = "tema"> 
							<h5>Desarrolladores</h5>
							<p id="ult_mens">Hace 4 minuto</p>
							<p id="en_tema">Recomendados</p>
							<p id="creados">42</p>
						   </td>
						</tr>
						<tr>
						   <td id = "tema"> 
							<h5>Zona PeCeros</h5>
							<p id="ult_mens">Hace 1 minuto</p>
							<p id="en_tema">Al fin GTAV!</p>
							<p id="creados">61</p>
						   </td>
						</tr>
						<tr>
						   <td id = "tema"> 
							<h5>Zona Consolas</h5>
							<p id="ult_mens">Hace 20 minutos</p>
							<p id="en_tema">PS4 >>> XBOXone</p>
							<p id="creados">22</p>
						   </td>
						</tr>
						<tr>
						   <td id = "tema"> 
							<h5>Zona Off Topic</h5>
							<p id="ult_mens">Hace 45 minutos</p>
							<p id="en_tema">Hay tormenta...</p>
							<p id="creados">14</p>
						   </td>
						</tr>
					</table>		
	    	</div>





<?php  include ('../static/mainBOT.php'); ?>	

	
</html>