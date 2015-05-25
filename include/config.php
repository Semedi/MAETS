<?php

 /*Create connection*/
function createConnection(){

	$servidor="localhost";
	$user="root";
	$bdd="maets";

	mysql_connect($servidor, $user, "");
	@mysql_select_db($bdd) or die("Unable to select database");
}


 function closeConnection($con){
	
		mysql_free_result($con);
		mysql_close();

 }
