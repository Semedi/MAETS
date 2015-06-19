<?php
if (!isset($_SESSION)) session_start();

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
			echo
				"<div id='nombreUsuario'>
					<li><a href='/MAETS/Usuario/pagPpalUser.php'>" .$_SESSION["Nick"]. "</a></li>
				  	<div id='logout'>
				  		<li><a href='/MAETS/index.php'> logout </a></li>
					</div>
				</div>
				<li><a href='/MAETS/Usuario/pagPpalUser.php'><img id='imagenUsuario' src='/MAETS/images/userProfile.png'></a></li>";
							
						
								
		} else{
				cargaCabeceraAnon();
		}

	}	else {    
		cargaCabeceraAnon();
	}

}

?>


<script type="text/javascript" src="/MAETS/js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
		 	$('#logout').click(
		 		function(){
		 			$.get("AJAX/usuariosGestor.php",{ functionName:"logout"},function(data){
		 				trimmed_data = $.trim(data);
		 					if (trimmed_data == ""){
		 						window.location.href = "index.php";
		 					}
		 			 	}
				 	);
				});
		});

	</script>

<body>

	<div id="franja"/>
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