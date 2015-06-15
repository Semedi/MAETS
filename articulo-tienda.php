<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/articulo-tienda.css" />
	<script type="text/javascript" src="js\jquery-1.9.1.min.js"> </script>
	<script type="text/javascript">
    				var nombre;
					$.get("include/juegosGestor.php",{ functionName:"getNameOfGame", juego: <?php echo $_GET["juego"];?> },function(data){
		 			trimmed_data = $.trim(data);
				 			if (trimmed_data == ""){
				 			}
				 			else {
				 				nombre = data;
				 				alert(data);  
				 			}
				 		
		 				});
					<?php $nombre = "<script>document.write(nombre)</script>"; ?>
				 </script>





</head>	


<?php  include ('static/mainTOP.php'); ?>

	
    		<div id="left-side">
    			<h1 class="upper-bar-name"><?php echo $nombre;?></h1>
    		</div>
    		<div id="right-side">
    			<h1 class="upper-bar-price">Precio: 55€</h1>	 
    		</div>

	    	<div id="left-side">
	    		<iframe class="article" src="https://www.youtube.com/embed/qoytS3930aY" frameborder="0" allowfullscreen></iframe>
	    		
	    		<p>Descrición del juego</p>
	    		<p><b>GRAND THEFT AUTO V, EL MUNDO ABIERTO DE ROCKSTAR GAMES ACLAMADO POR LA CRÍTICA, LLEGA A PC </b></br></br>
	    			Cuando un joven estafador callejero, un ladrón de bancos retirado y un psicópata aterrador se ven involucrados con lo peor y más desquiciado del mundo criminal, del gobierno de los EE. UU. y de la industria del espectáculo, tendrán que llevar a cabo una serie de peligrosos golpes para sobrevivir en una ciudad implacable en la que no pueden confiar en nadie. Y mucho menos los unos en los otros. </br> </br>

					Grand Theft Auto V para PC ofrece multitud de importantes mejoras técnicas y visuales para que Los Santos y el condado de Blaine sean más envolventes que nunca. Además de aumentar enormemente las distancias visuales, Grand Theft Auto V para PC funciona a 60 FPS y 1080p con posibilidad de mostrar los gráficos a una resolución de 4K. Los jugadores se encontrarán con diversos añadidos y mejoras, como: </br></br>

					&nbsp;&nbsp;&nbsp;• Nuevas armas, vehículos y actividades </br>
					&nbsp;&nbsp;&nbsp;• Más fauna salvaje </br>
					&nbsp;&nbsp;&nbsp;• Tráfico más denso </br>
					&nbsp;&nbsp;&nbsp;• Nuevo sistema de vegetación </br>
					&nbsp;&nbsp;&nbsp;• Efectos de daño y de clima mejorados, y muchas otras cosas </br></br>

					Todo ello, mejorado con una resolución impactante, enormes mejoras en la iluminación, las sombras y las texturas, y una frecuencia de imagen suavizada. </br></br>

					Las versiones para PC de Grand Theft Auto V y de Grand Theft Auto Online incluirán también la vista en primera persona, que ofrece a los jugadores la posibilidad de explorar todos los detalles del mundo de Los Santos y el condado de Blaine de una forma totalmente nueva. </br></br>

					Grand Theft Auto V para PC incluye el editor Rockstar, que ofrece a los jugadores un completo paquete de herramientas de edición para crear vídeos in-game y publicarlos directamente en el Social Club y en YouTube. </br></br>

					Grand Theft Auto V también incluye Grand Theft Auto Online, el universo dinámico y en constante evolución de Grand Theft Auto. Las mejoras de Grand Theft Auto Online para PC incluirán un aumento en el número de jugadores, con posibilidad de hasta 30 jugadores en línea. Todas las mejoras de juego existentes y los contenidos creados por Rockstar publicados desde el lanzamiento inicial de Grand Theft Auto Online también estarán disponibles para PC, y habrá muchas otras novedades. </br></br></br>

					<b>CONTENIDO EXCLUSIVO PARA JUGADORES HABITUALES </b></br></br>
					Para recompensar a los fans leales de Grand Theft Auto V por jugar en PC y experimentar una nueva y más detallada versión de Los Santos y del condado de Blaine, Rockstar Games ha creado una gran variedad de objetos exclusivos para estos jugadores de PlayStation®3 y Xbox 360, cada uno relacionado con actividades pensadas para que puedan experimentar el enorme mundo del juego de maneras novedosas y emocionantes. Para obtener más información acerca de cómo conseguir contenido exclusivo para jugadores habituales, visita <a class="emphasis" href="rockstargames.com/V/bonuscontent">rockstargames.com/V/bonuscontent</a> </br></br></br>

					<b>TRANSFIERE TU PERSONAJE ACTUAL DE GTA ONLINE </b></br></br>
					Los jugadores habituales de PlayStation®3, PlayStation®4, Xbox 360 y Xbox One podrán transferir sus personajes y progresos de Grand Theft Auto Online a la versión de PC. Para obtener más información, visita <a class="emphasis">rockstargames.com/gtaonline/charactertransfer</a></br>
	    	</div>
	    	<div id="details">
	    		<p><b>Género</b> Acción</p>
	    		<p><b>Desarrollador:</b> Rockstar North</p>
	    		<p><b>Fecha de lanzamiento:</b> 14 de abril de 2015</p>
	    		<a class="details" href="http://www.metacritic.com/game/pc/grand-theft-auto-v"><b>Calificación en metacritic</b></a>
	    		</br>
	    		</br>
	    		</br>

	    		<table>
		    		<tr>
		    			<td id = "nombreColumna"><strong>Idioma</strong></td>
	          			<td id = "nombreColumna"><strong>Interfaz</strong></td>
	          			<td id = "nombreColumna"><strong>Voces</strong></td>
	          			<td id = "nombreColumna"><strong>Substitulos</strong></td>
	        		</tr>

	        		<tr>
	            		<td>Español</td>
	            		<td>Sí</td>
	          			<td></td>
	          			<td>Sí</td>
	          		</tr>
	          		<tr>
	          			<td>Inglés</td>
	            		<td>Sí</td>
	          			<td>Sí</td>
	          			<td>Sí</td>
	          		</tr>
	          		<tr>
	          			<td>Francés</td>
	            		<td>Sí</td>
	          			<td></td>
	          			<td>Sí</td>
	          		</tr>
	          		<tr>
	          			<td>Italiano</td>
	            		<td>Sí</td>
	          			<td></td>
	          			<td>Sí</td>
	          		</tr>
	          		<tr>
	          			<td>Alemán</td>
	            		<td>Sí</td>
	          			<td></td>
	          			<td>Sí</td>
	        		</tr>
        		</table>
        		</br>
        		<a href="compra.php"><img src="images/boton-comprar.png"></a>				
	    	</div>
<?php  include ('static/mainBOT.php'); ?>
	
</html>