
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
						echo "</td>";
						echo '<td id = "tema">';
								echo "<p id='creador'>".$autor['nick']."</p>";
						echo "</td>";
						echo '<td id = "tema">';
								echo "<p id='creados'>".$numResp['COUNT(mensaje)']."</p>";
						echo "</td>";
						echo '<td id = "tema">';						
								echo "<p id='ult_mens'>".$lastResp['fecha']."</p>";
						echo "</td>";
								//echo "<p id='ult_mens'>".$hilo['ultimo_mensaje']."</p>";
								//echo "<p id='en_tema'>".$lastResp['mensaje']."</p>";
							//echo "</div>";	
	
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

	function generarThread($id) {
		$thread = seleccionarThreadById($id);
		$ans = seleccionarThreadAnsById($id);
		$usuario = findUserById($thread['IdUsuario']);
		$imagen = findImageUserById($thread['IdUsuario']);
		$nombreForo = $thread['Titulo'];
		// Primer hilo.
		echo "<div id='cajaText'>";
			echo "<img class='avatar' src='../images/usuarios/" .$imagen['Imagen']. "'>";
			echo "<div id='info'>" .$usuario['nick']. "</div>";
				echo "<h3>" .$nombreForo. "</h3>";
			echo "<div id='textoMensaje'>";
				echo $thread['Texto'];
				echo "</div>";
			echo "</div>";
		echo "</div>";
		// Respuestas
		foreach ($ans as $aux) {
			if($aux != NULL) {
				$usuario = findUserById($aux['IDUsuario']);
				$imagen = findImageUserById($aux['IDUsuario']);
				echo "<div id='cajaText'>";
					echo "<img class='avatar' src='../images/usuarios/" .$imagen['Imagen']. "'>";
						echo "<div id='info'>" .$usuario['nick']. "</div>";
							echo "<h3>" .$nombreForo. "</h3>";
						echo "<div id='textoMensaje'>";
							echo $aux['Mensaje'];
						echo "</div>";
					echo "</div>";
				echo "</div>";
			}
		}
	}
?>