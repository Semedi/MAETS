﻿<?php

function modifyAccount($user,$mail, $ID){

	$connection = createConnection();

	$sql = "UPDATE `maets`.`usuario` SET `Nick` ='$user',`Correo`= '$mail' WHERE `usuario`.`Id` ='$ID'"; 



    $connection ->query($sql) or die ($connection->error. " en la linea". ('_LINE_-1'));



	closeConnection($connection);

	return (true);

}
//actualiza la informacion personal del usuario
function updateInfo($nombre, $apellidos, $mail, $pais, $ciudad, $direccion, $CP, $ID){
	
	$connection = createConnection();

	$sql = "UPDATE `maets`.`usuario` SET `Nombre` ='$nombre',`Apellidos`='$apellidos', `Correo`= '$mail', `Pais`= '$pais', `Ciudad`='$ciudad', `Direccion`='$direccion', `Codigo Postal`='$CP'  WHERE `usuario`.`Id` ='$ID'"; 

    $connection ->query($sql) or die ($connection->error. " en la linea". ('_LINE_-1'));
	closeConnection($connection);
	return (true);

}


function updateFoto($id, $foto){
	
	$connection = createConnection();

	$sql = "UPDATE `maets`.`usuario` SET `Imagen`='$foto' WHERE `usuario`.`Id` ='$id'"; 

    $connection ->query($sql) or die ($connection->error. " en la linea". ('_LINE_-1'));
	closeConnection($connection);
	return (true);

}


function newUser($user, $pass, $mail){
	

	$connection = createConnection();
	
	$result = "SELECT * FROM usuario WHERE nick = '$user'";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));


	if($row = $result->fetch_assoc())
		{     
			echo "Ya existe este usuario";
		}
	else
		{
			$nombreSal = $user;
			$passSal = $pass;
			
			$salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);
			$salt = strtr($salt, array('+' => '.')); 
			$hash = crypt($passSal, '$2y$10$' . $salt);

			$q = "INSERT INTO `usuario` (`Id`, `Nick`, `Contrasenia`, `Nombre`, `Apellidos`, `Correo`, `Fecha de Nacimiento`, `Pais`, `Ciudad`, `Direccion`, `Codigo Postal`, `Puntuacion`, `Rol`, `Imagen` , `Companyia`)
				VALUES (NULL, '$user' , '$hash', '', '', '$mail', '0000-00-00', '', '', '', 00000, 0 , 'Usuario Registrado', 'usuario.jpg', '')";
			$connection->query($q) or die($connection->error. " en la linea".(_LINE_-1));
		}

	closeConnection($connection);
}


function newUserAdmin($user, $pass, $mail, $rol) {
	$connection = createConnection();
	
	$result = "SELECT * FROM usuario WHERE nick = '$user'";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));


	if($row = $result->fetch_assoc())
		{     
			echo "Ya existe este usuario";
		}
	else
		{
			$nombreSal = $user;
			$passSal = $pass;
			
			$salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);
			$salt = strtr($salt, array('+' => '.')); 
			$hash = crypt($passSal, '$2y$10$' . $salt);

			$q = "INSERT INTO `usuario` (`Id`, `Nick`, `Contrasenia`, `Nombre`, `Apellidos`, `Correo`, `Fecha de Nacimiento`, `Pais`, `Ciudad`, `Direccion`, `Codigo Postal`, `Puntuacion`, `Rol`, `Imagen` , `Companyia`)
				VALUES (NULL, '$user' , '$hash', '', '', '$mail', '0000-00-00', '', '', '', 00000, 0 , '$rol', 'usuario.jpg', '')";
			$connection->query($q) or die($connection->error. " en la linea".(_LINE_-1));
		}

	closeConnection($connection);
}


