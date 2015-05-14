<!DOCTYPE html>
<?php
session_start();
?>

<body>
	<div id="container">
		<!--Menú-->
		<div id="nav">
			<div id="left-nav">
				<li><a href="tienda.php">Tienda</a></li>
				<li><a href="community.php">	Comunidad</a></li>
				<li><a href="contact.php">Contacto</a></li>
			</div>
			
			<a href="index.php"><img class="icono_nav" src="images/MAETS.png"></a>				
			
				<?php 
					if($_SESSION["login"] == true){
						echo "
						<div id='nombreUsuario'><li><a href='index.php'>NombreUsuario</a></li></div>
						<li><a href='index.php'><img id='imagenUsuario'  src='images/userProfile.png'></a></li>";
					} else {
						 echo "
						 	<div id='right-nav'>
						 	<li><a href='signUp.php'>Sign Up</a></li>
						 	<li><a href='logIn.php'>Log in</a></li>
						 	</div>";
					}
				?>

				
			
	    </div>

	    <div id="content">