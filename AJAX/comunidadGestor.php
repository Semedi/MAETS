
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
	nuevoVideo($link, $tit, $idusuario);
	echo"Video insertado con exito.";
	return(true);
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
	
    
}





?>