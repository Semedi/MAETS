	
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
						echo '<tr>';
							echo '<td id = "tema">';
								echo "<a href='vthread.php?foro=" .$hilo['id']. "'>";
									echo "<h5>".$hilo['titulo']."</h5>";
								echo "</a>";
							echo "</td>";
							echo '<td id = "tema">';
								echo '<a href="../Usuario/Usuario.php?user=' .$autor['nick']. '">';
									echo "<p id='creador'>".$autor['nick']."</p>";
								echo '</a>';
							echo "</td>";
							echo '<td id = "tema">';
									echo "<p id='creados'>".$numResp['COUNT(mensaje)']."</p>";
							echo "</td>";
							echo '<td id = "tema">';						
									echo "<p id='ult_mens'>".$lastResp['fecha']."</p>";
							echo "</td>";	

						echo "</tr>";	
					}
				}			
	}
	function generarCapturas() {
		$i = 0;
		$Capturas = obtenerCapturas();
		while ($i < sizeof($Capturas) - 1) {
			echo '<img class="icono" src="../images/screens/'.$Capturas[$i]['Ruta'].'" \>';
			$i++;
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
					echo "<a href='community/vthread.php?foro=" .$aux['Id']. "'><p>" .$aux['Titulo']. "</p></a>";
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
					echo "<a href='community/analysis.php'><p>" .$nombreJuego. "</p></a>";
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
					echo "<a href='community/capturas.php'><p>" .$aux['Nombre']. "</p></a>";
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
			}
		}
	}

	
	
function cargarVideos()
{
	$videos = getVideosOP();

		foreach($videos as $video) {
			if($video != NULL) {
				$autor = findUserById($video['idusuario']);
				echo "<h5>".$video['nombre']."</h5>";
				echo "<iframe src='" .$video['enlace']. "' allowfullscreen></iframe>";
				echo "<p>Video subido por ".$autor['nick']." con fecha ".$video['fecha']."</p> \n\n";
			}
		}
}		

	function generarThreadAns($id) {
		$thread = seleccionarThreadById($id);
		$nombreForo = $thread['Titulo'];
		// idHilo, idUsuario, titulo
		echo "<div id='cajaText'>
				<p id='titulo'><b>$nombreForo</b></p>
				<p><b>Contenido</b> </p>

				<textarea  id='texto' name='texto' required='required'></textarea> 

				<div id='botonThread'>
					<button name='crearRespuesta' id='crearRespuesta'>Responder</button>
				</div>
			</div>";
	}

	function generarTopUsuarios() {
		$usuarios = obtenerTopUsers();

		foreach ($usuarios as $user) {
			if($user!=NULL)
				echo " <p><img class='imageUser' src='../images/usuarios/" .$user['Imagen']. "'>" .$user['Nick']. "..." .$user['Puntuacion']. " puntos</p>";
		}
	}

	function generarTopLogros() {
		$idUsuarios = obtenerTopLogros();

		foreach ($idUsuarios as $user) {
			if($user!=NULL){
				$usuario = selectUserById($user['IDUsuario']);
				echo " <p><img class='imageUser' src='../images/usuarios/" .$usuario['Imagen']. "'>" .$usuario['Nick']. "..." .$user['COUNT(IDUsuario)']. " logros</p>";
			}
		}
	}

	function generarNuevosUsuarios() {
		$usuarios = obtenerUsuariosNuevos();
		foreach ($usuarios as $user) {
			if($user!=NULL)
				echo " <p><img class='imageUser' src='../images/usuarios/" .$user['Imagen']. "'>" .$user['Nick']. "</p>";
		}	
	}

	function generarUltimosPost() {
		$usuarios = obtenerUltimosPost();
		foreach ($usuarios as $user) {
			if($user!=NULL) {
				$usuario = selectUserById($user['IdUsuario']);
				echo " <p><img class='imageUser' src='../images/usuarios/" .$usuario['Imagen']. "'>" .$usuario['Nick']. "</p>";
			}
		}
	}

	function generarLogros($user) {
		require_once('../include/usersOp.php');
		$juegos = getJuegosComprados($user);

		foreach ($juegos as $juego) {
			if($juego != NULL) {
				$numLogros = sizeof(getLogrosJuego($juego['Id']))-1;
				$logros = getLogros($user, $juego['Id']);
				echo "<div class='logro'>";
					echo "<div id='titulo'>" .$juego['Titulo']. "</div>";
					echo "<img class='icono_logro' src='../images/Portadas/" .$juego['Portada']. "'>";
					echo "<div class='Lsuperior'>";
						echo "<p class='avance'>Avance en los logros: " .sizeof($logros). " de " .$numLogros. "</p>";
						for($i=0; $i<4; $i++) {
							if($i<sizeof($logros))
								echo "<img class='miniLogro' src='../images/logros/" .$logros[$i]['Imagen']. "'>";
						}
					echo "</div>";
				echo "</div>";
			}
		}

	}

?>