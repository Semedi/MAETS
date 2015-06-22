<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="stylesheet" type="text/css" href="css/achievements.css" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
</head>


<?php  require_once ('../static/mainTOP.php'); ?>	
<?php  require_once ('../static/communityMenu.php'); ?>
		
			
			<div id="cajaCentral">
			<center><H1>LOGROS</H1></center>

				<?php
					require_once ('../include/vComunidad.php');
					if(!$_SESSION)
						echo "<h1> Logeate para poder ver los logros. </h1>";
					else					
						generarLogros($_SESSION['ID']);
				?>
			</div>		
	    	
<?php  require_once ('../static/mainBOT.php'); ?>	

	
</html>