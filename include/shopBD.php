<?php

require_once ("config.php");


function selectGenero($tipo){

	$connection=createConnection();

	$num = 0;

	$sql = "SELECT * FROM juego where tipo = '$tipo'";

	$slq = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	if ($row = $sql->cubrid_fetch_assoc()){
		$num =$sql->num_rows;
	}


	return($num);	
}






?>