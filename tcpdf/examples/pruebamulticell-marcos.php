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


$pdf->MultiCell(50,0, 'Puesto que desempeña
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Datos generales de la empresa' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Actividad principal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fecha de inicio de operaciones
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Cantidad de personal
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Constitucion empresa' , 0, 'L', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(60,0, 'Antiguedad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Apoderado para suscribir titulos de credito
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
$pdf->MultiCell(50,0, 'Numero de cuenta
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
$pdf->SetAlpha(0.2);
$pdf->RoundedRect(15, 177, 180, 33, 6.5, '0000','DF',null ,array(255, 255, 200) );


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
