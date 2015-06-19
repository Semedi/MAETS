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
        <h2>Categorias</h2>
        <p>Free to play</p>
        <p>Acceso Anticipado</p>
        <p>Acción</p>
        <p>Aventura</p>
        <p>Carreras</p>
        <p>Casual</p>
        <p>Deportes</p>
        <p>Estrategia</p>
        <p>Indie</p>
        <p>Multijugador masivo</p>
        <p>Rol</p>
        <p>Simuladores</p>
      </div>

      
	    	<div id="content-container">
	    		<div id="contenedor">

	    		<?php 

	    		require_once 'include/vTienda.php';
	    	

				generarLista("Rol");


	    		?>


	    		</div>
			</div>
				
<?php  include ('static/mainBOT.php'); ?>
	
</html>
	
