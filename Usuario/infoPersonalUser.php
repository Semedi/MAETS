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
        <p><a href='/MAETS/Usuario/infoPersonalUser.php'>Informacion personal </a></p>
        <p> <a href='/MAETS/Usuario/editInfo.php'>Editar cuenta </a></p>
         <p><a href='/MAETS/Usuario/misJuegosUser.php'>Mis juegos </a></p>
      

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
        
 
        <tr>
            <td>Nombre: <?php echo $_SESSION["Nombre"]; ?></td>
        </tr>
 
         <tr>
            <td>Apellidos: <?php echo $_SESSION["Apellidos"]; ?> </td>
        </tr>

        <tr>
            <td>Correo: <?php echo $_SESSION["Email"]; ?></td>
        </tr>

         <tr>
            <td>Pais:<?php echo $_SESSION["Pais"]; ?></td>
        </tr>

               <tr>
            <td>Ciudad:<?php echo $_SESSION["Ciudad"]; ?> </a></td>
        </tr>
         <tr>
            <td>Direccion:<?php echo $_SESSION["Direccion"]; ?> </td>
          
        </tr>
         <tr>
            <td>Codigo postal: <?php echo $_SESSION["CP"]; ?></td>
        </tr>

      </table>


<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  