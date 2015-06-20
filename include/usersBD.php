<?php

function modifyAccount($user,$mail, $ID){

	$connection = createConnection();

	$sql = "UPDATE `maets`.`usuario` SET `Nick` ='$user',`Correo`= '$mail' WHERE `usuario`.`Id` ='$ID'"; 

    $connection ->query($sql) or die ($connection->error. " en la linea". ('_LINE_-1'));
	closeConnection($connection);

}
//actualiza la informacion personal del usuario
function updateInfo($nombre, $apellidos, $mail, $pais, $ciudad, $direccion, $CP, $ID){
	
	$connection = createConnection();

	$sql = "UPDATE `maets`.`usuario` SET `Nombre` ='$nombre',`Apellidos`='$apellidos', `Correo`= '$mail', `Pais`= '$pais', `Ciudad`='$ciudad', `Direccion`='$direccion', `Codigo Postal`='$CP'  WHERE `usuario`.`Id` ='$ID'"; 

    $connection ->query($sql) or die ($connection->error. " en la linea". ('_LINE_-1'));
	closeConnection($connection);

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

			$q = "INSERT INTO `usuario` (`Id`, `Nick`, `Contrasenia`, `Nombre`, `Apellidos`, `Correo`, `Fecha de Nacimiento`, `Pais`, `Ciudad`, `Direccion`, `Codigo Postal`, `Puntuacion`, `Rol`, `Imagen`)
				VALUES (NULL, '$user' , '$hash', '', '', '$mail', '0000-00-00', '', '', '', 00000, 0 , 'Usuario Registrado', 'usuario.jpg')";
			$connection->query($q) or die($connection->error. " en la linea".(_LINE_-1));
		}

	closeConnection($connection);
}

function auth_encripta($pass, $salt) {
	 password_hash($pass."miApp");
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
//				 	
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
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));

	//FALTA DEVOLVER EL RESULTADO

	closeConnection($connection);
}

function getMyGames(){
	$connection = createConnection();
	$id = $_SESSION['ID'];
	$result = "SELECT titulo FROM juego JOIN compras JOIN usuario WHERE juego.Id = compras.IDJuego and usuario.ID = $id";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));

	//FALTA DEVOLVER EL RESULTADO

	closeConnection($connection);
}

function getMyFriends(){
	$connection = createConnection();
	$id = $_SESSION['ID'];
	$result = "SELECT Nick FROM usuario JOIN amigo WHERE ID != $id and IDUsuario = $id";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));

	//FALTA DEVOLVER EL RESULTADO

	closeConnection($connection);
}




function puntosDeLogro(){
	$connection = createConnection();
	$id = $_SESSION['ID'];
	//SELECT SUM(Puntos) FROM consigue NATURAL JOIN logro WHERE IDUsuario = 6
	$result = "SELECT SUM(Puntos) FROM logro JOIN consigue WHERE logro.ID = consigue.IDLogro and IDUsuario = $id";
	$result = $connection->query($result) or die ($connection->error. " en la linea".(_LINE_-1));

	//FALTA DEVOLVER EL RESULTADO

	closeConnection($connection);
}





?>