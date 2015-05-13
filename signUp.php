<!DOCTYPE html>



<head>
	<title> Sing Up </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/singup.css" />
	 <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
	<div id="container">
		<!--Menú-->
		<div id="nav">
			<div id="left-nav">
				<li><a href="tienda.php">Tienda</a></li>
				<li><a href="Community.php">Comunidad</a></li>
				<li><a href="contact.php">Contacto</a></li>
			</div>
			
			<a href="index.php"><img class="icono_nav" src="images/MAETS.png"></a>
			
			<div id="right-nav">
				<li><a href=""><s>Sign Up</s><a></li>
				<li><a href ="logIn.php">Log In</a></li>
			</div>
		</div>
		<!--Comentario en HTML -->

		<div id="content">

			<h1>Crear una cuenta</h1>
		<div id="formulario">
			
				<p>Crea un nombre para tu cuenta de Maets</p>
				<p>  
				<input type="text" id="name" name="name" value="" placeholder="Tu nombre" required="required" autofocus="autofocus" />  
				</p>
			
				<p>Escoge una contraseña</p>
				<p> 
				<input type="passw" id="passw" name="passw" value="" placeholder="tu contraseña" required="required" />  
				</p>
				<p>Vuelve a introducir la contraseña</p>
				<p> 
				<input type="passw" id="passw" name="passw" value="" placeholder="tu contraseña" required="required" />  
				</p>
			
				<p>Direccion de email actual:</p>
				<p> 
				<input type="mail" id="mail" name="mail" value="" placeholder="tu email" required="required" />  
				</p>
				<p>Vuelve a introducir tu email</p>
				<p> 
				<input type="mail" id="mail" name="mail" value="" placeholder="tu email" required="required" />  
				</p>
				<div id= "singUpButton">
				<a href="pagPpalUser.php">Crear cuenta</a>
				</div>
			
		</div>	
		<div ="acuerdo">
				<h1>ACUERDO DE SUSCRIPCION</h1>
				<t1>
				El presente Acuerdo de suscriptor a MAETS («acuerdo») es un documento legal en el que se explican sus derechos y obligaciones como suscriptor. Léalo atentamente.

Si usted es un suscriptor cuya residencia principal está situada en uno de los países miembros de la Unión Europea («suscriptor de la UE»), se entiende que su relación como suscriptor es con MAETS («MAETS UE»). Para todos los demás suscriptores, su relación como suscriptores es con MAETS Corporation (MAETS EE. UU.»). Excepto si se indica expresamente lo contrario en el momento de la compra, como en el caso de compras realizadas a otros suscriptores en algún bazar de suscripciones, cualquier compra realizada se obtiene de la empresa MAETS con la que esté contratando. A no ser que se indique lo contrario en los siguientes términos, cualquier referencia que en este documento se haga a «MAETS» se entenderá como «MAETS UE», si usted es un suscriptor de la UE, y como «MAETS EE. UU.», si usted es cualquier otro suscriptor. Cualquier referencia a MAETS en las normas de uso o en los términos de suscripción significará, si el contexto lo requiere, MAETS UE», siempre que se trate de un suscriptor de la UE, y, en caso contrario, significará «MAETS EE. UU.».
				</t1>
		</div>
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
