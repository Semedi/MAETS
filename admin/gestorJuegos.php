<!DOCTYPE html>

<html>
<head>
	<title> MAETS </title>
	<link rel="icon" type="image/png" href="../images/MAETS.png"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>

<?php include ('../static/mainTOP.php'); ?>

	<?php

		$filas = 10;
		$columnas = 15;
		$texto = 0;
	?>

	<body>
		<table>
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