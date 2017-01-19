<?php
$valor=$_GET['dato'];
//$tipocliente=$_GET['tipocliente'];
include("Conexion2.php");
include("carpetaraiz.php");

$result=mysqli_query($cnx,"select * from clientes where id='$valor'");



if(mysqli_num_rows($result)>0){
    header('Location: '.$raiz.'solicitudPFNArequestNum.php?cliente='.$valor);
}elseif (mysqli_num_rows(mysqli_query($cnx,"select * from clientes where Nombre='$valor' "))>0) {
    $result2=mysqli_query($cnx,"select * from clientes where Nombre='$valor'");
    $row=mysqli_fetch_array($result2);
    header('Location: '.$raiz.'solicitudPFNArequestNum.php?cliente='.$row['id']);
    
} else {
    $nombre=explode(" ",$valor);
    $decoder=count($nombre);
    if($decoder>1){
        if ($decoder==4) {
            header('Location: '.$raiz.'solicitudPFNA.php?PrNombre='.$nombre[0].'&SgNombre='.$nombre[1].'&PrApellido='.$nombre[2].'&SgApellido='.$nombre[3]);
        } elseif($decoder==3) {
           header('Location: '.$raiz.'solicitudPFNA.php?PrNombre='.$nombre[0].'&PrApellido='.$nombre[1].'&SgApellido='.$nombre[2]);
        }
        
        
    }else {
        
        header('Location: '.$raiz.'solicitudPFNA.php?retorna='.$valor);
    }
        
}




?>
