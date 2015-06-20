<?php 
	
require_once ('../include/config.php');
function getForoBD()
	{
		$con = createConnection();
		//$retorno = [];
		$sql = "SELECT id, titulo, texto, fecha_creacion, ultimo_mensaje, idusuario ";
		$sql.= "FROM hilo";
		$rs = $con->query($sql) or die ($con->error. "en la linea".(_LINE_-1));
		//$rs = mysql_query($sql, $mysqli);
		if($rs != NULL)
		{
			while($row[] = $rs->fetch_assoc());
			closeConnection($con);
			return ($row);
		}
	}
	
?>