function findUser($userNick){
	$connection = createConnection();
	//$num=0;
	$sql = "SELECT * FROM usuario WHERE nick LIKE '%$userNick%'";
	$result = $connection->query($sql) or die ($connection->error. "en la linea".(_LINE_-1));
	if($row = $result->fetch_assoc())
	{
		closeConnection($connection);
		return ($row);
	}
		//$num= $result->num_rows;
	else
		closeConnection($connection);
		return (NULL);
}

function findUserById($iduser){
	$con = createConnection();
	$sql = "SELECT nick FROM usuario WHERE id = '$iduser'";
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

function selectUserById($iduser){
	$con = createConnection();
	$sql = "SELECT * FROM usuario WHERE id = '$iduser'";
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

function findImageUserById($iduser){
	$con = createConnection();
	$sql = "SELECT Imagen FROM usuario WHERE id = '$iduser'";
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


function insertFriend($fid, $userId){
	$connection = createConnection();
	

	$sql= "INSERT INTO `maets`.`amigo` (`IDUsuario`, `IDAmigo`) VALUES ('$userId', '$fid')";
	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));
	
	closeConnection($connection);
	
}


function auth_encripta($pass, $salt) {
	 password_hash($pass."miApp");
}

//NO LA USAMOS SE PUEDE BORRAR
//funcion para recuperar los datos de la sesión de la base de datos en caso de fallo 
function updateSesion(){
	$id = $_SESSION['ID'];
	$connection = createConnection();
	$result = "SELECT * FROM usuario WHERE Id = '$id'";

	if($row = $result->fetch_assoc()){
		//session_destroy();
		//session_start();
		$_SESSION['Nick'] = $user;
		$_SESSION['Logueado'] = true;
		$_SESSION['Rol'] = $row["Rol"];
		$_SESSION['Nombre'] = $row["Nombre"];
		$_SESSION['Apellidos'] = $row["Apellidos"];
		$_SESSION['Email'] = $row["Correo"];
		$_SESSION['Pais'] = $row["Pais"];
		$_SESSION['Direccion'] = $row["Direccion"];
		$_SESSION['Ciudad'] = $row["Ciudad"];
		$_SESSION['CP'] = $row["Codigo Postal"];
		$_SESSION['IMG'] = $row["Imagen"];


	}
	closeConnection($connection);

}
function updatePassw($passw,$newPassw,$id){
	$connection = createConnection();
	$sql = "SELECT * FROM usuario WHERE Id = '$id'";
	$result = $connection->query($sql) or die ($connection->error. " en la linea".(_LINE_-1));
	// si la contraseña introducida es correcta insertamos la nueva la nueva contraseña
	if($row = $result->fetch_assoc()){
		$dbHash = $row["Contrasenia"];
		if (crypt($passw, $dbHash) == $dbHash){
				$passSal = $newPassw;
			
				$salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);
				$salt = strtr($salt, array('+' => '.')); 
				$hash = crypt($passSal, '$2y$10$' . $salt);

			$sql2 = "UPDATE `maets`.`usuario` SET `Contrasenia` ='$hash' WHERE `usuario`.`Id` ='$id'"; 

		    $connection ->query($sql2) or die ($connection->error. " en la linea". ('_LINE_-1'));
		    return(true);
		}

	}else return (false);

	closeConnection($connection);


}

function compruebaLogin($user, $pass){
	$connection = createConnection();
	
	$result = "SELECT * FROM usuario WHERE nick = '$user'";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));
	


	if($row = $result->fetch_assoc())
		{    
				
			//Si el usuario es correcto ahora validamos su contraseña
			$dbHash = $row["Contrasenia"];
			if (crypt($pass, $dbHash) == $dbHash)
				 {
				  //Creamos sesión
				 	session_destroy();
					session_start();  
				  //Almacenamos los datos del usuario en variables
					$_SESSION['Nick'] = $user;
					$_SESSION['Logueado'] = true;
					$_SESSION['Rol'] = $row["Rol"];
					$_SESSION['Nombre'] = $row["Nombre"];
					$_SESSION['Apellidos'] = $row["Apellidos"];
					$_SESSION['Email'] = $row["Correo"];
					$_SESSION['Pais'] = $row["Pais"];
					$_SESSION['Direccion'] = $row["Direccion"];
					$_SESSION['Ciudad'] = $row["Ciudad"];
					$_SESSION['CP'] = $row["Codigo Postal"];
					$_SESSION['IMG'] = $row["Imagen"];
					$_SESSION['ID'] = $row["Id"];
				 }
			else
				 {				 	
					echo "MALA CONTRASEÑA";
			 	}
		}
		else
		{
			echo "NO EXISTE ESE USUARIO";
		}

