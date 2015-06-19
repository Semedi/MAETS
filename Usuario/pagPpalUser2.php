<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />

  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <link rel="stylesheet" type="text/css" href="../css/users.css" />
   <script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

<script type="text/javascript">
  $( document ).ready(function() {



      $('#addFriendButton').click(
        function(){
          $.get("../AJAX/usuariosGestor.php",{ functionName:"addFriend", friendNick:$('#nick').val()},function(data){
          trimmed_data = $.trim(data);
              if (trimmed_data == ""){
                alert("Se han guardado los cambios");
                window.location.href = "editInfo.php";
              }
              else {
                alert (data);
              };
        
            }
          );
        });




    });
   </script>
	
</head>


<?php  include ('../static/mainTOP.php'); ?> 


	    	
        <div id ="friendsContent">
            <div id = "user_friends_header">
              <img id="imagen_Avatar" src='/MAETS/images/userProfile.png'>
               <div id = "texto_perfil" >
                  <h2><?php echo $_SESSION["Nick"]; ?></h2>
                  <img id = "bandera_nacionalidad" src="../images/usuarios/SpainFlag.jpg">
               </div>
                <div id = "botonAniadir">
                   <button type="button" id="addFriendButton">Añadir a mis amigos</button>
                  </div>
            </div>
            <div id ="mainContent">
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
            </div>
           
        </div>
	  
	  
<?php  include ('../static/mainBOT.php'); ?>  

	
</html>