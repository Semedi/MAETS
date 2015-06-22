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
function modifyGame(){
	
	return(true);
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