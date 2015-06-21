<?php require_once __DIR__.'\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>



<?php  include ('static/mainTOP.php'); ?>	
	
	    	<div id="content-container">
	    		<?php include ('static/image-slider.source.html');?>
	    	</div>
	    	
				<div id="elem">
					<h1>Juegos más vendidos</h1>
					<table>
						<tr>
							<td id = "nombreColumna"><strong>Título</strong></td>
							<td id = "nombreColumna"><strong>Desarrollador</strong></td>
		 					<td id = "nombreColumna"><strong>Precio</strong></td>
						</tr>

						<?php
							require_once ('include/vTienda.php');
							mostrarMas(4, 'Ventas');
						?>
						
					</table>
				</div>
				<div id="elem">
					<h1>Vídeo del día</h1>
					<iframe src="https://www.youtube.com/embed/Ob91E5DXIdY" allowfullscreen></iframe>
				</div>
				<div id="elem">
					<h1>Últimos lanzamientos</h1>
					<table>
						<tr>
							<td id = "nombreColumna"><strong>Título</strong></td>
							<td id = "nombreColumna"><strong>Desarrollador</strong></td>
		 					<td id = "nombreColumna"><strong>Precio</strong></td>
						</tr>

						<?php
							require_once ('include/vTienda.php');
							mostrarMas(4, 'Fecha');
						?>
						
					</table>
				</div>
				
<?php  include ('static/mainBOT.php'); ?>
	
</html>
	
