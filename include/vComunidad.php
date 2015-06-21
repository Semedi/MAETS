
<?php
require_once('communityOp.php');
require_once('usersBD.php');

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

?>


