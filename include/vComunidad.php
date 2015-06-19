<?php
include('communityOp.php');
	function generarForo(){
			$hilos = getForoOP();
				foreach($hilos as $hilo)
				{
					echo '<tr>';
					echo '<td>';
						echo '<div>';
						echo "<h5>$hilo[0]</h5>";
						echo "</div>";	
					echo "</td>";
					echo "</tr>";	
					
					
				}
					
	}
	

?>