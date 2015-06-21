
<?php
require_once('communityOp.php');
require_once('usersBD.php');
require_once('shopBD.php');

	function generarForo(){
			$hilos = getForoOP();
				foreach($hilos as $hilo)
				{	
					if($hilo['id'] != ''){
						$autor = findUserById($hilo['idusuario']);
						$lastResp = getLastRespuesta($hilo['id']);
						$numResp = getNumberOfRespuestas($hilo['id']);
						//$ultimoMensaje = 
						echo '<tr>';
						echo '<td id = "tema">';
							//echo '<div id =\'hilo\'>';
								echo "<h5>".$hilo['titulo']."</h5>";
								//echo "<p class=\"creador\">".$autor['nick']."</p>";
								//echo "<p id='ult_mens'>".$hilo['ultimo_mensaje']."</p>";
								echo "<p id='ult_mens'>".$lastResp['fecha']."</p>";
								echo "<p id='en_tema'>".$lastResp['mensaje']."</p>";
								echo "<p id='creados'>".$numResp['COUNT(mensaje)']."</p>";
								
							//echo "</div>";	
						echo "</td>";
						echo "</tr>";	
					}
				}			
	}

	function generarAnalisis() {
		// Traer todos los análisis de la base de datos.
		// IdJuego, NombreJuego, IdUsuario, NombreUsuario, recomendado, texto, portada

		$res = getAnalisisOP();

		foreach ($res as $aux) {
			echo "<div id = 'cajaAnalisis'>";
				echo "<div id = 'portada'>";
					echo "<a href'#'><img class='icono_A' src='../images/Portadas/" .$aux[6]. "'></a>";
					echo "<p>";
					if($aux[4])
						echo "<img class='icono_B' src='../images/LIKE.png'>";
					else
						echo "<img class='icono_B' src='../images/DISLIKE.png'>";
				echo "</div>";

				echo "<div id='contenidoAnalisis'>";
					echo $aux[5];
				echo "</div>";

				echo "<div id='pieAnalisis'>";
					echo "<center><p>" .$aux[1]. "</p>";
					echo "<center><p>" .$aux[3]. "</p>";	
				echo "</div>";
			echo "</div>";
		}
	}

	function generarUltimosForos($num) {
		$ultimosForos = seleccionarMasComunidad($num, 'Fecha_de_creacion', 'hilo');
		
		echo "<div id='foros_ultimos'>";
			echo "<h4> Foros añadidos recientemente: </h4>";
			foreach ($ultimosForos as $aux) {
				if($aux != NULL)
					echo "<p>" .$aux['Titulo']. "</p>";
			}
		echo "</div>";
	}

	function generarUltimosAnalisis($num) {
		$ultimosAnalisis = seleccionarMasComunidad($num, 'Fecha', 'analisis');

		echo "<div id='analisis_ultimos'>";
			echo "<h4> Analisis añadidos recientemente: </h4>";
			foreach ($ultimosAnalisis as $aux) {
				if($aux != NULL) {
					$nombreJuego = selectJuegoById($aux['IdJuego'], 'index')['Titulo'];
					echo "<p>" .$nombreJuego. "</p>";
				}
			}
		echo "</div>";
	}

	function generarUltimasCapturas($num) {
		$ultimasCapturas = seleccionarMasComunidad($num, 'Fecha', 'capturas');

		echo "<div id='capturas_ultimas'>";
			echo "<h4> Capturas añadidas recientemente: </h4>";
			foreach ($ultimasCapturas as $aux) {
				if($aux != NULL) 
					echo "<p>" .$aux['Nombre']. "</p>";
			}
		echo "</div>";
	}

	/*<div id="juegos">
				<h4> Juegos jugados recientemente: </h4>	
				<p>Rust</p> 
				<p>Dragon Age Inquisition</p>  
				<p>Half Life 3</p> 
			</div>
			<div id="foros_importantes">
				<h4> Foros importantes: </h4>
				<p>Foro oficial</p>  
				<p>Noticias desde MAETS</p>  
				<p>Rust foro</p> 
			</div>
			<div id="amigos_conectados">
				<h4> Amigos conectados: </h4>
				<p>Drulas</p>  
				<p>Sheldon Cooper</p>  
				<p>Leonard Nimoy</p> 
			</div>
			
			<div id="capturas">
				<h4> Capturas del día: </h4>
				<img src="images/screens/dbx1.jpg">
				<img src="images/screens/gtav1.jpg">
				<img src="images/screens/ac1.jpg">
			</div>*/

?>


