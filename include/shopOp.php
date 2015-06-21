<?php

function getLista($tipo, $gen) {
	if($gen == 'index')
		require_once ('/include/shopBD.php');
	else if($gen == 'tienda')
		require_once ('/../include/shopBD.php');
	return (selectGenero($tipo, $gen));
}

function getJuegoById($id, $gen) {
	if($gen == 'index')
		require_once ('/include/shopBD.php');
	else if($gen == 'tienda')
		require_once ('/../include/shopBD.php');
	return (selectJuegoById($id, $gen));
}

function seleccionarMas($num, $column) {
	require_once ('/include/shopBD.php');
	return (selectMas($num, $column));
}

?>