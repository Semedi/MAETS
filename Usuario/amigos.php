<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />

  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <link rel="stylesheet" type="text/css" href="../css/modifyUserInfo.css" />
	
</head>


<?php  include ('../static/mainTOP.php'); ?> 


	    	
        <div id ="friendsContent">
            <div id = "user_friends_header">
              <img id="imagen_Avatar" src='/MAETS/images/userProfile.png'>
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

              <tr>
                 <td id = "celda">Amigo1
                 	<p>En Línea</p>
                 </td>
                 <td id = "celda">Amigo2
                 	<p>Desconectado</p>
                 </td>
                 <td id = "celda">Amigo3
                 	<p>Desconectado</p>
                 </td>
                 <td id = "celda">Amigo4
                 	<p>En Línea</p>
                 </td>
              </tr>

             <tr>
                 <td id = "celda">Amigo5
                 	<p>Desconectado</p>
                 </td>
                 <td id = "celda">Amigo6
                 	<p>En Línea</p>
                 </td>
                 <td id = "celda">Amigo7
                 	<p>En Línea</p>
                 </td>
                 <td id = "celda">Amigo8
                 	<p>En Línea</p>
                 </td>
              </tr>


             <tr>
                 <td id = "celda">Amigo9
                 	<p>Desconectado</p>
                 </td>
                 <td id = "celda">Amigo10
                 	<p>En Línea</p>
                 </td>
              </tr>
            </table>
          </div>
      </div>
	  
	  
<?php  include ('../static/mainBOT.php'); ?>  

	
</html>
