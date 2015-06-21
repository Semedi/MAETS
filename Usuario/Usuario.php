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
<?php  include ('../static/communityMenu.php'); ?>  


	    	  
        <div id ="friendsContent">

               <?php 

            require_once ('../include/vUsuario.php');
            generarUsuario($_GET['user']);

            ?>
       
           
        </div>
	  
	  
<?php  include ('../static/mainBOT.php'); ?>  

	
</html>