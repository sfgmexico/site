<?php
 $solicitudNo=strtoupper($_GET['foliosol']);
 include('Requests-1.7.0/library/Requests.php');
 include('Conexion2.php');
if(stristr($solicitudNo, 'SA-')== TRUE){
   renewSA:
    $result=mysqli_query($cnx,"select * from solicitudpfa where Folio_Sol='$solicitudNo'");
  $ob=mysqli_fetch_array($result);
  $cliente=$ob['Folio_Cliente'];
    $tab=mysqli_query($cnx,"select * from pfa where Folio_cliente='$cliente'");
    $ob2=mysqli_fetch_array($tab);
    $per1=$ob2['NomSolicitante'].' '.$ob2['SegNomSolicitante'].' '.$ob2['ApPatSolicitante'].' '.$ob2['ApMatSolicitante'];
    $con1="https://qeq.mx/datos/qws/pepsp?nombre=".$ob2['NomSolicitante'].' '.$ob2['SegNomSolicitante']."&paterno=".$ob2['ApPatSolicitante']." &materno=".$ob2['ApMatSolicitante']."&curp=".$ob2['CURPSolicitante']."&rfc=".$ob2['RFCSolicitante'];
    try {
    consulta('pepsp',$con1,$per1);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

    
    
    if($ob['NomRefPer']!=""){
        $per2=explode(" ", $ob['NomRefPer']);
        $con2="https://qeq.mx/datos/qws/pepsp?nombre=".$per2[0]."&paterno=".$per2[1]."&materno=".$per2[2];
       try {
    consulta('pepsp',$con2,$ob['NomRefPer']);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    goto renewSA;
}
        
    }
    if($ob['NomRefPer2']!=""){
        $per2=explode(" ", $ob['NomRefPer2']);
        $con2="https://qeq.mx/datos/qws/pepsp?nombre=".$per2[0]."&paterno=".$per2[1]."&materno=".$per2[2];
        try {
     consulta('pepsp',$con2,$ob['NomRefPer2']);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    goto renewSA;
}
       
    }
    //conyuge
    $per3="";
    $per3=$ob['NomDatCon'].' '.$ob['ApPatDatCon'].' '.$ob['ApMatDatCon'];
    if($per3!=""){
        
        $con3="https://qeq.mx/datos/qws/pepsp?nombre=".$ob['NomDatCon']."&paterno=".$ob['ApPatDatCon']."&materno=".$ob['ApMatDatCon'];
        try {
     consulta('pepsp',$con3,$per3);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    goto renewSA;
}
       
    }
    //obligado solidario
    $per4="";
    $per4=$ob['NomObSol'].' '.$ob['ApPatObSol'].' '.$ob['ApMatObSol'];
    if($per4!=""){
        
        $con4="https://qeq.mx/datos/qws/pepsp?nombre=".$ob['NomObSol']."&paterno=".$ob['ApPatObSol']."&materno=".$ob['ApMatObSol']."&curp=".$ob['CURPObSol']."&rfc=".$ob['RFCObSol'];
        try {
    consulta('pepsp',$con4,$per4);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    goto renewSA;
}
        
    }
    //obligado solidario
    $per5="";
    $per5=$ob['NomObSol2'].' '.$ob['ApPatObSol2'].' '.$ob['ApMatObSol2'];
    if($per5!=""){
        
        $con5="https://qeq.mx/datos/qws/pepsp?nombre=".$ob['NomObSol2']."&paterno=".$ob['ApPatObSol2']."&materno=".$ob['ApMatObSol2']."&curp=".$ob['CURPObSol2']."&rfc=".$ob['RFCObSol2'];
        try {
    consulta('pepsp',$con5,$per5);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    goto renewSA;
}
        
    }

echo "¡¡¡Consulta Realizada!!!";
exit();
}elseif (stristr($solicitudNo, 'SN-')== TRUE) {

}elseif (stristr($solicitudNo, 'SM-')== TRUE){

}else{
    exit();
}




    

    $url="https://qeq.mx/datos/qws/pepse?razonsoc=".$razonsoc."&rfc=".$rfc;


function consulta($tipo,$url,$persona){

$count2=0;
// First, include Requests


// Next, make sure Requests can load internal classes
Requests::register_autoloader();

// Say you need to fake a login cookie
$c = new Requests_Cookie_Jar(['login_uid' =>  'something']);

renew:
try {
   // Now let's make a request!
$request = Requests::get('https://qeq.mx/datos/qws/access?var1=silvia@vwdgo.com&var2=qeq939', // Url
	[],  // No need to set the headers the Jar does this for us
	['cookies' => $c] // Pass in the Jar as an option
);


} catch (Exception $e) {
    goto renew;
}

$count=0;

renewQuest:
try {
   // Now let's make a request!
$request2 = Requests::get($url, // Url
	[],  // No need to set the headers the Jar does this for us
	['cookies' => $c] // Pass in the Jar as an option
);


} catch (Exception $e) {
    if($count<2){
        $count++;
        goto renewQuest;
    }else{
        echo "Error Tiempo Excedido";
        exit();
    }
    
}





// Check what we received
//var_dump($request2->body);
$xml = new DOMDocument();
$xml-> loadXML($request2->body);
$xml->formatOutput = true;
$el_xml = $xml->saveXML();
$json = json_encode($xml);
//$array = json_decode($json,TRUE);
$pos = strpos($el_xml, 'No se pudo autenticar');

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
// porque la posición de 'a' está en el 1° (primer) caracter.

 
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($pos === false) {
    
    } else {
        if($count2<2){
        $count2++;
        sleep(10);
        goto renew;
    }else{
        echo "Error Tiempo Excedido";
        exit();
    }
            
            }

if($tipo=="pepsp"){
   $xml->save('/Applications/XAMPP/xamppfiles/htdocs/site/xml/'.$persona.' '.date('Y-m-d').'.xml');
}
if($tipo=="pepse"){
    $xml->save('/Applications/XAMPP/xamppfiles/htdocs/site/xml/'.$razonsoc.' '.$rfc.' '.date('Y-m-d').'.xml');
}



            
//echo htmlentities($el_xml);


}
 

echo "<br>";

leer();

//Para leerlo
  function leer(){
    
    $xml = simplexml_load_file('xml/miguel osorio chong 2017-05-18.xml');
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
    
    
  }

//echo ($json);

