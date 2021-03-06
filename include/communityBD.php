<?php 
	
function getForoBD()
	{
		require_once ('../include/config.php');
		$con = createConnection();
		$sql = "SELECT id, titulo, texto, fecha_de_creacion,  idusuario ";
		$sql.= "FROM hilo ORDER BY fecha_de_creacion ASC";
		$rs = $con->query($sql) or die ($con->error);
		if($rs != NULL)
		{
			while($row[] = $rs->fetch_assoc());
			closeConnection($con);
			return ($row);
		}
	}
function getVideosBD()
	{
		require_once ('../include/config.php');
		$con = createConnection();
		$sql = "SELECT id, idusuario, nombre, enlace, fecha ";
		$sql.= "FROM videos ORDER BY fecha Desc";
		$rs = $con->query($sql) or die ($con->error);
		if($rs != NULL)
		{
			while($row[] = $rs->fetch_assoc());
			closeConnection($con);
			return ($row);
		}
	}


function getLastCaptures(){
	require_once ('../include/config.php');
	$con = createConnection();

	$sql = "SELECT Ruta FROM capturas ORDER BY fecha"; 

    $rs = $con->query($sql) or die ($con->error. "en la linea".(_LINE_-1));
		//$rs = mysql_query($sql, $mysqli);
		if($rs != NULL)
		{
			while($row[] = $rs->fetch_assoc());
			closeConnection($con);
			return ($row);
		}
	
}
function nuevoHilo($contenido, $titulo, $idusuario)
	{
		require_once ('../include/config.php');
		$hoy = getdate();
		$fecha = gmdate('Y-m-d');
		$con = createConnection();
		$sql = "INSERT INTO `hilo`(`Titulo`, `Texto`, `Fecha_de_creacion`, `IdUsuario`) VALUES ";
		$sql.= "('".$titulo."', '".$contenido."', '".$fecha."', '".$idusuario."')";
		$con->query($sql) or die ($con->error);
		closeConnection($con);
	}

