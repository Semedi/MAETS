<!DOCTYPE html>

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