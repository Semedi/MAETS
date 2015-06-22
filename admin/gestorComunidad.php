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
		<button name="eliminarUsuario" id="eliminarUsuario" onclick="location.href ='eliminarUsuario.php';">Eliminar usuario</button>
		<?php generarListaUsuarios(); ?>

		<h1> Logros </h1>
		<button name="anadirLogros" id="anadirLogros" onclick="location.href ='';">Añadir nuevo logro</button>
		<button name="eliminarLogro" id="eliminarLogro" onclick="location.href ='eliminarLogro.php';">Eliminar logro</button>
		<?php generarListaLogros(); ?>

		<h1> Capturas </h1>
		<button name="anadirCapturas" id="anadirCapturas" onclick="location.href ='../community/nuevaCaptura.php';">Añadir nueva captura</button>
		<button name="eliminarCaptura" id="eliminarCaptura" onclick="location.href ='eliminarCaptura.php';">Eliminar captura</button>
		<?php generarListaCapturas(); ?>

		<h1> Vídeos </h1>
		<button name="anadirVideos" id="anadirVideos" onclick="location.href ='../community/insertarVideo.php';">Añadir nuevo vídeo</button>
		<button name="eliminarVideo" id="eliminarVideo" onclick="location.href ='eliminarVideo.php';">Eliminar video</button>
		<?php generarListaVideos(); ?>

		<h1> Análisis </h1>
		<button name="anadirAnalisis" id="anadirAnalisis" onclick="location.href ='../community/formularioAnalisis.php';">Añadir nuevo análisis</button>
		<button name="eliminarAnalisis" id="eliminarAnalisis" onclick="location.href ='eliminarAnalisis.php';">Eliminar analisis</button>
		<?php generarListaAnalisis(); ?>

	</body>

<?php require_once ('../static/mainBOT.php'); ?>

</html>