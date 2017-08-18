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
	case '':
		# code...
		break;

	default:
		# code...
		break;
}


      $buscar = $_REQUEST['b'];
      $buscar1 = $_REQUEST['c'];
      $buscar2 = $_REQUEST['d'];
      $buscar3 = $_REQUEST['e'];
       
  
       switch ($_REQUEST['ANYBODY']) {
              
             case 1:
                  include("Conexion2.php");  
          
            if($buscar==""){
                  break;
            }
            $sql = mysqli_query($cnx,"select * FROM solicitudes WHERE id LIKE '".$buscar."%' and Status='Finalizado'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "El cliente buscado no tiene su información completa o no existe: '<b>".$buscar."</b>'.";

            }else{
               echo  "<table><th><tr><td>ID</td><td>Nombre / Razon social</td><td>CURP/RFC</td></tr></th>";
                  while($row=mysqli_fetch_array($sql)){
                       
                         
                        echo "<tr> <td onclick='doc(". $row['id'].")' class='button'>". $row['id']."</td>  <td>".$row['NombrePF']." ".$row['SegNombrePF']." ".$row['ApPatPF']." ".$row['ApMatPF']."".$row['RazonSocial']." </td> <td></tr>";    
                  }
                  echo "</table>";
            }
      
                  break; 
             case 2 :
                   include("Conexion2.php");  
          
       if($buscar1=="" && $buscar2=="" && $buscar3==""){
                  break;
            }
            $sql = mysqli_query($cnx,"select * FROM clientes WHERE (NombrePF LIKE '%".$buscar1."%') and (ApPatPF LIKE '%".$buscar2."%') and (ApMatPF LIKE '%".$buscar3."%' and Status='Finalizado')");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "El cliente buscado no tiene su información completa o no existe: '<b>".$buscar1."</b>  <b>".$buscar2."</b>  <b>".$buscar3."</b>'.";
                 


            }else{
                  echo "<table><th><tr><td>ID</td><td>Nombre</td><td>CURP</td><td>RFC</td></tr></th>";
                  while($row=mysqli_fetch_array($sql)){
                       
                         
                        echo "<tr> <td onclick='sol(". $row['id'].")' class='button'>". $row['id']."</td>  <td>".$row['NombrePF']." ".$row['SegNombrePF']." ".$row['ApPatPF']." ".$row['ApMatPF']." </td> <td> ".$row['CURPPF']." </td> <td> ".$row['RFCPF']." </td></tr>";    
                  }
                  echo "</table>";
            }
             break;

             case 3: 
           include("Conexion2.php");  
          
       if($buscar==""){
                  break;
            }
            $sql = mysqli_query($cnx,"select * FROM clientes WHERE RazonSocial LIKE '".$buscar."%' and Status='Finalizado'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "El cliente buscado no tiene su información completa o no existe: '<b>".$buscar."</b>'.";
            }else{
                echo  "<table><th><tr><td>ID</td><td>Nombre</td><td>RFC</td></tr></th>";
                  while($row=mysqli_fetch_array($sql)){
                       
                         
                        echo "<tr> <td onclick='sol(". $row['id'].")' class='button'>". $row['id']." </td> <td> ".$row['RazonSocial']." </td> <td> ".$row['RFCPM']." </td></tr>";    
                  }
                  echo "</table>";
            }
             break;
             

             default:
                   echo("db_error");
                   break;
       }
  

 /*                  

                         */
?>