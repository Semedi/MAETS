<?php
	//funcion de prueba para cargar una cabecera default 
function cargaCabeceraAnon(){

	echo "
							 	<div id='right-nav'>
							 	<li><a href='".SIGNUP."'>Sign Up</a></li>
							 	<li><a href='".LOGIN."'>Log in</a></li>
							 	</div>";
}

 function cargaCabecera(){

 	if(isset($_SESSION["Nick"])){

		if($_SESSION["Logueado"] == true){
			echo
				"<div id='nombreUsuario'>
					<li><a href='".USER."'>" .$_SESSION["Nick"]. "</a></li>
				  	<div id='logout'>
				  		<li><a href='".LOGOUT."'>Logout</a></li>
					</div>
				</div>
				<li><a href='".USER."'><img id='imagenUsuario' src='".IMAGENES."/userProfile.png'></a></li>";
							
						
								
		} else{
				cargaCabeceraAnon();
		}

	}	else {    
		cargaCabeceraAnon();
	}

}
?>



<body>

	<div id="franja"/>
	<div id="container">
		<!--Men?-->
		<div id="nav">
			<div id="left-nav">
				<li><a href=<?php echo TIENDA ?>>Tienda</a></li>
				<li><a href=<?php echo COMMUNITY ?>>Comunidad</a></li>
				<li><a href=<?php echo CONTACT ?>>Contacto</a></li>
			</div>
			
			<a href=<?php echo HOME ?>><img class="icono_nav" src=<?php echo IMAGENES."/MAETS.png"; ?>></a>				
			
				<?php 
					cargaCabecera();
				?>

				
			
	    </div>

	    <div id="content">