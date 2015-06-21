<?php




function generarListaBusqueda($busqueda, $column, $like){
	
		require_once('../include/usersOp.php');

		$res = getListaUsuarios($busqueda,$column, $like);

				
			for($i=0; $i<sizeof($res)-1; $i++) {
		

			echo "<div id='usuario' onclick=location.href='Usuario.php?user=" .$res[$i]['Nick']. "' style='cursor:pointer'>";
			echo "<img class='avatar' src='../images/userProfile.png'>";
			echo $res[$i]['Nick'];
			echo "</div>";

				
	    	}

	    	

}

?>