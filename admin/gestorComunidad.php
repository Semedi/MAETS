<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/gestorJuegos.css"/>
</head>

<?php require_once ('../static/mainTOP.php');
	   require_once ('/../include/vComunidad.php');
?>

	<body>
		<h1> Foros </h1>
		<button name="anadirForos" id="anadirForos" onclick="location.href ='../community/thread.php';">Añadir nuevo foro</button>
		<?php generarListaForos(); ?>

		<h1> Usuarios </h1>
		<button name="anadirUsuarios" id="anadirUsuarios" onclick="location.href ='../signUp.php';">Añadir nuevo usuario</button>
		<?php generarListaUsuarios(); ?>

		<h1> Logros </h1>
		<button name="anadirLogros" id="anadirLogros" onclick="location.href ='';">Añadir nuevo logro</button>
		<?php generarListaLogros(); ?>

		<h1> Capturas </h1>
		<button name="anadirCapturas" id="anadirCapturas" onclick="location.href ='../community/nuevaCaptura.php';">Añadir nueva captura</button>
		<?php generarListaCapturas(); ?>

		<h1> Vídeos </h1>
		<button name="anadirVideos" id="anadirVideos" onclick="location.href ='../community/insertarVideo.php';">Añadir nuevo vídeo</button>
		<?php generarListaVideos(); ?>

		<h1> Análisis </h1>
		<button name="anadirAnalisis" id="anadirAnalisis" onclick="location.href ='../community/formularioAnalisis.php';">Añadir nuevo análisis</button>
		<?php generarListaAnalisis(); ?>

	</body>

<?php require_once ('../static/mainBOT.php'); ?>

</html>