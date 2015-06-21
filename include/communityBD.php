<?php 
	
function getForoBD()
	{
		require_once ('../include/config.php');
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
	require_once ('../include/config.php');
	$connection = createConnection();

	$sql = "SELECT Ruta FROM capturas ORDER BY fecha DESC LIMIT 4"; 

    $res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
	

function nuevoHilo($contenido, $titulo, $idusuario)
	{
		require_once ('../include/config.php');
		$hoy = getdate();
		//$fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
		$fecha = gmdate('Y-m-d \G\M\T');
		$con = createConnection();
		$sql = "INSERT INTO `hilo`(`Titulo`, `Texto`, `Fecha_creacion`, `IdUsuario`) VALUES";
		$sql.= "(".$titulo.", ".$contenido.", ".$fecha.", ".$idusuario.")";
		$con->query($sql) or die ($con->error. "en la linea".(_LINE_-1));
		$con.closeConnection();
	}

}

function getLastAnalisis(){
	require_once ('../include/config.php');
	$connection = createConnection();

	$sql = "SELECT * FROM analisis ORDER BY fecha DESC LIMIT 4"; 

    $res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}

//AUN SIN ACABAR
function getLastRespuesta($hiloID){
	require_once ('../include/config.php');
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
	require_once ('../include/config.php');
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
	require_once ('../include/config.php');
	$con = createConnection();

	$sql = "SELECT * FROM analisis ORDER BY 'Fecha';";

	$res = $con->query($sql) or die ($con->error. " en la linea ".(_LINE_-1));

	while($analisis[] = $res->fetch_assoc());

	for($i=0; $i<sizeof($analisis)-1; $i++) {
		$juego = selectJuegoById($analisis[$i]['IdJuego'],'tienda');
		$ret[] = [$analisis[$i]['IdJuego'], $juego['Titulo'], $analisis[$i]['IdUsuario'], findUserById($analisis[$i]['IdUsuario'])['nick'], $analisis[$i]['Recomendado'], $analisis[$i]['Texto'], $juego['Portada']];
	}

	closeConnection($con);

	return $ret;
}

function selectMasComunidad($num, $column, $table) {
	require_once ('include/config.php');
	
	$connection = createConnection();

 	$sql = "SELECT * FROM " .$table. " ORDER BY " .$column. " Desc LIMIT " .$num;

 	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return ($ret);
}

// Devuelve un array con el hilo principal y las respuestas.
function selectThreadById($id) {
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT * FROM hilo WHERE id = '$id'";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	if($ret = $res->fetch_assoc())
		$hilo = $ret;
	else
		return (NULL);

	$sql = "SELECT * FROM respuesta WHERE IDHilo = '$id'";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($respuestas[] = $res->fetch_assoc());

	$ret[] = $hilo;
	foreach ($respuestas as $aux) {
		$respuestas[] = $aux;
	}

	closeConnection($connection);
}


?>