	
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

	function generarListaForos() {
		$hilos = getForoOP();
		echo "<table class='comunidad'>
				<th> Tema </th>
				<th> Creador </th>
				<th> Número mensajes </th>";
		foreach ($hilos as $hilo) {
			if($hilo['id'] != '') {
				$autor = findUserById($hilo['idusuario']);
				$numMensajes = getNumberOfRespuestas($hilo['id']);
				echo "<tr>";
					echo "<td>";
						echo "<a href='../community/vthread.php?foro=" .$hilo['id']. "'>";
							echo "<p>" .$hilo['titulo']. "</p>";
						echo "</a>";
					echo "</td>";
					echo '<td>';
						echo '<a href="../Usuario/Usuario.php?user=' .$autor['nick']. '">';
							echo "<p>".$autor['nick']."</p>";
						echo '</a>';
					echo "</td>";
					echo '<td>';
						echo "<p>".$numMensajes['COUNT(mensaje)']."</p>";
					echo "</td>";
			}
		}
		echo "</table>";
	}

	function generarListaUsuarios() {
		$usuarios = obtenerUsuarios();
		echo "<table class='comunidad'>
				<th> Nick </th>
				<th> Nombre </th>
				<th> Apellidos </th>
				<th Correo </th>
				<th> Pais </th>
				<th> Ciudad </th>
				<th> Dirección </th>
				<th> Código postal </th>";
		foreach ($usuarios as $usuario) {
			if($usuario['Id'] != '') {
				echo "<tr>";
					echo "<td>";
						echo "<a href='../Usuario/Usuario.php?user=" .$usuario['Nick']. "'>";
							echo "<p>" .$usuario['Nick']. "</p>";
						echo "</a>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['Nombre']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['Apellidos']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['Correo']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['Pais']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['Ciudad']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['Direccion']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['Codigo Postal']."</p>";
					echo "</td>";	
			}
		}
		echo "</table>";
	}

	function generarListaLogros() {
		require_once ('shopOp.php');
		$logros = obtenerLogros();
		echo "<table class='comunidad'>
				<th> Juego </th>
				<th> Título </th>
				<th> Puntos </th>
				<th Tipo </th>
				<th> imagen </th>";
		foreach ($logros as $logro) {
			if($logro['Id'] != '') {
				$juego = getJuegoById($logro['JuegoID'],'tienda');
				echo "<tr>";
					echo "<td>";
						echo "<p>" .$juego['Titulo']. "</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$logro['Titulo']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$logro['Puntos']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$logro['Tipo']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<img class='logro' src='../images/logros/" .$logro['Imagen']. "'>";
					echo "</td>";
			}
		}
		echo "</table>";	
	}

	function generarListaCapturas() {
		require_once('../include/usersOp.php');
		$capturas = obtenerInfoCapturas();
		echo "<table class='comunidad'>
				<th> Imagen </th>
				<th> Usuario </th>
				<th> Nombre </th>
				<th> Fecha </th>";
		foreach ($capturas as $captura) {
			if($captura['Id'] != '') {
				$usuario = getUser($captura['IDUsuario']);
				echo "<tr>";
					echo "<td>";
						echo "<img class='portada' src='../images/screens/" .$captura['Ruta']. "'>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['nick']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$captura['Nombre']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$captura['Fecha']."</p>";
					echo "</td>";
			}
		}
		echo "</table>";		
	}

	function generarListaVideos() {
		require_once('../include/usersOp.php');
		$videos = obtenerInfoVideos();
		echo "<table class='comunidad'>
				<th> Enlace </th>
				<th> Usuario </th>
				<th> Nombre </th>
				<th> Fecha </th>";
		foreach ($videos as $video) {
			if($video['Id'] != '') {
				$usuario = getUser($video['IDUsuario']);
				echo "<tr>";
					echo "<td>";
						echo "<a href='" .$video['Enlace']. "''><p>" .$video['Enlace']. "</p></a>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['nick']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$video['Nombre']."</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$video['Fecha']."</p>";
					echo "</td>";
			}
		}
		echo "</table>";			
	}

	function generarListaAnalisis() {
		require_once('../include/usersOp.php');
		require_once('../include/shopOp.php');
		$analisis = obtenerInfoAnalisis();
		echo "<table class='comunidad'>
				<th> Juego </th>
				<th> Usuario </th>
				<th> Texto </th>
				<th> Recomendación </th>
				<th> Fecha </th>";
		foreach ($analisis as $a) {
			if($a != NULL) {
				$usuario = getUser($a['IdUsuario']);
				$juego = selectJuegoById($a['IdJuego'], 'tienda');
				echo "<tr>";
					echo "<td>";
						echo "<p>" .$juego['Titulo']. "</p>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$usuario['nick']."</p>";
					echo "</td>";

					echo "<td><p>";
						if(strlen($a['Texto']) > 177)		// Tratamiento texto
	 						echo substr($a['Texto'], 0, 177). " ...";
	 					else
	 						echo $a['Texto'];
					echo "</p></td>";
					echo "<td>";
						if($a['Recomendado'])
							echo "<img class='logro' src='../images/LIKE.png'>";
						else
							echo "<img class='logro' src='../images/DISLIKE.png'>";
					echo "</td>";
					echo '<td>';
						echo "<p>".$a['Fecha']."</p>";
					echo "</td>";
			}
		}
		echo "</table>";	
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
		if($juegos != NULL){
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
		}else{
			echo "<div id =\"noLogros\">";
				echo "<p>Para conseguir logros tienes que haber comprado algún juego antes.</p>";
				echo "<br /> <br />";
				echo "<button name=\"irTienda\" id=\"irTienda\" onclick=\"location.href ='../tienda.php';\">Ir a la tienda</button>";
			echo "</div>";
		}
	}
	
	function generarListaJuegos()
	{
		$juegos = select("", 'Titulo', null, 'comunidad');
		foreach($juegos as $juego)
		{
			if ($juego != NULL)
				echo "<option>".$juego['Titulo']."</option>";
		}
	}

?>