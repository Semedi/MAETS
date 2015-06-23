<?php
require_once __DIR__.'\..\include\config.php';

	$uploadedfileload="true";
	$uploadedfile_size=$_FILES['uploadedfile']['size'];
	$msg = "";
	if ($_FILES['uploadedfile']['size']>200000)	{
		$msg.="El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
		$uploadedfileload="false";
	}

	if (!($_FILES['uploadedfile']['type'] =="image/jpeg" OR $_FILES['uploadedfile']['type'] =="image/gif")) {
		$msg.=" Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
		$uploadedfileload="false";
	}

	$file_name=$_FILES['uploadedfile']['name'];
	$add="../images/screens/$file_name";
	if($uploadedfileload=="true"){

		include('../include/communityBD.php');


		if ($_GET['modo'] == "modificar"){

			include('../include/usersBD.php');
			$add="../images/usuarios/$file_name";
			updateFoto($_SESSION['ID'], $file_name);

			$_SESSION['IMG'] =$file_name;

		}
		
		if ($_GET['modo'] == "cambiarPortada"){
			
			include('../include/shopBD.php');
			$add="../images/Portadas/$file_name";
			updatePortadaJuego($file_name, $_GET['juego']);
		}
		
		


		insertCaptura($_GET['juego'], $_FILES['uploadedfile']['name'], true);
		if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
			echo "<script type='text/javascript'>alert('Ha sido subido satisfactoriamente');</script>";
		}else{
			echo "<script type='text/javascript'>alert('Error al subir el archivo');</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}

	if ($_GET['modo'] == "modificar"){

			
			print("<script>window.location.replace('../Usuario/pagPpalUser.php');</script>"); 
	}
	else if($_GET['modo'] == "insertar"){
			print("<script>window.location.replace('../community/capturas.php');</script>"); 

		}
	else if($_GET['modo'] == "cambiarPortada"){
			print("<script>window.location.replace('../admin/gestorJuegos.php');</script>"); 
	}
	
?>
