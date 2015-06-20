 <?php require_once __DIR__.'\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/articulo-tienda.css" />
	<!--<script type="text/javascript" src="js\jquery-1.9.1.min.js"> </script>
	<script type="text/javascript">
    				var nombre;
					$.get("include/juegosGestor.php",{ functionName:"getNameOfGame", juego: <?php echo $_GET["juego"];?> },function(data){
		 			trimmed_data = $.trim(data);
				 			if (trimmed_data == ""){
				 			}
				 			else {
				 				nombre = data;
				 				alert(data);  
				 			}
				 		
		 				});
					<?php $nombre = "<script>document.write(nombre)</script>"; ?>
				 </script>-->





</head>	


<?php
	require_once ('static/mainTOP.php');

	require_once ('include/vTienda.php');

	generarArticulo($_GET['juego']);

	require_once ('static/mainBOT.php');
?>
	
</html>