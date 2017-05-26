<?php
 $solicitudNo=strtoupper($_GET['foliosol']);
 include('Requests-1.7.0/library/Requests.php');
 include('Conexion2.php');
if(stristr($solicitudNo, 'SA-')== TRUE){
     renewSA:
      $arra= array();
    $result=mysqli_query($cnx,"select * from solicitudpfa where Folio_Sol='$solicitudNo'");
  $ob=mysqli_fetch_array($result);
  $cliente=$ob['Folio_Cliente'];
    $tab=mysqli_query($cnx,"select * from pfa where Folio_cliente='$cliente'");
    $ob2=mysqli_fetch_array($tab);
    $per1=$ob2['NomSolicitante'].' '.$ob2['SegNomSolicitante'].' '.$ob2['ApPatSolicitante'].' '.$ob2['ApMatSolicitante'];
    $con1="https://qeq.mx/datos/qws/pepsp?nombre=".$ob2['NomSolicitante'].' '.$ob2['SegNomSolicitante']."&paterno=".$ob2['ApPatSolicitante']." &materno=".$ob2['ApMatSolicitante']."&curp=".$ob2['CURPSolicitante']."&rfc=".$ob2['RFCSolicitante'];
    try {
    $dir=consulta($con1,$per1);
    array_push($arra, array($per1,$dir));
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
         goto renewSA;
    }

    /*
    
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
    */
    //conyuge
    renewSA2:
    $per3="";
    $per3=$ob['NomDatCon'].' '.$ob['ApPatDatCon'].' '.$ob['ApMatDatCon'];
    if($per3!=""){
        
        $con3="https://qeq.mx/datos/qws/pepsp?nombre=".$ob['NomDatCon']."&paterno=".$ob['ApPatDatCon']."&materno=".$ob['ApMatDatCon'];
        try {
     $dir=consulta($con3,$per3);
     array_push($arra, array($per3,$dir));
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        goto renewSA2;
    }
       
    }
    //obligado solidario
    renewSA3:
    $per4="";
    $per4=$ob['NomObSol'].' '.$ob['ApPatObSol'].' '.$ob['ApMatObSol'];
    if($per4!=""){
        
        $con4="https://qeq.mx/datos/qws/pepsp?nombre=".$ob['NomObSol']."&paterno=".$ob['ApPatObSol']."&materno=".$ob['ApMatObSol']."&curp=".$ob['CURPObSol']."&rfc=".$ob['RFCObSol'];
        try {
    $dir=consulta($con4,$per4);
     array_push($arra, array($per4,$dir));
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        goto renewSA3;
    }
        
    }
    //obligado solidario
    renewSA4:
    $per5="";
    $per5=$ob['NomObSol2'].' '.$ob['ApPatObSol2'].' '.$ob['ApMatObSol2'];
    if($per5!=""){
        
        $con5="https://qeq.mx/datos/qws/pepsp?nombre=".$ob['NomObSol2']."&paterno=".$ob['ApPatObSol2']."&materno=".$ob['ApMatObSol2']."&curp=".$ob['CURPObSol2']."&rfc=".$ob['RFCObSol2'];
        try {
    $dir=consulta($con5,$per5);
    array_push($arra, array($per5,$dir));
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        goto renewSA4;
    }
        
    }

    echo "¡¡¡Consulta Realizada!!!";

    foreach ($arra as $valor){
        mysqli_query($cnx,"insert into registroxml (Folio_Sol,PersonaRazonsoc,DirXML) values('$solicitudNo','".$valor[0]."','".$valor[1]."') ON DUPLICATE KEY UPDATE Folio_Sol = '$solicitudNo', PersonaRazonsoc = '".$valor[0]."', DirXML='".$valor[1]."';");
    }


    exit();

}elseif (stristr($solicitudNo, 'SN-')== TRUE) {
    echo "¡¡En Construcción!!";
}elseif (stristr($solicitudNo, 'SM-')== TRUE){
    try {
        renewSM:
    $arra= array();

    ///EMPRESA
    $result=mysqli_query($cnx,"select * from solicitudpm where Folio_Sol='$solicitudNo'");
    $ob=mysqli_fetch_array($result);
    $cliente=$ob['Folio_Cliente'];
    $tab=mysqli_query($cnx,"select * from pm where Folio_cliente='$cliente'");
    $ob2=mysqli_fetch_array($tab);

    $per1=$ob2['NomSolicitante'].' '.$ob2['RFCSolicitante'];
    $con1="https://qeq.mx/datos/qws/pepse?razonsoc=".$ob2['NomSolicitante']."&rfc=".$ob2['RFCSolicitante'];
    try {
    $dir=consulta($con1,$per1);
    array_push($arra, array($per1,$dir));
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
         goto renewSM;
    }

    /////CONACTO DE LA EMPRESA
    $per2=$ob2['NomDatContEmp'].' '.$ob2['SegNomDatContEmp'].' '.$ob2['ApPatDatContEmp'].' '.$ob2['ApMatDatContEmp'];
    $con2="https://qeq.mx/datos/qws/pepsp?nombre=".$ob2['NomDatContEmp'].' '.$ob2['SegNomDatContEmp']."&paterno=".$ob2['ApPatDatContEmp']." &materno=".$ob2['ApMatDatContEmp']."&curp=".$ob2['CURPDatConEmp']."&rfc=".$ob2['RFCDatConEmp'];
    try {
    $dir=consulta($con2,$per2);
    array_push($arra, array($per2,$dir));
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
         goto renewSM;
    }

    ////OBLIGADO SOLIDARIO PERSONA MORAL
    $per3=$ob['NomObPerMor'].' '.$ob['RFCObPerMor'];
    $con3="https://qeq.mx/datos/qws/pepse?razonsoc=".$ob['NomObPerMor']."&rfc=".$ob['RFCObPerMor'];
    try {
    $dir=consulta($con3,$per3);
    array_push($arra, array($per3,$dir));
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
         goto renewSM;
    }

    







     ////CATCH GENERAL
    } catch (Exception $e) {
      echo 'Caught exception:---->>>> ',  $e->getMessage(), "\n";
        exit();
    }
    



    
    
}else{
    exit();
}




    

    //$url="https://qeq.mx/datos/qws/pepse?razonsoc=".$razonsoc."&rfc=".$rfc;


function consulta($url,$persona){

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


    $DirXML='xml/'.$persona.' '.date('Y-m-d').'.xml';
   $xml->save($DirXML);
   return $DirXML;
  // include('Conexion2.php');
  // mysqli_query($cnx,"insert into registroxml (Folio_Sol,PersonaRazonsoc,DirXML) values('$foli','$persona','$DirXML') ON DUPLICATE KEY UPDATE Folio_Sol = '$foli', PersonaRazonsoc = '$persona', DirXML='$DirXML';");



            
    //echo htmlentities($el_xml);


}
 


leer($dir);

//Para leerlo
function leer($urli){
    
    $xml = simplexml_load_file($urli);
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

