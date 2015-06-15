<?php  include ('../include/session.php'); ?>

<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="../images/MAETS.png" />
  	<link rel="stylesheet" type="text/css" href="../css/tienda.css" />
  	<link rel="stylesheet" type="text/css" href="../css/ptienda.css" />
  	<link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  

      <div id = "left-menu">
        <h2>Opciones</h2>
        <p>Información personal</p>

        <p> <a href='editInfo.php'>Editar cuenta </a></p>
         <p><a href='/MAETS/misJuegosUser.php'>Mis juegos </a></p>
      

        <p>Mis mensajes</p>
       	<p>Cerrar sesión </p>
       
      </div>

      <div id = "right-menu">
                <img id="imagenLupa" src="images/Lupa.png">
        <p>
          <input type="text" id="name" name="name" value="", required="required" autofocus="autofocus"/>  
           
        </p>

     </div>

      <h1> Perfil del usuario</h1>

      <table>
        <tr><h2> Editar información de tu cuenta </h2></tr>
        

        <tr>
            <td><a href="nuevoNick">Nuevo Nick: </a></td>
				<input type="text" id="name" name="name" value="" placeholder="Tu nuevo Nick" required="required" autofocus="autofocus" />  
				
        </tr>
 
        <tr>
            <td><a href="articulo-tienda.php">Nombre: </a></td>
            <td><a href="articulo-tienda.php"> <?php echo $_SESSION['Nombre']; ?> </a></td>
        </tr>
 
         <tr>
            <td><a href="articulo-tienda.php">Apellidos: </a></td>
            <td><a href="articulo-tienda.php"> <?php echo $_SESSION['Apellidos']; ?> </a></td>
        </tr>

                <tr>
            <td><a href="articulo-tienda.php">Correo: </a></td>
            <td><a href="articulo-tienda.php"> <?php echo $_SESSION["Email"]; ?> </a></td>
        </tr>

                 <tr>
            <td><a href="articulo-tienda.php">Juegos comprados: </a></td>
            <td><a href="articulo-tienda.php"> <?php echo $_SESSION["Nick"]; ?> </a></td>
        </tr>

               <tr>
            <td><a href="articulo-tienda.php">Puntos de logro: </a></td>
            <td><a href="articulo-tienda.php"> <?php echo $_SESSION["Nick"]; ?> </a></td>
        </tr>
      </table>


<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  