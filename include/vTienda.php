<?php

require_once (RAIZ_APP."/include/shopOp.php");

function generarLista($tipo){

	//llamar a getLista()

		$res = getLista($tipo);

			for($i=0; $i<sizeof($res)-1; $i++) {

				echo "<div id='juego' onclick=location.href='articulo-tienda.php?juego=" .$res[$i]['Id']. "' style='cursor:pointer'>";
	    				echo "<img class='imagen' src='../images/Portadas/" .$res[$i]['Portada']. "'>";
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

function generarArticulo($id) {
	$res = getJuegoById($id);

	echo "<div id='left-side'>";
		echo "<h1 class='upper-bar-name'>" .$res['Titulo']. "</h1>";
	echo "</div>";
	echo "<div id='right-side'>";
		echo "<h1 class='upper-bar'>Precio: " .$res['Precio']. "</h1>";
	echo "</div>";

	echo "<div id='left-side'>";
		echo "<img class='portada' src='../images/Portadas/" .$res['Portada']. "'>";

		echo "<p>Descipcion del juego</p>";
		echo "<p class='descripcion'>" .$res['DescripcionLarga']. "</p>";
	echo "</div>";
	echo "<div id='details'>";
		echo "<p class='details'><b>Género: </b> " .str_replace('_', ' ', $res['Tipo']). " </p>";
		echo "<p class='details'><b>Desarrollador: </b>" .$res['Companyia']. "</p>";
		echo "<p class='details'><b>Fecha de lanzamiento: </b>" .$res['Fecha']. "</p>";
	    echo "<p class='details'><b>Idioma: </b>";
	    mostrarIdioma($res['Idiomas']);
	    echo "</p>"; 
	    echo "</br>";
	    if(isset($_SESSION["Nick"]))
	    	echo "<a href='compra.php?juego=" .$res['Id']. "'><img src='../images/boton-comprar.png'</a>";
	    else
	    	echo "<p class='details'> Registrate para comprar </p>";
}

function mostrarIdioma($idioma) {
	if($idioma == "")
		echo "No disponible";
	else if($idioma == "Espanyol")
		echo "Español";
	else
		echo $idioma;
}

function mostrarMasVendidos($num) {
	$res = selectMasVendidos($num);
	print_r($res);
}
?>