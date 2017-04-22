<?php 

$xml = new DomDocument('1.0', 'ISO-8859-1');

$raiz = $xml->createElement('Consulta');
$raiz = $xml->appendChild($raiz);

//xmlns:xsi=http://www.w3.org/2001/XMLSchema-instance xsi:noNamespaceSchemaLocation=ConsultaBC.xsd

$raiz->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
$raiz->setAttribute('xsi:noNamespaceSchemaLocation', 'ConsultaBC.xsd');

$nodo = $xml->createElement('libros');
$nodo = $raiz->appendChild($nodo);

$subnodo = $xml->createElement('item','texto dentro del item');
$subnodo = $nodo->appendChild($subnodo);

$xml->formatOutput = true;
$el_xml = $xml->saveXML();
$xml->save('archivo.xml');
echo htmlentities($el_xml);

?>