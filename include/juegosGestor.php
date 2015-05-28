<?php

include ('session.php'); 
include ('config.php');
//añade un juego a la base de datos(faltan parametros)
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

//Trae un juego de la base de datos
function getGame($juego){
	$connection = createConnection();
	$result = "SELECT * FROM juego WHERE titulo = '$juego'";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));

	if($row = $result->fetch_assoc())
		{     
			return $row;
		}
		else
		{
			echo "NO EXISTE ESE USUARIO";
		}

closeConnection($connection);
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
    	getGame($_GET["juego"]);

}


?>