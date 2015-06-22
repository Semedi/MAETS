<?php

include ('../include/config.php');
if (!isset($_SESSION)) session_start();

//recibe user/pass y comprueba en la base de datos si es correcto
function login($user, $pass){
	include '../include/usersBD.php';
	compruebaLogin($user, $pass);
}


//añade usuarios a la bd(faltan parametros)
function addUser($user, $pass, $mail){

	include '../include/usersBD.php';

	newUser($user, $pass, $mail);

}


//modifica la informacion de la cuenta un usuario
function modifyUserAccount($user,$mail, $ID){

	include '../include/usersBD.php';
	
	if (modifyAccount($user,$mail, $ID)){
		echo "Cambios guardados";

		$_SESSION['Nick'] = $user;
		$_SESSION['Email']= $mail;



	}

}
//actualiza la informacion personal del usuario
function updatePersonalInfo($nombre, $apellidos, $mail, $pais, $ciudad, $direccion, $CP, $ID){
	
	include '../include/usersBD.php';
	if(updateInfo($nombre, $apellidos, $mail, $pais, $ciudad, $direccion, $CP, $ID)){
		echo "Cambios guardados";
		$_SESSION['Nombre'] = $nombre;
		$_SESSION['Apellidos'] = $apellidos;
		$_SESSION['Email'] = $mail;
		$_SESSION['Pais'] = $pais;
		$_SESSION['Direccion'] = $direccion;
		$_SESSION['Ciudad'] = $ciudad;
		$_SESSION['CP'] = $CP;
	}
}
function updateSession(){
	include '../include/usersBD.php';
	updateSesion();
}


//elimina user de la bd
function deleteUser($nick){
    include ('../include/communityBD.php');
    eliminarUsuario($nick);
    echo "Usuario eliminado correctamente.";
	return(true);
}
//añade relacion de amigos a la bdd

function addFriend($friendNick, $userId){
	include '../include/usersBD.php';

    if ($friendNick != $_SESSION["Nick"]){


        
        $fid= selectUser($friendNick,"Nick",false)[0]['Id'];


	   insertFriend($fid, $userId);
    }
}
function searchUser($userNick){
	include'../include/usersBD.php';

	 $cont =findUser($userNick);

     echo $cont;

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
    case "deleteUser":
        deleteUser($_GET['user']);
        break;
    case "addUser":
    	addUser($_GET["user"], $_GET["pass"], $_GET["mail"]);
    	break;

    case "modifyUserAccount":
    	modifyUserAccount($_GET["user"], $_GET["mail"], $_SESSION["ID"]);
    	break;
    case "updatePersonalInfo":
    	updatePersonalInfo($_GET["nombre"], $_GET["apellidos"], $_GET["mail"],$_GET["pais"],$_GET["ciudad"], $_GET["direccion"],$_GET["CP"],$_SESSION["ID"]);

    	break;
    case "addFriend":
    	addFriend($_GET["friendNick"], $_SESSION["ID"]);
    	break;
    case "searchUser":
    	searchUser($_GET["userNick"]);
    	break;

}

?>