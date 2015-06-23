<?php require_once __DIR__.'\include\config.php'; ?>
<!DOCTYPE html>


<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/community.css" />
</head>


<?php  require_once ('static/mainTOP.php'); ?>	
<?php  require_once ('static/communityMenu.php'); ?>	
			
			
			<div id="bienvenida">
				<h1> Bienvenido a la Comunidad de MAETS </h1>
			</div>

			<?php
				require_once ('include/vComunidad.php');
				generarUltimosForos(3);
				generarUltimosAnalisis(3);
				generarUltimasCapturas(3);
			?>			
<?php  require_once ('static/mainBOT.php'); ?>	
</html>