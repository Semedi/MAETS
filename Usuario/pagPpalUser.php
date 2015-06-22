<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
  	<title> MAETS </title>
  	<link rel="icon" type="image/png" href="images/MAETS.png" />
  
  	<link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/users.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  

<?php include ('../static/userMenu.php'); ?>

 <div id ="mainContent">
      <h1> Perfil del usuario</h1>

      <table>
        <tr><h2> Resumen </h2></tr>
        <?php
          require_once('../include/vUsuario.php');
          generarPerfilPrincipal($_SESSION['ID']);
        ?>
      </table>
</div>

<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  