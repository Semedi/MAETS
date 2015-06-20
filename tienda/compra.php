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
			$('#crearTema').click(
			 	function(){
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newTopic", content:$('#hilo').val(), title:$('#titulo').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "foros.php";
				 			
				 			
			 			}
			 		);
				});
		});
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

				<button name="newtopic" id="crearTema">crear tema</button>
			</form>


<?php  include ('../static/mainBOT.php'); ?>
	
</html>
