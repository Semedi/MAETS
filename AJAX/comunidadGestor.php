
<?php
require_once __DIR__.'\..\include\config.php';

//añade hilo a la bdd
function newTopic($contenido, $tit, $idusuario){
	require_once '../include/communityBD.php';
	nuevoHilo($contenido, $tit, $idusuario);
	echo"Hilo nuevo creado con exito.";
	return(true);
}

function newAnswer($titulo, $idUsuario, $texto) {
	require_once '../include/communityBD.php';
	$idHilo = selectIdThread($titulo);
	insertarRespuesta($idHilo, $idUsuario, $texto);
	echo "Respuesta creada con éxito.";
	return (true);
}

//elimina un hilo de la bdd
function deleteForum(){
	
	return(true);
}




$functionName = filter_input(INPUT_GET, 'functionName');

switch ($functionName) {
    case "newTopic":
		if (!isset($_SESSION))
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
		if(!isset($_SESSION))
			echo "NO puedes responder nu tema sin haberte logeado primero.";
		else if(empty(($_GET['texto'])))
			echo "No puedes resopnder un tema sin contenido.";
		else
			newAnswer($_GET["titulo"], $_SESSION["ID"], $_GET["texto"]);
		break;
}





?>