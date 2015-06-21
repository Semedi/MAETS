<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/vthread.css" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
</head>


<?php  require_once ('../static/mainTOP.php'); ?>	
<?php  require_once ('../static/communityMenu.php'); ?>
				<div id="ContenidoCentral">
						<center>
							<div id="espacio">
							</div>
									<?php
									require_once ('../include/vComunidad.php');
									generarThread($_GET['foro']);
								?>
						</center>
				</div>	
			
					
<?php  require_once ('../static/mainBOT.php'); ?>	
  	

</html>