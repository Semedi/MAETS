<?php




function generarLista($tipo){

	require_once 'include/shopOp.php'; 
	//llamar a getLista()
	

		$res = getLista($tipo);

			for($i=0; $i<sizeof($res); $i++) {

				echo "<div id='juego' onclick='location.href='articulo-tienda.php'' style='cursor:pointer'>";
	    				echo "<img class='imagen' src='" .$res[$i]['Portada']. "'>";
	    				echo "<div id='titulo'>";
	    					echo "<p><b>" .$res[$i]['Titulo']. " </b> </p>";
	    					echo "<p>Categoria:" .$res[$i]['Tipo']. "</p>";
	    				echo "</div>";
	    				echo "<div id='precio'>";
	    					echo "<p>Precio:" .$res[$i]['Precio']. "</p>";
	    				echo "</div>";
	    		echo "</div>";  
	    	}
}

















?>