<!DOCTYPE html>

<head>
  <title> MAETS </title>
  <link rel="icon" type="image/png" href="images/MAETS.png" />
  <link rel="stylesheet" type="text/css" href="css/tienda.css" />
    <link rel="stylesheet" type="text/css" href="css/ptienda.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
  <div id="container">
    <!--Menú-->
    <?php  include ('static/mainTOP.php'); ?>  

    <div id="content">
      <div id = "left-menu">
        <h2>Categorias</h2>
        <p>Free to play</p>
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
            <td><a href="articulo-tienda.php">GTA V</a></td>
            <td><a href="articulo-tienda.php">Rockstar</a></td>
            <td><a href="articulo-tienda.php">55€</a></td>
        </tr>
 
        <tr>
          <td><a href="articulo-tienda.php">This War of Mine</a></td>
          <td><a href="articulo-tienda.php">11 Bit Studios</a></td>
          <td><a href="articulo-tienda.php">20€</a></td>
        </tr>
 
        <tr>
          <td><a href="articulo-tienda.php">The Witcher 3</a></td>
          <td><a href="articulo-tienda.php">CD Proyect RED</a></td>
          <td><a href="articulo-tienda.php">59.99€</a></td>
        </tr>

        <tr>
          <td><a href="articulo-tienda.php">Darkest Dungeon</a></td>
          <td><a href="articulo-tienda.php">Power Up Audio</a></td>
          <td><a href="articulo-tienda.php">13.99€</a></td>
        </tr>

         <tr>
          <td><a href="articulo-tienda.php">Mortal Kombat X</a></td>
          <td><a href="articulo-tienda.php">NetherRealm Studios</a></td>
          <td><a href="articulo-tienda.php">49.99€</a></td>
        </tr>

         <tr>
          <td><a href="articulo-tienda.php">Project Cars</a></td>
          <td><a href="articulo-tienda.php">Slightly Mad Studios</a></td>
          <td><a href="articulo-tienda.php">34.99€</a></td>
        </tr>
      </table>

      <div id="content-container">
          <br></br>
          <br></br>
          <a href="articulo-tienda.php"><img class="image" src="images/GTAV.jpg"></a>
        </div>
    </div>

 <div id="pie">
      <p>MAETS Software
        © 2015 MAETS Corporation. Todos los derechos reservados. Todas las marcas registradas son propiedad de sus respectivos dueños en Madrid, España.
        Todos los precios incluyen IVA (donde sea aplicable).   Política de Privacidad   |   Información legal   |   Acuerdo de Suscriptor a MAETS
      </p>
    </div>

    </div>
  </div>

</body>
  
</html>
  