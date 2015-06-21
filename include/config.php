<?php
session_start();
//LA VARIABLE MAS IMPORTANTE: REDEFINIR SI COLOCAIS LA CARPETA EN OTRO LADO QUE NO SEA HTDOCS
define('RAIZ_APP', 'http://localhost/MAETS');


//rutas que se usan siempre
define('HOME', RAIZ_APP.'/index.php');
define('CONTACT', RAIZ_APP.'/contact.php');
define('SIGNUP', RAIZ_APP.'/signUp.php');
define('TIENDA', RAIZ_APP.'/tienda.php');
define('LOGIN', RAIZ_APP.'/login.php');
define('LOGOUT', RAIZ_APP.'/include/logout.php');
define('COMMUNITY', RAIZ_APP.'/community.php');
define('USER', RAIZ_APP.'/Usuario/PagPpalUser.php');




//carpetas
define('IMAGENES', RAIZ_APP.'/images');
define('COMUNIDAD', RAIZ_APP.'/community');
define('TIENDACARPETA', RAIZ_APP.'/tienda');
define('INCLUDECARPETA', RAIZ_APP.'/include');






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
