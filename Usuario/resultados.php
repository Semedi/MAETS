<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="images/MAETS.png" />
  
  	<link rel="stylesheet" type="text/css" href="../css/main.css" />
   <link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
   <link rel="stylesheet" type="text/css" href="../css/resultados.css" />

</head>


<?php  include ('../static/mainTOP.php'); ?>  
<?php  include ('../static/communityMenu.php'); ?>	


 <div id ="mainContent">
      <h1> Resultados de la búsqueda</h1>

		    		<div id="contenedor">
		    			<div id="margen"/>

			    		<?php 

			    			require_once ('../include/vUsuario.php');
			    			require_once('../include/usersOp.php');
			    			require_once('../include/usersBD.php');	

							generarListaBusqueda($_POST['busqueda'], 'Nick', true);

			    		?>

	    			</div>
        
        

      
</div>

<?php  include ('../static/mainBOT.php'); ?>
  
</html>