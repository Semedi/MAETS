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

function seleccionarThreadById($id) {
	return (selectThreadById($id));
}

function seleccionarThreadAnsById($id) {
	return (selectThreadAnsById($id));
}

function obtenerCapturas() {
	return getLastCaptures();
}

?>