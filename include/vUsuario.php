<?php




function generarListaBusqueda($busqueda, $column, $like){
	
		require_once('../include/usersOp.php');

		$res = getListaUsuarios($busqueda,$column, $like);

				
			for($i=0; $i<sizeof($res)-1; $i++) {
		

			echo "<div id='usuario' onclick=location.href='Usuario.php?user=" .$res[$i]['Nick']. "' style='cursor:pointer'>";
			echo "<img class='avatar' src='../images/usuarios/".$res[$i]['Imagen']."'>";
			echo $res[$i]['Nick'];
			echo "</div>";

				
	    	}

	    	

}



function generarUsuario($user){

	require_once('../include/usersOp.php');

	$res = getListaUsuarios($user,"Nick", false);





		  echo "<div id = 'user_friends_header'>";
          echo "<img id='imagen_Avatar' src='../images/usuarios/".$res[0]['Imagen']."'>";
          echo "<div id = 'texto_perfil' >";
          echo "<h2 id='nickuser'>".$user."</h2>";
          echo "<img id = 'bandera_nacionalidad' src='../images/usuarios/SpainFlag.jpg'>";
          echo "</div>";
          echo "<div id = 'botonAniadir'>";

          
          echo "<button type='button' id='addFriendButton'>Añadir a mis amigos</button>";
          echo "</div>";
          echo "</div>";

          echo "<div id ='mainContent'>";

          echo "<h1> Perfil del usuario</h1>";




          echo "<table>";

 			echo "<tr><h2> Resumen </h2></tr>";
             echo "<tr>";
             echo "<td>Nick:   ".$user."</td>";
              echo "</tr>";     
              echo  "<tr>";
              echo "<td>Nombre:    "  .$res[0]['Nombre']. " </a></td>";
              echo "</tr>";   
              echo "<tr>";
              echo "<td>Apellidos:    ".$res[0]['Apellidos']." </a></td>";
         
              echo "</tr>";
              echo "<tr>";
              echo "<td>Correo:     " .$res[0]['Correo']. " </a></td>";
              
              echo "</tr>";
              echo "<tr>";
              echo "<td>Puntos de logro: " .$res[0]['Puntuacion']. "</a></td>";
              echo "</tr>";


              echo "</table>";
              echo "</div>";

}

function generarAmigos($user){
  require_once('../include/usersOp.php');

  $res = getListaAmigos($user,"IDUsuario");




      echo "<tr>";
    for($i=0; $i<sizeof($res)-1; $i++) {
      
        ;
        if ($i%4==0){
            echo "</tr>";
            echo "<tr>";

        }
        echo "
           <td id = 'celda'>".getUser($res[$i]['IDAmigo'])['nick']."
                  <p>Desconectado</p>
                 </td>

        ";

    }

          echo"</tr>";
}

function generarPerfilPrincipal($user) {
  require_once('../include/usersOp.php');

  $usuario = getUserInfo($user);
  $puntosDeLogro = getPuntosLogros($user);
  $juegosComprados = sizeOf(getJuegosComprados($user));

  echo "<tr>";
    echo "<td>Nick:</td>";
    echo "<td>" .$usuario['Nick']. "</td>";
  echo "</tr>";
  
  echo "<tr>";
    echo "<td>Nombre:</td>";
    echo "<td>" .$usuario['Nombre']. "</td>";
  echo "</tr>";
 
  echo "<tr>";
    echo "<td>Apellidos:</td>";
    echo "<td>" .$usuario['Apellidos']. "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td>Correo:</td>";
    echo "<td>" .$usuario['Correo']. "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td>Juegos comprados:</td>";
    echo "<td>" .$juegosComprados. "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td>Puntos de logro: </a></td>";
    if($puntosDeLogro['SUM(Puntos)'] != NULL)
      echo "<td>" .$puntosDeLogro['SUM(Puntos)'].  "</td>";
    else
      echo "<td>0</td>";
  echo "</tr>";
}

function generarListaDeJuegos($user) {
  require_once('../include/usersOp.php');

  $juegos = getJuegosComprados($user);

  if($juegos != NULL){
		foreach ($juegos as $juego) {
		  if($juego != NULL)
			echo "<a href='../tienda/articulo-tienda.php?juego=" .$juego['Id']. "'><li>" .$juego['Titulo']. "</li></a>";
		} 
	}else{
		echo "<div id =\"noJuegos\">";
		echo "<p>No tienes ningún juego todavía.</p>";
		echo "<br /> <br />";
		echo "<button name=\"irTienda\" id=\"irTienda\" onclick=\"location.href ='../tienda.php';\">Ir a la tienda</button>";
		echo "</div>";
		}
}
 
        

?>