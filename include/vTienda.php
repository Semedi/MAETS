<?php

// gen -> desde dónde se llama

function generarTabla($idUser) {
	require_once ('/../include/shopOp.php');
	require_once ('/../include/usersBD.php');

	$user = selectUserById($idUser);

	if($user['Rol'] == 'Administrador')
		$Companyia = '';
	else
		$Companyia = $user['Companyia'];		

	$res = getLista($Companyia, 'Companyia', false, 'tienda');

	$columnas = array("Titulo", "Precio", "Edad", "Descripcion", "DescripcionLarga", "Companyia", "Tipo", "Etiquetas", "Idiomas", "Ventas", "Fecha", "Portada");

	echo "<table border='1'>
			<th> Título </th>
			<th> Precio </th>
			<th> Edad </th>
			<th> Descripción </th>
			<th> Descripción completa </th>
			<th> Compañía </th>
			<th> Tipo </th> 
			<th> Etiquetas </th>
			<th> Idioma </th> 
			<th> Ventas </th> 
			<th> Fecha </th>
			<th> Portada </th>";
 			for($i=0; $i<sizeof($res)-1; $i++) {				// filas
 				echo "<tr>";
 				for($j=0; $j<sizeof($columnas); $j++) {			// columnas
 					echo "<td><a href='editarJuego.php?juego=" .$res[$i]['Id']. "''>";
 					if($columnas[$j] == "DescripcionLarga") {	// Tratamiento descripción larga
	 					if(strlen($res[$i][$columnas[$j]])>62)
	 						echo substr($res[$i][$columnas[$j]], 0, 62). " ...";
	 					else
	 						echo $res[$i][$columnas[$j]];
	 				}
	 				else if($columnas[$j] == "Etiquetas") {		// Tratamiento etiquetas
	 					$arrayEtiquetas = explode(", ", $res[$i][$columnas[$j]], 4);
	 					$numEtiquetas = 3;
	 					if(sizeof($arrayEtiquetas) > $numEtiquetas) {
		 					for($k=0; $k<$numEtiquetas-1; $k++) {
		 						echo $arrayEtiquetas[$k];
		 						if($k!=$numEtiquetas-2)
		 							echo ", ";
		 					}
		 					echo " ...";
		 				}
		 				else {
		 					for($k=0; $k<sizeof($arrayEtiquetas)-1; $k++) {
		 						echo $arrayEtiquetas[$k];
		 						if($k!=sizeof($arrayEtiquetas)-2)
		 							echo ", ";
		 					}
		 				}
	 				}
	 				else if($columnas[$j] == "Idiomas") {		// Tratamiento idiomas
	 					if($res[$i][$columnas[$j]] == "Espanyol")
	 						echo "Español";
	 					else
	 						echo $res[$i][$columnas[$j]];
	 				}
	 				else if($columnas[$j] == "Portada")			// Tratamiento idiomas
	 					echo "<img class='portada' src='../images/Portadas/" .$res[$i][$columnas[$j]]. "'>";
					else
						echo $res[$i][$columnas[$j]];
					echo "</td>";
 				}
 				echo "</a></tr>";
 			}
	echo "</table>";
}

