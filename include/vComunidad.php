
<?php
require_once('communityOp.php');
require_once('usersBD.php');

	function generarForo(){
			$hilos = getForoOP();
				foreach($hilos as $hilo)
				{
					$autor = findUserById($hilo['idusuario']);
					//$ultimoMensaje = 
					echo '<tr>';
					echo '<td id = "tema">';
						//echo '<div id =\'hilo\'>';
							echo "<h5>".$hilo['titulo']."</h5>";
							//echo "<p class=\"creador\">".$autor['nick']."</p>";
							//echo "<p>5</p>";
							echo "<p id='ult_mens'>".$hilo['ultimo_mensaje']."</p>";
							echo "<p id='en_tema'>".$hilo['ultimo_mensaje']."</p>";
							echo "<p id='creados'>".$hilo['ultimo_mensaje']."</p>";
							
						//echo "</div>";	
					echo "</td>";
					echo "</tr>";	
						
				}			
	}

?>


