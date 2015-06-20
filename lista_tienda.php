<?php require_once __DIR__.'\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/ptienda.css" />
	<link rel="stylesheet" type="text/css" href="css/lista_tienda.css" />
</head>



<?php  include ('static/mainTOP.php'); ?>	

	 <div id = "left-menu">
        <?php
        	require_once('static/menuCategorias.html');
        ?>
      </div>

      
	    	<div id="content-container">
	    		<div id="contenedor">

	    		<?php 

	    		require_once ('include/vTienda.php');

				generarLista($_GET['categoria']);

	    		?>


	    		</div>
			</div>
				
<?php  include ('static/mainBOT.php'); ?>
	
</html>
	
