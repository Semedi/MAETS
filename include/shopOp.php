<?php

require_once '../include/shopBD.php';



function getLista($tipo) {
	return (selectGenero($tipo));
}

function getJuegoById($id) {
	return (selectJuegoById($id));
}

?>