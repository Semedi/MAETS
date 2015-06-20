<?php


require_once 'include/config.php';
function selectGenero($tipo){

	$connection=createConnection();

	$sql = "SELECT * FROM juego WHERE tipo = '$tipo'";

	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}






?>