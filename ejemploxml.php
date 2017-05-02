<?php 
if (isset($_REQUEST['folio_request'])){
    $folio_solicitud=$_REQUEST['folio_request'];
    
    if(strpos($folio_solicitud, 'SA')!==false && strpos($folio_solicitud, 'SA')==0){
        include('Conexion2.php');
        $result=mysqli_query($cnx,"select * from solicitudpfa inner join pfa on solicitudpfa.Folio_Cliente=pfa.Folio_Cliente where solicitudpfa.Folio_Sol='$folio_solicitud'");
        $row=mysqli_fetch_array($result);
        echo "<h1>Proceso de seleccion de datos para solicitud PFA</h1><h3>XML Solicitante</h3>";
        xmlCreator($row['ApPatSolicitante'],$row['ApMatSolicitante'],'',$row['NomSolicitante'],$row['SegNomSolicitante'],$row['FeNacDatGen'],$row['RFCSolicitante'],'','',$row['NaDatGen'],'');
        echo "<h3>XML Conyuge</h3>";
        //xmlCreator();
        echo "<h3>XML Obligado Solidario(1)</h3>";
        //xmlCreator();
        echo "<h3>XML Obligado Solidario(2)</h3>";
        //xmlCreator();
    }else if(strpos($folio_solicitud, 'SN')===true){
        echo "error";
    }else if(strpos($folio_solicitud, 'SM')===true){
        echo "error";
    }else{
        echo "<h1 ALIGN=center>Error - Violación de seguridad</h1><div ALIGN='center'><IMG  SRC='http://files.viewranger.com/image/c7f1e57127751d593f9619526ea2d0b1.jpg'></div>";
        exit();
    }




}else{
    echo "<h1 ALIGN=center>Error - Violación de seguridad</h1><div ALIGN='center'><IMG  SRC='http://files.viewranger.com/image/c7f1e57127751d593f9619526ea2d0b1.jpg'></div>";
    exit();
}





function xmlCreator($apellidopaterno,$apellidomaterno,$apellidoadicional,$primernombre,$segundonombre,$fechanacimiento,$rfc,$prefijo,$sufijo,$nacionalidad,$residencia){


$xml = new DomDocument('1.0', 'ISO-8859-1');

$raiz = $xml->createElement('Consulta');
$raiz = $xml->appendChild($raiz);

//xmlns:xsi=http://www.w3.org/2001/XMLSchema-instance xsi:noNamespaceSchemaLocation=ConsultaBC.xsd

$raiz->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
$raiz->setAttribute('xsi:noNamespaceSchemaLocation', 'ConsultaBC.xsd');

$nodo = $xml->createElement('Personas');
$nodo = $raiz->appendChild($nodo);

$subnodo = $xml->createElement('Persona');
$subnodo = $nodo->appendChild($subnodo);

$subnodo2 = $xml->createElement('Encabezado');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Version');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroReferenciaOperador');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ProductoRequerido','507');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClavePais');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveUsuario');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Password');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoConsulta');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoContrato');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveUnidadMonetaria');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ImporteContrato');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Idioma');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoSalida');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo2 = $xml->createElement('Nombre');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('ApellidoPaterno',$apellidopaterno);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ApellidoMaterno',$apellidomaterno);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ApellidoAdicional',$apellidoadicional);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('PrimerNombre',$primernombre);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('SegundoNombre',$segundonombre);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('FechaNacimiento',$fechanacimiento);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('RFC',$rfc);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Prefijo',$prefijo);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Sufijo',$sufijo);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Nacionalidad',$nacionalidad);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Residencia',$residencia);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroLicenciaConducir');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EstadoCivil');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Sexo');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroCedulaProfesional');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroRegistroElectoral');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveImpuestosOtroPais');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveOtroPais');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroDependientes');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EdadesDependientes');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo2 = $xml->createElement('Domicilios');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Domicilio');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo4 = $xml->createElement('Direccion1');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Direccion2');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('ColoniaPoblacion');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('DelegacionMunicipio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Ciudad');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Estado');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CP');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('FechaResidencia');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('NumeroTelefono');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Extension');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Fax');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('TipoDomicilio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('IndicadorEspecialDomicilio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CodPais');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo2 = $xml->createElement('Empleos');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Empleo');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo4 = $xml->createElement('NombreEmpresa');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Direccion1');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Direccion2');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('ColoniaPoblacion');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('DelegacionMunicipio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Ciudad');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Estado');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CP');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('NumeroTelefono');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Extension');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Fax');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Cargo');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('FechaContratacion');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('ClaveMonedaSalario');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Salario');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('BaseSalarial');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('NumeroEmpleado');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('FechaUltimoDiaEmpleo');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CodPais');
$subnodo4 = $subnodo3->appendChild($subnodo4);


$subnodo2 = $xml->createElement('Cuentas');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Cuenta');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroCuenta');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveOtorgante');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NombreOtorgante');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo2 = $xml->createElement('Autenticacion');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('TipoReporte');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoSalida');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ReferenciaOperador');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TarjetaCredito');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('UltimosCuatroDigitos');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EjercidoCreditoHipotecario');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EjercidoCreditoAutomotriz');
$subnodo3 = $subnodo2->appendChild($subnodo3);
/*
$nodo = $xml->createElement('Personas');
$nodo = $raiz->appendChild($nodo);

$subnodo = $xml->createElement('item');
$subnodo = $nodo->appendChild($subnodo);
*/
$xml->formatOutput = true;
$el_xml = $xml->saveXML();
$xml->save('archivo.xml');
echo htmlentities($el_xml);

}




?>