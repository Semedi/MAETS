<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		<script type="text/javascript">
  		$( document ).ready(function() {
   		$('#eliminarBoton').click(
        function(){
          $.get("../AJAX/usuariosGestor.php",{ functionName:"deleteUser", user:$('#usuario')},function(data){
            trimmed_data = $.trim(data);
            
                alert(data);
                window.location.href = "../admin/gestorComunidad.php";
              
              
            }
          );
        });
      });
    </script>
	 </script>
</head>


<?php  include ('../static/mainTOP.php'); ?>
			
			
			
			<div id="cajaThread">
				<h1>Eliminar usuario</h1>
				<p class="eliminar">Nombre usuario: <input id="usuario" name="usuario" type="text"/><button name='eliminarBoton' id='eliminarBoton'>Eliminar</button></p>
				
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>