function generarLista($valor, $column, $like, $gen){
	if($gen == 'index')
		require_once ('/include/shopOp.php');
	else if($gen == 'tienda')
		require_once ('/../include/shopOp.php');
	//llamar a getLista()

		$res = getLista($valor, $column, $like, $gen);

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

function generarArticulo($id, $gen) {
	if($gen == 'index') {
		require_once ('/include/shopOp.php');
		require_once ('/include/usersOp.php');
	}
	else if($gen == 'tienda') {
		require_once ('/../include/shopOp.php');
	}
	$res = getJuegoById($id, $gen);

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
	    if(isset($_SESSION["Nick"])) {
	    	echo "<a href='compra.php?juego=" .$res['Id']. "'><img src='../images/boton-comprar.png'</a>";
	    }
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

function mostrarMas($num, $column) {
	require_once('/include/shopOp.php');
	$res = seleccionarMas($num, $column);
	foreach ($res as $aux) {
		echo "<tr>";
			echo "<td><a href=tienda/articulo-tienda.php?juego=" .$aux['Id']. ">" .$aux['Titulo']. "</a></td>";
			echo "<td><a href=tienda/articulo-tienda.php?juego=" .$aux['Id']. ">" .$aux['Companyia']. "</a></td>";
			echo "<td><a href=tienda/articulo-tienda.php?juego=" .$aux['Id']. ">" .$aux['Precio']. "</a></td>";
		echo "</tr>";
	}
}

function vistaEditarJuego()
{
	require_once ('/../include/shopOp.php');
	$juego = getJuegoById($_GET['juego'], 'tienda');

				echo "</br>";
		   		echo "<center><h1>".$juego['Titulo']."</h1></center>";
				echo "<p>";
					echo "<b><label for='nombre'¨>Título: <span class='required'>* </span></label></b>";
					echo "<input type='text' id='nombre' name='nombre' value='" .$juego['Titulo']. "' placeholder='Nombre del juego' required='required' autofocus='autofocus' /> ";
				echo "</p>";
					
				echo "<p>";
					echo "<b><label for='precio'>Precio: <span class='required'>* </span></label></b>";
					echo "<input type='precio' id='precio' name='precio' value='" .$juego['Precio']. "' placeholder='Precio del juego' required='required' />";  
				echo "</p>";

				echo "<p>";
					echo "<b><label for='edad'>Edad: <span class='required'>* </span></label></b>";
					echo "<input type='edad' id='edad' name='edad' value='" .$juego['Edad']. "' placeholder='Edad mínima necesaria' required='required' />";
				echo "</p>";

				echo "<p>";
				echo "<b><label for='etiquetas'>Etiquetas: <span class='required'>* </span></label></b>";
					echo "<input type='etiquetas' id='etiquetas' name='etiquetas' value='" .$juego['Etiquetas']. "' placeholder='Etiquetas' required='required' />";
				echo "</p>";

				echo "<p><b><label for='descripcion'>Descripción: <span class='required'>* </span></label></b></p>";
				echo "<textarea type='descripcion' id='descripcion' name='descripcion' value='" .$juego['Descripcion']. "' placeholder='Descripción corta del juego (100 caracteres)' required='required'>".$juego['Descripcion']."</textarea>";

				echo "<p><b><label for='descripcion'>Descripción completa: <span class='required'>* </span></label></b></label> </p>";
				echo "<textarea type='descripcionLarga' id='descripcionLarga' name='descripcionLarga' value='" .$juego['DescripcionLarga']. "' placeholder='Descripción completa del juego' required='required'>".$juego['DescripcionLarga']."</textarea>";
				
				echo "<p>";
					echo "<b><label for='tipoJuego'>Tipo de juego: <span class='required'>* </span></label></b>";
					echo "<input type='tipoJuego' id='tipoJuego' name='tipoJuego' value='" .$juego['Tipo']. "' placeholder='Etiquetas' required='required' /></p>";
					echo "<p><em> Free to Play, Acesso Anticipado, Acción, Aventura, Carreras, Casual, Deportes, Estrategia, Indie, Multijugador Masivo, Rol, Simuladores</em></p>";


				echo "<p>";
					echo "<b><label for='idiomas'>Idiomas: </label></b>";
					echo "<input type='idiomas' id='idiomas' name='idiomas' value='" .$juego['Idiomas']. "', placeholder='Idiomas' required='required'/></p>";
					echo "<p><em> Inglés, Español, Ruso, Italiano, Chino, Japones, Francés, Portugués, Árabe</em></p>";
				
				
}
function vistaEditarPortadaJuego()
{
	require_once ('/../include/shopOp.php');
	$juego = getJuegoById($_GET['juego'], 'tienda');
	echo "</br>";
	echo "</br>";
	echo "<p><b><label for='portada'>Portada: </label></b></p>";
	echo "<img id=\"portada\" src=\"../images/Portadas/".$juego['Portada']."\" >";
	echo "</br>";
}
?>