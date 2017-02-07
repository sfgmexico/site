<?php
$valor=$_GET['dato'];
include("Conexion2.php");
//include("carpetaraiz.php");

$result=mysqli_query($cnx,"select * from clientes where id='$valor'");



if(mysqli_num_rows($result)>0){
    
    //$row=mysqli_fetch_array($result);
    //echo json_encode($row);
   
}elseif (mysqli_num_rows(mysqli_query($cnx,"select * from clientes where Nombre='$valor'"))>0) {
    $result2=mysqli_query($cnx,"select * from clientes where Nombre='$valor'");
    $row=mysqli_fetch_array($result2);
    
    
} else {
    $nombre=explode(" ",$valor);
    $decoder=count($nombre);
    if($decoder>1){
        if ($decoder==4) {
           
        } elseif($decoder==3) {
           
        }
        
        
    }else {
        
       
    }
        
}




?>
