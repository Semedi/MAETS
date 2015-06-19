<?php  include ('../include/session.php'); ?>

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
       
       <div id = "right-menu">
                <img id="imagenLupa" src="../images/lupa2.png">
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

     