<?php 
	
require ('../include/config.php');
function getForoBD()
	{
		$con = createConnection();
		$retorno = [];
		$sql = "SELECT id, titulo, texto, fecha_creacion, ultimo_mensaje, idusuario ";
		$sql.= "FROM hilo";
		$rs = $con->query($sql) or die ($con->error. "en la linea".(_LINE_-1));
		//$rs = mysql_query($sql, $mysqli);
		if($rs != NULL)
		{
			while($row = $rs->fetch_assoc())
			{
				$retorno[] = $row;
			}
		}
		closeConnection($con);
		return ($retorno);
	}



function getLastCaptures(){
	$connection = createConnection();

	$sql = "SELECT Ruta FROM capturas ORDER BY fecha DESC LIMIT 4"; 

    $res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
	
}

function getLastAnalisis(){
	$connection = createConnection();

	$sql = "SELECT * FROM analisis ORDER BY fecha DESC LIMIT 4"; 

    $res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}




?>