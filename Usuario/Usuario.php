<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />

  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <link rel="stylesheet" type="text/css" href="../css/users.css" />
  <link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
  
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

<script type="text/javascript">





  
  $( document ).ready(function() {

    

      $('#addFriendButton').click(
        function(){
       
          $.get("../AJAX/usuariosGestor.php",{ functionName:"addFriend", friendNick:$('#nickuser').html()},function(data){
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

<script type="text/javascript">
  $( document ).ready(function() {
   $('#eliminarUsuario').click(
        function(){
          $.get("../AJAX/usuariosGestor.php",{ functionName:"deleteUser", user:$('#nickuser').html()},function(data){
            trimmed_data = $.trim(data);
            
                alert(data);
                window.location.href = "../admin/gestorComunidad.php";
              
              
            }
          );
        });
      });
    </script>
	
</head>


<?php  include ('../static/mainTOP.php'); ?> 
<?php  include ('../static/communityMenu.php'); ?>  


	    	  
        <div id ="friendsContent">

            <?php 
                if($_SESSION["Rol"]=='Administrador' or $_SESSION["Rol"]=='Gestor-Comunidad')
                  echo "<button name='eliminarUsuario' id='eliminarUsuario'>Eliminar usuario</button>";

            require_once ('../include/vUsuario.php');
            generarUsuario($_GET['user']);


            ?>
       
           
        </div>
	  
	  
<?php  include ('../static/mainBOT.php'); ?>  

	
</html>