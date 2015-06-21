<?php 


require('communityBD.php');	

function getForoOP() {
	$hilos = getForoBD();
		
	return ($hilos);
		
}

function getAnalisisOP() {
	return (getAnalisis());
}

function seleccionarMasComunidad($num, $column, $table){
	return (selectMasComunidad($num, $column, $table));
}

?>