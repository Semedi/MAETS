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
      $('#updateButton').click(
        function(){
          $.get("../include/usuariosGestor.php",{ functionName:"modifyUserAcount", user:$('#nick').val(),mail: $('#mail').val() },function(data){
            trimmed_data = $.trim(data);
              if (trimmed_data == ""){
                alert ("Los cambios se han guardado!");
              }
              else {
                alert (data);
              }
            }
          );
        });
    });

  </script>

</head>


<?php  include ('../static/mainTOP.php'); ?>  
<?php include ('../static/userMenu.php'); ?>

      <div id = "modificarAvatar">
          <h1> Modifica tu avatar</h1>
            <div>
                <img id='imagen_Avatar'  src='/MAETS/images/userProfile.png'/>
            </div>
            <div id= "updateInfoButton">
               <button type="button" id="updateButton">Modificar</button>
            </div>

     </div>

     <div id ="mainContent">
     
        <h1> Perfil del usuario/Editar información de tu cuenta</h1>

        <table>

            <tr>
            
             <td>Nick:</td>
             <td><input type="text" name="nick" id="nick" class="texto" value= <?php echo $_SESSION["Nick"]; ?> /></td>
    				
            </tr>

            <tr>
             <td>Contraseña:</td>
             <td><input type="text" name="nombre" id="nombre" class="texto" value= "**********"/></td>

            </tr>

            <tr>
                <td>Correo:</td>
                <td><input type="text" name="mail" id="mail" class="texto" value= <?php echo $_SESSION["Email"]; ?> /></td>
            </tr>
  
        </table>
         <div id= "updateInfoButton">
             <button type="button" id="updateInfoButton">Modificar</button>
             <button type="button" id="updatePassw">Cambiar contraseña </button>
            </div>
      </div> 

<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  