<?php


//recibe user/pass y comprueba en la base de datos si es correcto
function login($user, $pass){

	$value="incorrecto";

	
					if($user == "admin"){
						if($pass == "admin"){
							$_SESSION["nombre"] = "Administrador";
							$_SESSION["login"] = true;
							$_SESSION["esAdmin"] = true;


							$value="correcto";


						} else {
							$_SESSION["login"] = false;
							$_SESSION["esAdmin"] = false;
							$value="correcto";
						}
					} else if ($nombre == "user"){
						if($contra == "userpass"){
							$_SESSION["nombre"] = "Juan";
							$_SESSION["login"] = true;
							$_SESSION["esAdmin"] = false;
							$value="correcto";
						} else {
							$_SESSION["login"] = false;
							$_SESSION["esAdmin"] = false;
							$value="correcto";
						}
						
					} else {
							$_SESSION["login"] = false;
							$_SESSION["esAdmin"] = false;
							$value="correcto";
					}
		
					echo $value;
	
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
        login($_GET["user"], $_GET["pass"]);
        
        break;
    case "logout":
        
        break;
    case "deleteUser":
        
        break;
    case "addUser":
    	break;

}








?>



