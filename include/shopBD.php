<?php

// gen -> desde donde se llama

function select($valor, $column, $like, $gen){

	if($gen == 'index')
		require_once ('/include/config.php');
	else if($gen == 'tienda')
		require_once ('/../include/config.php');

	$connection=createConnection();

	if($valor == "")
		$sql = "SELECT * FROM juego";

	else {
		if($like)
			$sql = "SELECT * FROM juego WHERE UPPER(" .$column. ") LIKE UPPER('%$valor%')	";
		else
			$sql = "SELECT * FROM juego WHERE " .$column. " = '$valor'";
	}

	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}

function selectJuegoById($id, $gen) {

	if($gen == 'index')
		require_once ('/include/config.php');
	else if($gen == 'tienda')
		require_once ('/../include/config.php');

	$connection=createConnection();

	$sql = "SELECT * FROM juego WHERE Id = '$id'";

	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	if($ret = $res->fetch_assoc()) {
		closeConnection($connection);

		return ($ret);
	}

	closeConnection($connection);
	return (NULL);
}


function selectGameByCompany($companyia){

	$connection = createConnection();
	$result = "SELECT * FROM juego WHERE Companyia = '$companyia'";
	$result = $connection->query($result) or die ($connection->error);
	if($row = $result->fetch_assoc())
		{     
			closeConnection($connection);
			return $row;
		}
		else
		{
			echo "NO EXISTE ESE JUEGO";
		}
closeConnection($connection);

}

function selectMas($num, $column) {
	require_once('/include/config.php');

	$connection=createConnection();

 	$sql = "SELECT Id, Titulo, Companyia, Precio FROM juego ORDER BY " .$column. " Desc LIMIT " .$num;

 	$res = $connection->query($sql) or die ($connection->error). " en la linea".(_LINE_-1);

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return ($ret);

}


function selectGame($juego){

	$connection = createConnection();
	$result = "SELECT * FROM juego WHERE titulo = '$juego'";
	$result = $connection->query($result) or die ($connection->error_log(message));
	if($row = $result->fetch_assoc())
		{     
			closeConnection($connection);
			return $row;
		}
		else
		{
			echo "NO EXISTE ESE JUEGO";
		}
	closeConnection($connection);


}

function insertGame($titulo, $precio, $edad, $etiquetas, $descripcion, $descripcionLarga, $tipoJuego, $idiomas, $portada) {
	require_once('../include/config.php');

	$connection=createConnection();

	$sql = "SELECT * FROM juego WHERE Titulo = '$titulo'";
	$result = $connection->query($result) or die ($connecion->error. " en la linea".(_LINE_-1));

	if($row = $result->fetch_assoc())
		echo "El juego ya existe.";
	else {
		$hoy = gmdate('Y-m-d');
		$sql = "INSERT INTO 'juego' ('Id', 'Titulo', 'Portada', 'Precio', 'Edad', 'Descripcion', 'DescipcionLarga', 'Companyia', 'Tipo', 'Etiquetas', 'Idiomas', 'Ventas', 'Fecha')
				VALUES (NULL, '$titulo', '$portada', '$precio', '$edad', '$descipcion', '$descripcionLarga', '$tipoJuego', '$idiomas', '$etiquetas', '0', '$hoy'";
		$connection->query($sql) or die ($connecion->error. " en la linea".(_LINE_-1));
	}	
	closeConnection($connection);
}

function eliminarJuego($juego) {
	require_once('../include/config.php');

	$connection=createConnection();

	$sql = "DELETE FROM juego WHERE Id = '$juego'";
	$connection->query($sql) or die ($connecion->error. " en la linea".(_LINE_-1));	

	closeConnection($connection);
}

function insertGameToUser($juego, $user){

	$connection = createConnection();
	$sql = "SELECT * FROM compras WHERE IDUsuario = '$user' AND IDJuego = '$juego'";
	$result = $connection->query($sql) or die ($connection->error);


	if($row = $result->fetch_assoc()) {     
		echo "Ya tienes este juego en tu biblioteca.";
	}
	else {
	$connection->query($sql) or die ($connection->error);
		// Insertar en compras
		$fecha = gmdate('Y-m-d h-i-s');
		$sql = "INSERT INTO `compras`(`IDUsuario`, `IDJuego`, `Fecha_de_compra`) VALUES ";
		$sql.= "('".$user."', '".$juego."', '".$fecha."')";
		$connection->query($sql) or die ($connection->error);
		// Ventas + 1
		$sql = "SELECT * FROM juego WHERE id = '$juego'";
		$result = $connection->query($sql) or die ($connection->error);
		if($row = $result->fetch_assoc()) {
			$ventas = $row['Ventas']+1;
			$sql = "UPDATE `juego` SET `Ventas` ='$ventas' WHERE `Id` ='$juego'"; 

    		$connection ->query($sql) or die ($connection->error);
		}
		echo "Compra realizada con exito.";
	}
	closeConnection($connection);
	return (true);


}

function updateJuego($id, $titulo, $precio, $edad, $etiquetas, $descripcion, $descripcionLarga, $tipoJuego, $idiomas, $portada) {
	require_once('../include/config.php');
	$connection = createConnection();
	$sql = "UPDATE `juego` SET `Titulo` ='$titulo',`Precio`='$precio', `Edad`= '$edad', `Etiquetas`= '$etiquetas', `Descripcion`='$descripcion', `DescripcionLarga`='$descripcionLarga', `Tipo`='$tipoJuego', `Idiomas`='$idiomas'  WHERE `Id` ='$id'"; 
	$connection ->query($sql) or die ($connection->error);
	closeConnection($connection);
	return (true);
	
	}

?>