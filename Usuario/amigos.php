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


	    	
        <div id ="friendsContent">
            <div id = "user_friends_header">
              <img id="imagen_Avatar" src=<?php echo "'".IMAGENES."/usuarios/".$_SESSION["IMG"]."'" ?>>
               <div id = "texto_perfil" >
                  <h2><?php echo $_SESSION["Nick"]; ?> →  <div id = "letra_pequena">Amigos</div></h2>
                  <img id = "bandera_nacionalidad" src="../images/usuarios/SpainFlag.jpg">
               </div>
            </div>
            <div id ="mainFriendsContent">
                <?php include ('../static/userMenu.php'); ?>

      	    	<table id = "tabla_amigos">
              <tr>
                <td id = "nombreColumnaSeleccionada">Amigos</td>
              </tr>

                <?php

                require_once ('../include/vUsuario.php');
                generarAmigos($_SESSION["ID"]);

                ?>

            </table>
          </div>
      </div>
	  
	  
<?php  include ('../static/mainBOT.php'); ?>  

	
</html>
