<?php 


require('communityBD.php');	

function getForoOP() {
	$hilos = getForoBD();	
	return ($hilos);		
}

function getVideosOP() {
	$videos = getVideosBD();	
	return ($videos);	
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

function obtenerInfoCapturas() {
	return getAllCaptures();
}

function obtenerCapturas() {
	return getLastCaptures();
}

function obtenerTopUsers() {
	return getTopUsers();
}

function obtenerTopLogros() {
	return getTopLogros();
}

function obtenerUsuariosNuevos() {
	return getUsuariosNuevos();
}

function obtenerUltimosPost() {
	return getUltimosPost();
}

function getLogrosJuego($juego) {
	return selectLogrosJUego($juego);
}

function obtenerUsuarios() {
	return getUsuarios();
}

function obtenerLogros() {
	return getAllLogros();
}

function obtenerInfoVideos() {
	return getAllVideos();
}

function obtenerInfoAnalisis() {
	return getAllAnalisis();
}
?>