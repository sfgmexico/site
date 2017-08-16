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
}else{echo "Error al subir el archivo";}

}
else{echo $msg;}
/*
*/
		break;
	
	default:
		# code...
		break;
}
 /*                  

                         */
?>