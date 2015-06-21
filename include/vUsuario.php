<?php




function generarListaBusqueda($busqueda, $column, $like){
	
	
		$res = getListaUsuarios($busqueda,$column, $like);

	    	echo "<div id='usuario' onclick=location.href='articulo-tienda.php?user=' style='cursor:pointer'>";
			echo "<img class='avatar' src='../images/userProfile.png'>";
			echo "nombre";
			echo "</div>";

}

?>