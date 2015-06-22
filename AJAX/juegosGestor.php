<?php
require_once('../include/config.php');

//aсade un juego a la base de datos(faltan parametros)
function addGame($titulo, $precio, $edad, $etiquetas, $descripcion, $descripcionLarga, $tipoJuego, $idiomas, $portada){
	$connection = createConnection();

	return (true);
}

//elimina juego de la bdd
function deleteGame($id){
	require_once ('../include/shopBD.php');
	eliminarJuego($id);
	echo "Juego eliminado con exito.";	
	return(true);
}
//modifica juego en la bdd
function modifyGame($id, $titulo, $precio, $edad, $etiquetas, $descripcion, $descripcionLarga, $tipoJuego, $idioma/*, $portada*/) {
	// Tratar descipciуn.
	if(strlen($descripcion) > 100) {
		echo "Descrcipciуn demasiado larga: " .strlen($descripcion). " (mбximo 100 caracteres).";
		return (false);
	}
	// Tratar tipoJuego
	if($tipoJuego == "Free to Play")
		$tipoJuego = 'Free_to_play';
	else if($tipoJuego == "Acceso Anticipado")
		$tipoJuego = 'Acceso Anticipado';
	else if($tipoJuego == "Multijugador Masivo")
		$tipoJuego = 'Multijugador_Masivo';
	else {
		$otrosTipos = array('Accion', 'Aventura', 'Carreras', 'Casual', 'Deportes', 'Estrategia', 'Indie', 'Rol', 'Simuladores');
		$valido = false;
		foreach ($otrosTipos as $t) {
			if($t == $tipoJuego) {
				$valido = true;
				break;
			}
		}
		if(!$valido)
			$tipo = "";
	}
	// Tratar idioma
	if($idioma == "Espaсol")
		$idioma = "Espanyol";
	else{
		$idiomas = array('Ingles', 'Ruso', 'Italiano', 'Chino', 'Japones', 'Frances', 'Portugues', 'Arabe');
		$valido = false;
		foreach ($idiomas as $i) {
			if($i == $idioma) {
				$valido = true;
				break;
			}
		}
		if(!$valido)
			$idioma = "";
	}
	require_once ('../include/shopBD.php');
	updateJuego($id, $titulo, $precio, $edad, $etiquetas, $descripcion, $descripcionLarga, $tipoJuego, $idioma, "");
	echo "Cambios realizados con exito.";
	return (true);
}

//TRAE UNA FILA ENTERA DE UN JUEGO CON EL NOMBRE QUE LE PASES, ESTE ES EL METODO QUE FUNCIONA BIEN
function getGame($juego){
	require_once ('../include/shopBD.php');
	
	return (selectGame($juego));
}

// Mйtodo que recupera un juego segъn su compaснa.
function getGameByCompanyia($companyia){
	require_once ('../include/shopBD.php');

	return (selectGameByCompany($companyia));
	
}

function getNameOfGame($juego){
	$row = getGame($juego);
	echo $row["Titulo"];
}

function addGameToUser($juego, $user) {

	require_once ('../include/shopBD.php');

	insertGameToUser($juego, $user);

	
}

$functionName = filter_input(INPUT_GET, 'functionName');
switch ($functionName) {
    case "addGame":
        break;
    case "deleteGame":
    	deleteGame($_GET['juego']);
        break;
    case "modifyGame":
    	modifyGame($_GET['id'], $_GET['titulo'], $_GET['precio'], $_GET['edad'], $_GET['etiquetas'], $_GET['descripcion'], $_GET['descripcionLarga'], $_GET['tipoJuego'], $_GET['idiomas']/*, $_GET['portada']*/);
        break;
    case "getGame":
    	return getGame($_GET["juego"]);
    	break;
    case "getGameByCompanyia":
    	return getGameByCompanyia($_GET["companyia"]);
    	break;
    case "getNameOfGame":
    	echo getNameOfGame($_GET["juego"]);
    	break;	
    case "addGameToUser":
    	addGameToUser($_GET["juego"], $_GET["usuario"]);
    	break;

}
?>