<?php 
	
require_once ('../include/config.php');
function getForoBD()
	{
		$con = createConnection();
		//$retorno = [];
		$sql = "SELECT id, titulo, texto, fecha_creacion, ultimo_mensaje, idusuario ";
		$sql.= "FROM hilo";
		$rs = $con->query($sql) or die ($con->error. "en la linea".(_LINE_-1));
		//$rs = mysql_query($sql, $mysqli);
		if($rs != NULL)
		{
			while($row[] = $rs->fetch_assoc());
			closeConnection($con);
			return ($row);
		}
	}



function getLastCaptures(){
	$connection = createConnection();

	$sql = "SELECT Ruta FROM capturas ORDER BY fecha DESC LIMIT 4"; 

    $res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
	

function nuevoHilo($contenido, $titulo, $idusuario)
	{
		$hoy = getdate();
		//$fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
		$fecha = gmdate('Y-m-d \G\M\T');
		$con = createConnection();
		$sql = "INSERT INTO `hilo`(`Titulo`, `Texto`, `Fecha_creacion`, `Ultimo_mensaje`, `IdUsuario`) VALUES";
		$sql.= "(".$titulo.", ".$contenido.", ".$fecha.", ".$fecha.", ".$idusuario.")";
		$con->query($sql) or die ($con->error. "en la linea".(_LINE_-1));
		$con.closeConnection();
	}

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