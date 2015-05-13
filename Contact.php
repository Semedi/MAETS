<!DOCTYPE html>


<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
</head>


<body>
	<div id="container">
		<!--Menú-->
		<div id="nav">
			<div id="left-nav">
				<li><a href="tienda.php">Tienda</a></li>
				<li><a href="Community.php">	Comunidad</a></li>
				<li><a href="">Contacto</a></li>
			</div>
			
			<a href="index.php"><img class="icono_nav" src="images/MAETS.png"></a>				
			<div id="right-nav">
				<li><a href="signUp.php">Sign Up</a></li>
				<li><a href="logIn.php">Log in</a></li>
			</div>
	    </div>

	    <div id="content">
		
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
	    	
		</div>


		<div id="pie">
			<p>MAETS Software
				© 2015 MAETS Corporation. Todos los derechos reservados. Todas las marcas registradas son propiedad de sus respectivos dueños en Madrid, España.
				Todos los precios incluyen IVA (donde sea aplicable).   Política de Privacidad   |   Información legal   |   Acuerdo de Suscriptor a MAETS
			</p>
		</div>
	</div>

</body>
	
</html>