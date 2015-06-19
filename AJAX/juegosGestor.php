<?php

include ('session.php'); 
include ('config.php');
//aсade un juego a la base de datos(faltan parametros)
function addGame($juego){
	return (true);
}

//elimina juego de la bdd
function deleteGame($id){
	
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
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));
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
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));
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

$functionName = filter_input(INPUT_GET, 'functionName');
switch ($functionName) {
    case "addGame":        
        break;
    case "deleteGame":
        break;
    case "modifyGame":
        break;
    case "getGame":
    	return getGame($_GET["juego"]);
    case "getGameByCompanyia":
    	return getGameByCompanyia($_GET["companyia"]);
    case "getNameOfGame":
    	echo getNameOfGame($_GET["juego"]);

}

?>