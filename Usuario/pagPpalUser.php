<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="images/MAETS.png" />
  	<link rel="stylesheet" type="text/css" href="../css/tienda.css" />
  	<link rel="stylesheet" type="text/css" href="../css/ptienda.css" />
  	<link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  

      <div id = "left-menu">
        <h2>Opciones</h2>
        <p><a href='/MAETS/Usuario/infoPersonalUser.php'>Informacion personal </a></p>
        <p> <a href='/MAETS/Usuario/editInfo.php'>Editar cuenta </a></p>
        <p><a href='/MAETS/Usuario/misJuegosUser.php'>Mis juegos</a>></p>
        <p>Mis mensajes</p>
       	<p>Cerrar sesión </p>
       
      </div>

      <div id = "right-menu">
                <img id="imagenLupa" src="images/Lupa.png">
        <p>
          <input type="text" id="name" name="name" value="" placeholder="Buscar videojuego", required="required" autofocus="autofocus"/>  
           </br>
        </p>

     </div>

      <h1> Perfil del usuario</h1>

      <table>
        <tr><h2> Resumen </h2></tr>
        

        <tr>
            <td>Nick:</td>
            <td><?php echo $_SESSION["Nick"]; ?></td>
        </tr>
 
        <tr>
            <td>Nombre: </a></td>
            <td><?php echo $_SESSION['Nombre']; ?></td>
        </tr>
 
         <tr>
            <td>Apellidos: </a></td>
            <td><?php echo $_SESSION['Apellidos']; ?></td>
        </tr>

                <tr>
            <td>Correo: </a></td>
            <td><?php echo $_SESSION["Email"]; ?></td>
        </tr>

                 <tr>
            <td>Juegos comprados: </a></td>
            <td><?php echo $_SESSION["Nick"]; ?></td>
        </tr>

               <tr>
            <td>Puntos de logro: </a></td>
            <td><?php echo $_SESSION["Nick"]; ?></td>
        </tr>
      </table>


<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  