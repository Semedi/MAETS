<?php
include ('session.php'); 
include ('config.php');

//recibe user/pass y comprueba en la base de datos si es correcto
function login($user, $pass){
	createConnection();
	
	$result = mysql_query("SELECT * FROM usuario WHERE nick = '$user'");

	//Validamos si el nombre del usuario existe en la base de datos o es correcto
	if($result == FALSE){
			die(mysql_error());
	}

	if($row = mysql_fetch_array($result))
		{     
			//Si el usuario es correcto ahora validamos su contraseña
			 if($row["Contrasenia"] == $pass)
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

closeConnection($result);
}

//cierra la sesion
function logout(){
	session_destroy();
}


//añade usuarios a la bd(faltan parametros)
function addUser($user, $pass, $mail){

	createConnection();
	
	$result = mysql_query("SELECT * FROM usuario WHERE nick = '$user'");

	//Validamos si el nombre del administrador existe en la base de datos o es correcto
	if($result == FALSE){
			die(mysql_error());
	}

	if($row = mysql_fetch_array($result))
		{     
		echo "Ya existe este usuario";
		}
		else
		{
			$q = "INSERT INTO `usuario` (`Id`, `Nick`, `Contrasenia`, `Nombre`, `Apellidos`, `Correo`, `Fecha de Nacimiento`, `Pais`, `Ciudad`, `Direccion`, `Codigo Postal`, `Puntuacion`, `Rol`)
						 VALUES (NULL, '$user' , '$pass', '', '', '$mail', '0000-00-00', '', '', '', 00000, 0 , 'Usuario Registrado')";
			mysql_query($q) or die(mysql_error());

		
		}

	closeConnection($result);
}


//elimina user de la bd
function deleteUSer(){
	return(true);
}
//añade relacion de amigos a la bdd
function addFriend(){
	return(true);
}

//elimina relacion de amigos
function deleteFriend(){
	return(true);
}


$functionName = filter_input(INPUT_GET, 'functionName');





switch ($functionName) {
    case "login":
       login($_GET["user"], $_GET["pass"]);
        
        break;
    case "logout":
        logout();
    case "deleteUser":
        
        break;
    case "addUser":
    	addUser($_GET["user"], $_GET["pass"], $_GET["mail"]);

}

?>