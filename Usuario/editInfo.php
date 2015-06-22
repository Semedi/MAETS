<?php require_once __DIR__.'\..\include\config.php'; ?>
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



      $('#modifyButton').click(
        function(){
          $.get("../AJAX/usuariosGestor.php",{ functionName:"modifyUserAccount", user:$('#nick').val(), mail:$('#mail').val()},function(data){
          trimmed_data = $.trim(data);
             
             alert(data);
        
            }
          );
        });

      $('#updatePassw').click(
          function(){
          $('#changePassw').show();
        });
      $('#updatePasswButton').click(
         function(){
          $.get("../AJAX/usuariosGestor.php",{ functionName:"changePassw", passw:$('#passw').val(), newPassw:$('#newPassw').val()},function(data){
          trimmed_data = $.trim(data);
             
             alert(data);
              window.location.href = "editInfo.php";
        
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
                <img id='imagen_Avatar'  src=<?php echo "'".IMAGENES."/usuarios/".$_SESSION["IMG"]."'" ?>/>
            </div>
            <div id= "updateInfoButton">

               <?php echo"<form enctype='multipart/form-data' action='../scripts/uploader.php?user=" .$_SESSION['ID']."&modo=modificar' method='POST'>"; ?>
              <input id="archivo" name="uploadedfile" type="file" />
              <input type="submit" value="modificar" />

              </form>
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
         <div id= "updateInfoButton3">
             <button type="button" id="modifyButton">Modificar</button>
             <button type="button" id="updatePassw">Cambiar contraseña </button>
            </div>
         <div id = "changePassw", style="display:none;">
               <h2> Nueva contraseña</h2>

              <table>

                  <tr>
                  
                   <td>Contraseña actual:</td>
                   <td><input type="text" name="passw" id="passw" class="texto" /></td>
                  
                  </tr>

                  <tr>
                   <td>Nueva contraseña:</td>
                   <td><input type="text" name="newPassw" id="newPassw" class="texto"/></td>

                  </tr>

                  <tr>
                      <td>Repite contraseña:</td>
                      <td><input type="text" name="newPassw2" id="newPassw2" class="texto"/></td>
                  </tr>
        
              </table>
               <button type="button" id="updatePasswButton">Cambiar</button>
            </div>

      </div> 

<?php  include ('../static/mainBOT.php'); ?>
  
</html>
  