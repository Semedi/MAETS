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
	echo "Juego eliminado con йxito.";	
	return(true);
}
//modifica juego en la bdd
function modifyGame($id, $titulo, $precio, $edad, $etiquetas, $descipcion, $descripcionLarga, $tipoJuego, $idiomas/*, $portada*/) {
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
			if($t == $tipo) {
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
	require_once('--/include/shopBD');
	updateJuego($id, $titulo, $precio, $edad, $etiquetas, $descipcion, $descripcionLarga, $tipoJuego, $idiomas, "");
	echo "Cambios realizados con йxito.";
	return (true);
}

//TRAE UNA FILA ENTERA DE UN JUEGO CON EL NOMBRE QUE LE PASES, ESTE ES EL METODO QUE FUNCIONA BIEN
function getGame($juego){
	$connection = createConnection();
	$result = "SELECT * FROM juego WHERE titulo = '$juego'";
	$result = $connection->query($result) or die ($connection->error_log(message));
	if($row = $result->fetch_assoc())
		{     
			closeConnection($connection);
			return $row;
		}
		else
		{
			echo "NO EXISTE ESE JUEGO";
		}
closeConnection($connection);
}

// Mйtodo que recupera un juego segъn su compaснa.
function getGameByCompanyia($companyia){
	$connection = createConnection();
	$result = "SELECT * FROM juego WHERE Companyia = '$companyia'";
	$result = $connection->query($result) or die ($connection->error);
	if($row = $result->fetch_assoc())
		{     
			closeConnection($connection);
			return $row;
		}
		else
		{
			echo "NO EXISTE ESE JUEGO";
		}
closeConnection($connection);
}

function getNameOfGame($juego){
	$row = getGame($juego);
	echo $row["Titulo"];
}

function addGameToUser($juego, $user) {
	$connection = createConnection();
	$sql = "SELECT * FROM compras WHERE IDUsuario = '$user' AND IDJuego = '$juego'";
	$result = $connection->query($sql) or die ($connection->error);


	if($row = $result->fetch_assoc()) {     
		echo "Ya tienes este juego en tu biblioteca.";
	}
	else {
	$connection->query($sql) or die ($connection->error);
		// Insertar en compras
		$fecha = gmdate('Y-m-d h-i-s');
		$sql = "INSERT INTO `compras`(`IDUsuario`, `IDJuego`, `Fecha_de_compra`) VALUES ";
		$sql.= "('".$user."', '".$juego."', '".$fecha."')";
		$connection->query($sql) or die ($connection->error);
		// Ventas + 1
		$sql = "SELECT * FROM juego WHERE id = '$juego'";
		$result = $connection->query($sql) or die ($connection->error);
		if($row = $result->fetch_assoc()) {
			$ventas = $row['Ventas']+1;
			$sql = "UPDATE `juego` SET `Ventas` ='$ventas' WHERE `Id` ='$juego'"; 

    		$connection ->query($sql) or die ($connection->error);
		}
		echo "Compra realizad con йxito.";
	}

	closeConnection($connection);
	return (true);
}

$functionName = filter_input(INPUT_GET, 'functionName');
switch ($functionName) {
    case "addGame":
        break;
    case "deleteGame":
    	deleteGame($_GET['juego']);
        break;
    case "modifyGame":
    	modifyGame($_GET['id'], $_GET['titulo'], $_GET['precio'], $_GET['edad'], $_GET['etiquetas'], $_GET['descipcion'], $_GET['descripcionLarga'], $_GET['tipo'], $_GET['idiomas']/*, $_GET['portada']*/);
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