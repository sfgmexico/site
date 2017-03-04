<?php
//============================================================+
// File name   : example_004.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 004 for TCPDF class
//               Cell stretching
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Cell stretching
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'LETTER', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 004');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 004', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 6);

// add a page
$pdf->AddPage();

//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

// test Cell stretching
$txt = "Nomre / Razon social
Codigo PHP";
$s = " ";
//



$pdf->MultiCell(30,0, "Datos del solicitante
td", 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0,'Folio del cliente
	hola', 1, 'J', 0, 0, '', '', true,1,false,true);
//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Leasing' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Credit' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Premium
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

//
$pdf->MultiCell(60,0, 'Nombre Razon social
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'R.F.C
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Direccion/calle y numero
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'E-mail
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fax
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
//
$pdf->MultiCell(30,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Ciudad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Codigo Postal
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(50,0, 'Datos del contacto de la empresa' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Primer nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Segundo nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido paterno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apellido materno
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);


$pdf->MultiCell(30,0, 'Telefono
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'E-mail
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'RFC
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fax
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Puesto que desempeña
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Datos generales de la empresa' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Actividad principal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Fecha de inicio de operaciones
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Cantidad de personal
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Constitucion empresa' , 0, 'L', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(60,0, 'Antiguedad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Referencias bancarias' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Banco
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Sucursal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Numero de cuenta
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Feach de apertura
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Banco
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Sucursal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Numero de cuenta
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(00,0, 'Feach de apertura
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(00,0, 'CARGO DIRECTO CUENTA DE CHEQUES (para contratos en M.N. BBVA Bancomer, HSBC, Banamex, BANORTE, Scotiabank Inverlat, Santander o Inbursa)
(para contratos en USD únicamente BBVA Bancomer y HSBC)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Banco
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Numero de cuenta (CLABE)
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(30,0, 'Referencias comerciales' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Empresa
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Empresa
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Datos obligado solidario' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Nombre/Razon social
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'RFC
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Direccion
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fax
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(50,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
desde el año:	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Codigo Postal
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Constitucion de la empresa' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Antiguedad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(30,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(70,0, 'Actividad principal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fecha de inicio operaciones
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Cantidad de personal
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(0,0, 'De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. *' , 0, 'A', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(70,0, 'Nombre' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, ' ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, ' ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

	$pdf->MultiCell(70,0, 'Nombre' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, ' ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

	$pdf->MultiCell(70,0, 'Nombre' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, ' ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);	

	$pdf->MultiCell(0,0, '* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:' , 0, 'A', 0, 1, '', '', true,1,false,true);
	
	$pdf->MultiCell(70,0, 'Nombre' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, ' ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);
		$pdf->MultiCell(70,0, 'Nombre' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, ' ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Datos obligado solidario persona fisica' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Curp
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si    No	' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
Si    No	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 ' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);



$pdf->MultiCell(90,0, 'Obligado solidario (Nombre(s). apellido paterno. apellido materno)
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Tiene propiedad a su nombre
Si    No	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Lugar de nacimiento
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(90,0, 'RFC con homoclave
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->SetAlpha(0.2);
$pdf->RoundedRect(15, 177, 186, 33, 6.5, '0000','DF',null ,array(255, 255, 200) );
				
			$pdf->AddPage();


$pdf->MultiCell(40,0, 'Datos obligado solidario(2) persona fisica' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Curp
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si    No	' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
Si    No	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 ' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);





$pdf->MultiCell(0,0, 'Para el caso de que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R. (SFG) ofrezca el servicio de consulta e impresión de estados de cuenta a través de su página de Internet (www.sfgmexico.mx), el apoderado: (i) instruye a SFG para que los estados de cuenta sólo se pongan a disposición a través de dicho medio, (ii) se obliga a consultarlos periódicamente y con toda oportunidad y (iii) releva a SFG de enviar estados de cuenta al domicilio de su representada. En el caso de que el apoderado no esté conforme con lo anterior, deberá marcar cualquiera de los siguientes recuadros:																																															
	' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(130,0, 'No estoy de acuerdo con esta instrucción y solicito el envío del estado de cuenta al correo electrónico de mi representada' , 0, 'L', 0, 0, '', '', true,1,false,true);


$pdf->MultiCell(5,0, '  ' , 1, 'L', 0, 1, '', '', true,1,false,true);
				$pdf->Ln(1);																																											
$pdf->MultiCell(130,0, 'No estoy de acuerdo con esta instrucción y solicito el envío del estado de cuenta al domicilio de mi representada' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '  ' , 1, 'L', 0, 1, '', '', true,1,false,true);
				$pdf->Ln(1);

$pdf->MultiCell(0,0, 'AUTORIZACIÓN RELATIVA A LA INVESTIGACION DEL HISTORIAL CREDITICIO DE LA PERSONA MORAL																																															
Por este conducto solicito(amos) y autorizo(amos) expresamente a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R para que por conducto de sus funcionarios facultados lleven a cabo investigaciones sobre el comportamiento crediticio de mi representada en las sociedades de información crediticia que estimen convenientes.  Asimismo, declaro(amos) que conozco(emos) la naturaleza y alcance de la información que se solicitará, del uso que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R hará de tal información y de que ésta podrá realizar consultas periódicas del historial crediticio de mi representada, consintiendo que esta autorización se encuentre vigente por un período de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos una relación jurídica. Estoy(amos) consciente(s) y acepto(amos) que este documento quede bajo propiedad de SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R y/o de la sociedad de información crediticia consultada, para efectos de control y cumplimiento del artículo 28 de la Ley para Regular a las Sociedades de Información Crediticia.																																															
' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(100,0, '1)Razon social de la persona moral solicitante
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(100,0, '1)Nombre y firma del(los) representante(s) legal(es) de la persona moral solicitante:
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(100,0, '2)Nombre o razon social de la persona fisica o moral que actua comoobligado solidario:
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(0,0, '2) Firma de la persona física que actúa como obligado solidario o nombre y firma del(los) representante(s) legal(es) de la(s) persona(s) moral(es) que actua(n) como obligado(s) solidario(s):																																													
		' , 1, 'J', 0, 1, '', '', true,1,false,true);





$pdf->MultiCell(0,0, 'AUTORIZACIÓN RELATIVA A LA INVESTIGACION DEL HISTORIAL CREDITICIO DEL REPRESENTANTE LEGAL Y/U OBLIGADO SOLIDARIO Y/O PRINCIPAL INVERSIONISTA, PERSONA FISICA																																															
Por este conducto solicito(amos) y autorizo(amos) expresamente a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R para que a través de sus funcionarios facultados lleve a cabo investigaciones sobre mi(nuestro) comportamiento crediticio en las sociedades de información crediticia que estimen convenientes. Asimismo, declaro(amos) que conozco(emos) la naturaleza y alcance de la información que se solicitará, del uso que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R. hará de tal información y de que ésta podrá realizar consultas periódicas de mi(nuestro) historial crediticio, consintiendo que esta autorización se encuentre vigente por un período de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos una relación jurídica. Estoy(amos) consciente(s) y acepto(amos) que este documento quede bajo la propiedad de SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R  y/o de la sociedad de información crediticia consultada para efectos de control y cumplimiento del artículo 28 de la Ley para Regular a las Sociedades de Información Crediticia.																			
' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(70,0, 'Nombre del representante legal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'RFC del representante legal
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Firma del representante legal
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Calle y No.
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Colonia
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Nombre del representante legal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'RFC del representante legal
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'RFC del representante legal
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Firma del representante legal
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(2);

$pdf->MultiCell(0,0, 'CONSENTIMIENTO PARA EL TRATAMIENTO DE LOS DATOS PERSONALES (APLICABLE A PERSONAS FISICAS)																																															
El (Los) apoderado (s) legal (es) y en su caso el(los) obligado(s) solidario(s), (titulares de los datos) expresamente reconocen y aceptan mediante su firma que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R (“SFG”) con domicilio en Autopista México-Puebla Km. 116 más 900, San Lorenzo Almecatla, Cuautlancingo, Puebla, les facilitó en el momento de llenar esta solicitud el “Aviso de Privacidad”. En tal virtud, los titulares de los datos otorgan su consentimiento de forma expresa para que SFG:																																															
1) Recabe y trate todos los datos e información personal, incluyendo los de carácter financiero y/o patrimonial y/o sensibles, para las finalidades que dan origen y son necesarias para esta solicitud, mismas que se encuentran establecidas en el mencionado Aviso de Privacidad y entre las que de manera enunciativa y no limitativa se incluyen: el ofrecimiento de créditos para la adquisición de vehículos, la cotización y/o contratación de seguros relacionados con los créditos antes mencionados, la ejecución de las operaciones que en su caso se deriven de la autorización de esta solicitud, informar sobre nuevos productos y servicios así como aquellas que resulten compatibles o análogas con los productos y/o servicios ofrecidos por SFG.																																															
2) Como finalidades distintas a esta solicitud, pueda tratar la información para fines mercadológicos, publicitarios y de prospección comercial, evaluación en la calidad de los servicios o la realización de estudios internos sobre tendencias de compra de vehículos, entre otras finalidades señaladas en el Aviso de Privacidad.																																															
Para los casos en los que: (i) no se hubiese celebrado contrato de crédito alguno o (ii) una vez celebrado, el mismo hubiese terminado, el tratamiento a que hace referencia el presente numeral tendrá una vigencia de hasta 5 años contados a partir de la fecha del otorgamiento de este consentimiento.																																															
En caso de no aceptar el tratamiento de sus datos para las finalidades indicadas en este numeral 2 marcar la casilla, de lo contrario se entenderá que ha otorgado su consentimiento.																																															
' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(0,0, 'Los titulares de los datos recabados podrán en cualquier momento limitar el uso o divulgación, así como a tener acceso, rectificar, cancelar u oponerse al uso, tratamiento o transferencia de sus datos personales financieros y/o patrimoniales y/o sensibles, salvo en los casos en que SFG no esté obligado y conforme al procedimiento establecido en el Aviso de Privacidad. Cualquier cambio a lo previsto en el Aviso de Privacidad podrá consultarse en la página www.sfgmexico.mx.. Este consentimiento se otorga de conformidad con lo señalado por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su Reglamento y cualquier otra normatividad aplicable.																																															
' , 0, 'L', 0, 1, '', '', true,1,false,true);


$pdf->MultiCell(40,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(2);

$pdf->MultiCell(0,0, 'En calidad de apoderado de la empresa que represento, acepto que en caso de que sea autorizado el arrendamiento puro o financiamiento de los vehículos, autorizaré a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R, a cargar directamente en la cuenta bancaria de la compañía que represento, las cantidades que resulten a cargo de mi representada por el contrato de arrendamiento puro o financiamiento que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R otorgue a mi representada.																																															
																																															
"Bajo protesta de decir verdad, los firmantes manifiestan que los datos son verídicos y que sus firmas son las que usan en todos sus documentos públicos y privados y que fueron estampadas en presencia del concesionario.
Manifiesta el obligado solidario bajo protesta de decir verdad, que el bien inmueble que ofrece en garantía se encuentra libre de gravamen y al corriente en el pago de sus contribuciones, obligándose a no gravarlo, enajenarlo, cederlo o transmitirlo total o parcialmente, durante la vigencia del presente contrato, hasta la fecha en que se le restituyan a SFG los vehículos materia del presente contrato (sólo en caso de arrendamiento puro) y le sea pagada íntegramente cualquier cantidad que llegase a adeudar el solicitante. Asímismo manifiesta su consentimiento expreso para ser obligado solidario en dicho contrato."																																															
																																															
Adicionalmente la concesionaria manifiesta que se cotejaron y revisaron, a través del Gerente de Servicios Financieros, los documentos originales de la solicitante, no quedando ninguna duda en cuanto a su veracidad y que los documentos enviados a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R  son copias fieles de dichos originales.																																															
' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->SetLineStyle(array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
$pdf->SetAlpha(0.2);
$pdf->RoundedRect(15, 55, 186, 180, 6.5, '0000','DF',null ,array(255, 255, 200) );
																																															
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
