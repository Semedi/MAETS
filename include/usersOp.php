<?php




//permite comprar un juego
function buyGame(){
	
	return(true);
}
//permite valorar un juego, llama a valorarJuego()
function rateGame(){
	
	return(true);
}

//puedes subir tu captura a la bdd 
function Screenshot(){
	return(true);
}


function getListaUsuarios($valor, $column, $like) {
	
		require_once('../include/usersBD.php');
	
	return (selectUser($valor, $column, $like));
}


function getListaAmigos($valor, $column){
	require_once('../include/usersBD.php');


	return (selectAmigo($valor, $column));
}

// ret nick
function getUser($id){
	require_once('../include/usersBD.php');

	return (findUserById($id));
}

function getUserInfo($id) {
	require_once('../include/usersBD.php');

	return (selectUserById($id));
}

function getLogros($user, $juego) {
	require_once('../include/usersBD.php');

	return (getLogrosUser($user, $juego));	
}

function getPuntosLogros($user) {
	require_once('../include/usersBD.php');

	return (puntosDeLogro($user));
}

function getJuegosComprados($user) {
	require_once('../include/usersBD.php');

	return (getJuegosUser($user));
}

?>