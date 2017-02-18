<?php
$valor="";
$nombre="";
$segundonom="";
$paterno="";
$materno="";
if (isset($_GET['dato'])){
$valor=$_GET['dato'];
}
if (isset($_GET['nombre']) || isset($_GET['segundo']) || isset($_GET['paterno']) || isset($_GET['materno'])){
$nombre=$_GET['nombre'];
$segundonom=$_GET['segundo'];
$paterno=$_GET['paterno'];
$materno=$_GET['materno'];
}

//echo "nombre: ".$nombre." segundo: ".$segundonom." paterno: ".$paterno." materno: ".$materno;
//$tipocliente=$_GET['tipocliente'];
include("Conexion2.php");
//include("carpetaraiz.php");

$result=mysqli_query($cnx,"select * from pfa where Folio_Cliente='$valor'");



if(mysqli_num_rows($result)>0){
 echo $valor; 
}elseif (mysqli_num_rows($result_cliente=mysqli_query($cnx,"select * from pfa where NomSolicitante='$nombre' and SegNomSolicitante='$segundonom' and ApPatSolicitante='$paterno' and ApMatSolicitante='$materno'"))>0) {
    $folio_cliente=mysqli_fetch_array($result_cliente);
    echo $folio_cliente['Folio_Cliente'];
    
  
    
} else {
    $nombre=explode(" ",$valor);
    $decoder=count($nombre);
    

    if($decoder>1){
        if ($decoder==4) {
            echo $nombre[0].'&SgNombre='.$nombre[1].'&PrApellido='.$nombre[2].'&SgApellido='.$nombre[3];
        } elseif($decoder==3) {
           echo $nombre[0].'&PrApellido='.$nombre[1].'&SgApellido='.$nombre[2];
        }
        
        
    }else {
        
        echo "cliente no encontrado";
    }
        
}




?>
