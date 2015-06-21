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
          echo "<h2>".$user."</h2>";
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
              echo "<td>Puntos de logro: </a></td>";
              echo "<td>52</td>";
              echo "</tr>";


              echo "</table>";
              echo "</div>";

}

?>