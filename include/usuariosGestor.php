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
			?>

				<div id = "contenido">
					<?php
						$nombre = $_REQUEST["name"];
						$contra = $_REQUEST["passw"];

						if($nombre == "admin"){
							if($contra == "adminpass"){
								$_session["nombre"] = $nombre;
								$_session["permisos"] = "admin";
								echo "
								<h1> Bienvenido Administrador </h1>
								<p> Usa el menú de la izquierda para navegar. </p>
								"; 
							} else {
								echo "
								<h1> ERROR </h1>
								<p> El usuario o contraseña no son válidos. </p>
								";
							}
						} else if ($nombre == "user"){
							if($contra == "userpass"){
								echo "
								<h1> Bienvenido Usuario </h1>
								<p> Usa el menú de la izquierda para navegar. </p>
								";
							} else {
								echo "
								<h1> ERROR </h1>
								<p> El usuario o contraseña no son válidos. </p>
								";
							}
							
						} else {
							echo "
								<h1> ERROR </h1>
								<p> El usuario o contraseña no son válidos. </p>
								";

						}
					?>
			</div>

			<?php
			?>
	
		</div>
	</body>
</html>