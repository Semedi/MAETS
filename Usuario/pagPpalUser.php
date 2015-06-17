<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="images/MAETS.png" />
  
  	<link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/modifyUserInfo.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  

<?php include ('../static/userMenu.php'); ?>


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
            <td>5</td>
        </tr>

               <tr>
            <td>Puntos de logro: </a></td>
            <td>52</td>
        </tr>
      </table>


<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  