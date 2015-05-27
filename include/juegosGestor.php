<?php

//añade un juego a la base de datos(faltan parametros)
function addGame(String game){
	return (true);
}

//elimina juego de la bdd
function deleteGame(int id){
	
	return(true);
}
//modifica juego en la bdd
function modifyGame(){
	
	return(true);
}

//Trae un juego de la base de datos
function getGame($juego){
	/*Consulta de mysql con la que indicamos que necesitamos que seleccione
	**solo los campos que tenga como nombre_administrador el que el formulario
	**le ha enviado*/
	createConnection();
	
	$result = mysql_query("SELECT * FROM juego WHERE titulo = '$juego'");

	//Si no existe el juego en la base de datos...
	if($result == FALSE){
			die(mysql_error());
	}

	if($row = mysql_fetch_array($result))
		{     
			//Si el juego es correcto traemos los datos

		}
		else
		{
			echo "NO EXISTE ESE JUEGO";
		}

closeConnection($result);
	return(true);
}


?>