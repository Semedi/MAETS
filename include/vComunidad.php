
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


	/*<div id="cajaAnalisis">
			
				<div id ="portada">
					<a href="#"><img class="icono_A" src="../images/analisis/gta5A.jpg"></a>
					<p>
					<img class="icono_B" src="../images/LIKE.png">
					Recomendado
					</p>
					
				</div>
			
				<div id="contenidoAnalisis">
				
				
				La espera ha valido la pena.
				GTA V es el primer juego que he pre comprado y realmente siento que ha sido una gran compra.
				Sin embargo me molesto un poco tener que esperar más de 1 hora y media para que se pueda instalar.
				Dejando esto de lado, la optimización es realmente impresiónate, me he sorprendido demasiado con lo tan bien optimizado que esta, lo gráficos son excelentes y me atrevo a decirlo porque ni si siquiera tengo una tarjeta gráfica tan potente (tengo una GTX 650), es más tengo un amigo que tiene una GT 520 y le llega a los 60 fps, así que no queda más que decir.
				Los invito a ver mi capturas de pantalla para que vean como se ve.
				He estado jugando al modo multijugador, otro punto a favor, no tengo nada de lag, esto lo digo porque es uno de los pocos juegos que a mi amigo y a mí nos va sin lag y eso que él es de Argentina y yo soy de Perú, además es muy variado y tiene muchas actividades.
				Me falta jugarlo aún más como para dar un buen análisis.
				
				
				
				</div>
				
				<div id="pieAnalisis">
				<center><p>GTA V</p></center>						
				</div>
				
			</div>*/

?>


