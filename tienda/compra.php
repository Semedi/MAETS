<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/compra.css" />

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#comprar').click(
			 	function(){
			 		var elemento = "<?php Print($_GET['juego']);?>"
					$.get("../AJAX/juegosGestor.php",{ functionName:"addGameToUser", juego:$($_GET['juego']).val()},function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "tienda.php";
				 			
				 			
			 			}
			 		);
				});
		});
	</script>
</head>

<?php  include ('../static/mainTOP.php'); ?>
	

	    	<form>
	    		</br>
		    	<label for="name">Número de tarjeta    <span class="required">*</span></label>  
				<input type="text" id="numTarjeta" name="numTarjeta" value="" placeholder="xxxx xxxx xxxx xxxx" required="required" autofocus="autofocus" />  
				</p>

				<label for="name">Fecha de caducidad <span class="required">*</span></label>  
				<input type="text" id="fechaCaducidad" name="fechaCaducidad" value="" placeholder="xx/xx" required="required" autofocus="autofocus" />  
				</p>			

				<label for="name">Código de seguridad <span class="required">*</span></label>  
				<input type="text" id="codSeguridad" name="codSeguridad" value="" placeholder="xxx" required="required" autofocus="autofocus" />  
				</p>			

				<label for="name">Nombre <span class="required">*</span></label>  
				<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre del titular de la tarjerta" required="required" autofocus="autofocus" />  
				</p>

				<label for="name">Apellidos <span class="required">*</span></label>  
				<input type="text" id="apellidos" name="apellidos" value="" placeholder="Apellidos del titular de la tarjeta" required="required" autofocus="autofocus" />  
				</p>

				<button name="comprar" id="comprar">Comprar</button>
				</br>
			</form>


<?php  include ('../static/mainBOT.php'); ?>
	
</html>
