<?php
include ('session.php'); 

//recibe user/pass y comprueba en la base de datos si es correcto
function login($user, $pass){

	$value="incorrecto";
	$_SESSION["login"] == false;

					if($user == "admin" && $pass == "admin"){
						
							$value="correcto";
							$_SESSION["login"] == true;

						}
					if ($user == "user" && $pass == "user"){
						$value="correcto";
						$_SESSION["login"] == true;
					}






					return ($value);
	
	}

//cierra la sesion
function logout(){}

//añade usuarios a la bd(faltan parametros)
function addUser(){
	return(true);
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
       echo login($_GET["user"], $_GET["pass"]);
        
        break;
    case "logout":
        
        break;
    case "deleteUser":
        
        break;
    case "addUser":
    	break;

}








?>



