<?php  include ('../include/session.php'); ?>

<!DOCTYPE html>

<html>

<head>
    <title> MAETS </title>
    <link rel="icon" type="image/png" href="../images/MAETS.png" />

    <link rel="stylesheet" type="text/css" href="../css/ptienda.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/modifyUserInfo.css" />
</head>


<?php  include ('../static/mainTOP.php'); ?>  

      <div id = "left-menu">
        <h2>Opciones</h2>
        <p><a href='/MAETS/Usuario/infoPersonalUser.php'>Informacion personal </a></p>
        <p> <a href='/MAETS/Usuario/editInfo.php'>Editar cuenta </a></p>
        <p><a href='/MAETS/Usuario/misJuegosUser.php'>Mis juegos </a></p>
        <p><a href='/MAETS/Usuario/amigos.php'>Amigos</a></p>
      

        <p>Cerrar sesión </p>
       
      </div>
       
       <div id = "right-menu">
                <img id="imagenLupa" src="images/Lupa.png">
        <p>
          <input type="text" id="name" name="name" value="" placeholder="Buscar videojuego", required="required" autofocus="autofocus"/>  
           </br>
        </p>

     </div>
     <h1> Perfil del usuario/Mis juegos</h1>
      <div id = mainContent>
      <ul id="juegos">
        <li type = "none">GTA V</li>
        <li>This war of mine</li>
        <li>Rust</li>
        <li>Project Cars</li>
        <li>The Witcher 3</li>
      </ul> 
      </div>
     </div>
     <?php  include ('../static/mainBOT.php'); ?>
</html> 

     