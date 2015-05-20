<?php  include ('include/session.php'); ?>

<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
</head>


<?php  include ('static/mainTOP.php'); ?>	

		
				<div id="contact-form">  

					   <center><h1>Contacto</h1></center>
					   
					   <p id="failure">Algo esta mal.</p>  
					   <p id="success">Gracias, tu mensaje ha sido enviado correctamente.</p>


					   
					   <form method="post" action="mailto:ssemedi@ucm.es"> 

								<p>
							  <label for="name">Nombre <span class="required">*</span></label>  
							  <input type="text" id="name" name="name" value="" placeholder="Tu nombre" required="required" autofocus="autofocus" />  
								</p>
								
								<p>
							  <label for="email">Email: <span class="required">*</span></label>  
							  <input type="email" id="email" name="email" value="" placeholder="tu@email.com" required="required" />  
								</p>
						
								<p> <label for="consult">Motivo de la consulta: </label> </p>
						 
								<p><input type="radio" name="consult" value="evaluacion">Evaluación</p>
								<p><input type="radio" name="consult" value="sugerencias">Sugerencias</p>
								<p><input type="radio" name="consult" value="criticas">Críticas</p>      
								
								<textarea id="message" name="message" placeholder="Escribe aquí tu mensaje." required="required"></textarea>  
						  
									<form action="">  
										<p><input type=checkbox value=a name=checked checked> Marque esta casilla para verificar que ha leído nuestros términos y condiciones del servicio.</p>
									</form>
							   
							   
								<p>  <input type="submit" value="enviar" /></p>   
					   </form>
				   
				</div> <!--/formulario del contacto-->										
	    	
<?php include ('static/mainBOT.php'); ?>
	
</html>