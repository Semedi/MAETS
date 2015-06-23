<?php require_once __DIR__.'\..\include\config.php'; ?>
<!DOCTYPE html>

<html>

<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/pcomunidad.css" />
	<link rel="stylesheet" type="text/css" href="css/insertarVideo.css" />

	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"> </script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$('#insertarVideo').click(
			 	function(){
					$.get("../AJAX/comunidadGestor.php",{ functionName:"newVideo", link:$('#link_video').val(), title:$('#titulo_video').val() },function(data){
			 			trimmed_data = $.trim(data);
						
								alert(data);
				 				window.location.href = "videos.php";
				 			
				 			
			 			}
			 		);
				});
		});
	 </script>
</head>


<?php  include ('../static/mainTOP.php'); ?>	
<?php  include ('../static/communityMenu.php'); ?>	
			
			
			
			<div id="cajaThread">
				<h1>Nueva captura</h1>
				<?php echo"<form enctype='multipart/form-data' action='../uploader.php?user=" .$_SESSION['ID']. ".php' method='POST'>";?>
				<input id="archivo" name="uploadedfile" type="file" />
				<input type="submit" value="Subir archivo" />
				</form>
				
				
			</div>	
	    	
<?php  include ('../static/mainBOT.php'); ?>	

	
</html>