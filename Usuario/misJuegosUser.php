<?php require_once __DIR__.'\..\include\config.php'; ?>

<!DOCTYPE html>

<html>

<head>
    <title> MAETS </title>
    <link rel="icon" type="image/png" href="../images/MAETS.png" />

    
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/users.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  
<?php include ('../static/userMenu.php'); ?>
  <center>
       <div id = mainContent>
        <h1> Perfil del usuario/Mis juegos</h1>
        <ul id="juegos">
         <?php
          require_once('../include/vUsuario.php');
          generarListaDeJuegos($_SESSION['ID']);
         ?>        
        </ul> 
      </div>
     </div>
  </center>
     <?php  include ('../static/mainBOT.php'); ?>
</html> 

     