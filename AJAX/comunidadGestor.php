
<?php
require_once __DIR__.'\..\include\config.php';

//añade foro a la bdd
function newTopic($contenido, $titulo, $idusuario){
	require_once "../include/communityBD.php";
	echo "MIRA: ".$contenido.", ".$titulo.", ".$idusuario;
	nuevoHilo($contenido, $titulo, $idusuario);
	return(true);
}

//elimina un foro de la bdd
function deleteForum(){
	
	return(true);
}




$functionName = filter_input(INPUT_GET, 'functionName');

switch ($functionName) {
    case "newTopic":
      newTopic($_GET['hilo'], $_GET["titulo"], $_SESSION_["ID"]); 
        break;
 
}





?>