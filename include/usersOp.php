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





?>