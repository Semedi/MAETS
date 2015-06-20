<?php

include ('../include/config.php');
if (!isset($_SESSION)) session_start();

//recibe user/pass y comprueba en la base de datos si es correcto
function login($user, $pass){
	include '../include/usersBD.php';

	compruebaLogin($user, $pass);
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
	//header('Location: ../index.php');
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
function addFriend($friendNick, $userId){
	include '../include/usersBD.php';
	insertFriend($friendNick, $userId);
}
function searchUser($userNick){
	include'../include/usersBD.php';

	 $cont =findUser($userNick);

	header('Location:../Usuario/pagPpalUser2.php');

	
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
    	break;
    case "addFriend":
    	addFriend($_GET["friendNick"], $_SESSION["ID"]);
    	break;
    case "searchUser":
    	searchUser($_GET["userNick"]);
    	break;

}

?>