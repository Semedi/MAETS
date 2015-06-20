<!DOCTYPE html>

<html>

<head>
  <title> MAETS </title>
  <link rel="icon" type="image/png" href="images/MAETS.png" />
  <link rel="stylesheet" type="text/css" href="css/tienda.css" />
    <link rel="stylesheet" type="text/css" href="css/ptienda.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>


<?php  include ('static/mainTOP.php'); ?>  

      <div id = "left-menu">
        <h2>Categorias</h2>
        <p><a href="lista_tienda.php?categoria='f2p'">Free to Play</a></p>
        <p>Acceso Anticipado</p>
        <p>Acción</p>
        <p>Aventura</p>
        <p>Carreras</p>
        <p>Casual</p>
        <p>Deportes</p>
        <p>Estrategia</p>
        <p>Indie</p>
        <p>Multijugador masivo</p>
        <p>Rol</p>
        <p>Simuladores</p>
      </div>

      <div id = "right-menu">
                <img id="imagenLupa" src="images/Lupa.png">
        <p>
          <input type="text" id="name" name="name" value="" placeholder="Buscar videojuego", required="required" autofocus="autofocus"/>  
           </br>
        </p>

     </div>

      <h1> Tienda</h1>

      <table>
        <tr><h2> Juegos más vendidos </h2></tr>
        <tr>
          <td id = "nombreColumna"><strong>Título</strong></td>
          <td id = "nombreColumna"><strong>Desarrollador</strong></td>
          <td id = "nombreColumna"><strong>Precio</strong></td>
        </tr>

        <tr>
            <td><a href="articulo-tienda.php?juego='Grand Theft Auto V'">GTA V</a></td>
            <td><a href="articulo-tienda.php?juego=Grand Theft Auto V">Rockstar</a></td>
            <td><a href="articulo-tienda.php?juego=Grand Theft Auto V">55€</a></td>
        </tr>
 
        <tr>
          <td><a href="articulo-tienda.php?juego=This War of Mine">This War of Mine</a></td>
          <td><a href="articulo-tienda.php?juego=This War of Mine">11 Bit Studios</a></td>
          <td><a href="articulo-tienda.php?juego=This War of Mine">20€</a></td>
        </tr>
 
        <tr>
          <td><a href="articulo-tienda.php?juego=The Witcher 3: Wild Hunt">The Witcher 3</a></td>
          <td><a href="articulo-tienda.php?juego=The Witcher 3: Wild Hunt">CD Proyect RED</a></td>
          <td><a href="articulo-tienda.php?juego=The Witcher 3: Wild Hunt">59.99€</a></td>
        </tr>

        <tr>
          <td><a href="articulo-tienda.php?juego=Darkest Dungeon">Darkest Dungeon</a></td>
          <td><a href="articulo-tienda.php?juego=Darkest Dungeon">Power Up Audio</a></td>
          <td><a href="articulo-tienda.php?juego=Darkest Dungeon">13.99€</a></td>
        </tr>

         <tr>
          <td><a href="articulo-tienda.php?juego=Mortal Kombat X">Mortal Kombat X</a></td>
          <td><a href="articulo-tienda.php?juego=Mortal Kombat X">NetherRealm Studios</a></td>
          <td><a href="articulo-tienda.php?juego=Mortal Kombat X">49.99€</a></td>
        </tr>

         <tr>
          <td><a href="articulo-tienda.php?juego=Project Cars">Project Cars</a></td>
          <td><a href="articulo-tienda.php?juego=Project Cars">Slightly Mad Studios</a></td>
          <td><a href="articulo-tienda.php?juego=Project Cars">34.99€</a></td>
        </tr>
      </table>

      <div id="content-container">
          <br></br>
          <br></br>
          <a href="articulo-tienda.php"><img class="image" src="images/screens/GTAV.jpg"></a>
        </div>

<?php  include ('static/mainBOT.php'); ?>
  
</html>
  