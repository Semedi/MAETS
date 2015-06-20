
<?php
require_once('communityOp.php');
require_once('usersBD.php');

	function generarForo(){
			$hilos = getForoOP();
				foreach($hilos as $hilo)
				{
					$autor = findUserById($hilo['idusuario']);
					echo '<tr>';
					echo '<td>';
						echo '<div id =\'hilo\'>';
							echo "<h5 class =\"titulo\">".$hilo['titulo']."</h5>";
							echo "<p class=\"creador\">".$autor['nick']."</p>";
							echo "<p class=\"num_mensajes\">5</p>";
							echo "<p class=\"ult_mensaje\">".$hilo['ultimo_mensaje']."</p>";
						echo "</div>";	
					echo "</td>";
					echo "</tr>";	
						
				}			
	}

?>