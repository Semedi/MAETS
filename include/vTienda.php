<?php




function generarLista($tipo){

	require_once 'include/shopOp.php'; 
	//llamar a getLista()
	

		$con = getLista($tipo);

	 

						echo "<div id='juego' onclick='location.href='articulo-tienda.php'' style='cursor:pointer'>";
	    			echo "<img class='imagen' src='images/lista_juegos/Accion/gtaV.png'>";
	    			echo "<div id='titulo'>";
	    			echo "<p><b> prueba </b> </p>";
	    			echo "<p>Categoria: ...</p>";
	    			echo "</div>";
	    			echo "<div id='precio'>";
	    			echo "<p>Precio: mazoooo</p>";
	    			echo "</div>";
	    			echo "</div>";  
	
}

















?>