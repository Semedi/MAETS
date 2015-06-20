<?php

define('RAIZ_APP', 'http://localhost/MAETS');
define('HOME', RAIZ_APP.'/index.php');
session_start();


//CREAR UNA VARIABLE QUE GUARDE EL DIR DE MAETS

 /*Create connection*/
function createConnection(){

	$servidor="localhost";
	$user="root";
	$bdd="maets";

	$mysqli = new mysqli($servidor, $user, "", $bdd);
	if (mysqli_connect_errno() ) {
	 echo "Error de conexión a la BD: ".mysqli_connect_error();
	 exit();
	}
	return $mysqli;
}


 function closeConnection($mysqli){
		$mysqli->close();
 }