closeConnection($connection);
}


function numberOfGames(){
	$connection = createConnection();
	$id = $_SESSION['ID'];
	$result = "SELECT COUNT(IDUsuario) FROM compras WHERE IDUsuario = $id";
	$res = $connection->query($result) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}

function getMyGames(){
	$connection = createConnection();
	$id = $_SESSION['ID'];
	$result = "SELECT titulo FROM juego JOIN compras JOIN usuario WHERE juego.Id = compras.IDJuego and usuario.ID = $id";
	$res = $connection->query($result) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}

function getMyFriends(){
	$connection = createConnection();
	$id = $_SESSION['ID'];
	$result = "SELECT Nick FROM usuario JOIN amigo WHERE ID != $id and IDUsuario = $id";
	$res = $connection->query($result) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}




function puntosDeLogro($user){
	$connection = createConnection();
	$result = "SELECT SUM(Puntos) FROM logro JOIN consigue WHERE logro.ID = consigue.IDLogro and IDUsuario = $user";
	$res = $connection->query($result) or die ($connection->error. " en la linea". (_LINE_-1));

	if($ret = $res->fetch_assoc()){
		closeConnection($connection);
		return $ret;
	}

	closeConnection($connection);

	return(NULL);
}

function selectUser($valor, $column, $like){

	$connection=createConnection();

	if($valor == "")
		$sql = "SELECT * FROM usuario";

	else {
		if($like)
			$sql = "SELECT * FROM usuario WHERE UPPER(" .$column. ") LIKE UPPER('%$valor%')	";
		else
			$sql = "SELECT * FROM usuario WHERE " .$column. " = '$valor'";
	}

	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));

	while($ret[] = $res->fetch_assoc());

	closeConnection($connection);

	return($ret);
}


function selectAmigo($valor, $column){

	$connection=createConnection();

	$sql = "SELECT * FROM amigo WHERE " .$column. " = '$valor'";

	$res = $connection->query($sql) or die ($connection->error. " en la linea". (_LINE_-1));
	while($ret[] = $res->fetch_assoc());


	closeConnection($connection);

	return($ret);

}

function getLogrosUser($user, $juego) {
	require_once('communityBd.php');
	$connection=createConnection();
	
	$sql = "SELECT IDLogro FROM consigue WHERE IDUsuario = '$user' ORDER BY Fecha DESC";

	$res = $connection->query($sql) or die ($connection->error);
	while($logrosId[] = $res->fetch_assoc());

	$ret = NULL;
	foreach ($logrosId as $id) {
		if($id!=NULL) {
			$logro = getLogro($id);
			if($juego != "") {
				if($logro['JuegoID'] == $juego)
					$ret[] = $logro;
			}
			else
				$ret[] = $logro;
		}
	}

	closeConnection($connection);

	return($ret);
}

function getJuegosUser($user) {
	require_once('shopBd.php');
	$connection = createConnection();

	$sql = "SELECT IDJuego FROM compras WHERE IDUsuario = '$user'";

	$res = $connection->query($sql) or die ($connection-error. " en la linea".(_LINE_-1));
	while($idJuegos[] = $res->fetch_assoc());

	$ret = NULL;
	foreach ($idJuegos as $id) {
		if($id != NULL) {
			$ret[] = selectJuegoById($id['IDJuego'], 'tienda');
		}
	}

	closeConnection($connection);

	return ($ret);
}


?>