<!DOCTYPE html>


<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/community.css" />
</head>


<?php  include ('static/mainTOP.php'); ?>	
<?php  include ('static/communityMenu.php'); ?>	
			
			
			<div id="cajaBusqueda">
				<div id ="busqueda"> 
					<!--<form action="demo_form.asp">    // Sirve para ejecutar la accion-->
					Búsqueda:
					<input id ="barra_busqueda" type="text" name="lname">
					<!--<input type="submit" value="Submit">   //Añade un boton-->
					<!--</form>-->
				</div>
			</div>
			
			<div id="bienvenida">
				<h1> Bienvenido a la Comunidad de MAETS </h1>
			</div>
			
			<div id="juegos">
				<h4> Juegos jugados recientemente: </h4>	
				<p>Rust</p> 
				<p>Dragon Age Inquisition</p>  
				<p>Half Life 3</p> 
			</div>
			<div id="foros_importantes">
				<h4> Foros importantes: </h4>
				<p>Foro oficial</p>  
				<p>Noticias desde MAETS</p>  
				<p>Rust foro</p> 
			</div>
			<div id="amigos_conectados">
				<h4> Amigos conectados: </h4>
				<p>Drulas</p>  
				<p>Sheldon Cooper</p>  
				<p>Leonard Nimoy</p> 
			</div>
			
			<div id="capturas">
				<h4> Capturas del día: </h4>
				<img src="images/dbx1.jpg">
				<img src="images/gtav1.jpg">
				<img src="images/ac1.jpg">
			</div>
			
<?php  include ('static/mainBOT.php'); ?>	
</html>