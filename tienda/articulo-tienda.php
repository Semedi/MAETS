<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/articulo-tienda.css" />
</head>	


<?php
	require_once ('../static/mainTOP.php');

	require_once ('../include/vTienda.php');

	generarArticulo($_GET['juego'], 'tienda');

	require_once ('../static/mainBOT.php');
?>
	
</html>