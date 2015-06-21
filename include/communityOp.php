<?php 


require('communityBD.php');	

function getForoOP() {
	$hilos = getForoBD();
		
	return ($hilos);
		
}

function getAnalisisOP() {
	return (getAnalisis());
}

?>