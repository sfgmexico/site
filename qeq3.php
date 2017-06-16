<?php
if(isset($_REQUEST['solicitud'])){
    $SolicitudNo=$_REQUEST['solicitud'];
    include('Conexion2.php');
}else{
    exit();
}

$result=mysqli_query($cnx,"select * from registroxml where Folio_Sol='$SolicitudNo'");
if($result === false){
    exit();
}
$result2=mysqli_query($cnx,"select * from xml where Folio_Sol='$SolicitudNo'");
$row2=mysqli_fetch_array($result);
echo "<h2>Personas Involucradas</h2>";
<<<<<<< HEAD
echo "<p>Consulta realizada el día ".$row2['Fecha']." al portal de Quien es Quien. Número de la solicitud: ".$SolicitudNo." </p>";
=======


>>>>>>> origin/master
while($row=mysqli_fetch_array($result)){
    
    echo "<h4>".$row['PersonaRazonsoc']."</h4>";
    echo leer($row['DirXML'])."<hr/>";
}
//Para leerlo
  function leer($url){
    try {
            $xml = simplexml_load_file($url);
           
    $salida ="";
    
    foreach($xml->persona as $item){
      $salida .=
        "<b>Lista: </b> " . $item->lista ."<br>".
        "<b>Estatus: </b>".$item->estatus."<br>".
        "<b>Dependencia: </b>".$item->dependencia. "<br>".
        "<b>Puesto: </b>".$item->puesto."<br>".
        "<b>Area: </b>".$item->area."<br>".
        "<b>Entidad: </b>".$item->entidad."<br/><hr/>";
        
    }
    if($salida==""){
        echo "No es un PEP";
    }else{
        echo $salida;
    }
    ?> <script> window.print(); </script> <?php
    }catch (Exception $e) {
      echo 'Caught exception:---->>>> ',  $e->getMessage(), "\n";
        exit();
    }
    
    
    
  }
  ?>