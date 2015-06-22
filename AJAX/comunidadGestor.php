
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
function deleteForum($id){
	require_once ('../include/communityBD.php');
	eliminarForo($id);
	echo "Foro eliminado correctamente.";
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
	echo "Analisis agregado correctamente.";
	return (true);
}

function deleteLogro($logro) {
	require_once ('../include/communityBD.php');
	eliminarLogro($logro);
	echo "Logro eliminado correctamente.";
	return (true);
}

function deleteCaptura($captura) {
	require_once ('../include/communityBD.php');
	eliminarCaptura($captura);
	echo "Captura eliminado correctamente.";
	return (true);
}

function deleteVideo($video) {
	require_once ('../include/communityBD.php');
	eliminarVideo($video);
	echo "Video eliminado correctamente.";
	return (true);
}

function deleteAnalisis($juego, $usuario) {
	require_once ('../include/communityBD.php');
	eliminarAnalisis($juego, $usuario);
	echo "Analisis eliminado correctamente.";
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
		elseif (empty($_GET["juego"]))
		{
			echo "No puedes realizar un analisis sin especificar el juego.";
		}
		elseif (empty($_GET["texto"]))
		{
			echo "No puedes subir un analisis vacio.";
		}
		elseif ($_GET["puntuacion"] == NULL)
		{
			echo "No puedes realizar un analisis sin tu recomendacion.";
		}
		else
			newAnalisis($_GET['juego'], $_SESSION['ID'], $_GET['texto'], $_GET['puntuacion']);
	break;
	case "deleteForum":
		deleteForum($_GET['idHilo']);
	break;
	case "deleteLogro":
		deleteLogro($_GET['logro']);
	break;
	case "deleteCaptura":
		deleteCaptura($_GET['captura']);
	break;
    case "deleteVideo":
		deleteVideo($_GET['video']);
	break;
	case "deleteAnalisis":
		deleteAnalisis($_GET['juego'], $_GET['usuario']);
	break;
}





?>