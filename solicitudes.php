<?php
switch ($_REQUEST['function']) {
	case "nuevasolicitud":
		include("Conexion2.php");
        mysqli_query($cnx,"insert into solicitudes (FolioCliente) values('".$_REQUEST['cliente']."')");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_cliente=$id['LAST_INSERT_ID()'];
		echo json_encode($id);
        break;
		


    case "cancelarsolicitud":
    	include("Conexion2.php");
    	mysqli_query($cnx,"delete FROM solicitudes WHERE Status = ''");
        echo "Cancelado";
        break;

    case "guardasolicitud":
    	include("Conexion2.php");
    	try {
    		$status="Incompleto";


    		mysqli_query($cnx,"update solicitudes SET 
    		NomObSol   			='".$_REQUEST['datobnom1']."',
    		ApPatObSol    		='".$_REQUEST['datobappat1']."',
    		ApMatObSol    		='".$_REQUEST['datobapmat1']."',
    		RFCObSol    		='".$_REQUEST['datobrfc11']."',
    		TelObSol    		='".$_REQUEST['datobtel11']."',
    		MovObSol    		='".$_REQUEST['datobtel112']."',
    		DirObSol    		='".$_REQUEST['datobdir1']."',
    		CURPObSol    		='".$_REQUEST['datobcurp1']."',
    		ColObSol    		='".$_REQUEST['datobcol1']."',
    		CdObSol    			='".$_REQUEST['datobcd1']."',
    		LugNacObSol    		='".$_REQUEST['datoblugnac1']."',
    		PropObSol    		='".$_REQUEST['datobprop1']."',
    		EdoObSol    		='".$_REQUEST['datobedo1']."',
    		CPObSol    			='".$_REQUEST['datobcp1']."',
    		EmailObSol    		='".$_REQUEST['datobmail1']."',
    		SexoObSol    		='".$_REQUEST['datobsex1']."',
    		FechNacObSol    	='".$_REQUEST['datobfechnac1d']."',
    		EdadObSol    		='".$_REQUEST['datobed1']."',
    		NomObSol2    		='".$_REQUEST['datobnom2']."',
    		ApPatObSol2    		='".$_REQUEST['datobappat2']."',
    		ApMatObSol2    		='".$_REQUEST['datobapmat2']."',
    		RFCObSol2    		='".$_REQUEST['datobrfc21']."',
    		TelObSol2    		='".$_REQUEST['datobtel21']."',
    		MovObSol2    		='".$_REQUEST['datobtel212']."',
    		DirObSol2    		='".$_REQUEST['datobdir2']."',
    		CURPObSol2    		='".$_REQUEST['datobcurp2']."',
    		ColObSol2    		='".$_REQUEST['datobcol2']."',
    		CdObSol2    		='".$_REQUEST['datobcd2']."',
    		LugNacObSol2    	='".$_REQUEST['datoblugnac2']."',
    		PropObSol2    		='".$_REQUEST['datobprop2']."',
    		EdoObSol2    		='".$_REQUEST['datobedo2']."',
    		CPObSol2    		='".$_REQUEST['datobcp2']."',
    		EmailObSol2    		='".$_REQUEST['datobmail2']."',
    		SexoObSol2    		='".$_REQUEST['datobsex2']."',
    		FechNacObSol2    	='".$_REQUEST['datobfechnac2d']."',
    		EdadObSol2    		='".$_REQUEST['datobed2']."',
    		TipoCredito    		='".$_REQUEST['tipocredito']."',
    		MontoSolicitado    	='".$_REQUEST['textfield86']."',
    		Enganche    		='".$_REQUEST['textfield87']."',
    		PorEnganche    		='".$_REQUEST['textfield88']."',
    		PorFinanciamiento   ='".$_REQUEST['textfield89']."',
    		MontoFinanciado    	='".$_REQUEST['textfield90']."',
    		InteresAnual    	='".$_REQUEST['textfield100']."',
    		ComisionApertura    ='".$_REQUEST['textfield96']."',
    		PorComApertura    	='".$_REQUEST['textfield96']."',
    		SeguroAuto    		='".$_REQUEST['textfield97']."',
    		SeguroVida    		='".$_REQUEST['textfield98']."',
    		SeguroDesempleo    	='".$_REQUEST['textfield99']."',
    		Plazo    			='".$_REQUEST['textfield91']."',
    		PagoMenEsp    		='".$_REQUEST['textfield92']."',
    		NomObSol_1    		='',
    		SexoObSol_1    		='',
    		FeNacObSol_1    	='',
    		RFCObSol_1    		='',
    		CURPObSol_1    		='',
    		EdadObSol_1    		='',
    		NomObSol_2    		='',
    		SexoObSol_2    		='',
    		FeNacObSol_2    	='',
    		RFCObSol_2    		='',
    		CURPObSol_2    		='',
    		EdadObSol_2    		='',
    		ClaveCon    		='".$_REQUEST['clavcon']."',
    		NomCon    			='".$_REQUEST['nomcons']."',
    		NomVend    			='".$_REQUEST['nomvend']."',
    		GerenteGral    		='Pendiente',
    		Fecha    			='".$_REQUEST['fechasolicitudregistro']."',
    		Status    			='".$status."',
    		StatusValidacion    ='Pendiente' 

    		WHERE id='".$_REQUEST['id']."'");

    		echo "¡¡Guardado!!";

    	} catch (Exception $e) {
    		echo "Error: ".$e;
    	}
    	
    	break;



    case "requesttipocredito":

    	
    	include('Conexion2.php');
    	$result=mysqli_query($cnx,"select * from tiposcreditos where descripcion='".$_REQUEST['requestcredito']."'");
    	if($result===false){
    		break;
    	}
    	$row=mysqli_fetch_array($result);
    	echo json_encode($row);
    	break;

	default;
        echo 'Error';
    	break;



}

?>
