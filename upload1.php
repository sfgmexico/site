                       <?php


switch ($_REQUEST['function']) {
	case 'subir':

	$uploadedfileload="true";
$uploadedfile_size=$_FILES['file1']['size'];
$msg='';
echo $_FILES['file1']['name'];
if ($_FILES['file1']['size']>200000)
{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES['file1']['type'] =="image/jpeg" OR $_FILES['file1']['type'] =="image/gif" OR $_FILES['file1']['type'] =="image/png"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES['file1']['name'];
$add="Carga documentacion/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES['file1']['tmp_name'], $add)){
echo " Ha sido subido satisfactoriamente";

mysqli_query($cnx,"insert into docu(INE, INEurl, pasaporte, pasaporteurl, cartilla, cartillaurl, licencia, licenciaurl, otra, otraurl, secotejo, addcurp, addcurpurl, adddomicilio, adddomiciliourl, fechadom, domId) VALUES ('textfield39','file1')");

}else{echo "Error al subir el archivo";}

}
else{echo $msg;}
/*
*/
		break;

		case 'nuevadocumentacion':
				include("Conexion2.php");
        mysqli_query($cnx,"insert into documentacion (Rsolicitud) values('".$_REQUEST['cliente']."')");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_cliente=$id['LAST_INSERT_ID()'];
		echo json_encode($id);
			break;
	
	default:
		# code...
		break;
}
 /*                  

                         */
?>