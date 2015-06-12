<?php  include ('include/session.php'); ?>

<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="images/MAETS.png" />
  	<link rel="stylesheet" type="text/css" href="css/tienda.css" />
  	<link rel="stylesheet" type="text/css" href="css/ptienda.css" />
  	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<?php  include ('static/mainTOP.php'); ?>  

      <div id = "left-menu">
        <h2>Opciones</h2>
        <p>Información personal</p>
        <p><a href='/MAETS/editInfo.php'>Editar cuenta </a></p>
        <!---<p>Mis juegos</p>-->

        <p><a href='/MAETS/misJuegos.php'>Mis juegos </a></p>

        <p>Mis mensajes</p>
       	<p>Cerrar sesión </p>
       
       <div id = "right-menu">
                <img id="imagenLupa" src="images/Lupa.png">
        <p>
          <input type="text" id="name" name="name" value="" placeholder="Buscar videojuego", required="required" autofocus="autofocus"/>  
           </br>
        </p>

     </div>

     