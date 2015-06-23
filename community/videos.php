<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/videos.css">
	
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>
<?php  include ('../include/vComunidad.php'); ?>	
				
			<div id="boton">
				<button name="newVideo" class="nuevoVideo" onclick="location.href ='insertarVideo.php';">Insertar video</button>
			</div>
			<div id="videos">
				<?php cargarVideos(); ?>
			</div>
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>