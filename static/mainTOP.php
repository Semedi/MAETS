﻿<?php
include ('include/session.php');

	//funcion de prueba para cargar una cabecera default 
function cargaCabeceraAnon(){

	echo "
							 	<div id='right-nav'>
							 	<li><a href='/MAETS/signUp.php'>Sign Up</a></li>
							 	<li><a href='/MAETS/logIn.php'>Log in</a></li>
							 	</div>";
}

 function cargaCabecera(){

 	if(isset($_SESSION["Nick"])){

		if($_SESSION["Logueado"] == true){
			if ($_SESSION["Rol"] == "Administrador") {

			} else {
				echo "
							<div id='nombreUsuario'><li><a href='/MAETS/index.php'>"; echo $_SESSION["Nick"]; echo "</a></li>
							<div id='logout'><li><a href='/MAETS/index.php'> logout </a></li></div>
							</div>
							<li><a href='index.php'><img id='imagenUsuario'  src='/MAETS/images/userProfile.png'></a></li>";
			}
							
						
								
		} else{
				cargaCabeceraAnon();
		}

	}	else {    
		cargaCabeceraAnon();
	}

}

?>


<script type="text/javascript" src="js\jquery-1.9.1.min.js"> </script>

	 <script type="text/javascript">

	 $( document ).ready(function() {

		 $('#logout').click(
		 	function(){

		 			$.get("include/usuariosGestor.php",{ functionName:"logout"},function(data){

		 					trimmed_data = $.trim(data);

		 					if (trimmed_data == ""){
		 						window.location.href = "index.php";
		 					}
		 					else {
		 						alert (data);
		 					}



		 	}



		 	);



	});


		});

	 </script>

<body>
	<div id="container">
		<!--Men?-->
		<div id="nav">
			<div id="left-nav">
				<li><a href="/MAETS/tienda.php">Tienda</a></li>
				<li><a href="/MAETS/community.php">	Comunidad</a></li>
				<li><a href="/MAETS/contact.php">Contacto</a></li>
			</div>
			
			<a href="/MAETS/index.php"><img class="icono_nav" src="/MAETS/images/MAETS.png"></a>				
			
				<?php 
					cargaCabecera();
				?>

				
			
	    </div>

	    <div id="content">