function nuevoVideo($link, $titulo, $idusuario)
{
	require_once ('../include/config.php');
	$fecha = gmdate('Y-m-d');
	$con = createConnection();
	$sql = "INSERT INTO `videos`(`IDUsuario`, `Nombre`, `Enlace`, `Fecha`) VALUES ";
	$sql.= "('".$idusuario."', '".$titulo."', '".$link."', '".$fecha."')";
	$con->query($sql) or die ($con->error);
	closeConnection($con);
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
	if((sizeof($analisis) - 1) == 0) {
		$ret[] = "vacio";
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

	if($ret = $res->fetch_assoc()) {
		closeConnection($connection);
		return ($ret);
	}

	closeConnection($connection);
	return (NULL);
}

function selectThreadAnsById($id) {
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT * FROM respuesta WHERE IDHilo = '$id' ORDER BY fecha ASC";	

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	return $ret;
}

function selectIdThread($titulo) {
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT Id FROM hilo WHERE Titulo = '$titulo'";	

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	return $ret;	
}

function insertarRespuesta($idHilo, $idUsuario, $texto) {
	require_once ('../include/config.php');
	$fecha = gmdate('Y-m-d h-i-s');
	$con = createConnection();
	$sql = "INSERT INTO `respuesta`(`IDHilo`, `IDUsuario`, `Fecha`, `Mensaje`) VALUES ";
	$sql.= "('".$idHilo."', '".$idUsuario."', '".$fecha."', '".$texto."')";
	$con->query($sql) or die ($con->error);
	closeConnection($con);
}

function getTopUsers() {
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT Nick, Imagen, Puntuacion FROM usuario ORDER BY Puntuacion DESC LIMIT 3";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	return $ret;
}

function getTopLogros() {
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT IDUsuario, COUNT(IDUsuario) FROM consigue
			GROUP BY IdUsuario
			ORDER BY COUNT(IDUsuario) DESC LIMIT 3";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	return $ret;
}

function getUsuariosNuevos() {
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT Nick, Imagen FROM usuario ORDER BY Id DESC LIMIT 3";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	return $ret;	
}

function getUltimosPost() {
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT IdUsuario FROM hilo ORDER BY Fecha_de_creacion DESC LIMIT 3";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	return $ret;		
}

function getLogro($idLogro) {
	
	require_once ('../include/config.php');

	$connection = createConnection();

	$id = $idLogro['IDLogro'];

	$sql = "SELECT * FROM logro WHERE Id = '$id'";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	if($ret = $res->fetch_assoc()) {
		closeConnection($connection);
		return $ret;
	}

	closeConnection($connection);
	return NULL;			
}

function selectLogrosJuego($juego) {
	
	require_once ('../include/config.php');

	$connection = createConnection();

	$sql = "SELECT * FROM logro WHERE JuegoID = '$juego'";

	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return ($ret);	
}

function insertAnalisis($juego, $usuario, $texto, $puntuacion) {
	require_once ('../include/config.php');
	$hoy = getdate();
	$fecha = gmdate('Y-m-d');
	$con = createConnection();
	$sql = "INSERT INTO `analisis`(`IdJuego`, `IdUsuario`, `Texto`, `Recomendado`, `Fecha`) VALUES ";
	$sql.= "('".$juego."', '".$usuario."', '".$texto."', '".$puntuacion."', '".$fecha."')";
	$con->query($sql) or die ($con->error);
	closeConnection($con);
}

function insertCaptura($idUsuario, $imagen, $index) {
	require_once ('../include/config.php');
	$hoy = getdate();
	$fecha = gmdate('Y-m-d');
	$con = createConnection();
	$sql = "INSERT INTO `capturas`(`IDUsuario`, `Nombre`, `Ruta`, `Fecha`) VALUES ";
	$sql.= "('".$idUsuario."', '".$imagen."', '".$imagen."', '".$fecha."')";
	$con->query($sql) or die ($con->error);
	closeConnection($con);
}

function eliminarForo($id) {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "DELETE FROM hilo WHERE Id = '$id'";
	$connection->query($sql) or die ($connection->error);
	closeConnection($connection);
}

function eliminarLogro($logro) {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "DELETE FROM logro WHERE Titulo = '$logro'";
	$connection->query($sql) or die ($connection->error);
	closeConnection($connection);
}

function eliminarCaptura($captura) {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "DELETE FROM capturas WHERE Nombre = '$captura'";
	$connection->query($sql) or die ($connection->error);
	closeConnection($connection);
}

function eliminarVideo($video) {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "DELETE FROM videos WHERE Nombre = '$video'";
	$connection->query($sql) or die ($connection->error);
	closeConnection($connection);
}

function eliminarAnalisis($juego, $usuario) {
	require_once('../include/config.php');
	$connection = createConnection();

	$sql = "SELECT Id FROM juego WHERE Titulo = '$juego'";
	$res = $connection->query($sql) or die ($connection->error);
	$idJuego = $res->fetch_assoc();

	$sql = "SELECT Id FROM usuario WHERE Nick = '$usuario'";
	$res = $connection->query($sql) or die ($connection->error);
	$idUsuario = $res->fetch_assoc();

	$sql = "DELETE FROM analisis WHERE IdJuego = '". $idJuego['Id']. "' AND IdUsuario = '". $idUsuario['Id']. "'";
	$connection->query($sql) or die ($connection->error);
	closeConnection($connection);
}

function getUsuarios() {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "SELECT * FROM usuario";
	$res = $connection->query($sql) or die ($connection->error);
	while($ret[] = $res->fetch_assoc());
	closeConnection($connection);	
	return $ret;
}

function eliminarUsuario($nick) {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "DELETE FROM usuario WHERE Nick = '$nick'";
	$connection->query($sql) or die ($connection->error);
	closeConnection($connection);	
}



function getAllLogros() {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "SELECT * FROM logro";
	$res = $connection->query($sql) or die ($connection->error);
	while($ret[] = $res->fetch_assoc());
	closeConnection($connection);	
	return $ret;	
}

function getAllCaptures() {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "SELECT * FROM capturas";
	$res = $connection->query($sql) or die ($connection->error);
	while($ret[] = $res->fetch_assoc());
	closeConnection($connection);	
	return $ret;		
}

function getAllVideos() {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "SELECT * FROM videos";
	$res = $connection->query($sql) or die ($connection->error);
	while($ret[] = $res->fetch_assoc());
	closeConnection($connection);	
	return $ret;
}

function getAllAnalisis() {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "SELECT * FROM analisis";
	$res = $connection->query($sql) or die ($connection->error);
	while($ret[] = $res->fetch_assoc());
	closeConnection($connection);	
	return $ret;	
}

function nuevoLogro($game, $name, $puntos, $img, $tipe) {
	require_once ('../include/config.php');
	$con = createConnection();
	$sql = "INSERT INTO `logro`(`JuegoID`, `Titulo`, `Puntos`, `Tipo`, `Imagen`) VALUES ";
	$sql.= "('".$game."', '".$name."', '".$puntos."', '".$tipe."', '".$img."')";
	$con->query($sql) or die ($con->error);
	closeConnection($con);
}
?>