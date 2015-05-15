<!DOCTYPE html>



<?php

//recibe user/pass y comprueba en la base de datos si es correcto
function login(string user, string pass){
	return(true);
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
function addFriend(int user1, int user2){
	return(true);
}

//elimina relacion de amigos
function deleteFriend(int user1, int user2){
	return(true);
}



?>




<html>
<head>
</head>
	<body>
		<div id="contenedor">

				<?php
					session_start();

					$nombre = $_REQUEST["name"];
					$contra = $_REQUEST["passw"];
					$_SESSION["esAdmin"] = false;
					$_SESSION["login"] = false;

					if($nombre == "admin"){
						if($contra == "adminpass"){
							$_SESSION["nombre"] = "Administrador";
							$_SESSION["login"] = true;
							$_SESSION["esAdmin"] = true;
						} else {
							$_SESSION["login"] = false;
							$_SESSION["esAdmin"] = false;
						}
					} else if ($nombre == "user"){
						if($contra == "userpass"){
							$_SESSION["nombre"] = "Juan";
							$_SESSION["login"] = true;
							$_SESSION["esAdmin"] = false;
						} else {
							$_SESSION["login"] = false;
							$_SESSION["esAdmin"] = false;
						}
						
					} else {
							$_SESSION["login"] = false;
							$_SESSION["esAdmin"] = false;
					}
				?>

				<?php
					header("Location: ../index.php");
				?>
	
		</div>
	</body>
</html>