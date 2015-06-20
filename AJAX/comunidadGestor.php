<?php

//añade foro a la bdd
function newTopic(){
	echo "crearTema";
	return(true);
}

//elimina un foro de la bdd
function deleteForum(){
	
	return(true);
}




$functionName = filter_input(INPUT_GET, 'functionName');

switch ($functionName) {
    case "newTopic":
      newTopic(); 
        break;
 
}





?>