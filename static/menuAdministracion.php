
<?php
	if($_SESSION["Rol"]=='Administrador' or $_SESSION["Rol"]=='Desarrollador') 
		echo "<p><a href='../admin/gestorJuegos.php'>Administrar juegos</a></p>";
	if($_SESSION["Rol"]=='Administrador' or $_SESSION["Rol"]=='Gestor-Comunidad')
		echo "<p><a href='../admin/gestorComunidad.php'>Administrar comunidad</a></p>";
	if($_SESSION["Rol"]=='Gestor-Tienda')
		echo "<p><a href='../gestorJuegos.php'>Administrar juegos</a></p>";
?>