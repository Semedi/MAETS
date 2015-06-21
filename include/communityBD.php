<?php 
	
require_once ('../include/config.php');
function getForoBD()
	{
		$con = createConnection();
		//$retorno = [];
		$sql = "SELECT id, titulo, texto, fecha_de_creacion,  idusuario ";
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
	
}
function nuevoHilo($contenido, $titulo, $idusuario)
	{
		$hoy = getdate();
		//$fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
		$fecha = gmdate('Y-m-d');
		$con = createConnection();
		$sql = "INSERT INTO `hilo`(`Titulo`, `Texto`, `Fecha_de_creacion`, `IdUsuario`) VALUES ";
		$sql.= "('".$titulo."', '".$contenido."', '".$fecha."', '".$idusuario."')";
		$con->query($sql) or die ($con->error);
		closeConnection($con);
	}



function getLastAnalisis(){
	$connection = createConnection();

	$sql = "SELECT * FROM analisis ORDER BY fecha DESC LIMIT 4"; 

    $res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}

//AUN SIN ACABAR
function getLastRespuesta($hiloID){
	$con = createConnection();

	$sql = "SELECT fecha, mensaje FROM respuesta JOIN hilo WHERE hilo.id = respuesta.IDHilo AND hilo.id = '$hiloID' ORDER BY Fecha DESC limit 1"; 
    $rs = $con->query($sql) or die  ($con->error. " en la linea ".(_LINE_-1));
	if($rs != NULL)
	{
		if($row = $rs->fetch_assoc())
		{
			closeConnection($con);
			return ($row);
		}
		else
			closeConnection($con);
			return (NULL);
	}

	
}

function getNumberOfRespuestas($hiloID){
	$con = createConnection();

	$sql = "SELECT COUNT(mensaje) FROM respuesta JOIN hilo WHERE hilo.id = respuesta.IDHilo AND hilo.id = '$hiloID'"; 
    $rs = $con->query($sql) or die  ($con->error. " en la linea ".(_LINE_-1));
	if($rs != NULL)
	{
		if($row = $rs->fetch_assoc())
		{
			closeConnection($con);
			return ($row);
		}
		else
			closeConnection($con);
			return (NULL);
	}

	
}

// ret: idJuego, nombreJuego, idUsuario, nombreUsuario, recomendado, texto, portada
function getAnalisis() {
	$con = createConnection();

	$sql = "SELECT * FROM analisis;";

	$res = $con->query($sql) or die ($con->error. " en la linea ".(_LINE_-1));

	while($analisis[] = $res->fetch_assoc());

	for($i=0; $i<sizeof($analisis)-1; $i++) {
		$juego = selectJuegoById($analisis[$i]['IdJuego'],'tienda');
		$ret[] = [$analisis[$i]['IdJuego'], $juego['Titulo'], $analisis[$i]['IdUsuario'], findUserById($analisis[$i]['IdUsuario'])['nick'], $analisis[$i]['Recomendado'], $analisis[$i]['Texto'], $juego['Portada']];
	}

	closeConnection($con);

	return $ret;
}



?>