<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/gestorJuegos.css"/>
</head>

<?php require_once ('../static/mainTOP.php'); ?>

	<body>
		<button name="anadirJuegos" id="anadirJuegos" onclick="location.href ='formularioJuego.php';">Añadir nuevo juego</button>
		
		<?php
			require_once ('/../include/vTienda.php');
			generarTabla($_SESSION['ID']);
		?>
	</body>

<?php require_once ('../static/mainBOT.php'); ?>

</html>