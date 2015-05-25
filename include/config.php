
<?php




 /*Create connection*/
function createConnection(){

	$servidor="localhost";
	$user="root";
	$bdd="maets";



	$con=mysqli_connect(servidor, user, "", bdd);
	//echo "Success to connect to MySQL: ";
	// echo "<br>";
	 //Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }else return $con;
}


 function closeConnection($con){
	
		mysqli_close($con);
	

 }





?>