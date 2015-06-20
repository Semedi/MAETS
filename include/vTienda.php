<?php




function generarLista($tipo){

	require_once 'include/shopOp.php'; 
	//llamar a getLista()

		$res = getLista($tipo);

			for($i=0; $i<sizeof($res)-1; $i++) {

				echo "<div id='juego' onclick='location.href='articulo-tienda.php'' style='cursor:pointer'>";
	    				echo "<img class='imagen' src='images/Portadas/" .$res[$i]['Portada']. "'>";
	    				echo "<div id='titulo'>";
	    					echo "<p class='titulo'><b>" .$res[$i]['Titulo']. " </b> </p>";
	    				echo "</div>";
	    				echo "</br><p class='descripcion'>" .$res[$i]['Descripcion']. "</p>";
	    				echo "<div id='precio'>";
	    					echo "<p>Precio:" .$res[$i]['Precio']. "€</p>";
	    				echo "</div>";
	    		echo "</div>";
	    	}

}

















?>