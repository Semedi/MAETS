<?php
include ('../include/config.php');
if (!isset($_SESSION)) session_start();

//recibe user/pass y comprueba en la base de datos si es correcto
function login($user, $pass){
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
//				 	echo crypt($pass, $stmt);
				 	//echo $stmt;
					echo "MALA CONTRASEÑA";
			 	}
		}
		else
		{
			echo "NO EXISTE ESE USUARIO";
		}

closeConnection($connection);
}

//cierra la sesion
function logout(){

	session_start();
	session_destroy();
	header('Location: ../index.php');
}


//añade usuarios a la bd(faltan parametros)
function addUser($user, $pass, $mail){

	include '../include/usersBD.php';

	newUser($user, $pass, $mail);
	header('Location: ../index.php');
}

function auth_encripta($pass, $salt) {
	 password_hash($pass."miApp");
}
//modifica la informacion de la cuenta un usuario
function modifyUserAccount($user,$mail, $ID){

	include '../include/usersBD.php';

	modifyAccount($user,$mail, $ID);

}
//actualiza la informacion personal del usuario
function updatePersonalInfo($nombre, $apellidos, $mail, $pais, $ciudad, $direccion, $CP, $ID){
	
	include '../include/usersBD.php';
	updateInfo($nombre, $apellidos, $mail, $pais, $ciudad, $direccion, $CP, $ID);

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

//muestra los juegos que posee un usuario




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
    	break;

    case "modifyUserAccount":
    	modifyUserAccount($_GET["user"], $_GET["mail"], $_SESSION["ID"]);
    	break;
    case "updatePersonalInfo":
    	updatePersonalInfo($_GET["nombre"], $_GET["apellidos"], $_GET["mail"],$_GET["pais"],$_GET["ciudad"], $_GET["direccion"],$_GET["CP"],$_SESSION["ID"]);

}

?>