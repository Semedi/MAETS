<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/usuarios.css" />
</head>


<?php  require_once ('../static/mainTOP.php'); ?>	
<?php  require_once ('../static/communityMenu.php'); ?>	
<?php  require_once ('../include/vComunidad.php'); ?>
<?php  require_once('../include/communityOp.php'); ?>

			
			<div id="usuarios">
				<h1> Usuarios </h1>
			</div>
			<div id="top">

				
			</div>
			<div id="top_usuarios">
				<h4> TOP Usuarios: </h4>	
				<?php generarTopUsuarios(); ?>
			</div>
			<div id="top_logros">
				<h4> TOP Logros de Usuarios: </h4>
				<?php generarTopLogros(); ?> 
			</div>
			<div id="ultimos_registrados">
				<h4> Nuevos en MAETS: </h4>
				<?php generarNuevosUsuarios(); ?>
			</div>
			<div id="espacio"></div>
			<div id="ultima_actividad">
				<h4> Actividad reciente: </h4>
				<?php generarUltimosPost(); ?>
			</div>
			
			
<?php  require_once ('../static/mainBOT.php'); ?>		
</html>