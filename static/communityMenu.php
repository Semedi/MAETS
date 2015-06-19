<script type="text/javascript" src="/MAETS/js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

			$(document).keypress(function(e) {
			   			if(e.which == 13) {
			       			$.get("/MAETS/AJAX/usuariosGestor.php",{ functionName:"searchUser", userNick:$('#busqueda_user').val(),},function(data){
					 			trimmed_data = $.trim(data);
					 			
						 		window.location.href = "../Usuario/pagPpalUser2.php";
						 	
					 			}
					 		);
			   			}
					});
	</script>




<div id="menu"> 


	
					<div id="navigation">
					   <div id="elementoMenu"><a href="/MAETS/community/foros.php" title="Enlace generico">  Foros     </a> </div>
					   <div id="elementoMenu"><a href="/MAETS/community/usuarios.php" title="Enlace generico">  Usuario     </a> </div>
					   <div id="elementoMenu"><a href="/MAETS/community/achievements.php" title="Enlace generico">   Logros    </a> </div>
					   <div id="elementoMenu"><a href="/MAETS/community/capturas.php" title="Enlace generico">   Capturas </a> </div>
					   <div id="elementoMenu"><a href="/MAETS/community/videos.php" title="Enlace generico">   Videos    </a> </div>
					   <div id="elementoMenu"><a href="/MAETS/community/analysis.php" title="Enlace generico">  Analysis  </a> </div>
					</div>
	
	
			</div>
			
			
<div id="cajaBusqueda">
				<div id ="busqueda"> 
					<!--<form action="demo_form.asp">    // Sirve para ejecutar la accion-->
					Búsqueda:
					<input type  ="text" name ="busqueda_user" id ="busqueda_user" class="texto" name="lname"/>
					<!--keypress??-->
					<!--<input type="submit" value="Submit">   //añade un boton-->
					<!--</form>-->
				</div>
			</div>