<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/formularioJuego.css"/>

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#eliminar').click(
		 	function(){
		 		var elemento = "<?php Print($_GET['juego']); ?>";  
					$.get("../AJAX/juegosGestor.php",{ functionName:"deleteGame", juego: elemento},function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "gestorJuegos.php";
			 			}
			 		);
				});
			$('#editar').click(
		 	function(){
		 		var juego = "<?php Print($_GET['juego']); ?>";  
					$.get("../AJAX/juegosGestor.php",{  functionName:"modifyGame", id: juego, titulo:$('#nombre').val(), precio:$('#precio').val(),
														edad:$('#edad').val(), etiquetas:$('#etiquetas').val(), descripcion: $("#descripcion").val(), 
														descripcionLarga:$('#descripcionLarga').val(), tipoJuego:$('#tipoJuego').val(), idiomas:$('#idiomas').val()}, function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "gestorJuegos.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>

<?php require_once ('../static/mainTOP.php'); ?>

	<body>
			
		
		<div id="game-form">  
		   
		   <p id="failure">Algo esta mal.</p>  
		   <p id="success">Juego añadido correctamente.</p>
		   <?php
		   		require_once ('../include/vTienda.php');

		   		if(isset($_SESSION["Rol"]) && ($_SESSION["Rol"]='Administrador' or $_SESSION["Rol"]=='Desarrollador' or $_SESSION["Rol"]=='Gestor-Tienda') ){
				vistaEditarJuego();
			}
			else echo "<h1> Vista no autorizada </h1>";
		   	?>
				<p>  <button name="editar" id="editar" >Editar</button>
				     <button name="eliminar" id="eliminar" >Eliminar</button></p>
					  <div id="cambiarPortada">
					 <?php vistaEditarPortadaJuego();
				echo"<form enctype='multipart/form-data' action='../scripts/uploader.php?juego=".$_GET['juego']."&modo=cambiarPortada' method='POST'>";
				?>
              <input id="archivo" name="uploadedfile" type="file" />
              <input type="submit" value="Cambiar portada" />
			  </form>
			  	</div>
		</div>
        
			
			
	

<?php require_once ('../static/mainBOT.php'); ?>

</html>