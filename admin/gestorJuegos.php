<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/gestorJuegos.css"/>
</head>

<?php include ('../static/mainTOP.php'); ?>

	<?php
		$filas = 10;	/* Coger filas de la base de datos */
		$columnas = 12;
		$texto = "texto";	/* Coger datos de la base de datos */
	?>

	<body>
		<button name="anadirJuegos" id="anadirJuegos" onclick="location.href ='formularioJuego.php';">Añadir nuevo juego</button>
		<table>
			<th> Título </th>
			<th> Precio </th>
			<th> Edad </th>
			<th> Descripción </th>
			<th> Descripción completa </th>
			<th> Compañía </th>
			<th> Tipo </th> 
			<th> Etiquetas </th>
			<th> Idioma </th> 
			<th> Ventas </th> 
			<th> Fecha </th>
			<th> Portada </th>
			<?php
				for($i=0; $i<$filas; $i++) {
					echo "<tr>";
					for($j=0; $j<$columnas; $j++)
						echo "<td>" .$texto. "</td>" ;
					echo "</tr>";
				}
			?>
		</table>
	</body>

<?php include ('../static/mainBOT.php'); ?>

</html>