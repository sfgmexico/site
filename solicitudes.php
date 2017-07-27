<?php
switch ($_REQUEST['function']) {
	case "nuevasolicitud":
		include("Conexion2.php");
        mysqli_query($cnx,"insert into solicitudes (FolioCliente) values('".$_REQUEST['cliente']."')");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_cliente=$id['LAST_INSERT_ID()'];
		echo json_encode($id);
        break;
		


	default;
        echo 'Error';
    	break;



}

?>
