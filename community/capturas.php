<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/capturas.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>	
<?php require_once ('../include/vComunidad.php'); ?>		
			
			<div id="capturas">
				<?php generarCapturas();?>
				</br>
				</br>
				<form enctype="multipart/form-data" action="../uploader.php" method="POST">
				<input id="archivo" name="uploadedfile" type="file" />
				<input type="submit" value="Subir archivo" />
				</form>
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>