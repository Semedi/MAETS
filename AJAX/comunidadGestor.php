
<?php
require_once __DIR__.'\..\include\config.php';

//añade hilo a la bdd
function newTopic($contenido, $tit, $idusuario){
	require_once '../include/communityBD.php';
	nuevoHilo($contenido, $tit, $idusuario);
	echo"Hilo nuevo creado con exito.";
	return(true);
}

// añade una respuesta a un hilo en la base de datos
function newAnswer($idHilo, $texto, $idUsuario) {
	require_once '../include/communityBD.php';
	insertarRespuesta($idHilo, $idUsuario, $texto);
	echo "Respuesta creada con exito.";
	return (true);
}

//elimina un hilo de la bdd
function deleteForum(){
	
	return(true);
}

// sube un video a la bdd
function newVideo($link, $tit, $idusuario){
	require_once '../include/communityBD.php';
	$linkCorto = explode("=", $link)[1];
	$link = "https://www.youtube.com/embed/" .$linkCorto;
	nuevoVideo($link, $tit, $idusuario);
	echo"Video insertado con exito.";
	return(true);
}

function newAnalisis($juego, $usuario, $texto, $puntuacion) {
	require_once ('../include/shopBD.php');
	$juego = select($juego, 'Titulo', false, 'tienda');
	if($juego[0] == NULL) {
		echo "El juego no se encuentra en el sistema.";
		return (false);
	}
	require_once ('../include/communityBD.php');
	if($puntuacion == "si")
		insertAnalisis($juego[0]['Id'], $usuario, $texto, 1);
	else
		insertAnalisis($juego[0]['Id'], $usuario, $texto, 0);
	echo "Análisis añadido correctamente.";
	return (true);
}




$functionName = filter_input(INPUT_GET, 'functionName');

switch ($functionName) {
    case "newTopic":
		if (!$_SESSION)
		{
			echo "No puedes iniciar un tema sin haberte logeado primero.";
		}
		elseif (empty($_GET["title"]))
		{
			echo "No puedes crear un tema sin titulo.";
		}
		elseif (empty($_GET["content"]))
		{
			echo "No puedes crear un tema sin contenido.";
		}
		else
		{
			 newTopic($_GET["content"], $_GET["title"], $_SESSION["ID"]); 
		}	
	 break;
	case "newAnswer":
		if(!$_SESSION)
			echo "No puedes responder un tema sin haberte logeado primero.";
		else if(empty(($_GET['texto'])))
			echo "No puedes resopnder un tema sin contenido.";
		else {
			newAnswer($_GET["idHilo"], $_GET["texto"], $_SESSION["ID"]);
		}
    break;
	case "newVideo":
		if (!$_SESSION)
		{
			echo "No puedes subir un video sin haberte logeado primero.";
		}
		elseif (empty($_GET["title"]))
		{
			echo "No puedes subir un video sin titulo.";
		}
		elseif (empty($_GET["link"]))
		{
			echo "No puedes subir un video sin su enlace.";
		}
		else
		{
			 newVideo($_GET["link"], $_GET["title"], $_SESSION["ID"]); 
		}	
    break;
	case "newAnalisis":
		if(!$_SESSION)
			echo "No puedes realizar un analisis sin haberte logueado primero.";
		else
			newAnalisis($_GET['juego'], $_SESSION['ID'], $_GET['texto'], $_GET['puntuacion']);
	break;
	
    
}





?>