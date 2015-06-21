<?php

require_once (RAIZ_APP.'/include/shopBD.php');



function getLista($tipo) {
	return (selectGenero($tipo));
}

function getJuegoById($id) {
	return (selectJuegoById($id));
}

function seleccionarMasVendidos($num) {
	return (selectMasVendidos($num));
}

?>