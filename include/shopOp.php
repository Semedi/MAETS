<?php

// gen -> desde donde se llama

function getLista($tipo, $column, $like, $gen) {
	if($gen == 'index')
		require_once ('/include/shopBD.php');
	else if($gen == 'tienda')
		require_once ('/../include/shopBD.php');
	return (select($tipo, $column, $like, $gen));
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