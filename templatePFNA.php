<?php

if(isset($_POST['aceptar'])){
$cliente=$_REQUEST['cliente'];
$nomsol=ucwords($_REQUEST['nomsol']);
$segnomsol=ucwords($_REQUEST['segnomsol']);
$apepasol=ucwords($_REQUEST['apepasol']);
$apemasol=ucwords($_REQUEST['apemasol']);
$rfc1=strtoupper($_REQUEST['rfc1']);
$rfc2=strtoupper($_REQUEST['rfc2']);
$rfc3=strtoupper($_REQUEST['rfc3']);
$rfc4=strtoupper($_REQUEST['rfc4']);
$rfc5=strtoupper($_REQUEST['rfc5']);
$rfc6=strtoupper($_REQUEST['rfc6']);
$rfc7=strtoupper($_REQUEST['rfc7']);
$rfc8=strtoupper($_REQUEST['rfc8']);
$rfc9=strtoupper($_REQUEST['rfc9']);
$rfc10=strtoupper($_REQUEST['rfc10']);
$rfc11=strtoupper($_REQUEST['rfc11']);
$rfc12=strtoupper($_REQUEST['rfc12']);
$rfc13=strtoupper($_REQUEST['rfc13']);

$telsol1=$_REQUEST['telsol1'];
$telsol2=$_REQUEST['telsol2'];
$telsol3=$_REQUEST['telsol3'];
$telsol4=$_REQUEST['telsol4'];
$telsol5=$_REQUEST['telsol5'];
$telsol6=$_REQUEST['telsol6'];
$telsol7=$_REQUEST['telsol7'];
$telsol8=$_REQUEST['telsol8'];
$telsol9=$_REQUEST['telsol9'];
$telsol10=$_REQUEST['telsol10'];

$movsol12=$_REQUEST['movsol12'];
$movsol22=$_REQUEST['movsol22'];
$movsol32=$_REQUEST['movsol32'];
$movsol42=$_REQUEST['movsol42'];
$movsol52=$_REQUEST['movsol52'];
$movsol62=$_REQUEST['movsol62'];
$movsol72=$_REQUEST['movsol72'];
$movsol82=$_REQUEST['movsol82'];
$movsol92=$_REQUEST['movsol92'];
$movsol102=$_REQUEST['movsol102'];

$movsol1=$_REQUEST['movsol1'];
$movsol2=$_REQUEST['movsol2'];
$movsol3=$_REQUEST['movsol3'];
$movsol4=$_REQUEST['movsol4'];
$movsol5=$_REQUEST['movsol5'];
$movsol6=$_REQUEST['movsol6'];
$movsol7=$_REQUEST['movsol7'];
$movsol8=$_REQUEST['movsol8'];
$movsol9=$_REQUEST['movsol9'];
$movsol10=$_REQUEST['movsol10'];

$dirsol=$_REQUEST['dirsol'];

$mailsol=$_REQUEST['mailsol'];

$colsol=$_REQUEST['colsol'];

$cdsol=$_REQUEST['cdsol'];

$lugnacsol=$_REQUEST['lugnacsol'];

$edosol=$_REQUEST['edosol'];

$cpsol=$_REQUEST['cpsol'];

$curpsol=strtoupper($_REQUEST['curpsol']);

$sexsol=$_REQUEST['sexsol'];

$fechnacsol1=$_REQUEST['fechnacsol1'];

$fechnacsol2=$_REQUEST['fechnacsol2'];

$fechnacsol3=$_REQUEST['fechnacsol3'];

$edsol=$_REQUEST['edsol'];

$nacsol=$_REQUEST['nacsol'];

$depensol=$_REQUEST['depensol'];

$acdomsol=$_REQUEST['acdomsol'];

$vivsol=$_REQUEST['vivsol'];



$inmusol=$_REQUEST['inmusol'];


$arraisol=$_REQUEST['arraisol'];



$anosol2=$_REQUEST['anosol2'];

$benesol=ucwords($_REQUEST['benesol3'].' '.$_REQUEST['benesol1'].' '.$_REQUEST['benesol2']);

$civilsol=$_REQUEST['civilsol'];

$autosol=$_REQUEST['autosol'];

$marcasol=$_REQUEST['marcasol'];



$depasol=$_REQUEST['depasol'];



$compasol=$_REQUEST['compasol'];

$compatelsol1=$_REQUEST['compatelsol1'];
$compatelsol2=$_REQUEST['compatelsol2'];
$compatelsol3=$_REQUEST['compatelsol3'];
$compatelsol4=$_REQUEST['compatelsol4'];
$compatelsol5=$_REQUEST['compatelsol5'];
$compatelsol6=$_REQUEST['compatelsol6'];
$compatelsol7=$_REQUEST['compatelsol7'];
$compatelsol8=$_REQUEST['compatelsol8'];
$compatelsol9=$_REQUEST['compatelsol9'];
$compatelsol10=$_REQUEST['compatelsol10'];

$compatelsolext=$_REQUEST['compatelsolext'];

$nomref1=ucwords($_REQUEST['nomref1']);

$parenref1=$_REQUEST['parenref1'];

$telref11=$_REQUEST['telref11'];
$telref12=$_REQUEST['telref12'];
$telref13=$_REQUEST['telref13'];
$telref14=$_REQUEST['telref14'];
$telref15=$_REQUEST['telref15'];
$telref16=$_REQUEST['telref16'];
$telref17=$_REQUEST['telref17'];
$telref18=$_REQUEST['telref18'];
$telref19=$_REQUEST['telref19'];
$telref110=$_REQUEST['telref110'];

$nomref2=ucwords($_REQUEST['nomref2']);

$parenref2=$_REQUEST['parenref2'];

$telref21=$_REQUEST['telref21'];
$telref22=$_REQUEST['telref22'];
$telref23=$_REQUEST['telref23'];
$telref24=$_REQUEST['telref24'];
$telref25=$_REQUEST['telref25'];
$telref26=$_REQUEST['telref26'];
$telref27=$_REQUEST['telref27'];
$telref28=$_REQUEST['telref28'];
$telref29=$_REQUEST['telref29'];
$telref210=$_REQUEST['telref210'];

$refbanc=$_REQUEST['refbanc'];

$tarjrefbanc=$_REQUEST['tarjrefbanc'];

$cargdir=$_REQUEST['cargdir'];

$nocuentcd=$_REQUEST['nocuentcd'];

$conyunom=ucwords($_REQUEST['conyunom']);

$compaconyu=$_REQUEST['compaconyu'];

$puestconyu=$_REQUEST['puestconyu'];

$datobnom1=ucwords($_REQUEST['datobnom1']);

$datobappat1=ucwords($_REQUEST['datobappat1']);

$datobapmat1=ucwords($_REQUEST['datobapmat1']);

$datobdir1=$_REQUEST['datobdir1'];

$datobcol1=$_REQUEST['datobcol1'];

$datobcd1=$_REQUEST['datobcd1'];

$datoblugnac1=$_REQUEST['datoblugnac1'];

$datobprop1=$_REQUEST['datobprop1'];

$datobedo1=$_REQUEST['datobedo1'];

$datobcp1=$_REQUEST['datobcp1'];

$datobmail1=$_REQUEST['datobmail1'];

$datobsex1=$_REQUEST['datobsex1'];

$datobfechnac1d=$_REQUEST['datobfechnac1d'];

$datobfechnac1m=$_REQUEST['datobfechnac1m'];

$datobfechnac1a=$_REQUEST['datobfechnac1a'];

$datobed1=$_REQUEST['datobed1'];

$datobcurp1=strtoupper($_REQUEST['datobcurp1']);

$datobrfc11=strtoupper($_REQUEST['datobrfc11']);
$datobrfc12=strtoupper($_REQUEST['datobrfc12']);
$datobrfc13=strtoupper($_REQUEST['datobrfc13']);
$datobrfc14=strtoupper($_REQUEST['datobrfc14']);
$datobrfc15=strtoupper($_REQUEST['datobrfc15']);
$datobrfc16=strtoupper($_REQUEST['datobrfc16']);
$datobrfc17=strtoupper($_REQUEST['datobrfc17']);
$datobrfc18=strtoupper($_REQUEST['datobrfc18']);
$datobrfc19=strtoupper($_REQUEST['datobrfc19']);
$datobrfc110=strtoupper($_REQUEST['datobrfc110']);
$datobrfc111=strtoupper($_REQUEST['datobrfc111']);
$datobrfc112=strtoupper($_REQUEST['datobrfc112']);
$datobrfc113=strtoupper($_REQUEST['datobrfc113']);


$datobtel11=$_REQUEST['datobtel11'];
$datobtel12=$_REQUEST['datobtel12'];
$datobtel13=$_REQUEST['datobtel13'];
$datobtel14=$_REQUEST['datobtel14'];
$datobtel15=$_REQUEST['datobtel15'];
$datobtel16=$_REQUEST['datobtel16'];
$datobtel17=$_REQUEST['datobtel17'];
$datobtel18=$_REQUEST['datobtel18'];
$datobtel19=$_REQUEST['datobtel19'];
$datobtel110=$_REQUEST['datobtel110'];

////
$datobnom2=ucwords($_REQUEST['datobnom2']);

$datobappat2=ucwords($_REQUEST['datobappat2']);

$datobapmat2=ucwords($_REQUEST['datobapmat2']);

$datobdir2=$_REQUEST['datobdir2'];

$datobcol2=$_REQUEST['datobcol2'];

$datobcd2=$_REQUEST['datobcd2'];

$datoblugnac2=$_REQUEST['datoblugnac2'];

$datobprop2=$_REQUEST['datobprop2'];

$datobedo2=$_REQUEST['datobedo2'];

$datobcp2=$_REQUEST['datobcp2'];

$datobmail2=$_REQUEST['datobmail2'];

$datobsex2=$_REQUEST['datobsex2'];

$datobfechnac2d=$_REQUEST['datobfechnac2d'];

$datobfechnac2m=$_REQUEST['datobfechnac2m'];

$datobfechnac2a=$_REQUEST['datobfechnac2a'];

$datobed2=$_REQUEST['datobed2'];

$datobcurp2=strtoupper($_REQUEST['datobcurp2']);

$datobrfc21=strtoupper($_REQUEST['datobrfc21']);
$datobrfc22=strtoupper($_REQUEST['datobrfc22']);
$datobrfc23=strtoupper($_REQUEST['datobrfc23']);
$datobrfc24=strtoupper($_REQUEST['datobrfc24']);
$datobrfc25=strtoupper($_REQUEST['datobrfc25']);
$datobrfc26=strtoupper($_REQUEST['datobrfc26']);
$datobrfc27=strtoupper($_REQUEST['datobrfc27']);
$datobrfc28=strtoupper($_REQUEST['datobrfc28']);
$datobrfc29=strtoupper($_REQUEST['datobrfc29']);
$datobrfc210=strtoupper($_REQUEST['datobrfc210']);
$datobrfc211=strtoupper($_REQUEST['datobrfc211']);
$datobrfc212=strtoupper($_REQUEST['datobrfc212']);
$datobrfc213=strtoupper($_REQUEST['datobrfc213']);


$datobtel21=$_REQUEST['datobtel21'];
$datobtel22=$_REQUEST['datobtel22'];
$datobtel23=$_REQUEST['datobtel23'];
$datobtel24=$_REQUEST['datobtel24'];
$datobtel25=$_REQUEST['datobtel25'];
$datobtel26=$_REQUEST['datobtel26'];
$datobtel27=$_REQUEST['datobtel27'];
$datobtel28=$_REQUEST['datobtel28'];
$datobtel29=$_REQUEST['datobtel29'];
$datobtel210=$_REQUEST['datobtel210'];



$clavcon=$_REQUEST['clavcon'];

$nomcons=$_REQUEST['nomcons'];

$fecha=$_REQUEST['fecha'];

$nomvend=$_REQUEST['nomvend'];

$gerentegral=$_REQUEST['gerentegral'];

$tipocredito=$_REQUEST['tipocredito'];


$impmenpag=$_REQUEST['impmenpag'];

$giroprof=$_REQUEST['giroprof'];


$desdesol1=$_REQUEST['desdesol1'];
$desdesol2=$_REQUEST['desdesol2'];
$desdesol3=$_REQUEST['desdesol3'];

$noempleados=$_REQUEST['noempleados'];


$giroactreal=$_REQUEST['giroactreal'];

$domneg=$_REQUEST['domneg'];

$refbanc=$_REQUEST['refbanc'];

$numcuebanc=$_REQUEST['numcuebanc'];

$sucbanc1=$_REQUEST['sucbanc1'];

$refbanc2=$_REQUEST['refbanc2'];

$sucbanc2=$_REQUEST['sucbanc2'];


$aperbanc1d=$_REQUEST['aperbanc1d'];
$aperbanc1m=$_REQUEST['aperbanc1m'];
$aperbanc1a=$_REQUEST['aperbanc1a'];

$aperbanc1d2=$_REQUEST['aperbanc1d2'];
$aperbanc1m2=$_REQUEST['aperbanc1m2'];
$aperbanc1a2=$_REQUEST['aperbanc1a2'];


$refcomemp1=$_REQUEST['refcomemp1'];
$antirefcom1=$_REQUEST['antirefcom1'];
$telrefcom11=$_REQUEST['telrefcom11'];
$telrefcom12=$_REQUEST['telrefcom12'];
$telrefcom13=$_REQUEST['telrefcom13'];
$telrefcom14=$_REQUEST['telrefcom14'];
$telrefcom15=$_REQUEST['telrefcom15'];
$telrefcom16=$_REQUEST['telrefcom16'];
$telrefcom17=$_REQUEST['telrefcom17'];
$telrefcom18=$_REQUEST['telrefcom18'];
$telrefcom19=$_REQUEST['telrefcom19'];
$telrefcom110=$_REQUEST['telrefcom110'];




$refcomemp2=$_REQUEST['refcomemp2'];
$antirefcom2=$_REQUEST['antirefcom2'];

$telrefcom21=$_REQUEST['telrefcom21'];
$telrefcom22=$_REQUEST['telrefcom22'];
$telrefcom23=$_REQUEST['telrefcom23'];
$telrefcom24=$_REQUEST['telrefcom24'];
$telrefcom25=$_REQUEST['telrefcom25'];
$telrefcom26=$_REQUEST['telrefcom26'];
$telrefcom27=$_REQUEST['telrefcom27'];
$telrefcom28=$_REQUEST['telrefcom28'];
$telrefcom29=$_REQUEST['telrefcom29'];
$telrefcom210=$_REQUEST['telrefcom210'];

$conyuape1=ucwords($_REQUEST['conyuape1']);
$conyuape2=ucwords($_REQUEST['conyuape2']);



$nomrazsoc=$_REQUEST['nomrazsoc'];


$telpermor1=$_REQUEST['telpermor1'];
$telpermor2=$_REQUEST['telpermor2'];
$telpermor3=$_REQUEST['telpermor3'];
$telpermor4=$_REQUEST['telpermor4'];
$telpermor5=$_REQUEST['telpermor5'];
$telpermor6=$_REQUEST['telpermor6'];
$telpermor7=$_REQUEST['telpermor7'];
$telpermor8=$_REQUEST['telpermor8'];
$telpermor9=$_REQUEST['telpermor9'];
$telpermor10=$_REQUEST['telpermor10'];


$permorrfc1=$_REQUEST['permorrfc1'];
$permorrfc2=$_REQUEST['permorrfc2'];
$permorrfc3=$_REQUEST['permorrfc3'];
$permorrfc4=$_REQUEST['permorrfc4'];
$permorrfc5=$_REQUEST['permorrfc5'];
$permorrfc6=$_REQUEST['permorrfc6'];
$permorrfc7=$_REQUEST['permorrfc7'];
$permorrfc8=$_REQUEST['permorrfc8'];
$permorrfc9=$_REQUEST['permorrfc9'];
$permorrfc10=$_REQUEST['permorrfc10'];
$permorrfc11=$_REQUEST['permorrfc11'];
$permorrfc12=$_REQUEST['permorrfc12'];
$permorrfc13=$_REQUEST['permorrfc13'];

$dirpermor=$_REQUEST['dirpermor'];
$colpermor=$_REQUEST['colpermor'];
$cdpermor=$_REQUEST['cdpermor'];
$lugnacpermor=$_REQUEST['lugnacpermor'];
$edopermor=$_REQUEST['edopermor'];
$cppremor=$_REQUEST['cppremor'];

$antemp=$_REQUEST['antemp'];

$apodsusc=$_REQUEST['apodsusc'];


$actprinc=$_REQUEST['actprinc'];
$cantperson=$_REQUEST['cantperson'];


$inicoper1=$_REQUEST['inicoper1'];
$inicoper2=$_REQUEST['inicoper2'];
$inicoper3=$_REQUEST['inicoper3'];
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load("Solicitud_PFNA_VWL_2016sept-2.xls");




	$objPHPExcel->getActiveSheet()->setCellValue('M7', $cliente);
	$objPHPExcel->getActiveSheet()->setCellValue('B10', $nomsol);
	$objPHPExcel->getActiveSheet()->setCellValue('N10', $segnomsol);
	$objPHPExcel->getActiveSheet()->setCellValue('Ae10', $apepasol);
	$objPHPExcel->getActiveSheet()->setCellValue('An10', $apemasol);
	$objPHPExcel->getActiveSheet()->setCellValue('B14', $rfc1);
	$objPHPExcel->getActiveSheet()->setCellValue('C14', $rfc2);
	$objPHPExcel->getActiveSheet()->setCellValue('D14', $rfc3);
	$objPHPExcel->getActiveSheet()->setCellValue('E14', $rfc4);
	$objPHPExcel->getActiveSheet()->setCellValue('F14', $rfc5);
	$objPHPExcel->getActiveSheet()->setCellValue('G14', $rfc6);
	$objPHPExcel->getActiveSheet()->setCellValue('H14', $rfc7);
	$objPHPExcel->getActiveSheet()->setCellValue('I14', $rfc8);
	$objPHPExcel->getActiveSheet()->setCellValue('L14', $rfc9);
	$objPHPExcel->getActiveSheet()->setCellValue('M14', $rfc10);
	$objPHPExcel->getActiveSheet()->setCellValue('N14', $rfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('O14', $rfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('P14', $rfc13);
	
	$objPHPExcel->getActiveSheet()->setCellValue('w14', $telsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('x14', $telsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('y14', $telsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('z14', $telsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('ac14', $telsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('ad14', $telsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('ae14', $telsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('af14', $telsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('ag14', $telsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('ah14', $telsol10);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Ac18', $movsol12);
	$objPHPExcel->getActiveSheet()->setCellValue('Ad18', $movsol22);
	$objPHPExcel->getActiveSheet()->setCellValue('Ae18', $movsol32);
	$objPHPExcel->getActiveSheet()->setCellValue('Af18', $movsol42);
	$objPHPExcel->getActiveSheet()->setCellValue('Ag18', $movsol52);
	$objPHPExcel->getActiveSheet()->setCellValue('Ah18', $movsol62);
	$objPHPExcel->getActiveSheet()->setCellValue('Ai18', $movsol72);
	$objPHPExcel->getActiveSheet()->setCellValue('Aj18', $movsol82);
	$objPHPExcel->getActiveSheet()->setCellValue('Ak18', $movsol92);
	$objPHPExcel->getActiveSheet()->setCellValue('Al18', $movsol102);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('An14', $movsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('Ao14', $movsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('Ap14', $movsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('Aq14', $movsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('Ar14', $movsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('As14', $movsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('At14', $movsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('Au14', $movsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('Av14', $movsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('Aw14', $movsol10);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B18', $dirsol);
	$objPHPExcel->getActiveSheet()->setCellValue('An18', $mailsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B22', $colsol);
	$objPHPExcel->getActiveSheet()->setCellValue('Ae22', $cdsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('An22', $lugnacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B26', $edosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('r26', $cpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ae26', $curpsol);
	
	if($sexsol=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('c30', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('B320', "Masculino");
	}
	if($sexsol=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('f30', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('B320', "Femenino");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('i30', $fechnacsol1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('l30', $fechnacsol2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('o30', $fechnacsol3);
	
	$objPHPExcel->getActiveSheet()->setCellValue('r30', $edsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('w30', $nacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('af30', $depensol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak30', $acdomsol);
	
	if($vivsol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('e34', "X");
	}
	if($vivsol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('l34', "X");
	}
	if($vivsol=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('s34', "X");
	}
	if($vivsol=="4"){
	$objPHPExcel->getActiveSheet()->setCellValue('s35', "X");
	}
	if($vivsol=="5"){
	$objPHPExcel->getActiveSheet()->setCellValue('s35', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('w35', $impmenpag);
	
	
	if($inmusol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('af35', "X");
	}
	if($inmusol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('ai35', "X");
	}
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('ar34', $arraisol);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('k39', $anosol2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('p40', $benesol);
	
	if($civilsol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L43', "X");
	}
	if($civilsol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('y43', "X");
	}
	if($civilsol=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('ag43', "X");
	}
	if($civilsol=="4"){
	$objPHPExcel->getActiveSheet()->setCellValue('ao43', "X");
	}
	if($civilsol=="5"){
	$objPHPExcel->getActiveSheet()->setCellValue('au43', "X");
	}
	
	if($autosol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('d47', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('i47', $marcasol);
	}
	if($autosol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('f47', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('b53', $giroprof);
	
	$objPHPExcel->getActiveSheet()->setCellValue('t53', $depasol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ao53', $desdesol1);
	$objPHPExcel->getActiveSheet()->setCellValue('ar53', $desdesol2);
	$objPHPExcel->getActiveSheet()->setCellValue('au53', $desdesol3);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b57', $compasol);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('af57', $noempleados);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak57', $compatelsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('al57', $compatelsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('am57', $compatelsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('an57', $compatelsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('ao57', $compatelsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('ap57', $compatelsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('aq57', $compatelsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('ar57', $compatelsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('as57', $compatelsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('at57', $compatelsol10);
	$objPHPExcel->getActiveSheet()->setCellValue('au57', $compatelsolext);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b61', $giroactreal);
	$objPHPExcel->getActiveSheet()->setCellValue('af61', $domneg);
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b66', $nomref1);
	$objPHPExcel->getActiveSheet()->setCellValue('ab66', $parenref1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an66', $telref11);
	$objPHPExcel->getActiveSheet()->setCellValue('ao66', $telref12);
	$objPHPExcel->getActiveSheet()->setCellValue('ap66', $telref13);
	$objPHPExcel->getActiveSheet()->setCellValue('aq66', $telref14);
	$objPHPExcel->getActiveSheet()->setCellValue('ar66', $telref15);
	$objPHPExcel->getActiveSheet()->setCellValue('as66', $telref16);
	$objPHPExcel->getActiveSheet()->setCellValue('at66', $telref17);
	$objPHPExcel->getActiveSheet()->setCellValue('au66', $telref18);
	$objPHPExcel->getActiveSheet()->setCellValue('av66', $telref19);
	$objPHPExcel->getActiveSheet()->setCellValue('aw66', $telref110);

	$objPHPExcel->getActiveSheet()->setCellValue('b70', $nomref2);
	$objPHPExcel->getActiveSheet()->setCellValue('ab70', $parenref2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an70', $telref21);
	$objPHPExcel->getActiveSheet()->setCellValue('ao70', $telref22);
	$objPHPExcel->getActiveSheet()->setCellValue('ap70', $telref23);
	$objPHPExcel->getActiveSheet()->setCellValue('aq70', $telref24);
	$objPHPExcel->getActiveSheet()->setCellValue('ar70', $telref25);
	$objPHPExcel->getActiveSheet()->setCellValue('as70', $telref26);
	$objPHPExcel->getActiveSheet()->setCellValue('at70', $telref27);
	$objPHPExcel->getActiveSheet()->setCellValue('au70', $telref28);
	$objPHPExcel->getActiveSheet()->setCellValue('av70', $telref29);
	$objPHPExcel->getActiveSheet()->setCellValue('aw70', $telref210);



	$objPHPExcel->getActiveSheet()->setCellValue('b74', $refbanc);
	$objPHPExcel->getActiveSheet()->setCellValue('ae74', $numcuebanc);
	$objPHPExcel->getActiveSheet()->setCellValue('n74', $sucbanc1);
	$objPHPExcel->getActiveSheet()->setCellValue('ap74', $aperbanc1d);
	$objPHPExcel->getActiveSheet()->setCellValue('as74', $aperbanc1m);
	$objPHPExcel->getActiveSheet()->setCellValue('av74', $aperbanc1a);




	$objPHPExcel->getActiveSheet()->setCellValue('b78', $refbanc2);
	$objPHPExcel->getActiveSheet()->setCellValue('ae78', $tarjrefbanc);
	$objPHPExcel->getActiveSheet()->setCellValue('n78', $sucbanc2);
	$objPHPExcel->getActiveSheet()->setCellValue('ap78', $aperbanc1d2);
	$objPHPExcel->getActiveSheet()->setCellValue('as78', $aperbanc1m2);
	$objPHPExcel->getActiveSheet()->setCellValue('av78', $aperbanc1a2);

	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b82', $refcomemp1);
	$objPHPExcel->getActiveSheet()->setCellValue('ag82', $antirefcom1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an82', $telrefcom11);
	$objPHPExcel->getActiveSheet()->setCellValue('ao82', $telrefcom12);
	$objPHPExcel->getActiveSheet()->setCellValue('ap82', $telrefcom13);
	$objPHPExcel->getActiveSheet()->setCellValue('aq82', $telrefcom14);
	$objPHPExcel->getActiveSheet()->setCellValue('ar82', $telrefcom15);
	$objPHPExcel->getActiveSheet()->setCellValue('as82', $telrefcom16);
	$objPHPExcel->getActiveSheet()->setCellValue('at82', $telrefcom17);
	$objPHPExcel->getActiveSheet()->setCellValue('au82', $telrefcom18);
	$objPHPExcel->getActiveSheet()->setCellValue('av82', $telrefcom19);
	$objPHPExcel->getActiveSheet()->setCellValue('aw82', $telrefcom110);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b86', $refcomemp2);
	$objPHPExcel->getActiveSheet()->setCellValue('ag86', $antirefcom2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an86', $telrefcom21);
	$objPHPExcel->getActiveSheet()->setCellValue('ao86', $telrefcom22);
	$objPHPExcel->getActiveSheet()->setCellValue('ap86', $telrefcom23);
	$objPHPExcel->getActiveSheet()->setCellValue('aq86', $telrefcom24);
	$objPHPExcel->getActiveSheet()->setCellValue('ar86', $telrefcom25);
	$objPHPExcel->getActiveSheet()->setCellValue('as86', $telrefcom26);
	$objPHPExcel->getActiveSheet()->setCellValue('at86', $telrefcom27);
	$objPHPExcel->getActiveSheet()->setCellValue('au86', $telrefcom28);
	$objPHPExcel->getActiveSheet()->setCellValue('av86', $telrefcom29);
	$objPHPExcel->getActiveSheet()->setCellValue('aw86', $telrefcom210);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b90', $cargdir);
	$objPHPExcel->getActiveSheet()->setCellValue('ab90', $nocuentcd);
	
	$objPHPExcel->getActiveSheet()->setCellValue('C94', $conyunom);
	$objPHPExcel->getActiveSheet()->setCellValue('h94', $conyuape1);
	$objPHPExcel->getActiveSheet()->setCellValue('s94', $conyuape2);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('AF94', $compaconyu);
	$objPHPExcel->getActiveSheet()->setCellValue('an94', $puestconyu);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b98', $nomrazsoc);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an98', $telpermor1);
	$objPHPExcel->getActiveSheet()->setCellValue('ao98', $telpermor2);
	$objPHPExcel->getActiveSheet()->setCellValue('ap98', $telpermor3);
	$objPHPExcel->getActiveSheet()->setCellValue('aq98', $telpermor4);
	$objPHPExcel->getActiveSheet()->setCellValue('ar98', $telpermor5);
	$objPHPExcel->getActiveSheet()->setCellValue('as98', $telpermor6);
	$objPHPExcel->getActiveSheet()->setCellValue('at98', $telpermor7);
	$objPHPExcel->getActiveSheet()->setCellValue('au98', $telpermor8);
	$objPHPExcel->getActiveSheet()->setCellValue('av98', $telpermor9);
	$objPHPExcel->getActiveSheet()->setCellValue('aw98', $telpermor10);
	
	$objPHPExcel->getActiveSheet()->setCellValue('w98', $permorrfc1);
	$objPHPExcel->getActiveSheet()->setCellValue('X98', $permorrfc2);
	$objPHPExcel->getActiveSheet()->setCellValue('Y98', $permorrfc3);
	$objPHPExcel->getActiveSheet()->setCellValue('Z98', $permorrfc4);
	$objPHPExcel->getActiveSheet()->setCellValue('aC98', $permorrfc5);
	$objPHPExcel->getActiveSheet()->setCellValue('aD98', $permorrfc6);
	$objPHPExcel->getActiveSheet()->setCellValue('aE98', $permorrfc7);
	$objPHPExcel->getActiveSheet()->setCellValue('aF98', $permorrfc8);
	$objPHPExcel->getActiveSheet()->setCellValue('aG98', $permorrfc9);
	$objPHPExcel->getActiveSheet()->setCellValue('aH98', $permorrfc10);
	$objPHPExcel->getActiveSheet()->setCellValue('aI98', $permorrfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('aJ98', $permorrfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('aK98', $permorrfc13);

	$objPHPExcel->getActiveSheet()->setCellValue('b102', $dirpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('b106', $colpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('ae106', $cdpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('an106', $lugnacpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('b110', $edopermor);
	$objPHPExcel->getActiveSheet()->setCellValue('ae110', $cppremor);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b115', $antemp);
	$objPHPExcel->getActiveSheet()->setCellValue('ab115', $apodsusc);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b120', $actprinc);
	$objPHPExcel->getActiveSheet()->setCellValue('an120', $cantperson);
	
	
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b125', $datobnom1);
	$objPHPExcel->getActiveSheet()->setCellValue('k125', $datobappat1);
	$objPHPExcel->getActiveSheet()->setCellValue('s125', $datobapmat1);
	$objPHPExcel->getActiveSheet()->setCellValue('b129', $datobdir1);
	$objPHPExcel->getActiveSheet()->setCellValue('b133', $datobcol1);
	$objPHPExcel->getActiveSheet()->setCellValue('af133', $datobcd1);
	$objPHPExcel->getActiveSheet()->setCellValue('m133', $datoblugnac1);
	$PropObSol="";
	if($datobprop1=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('ar133', "X");
	$PropObSol="Si";
	}
	if($datobprop1=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('au133', "X");
	$PropObSol="No";
	}
	$objPHPExcel->getActiveSheet()->setCellValue('b137', $datobedo1);
	$objPHPExcel->getActiveSheet()->setCellValue('j137', $datobcp1);
	$objPHPExcel->getActiveSheet()->setCellValue('q137', $datobmail1);
	
	$SexoObSol="";
	if($datobsex1=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ae137', "X");
	$SexoObSol="Masculino";
	}
	if($datobsex1=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('ah137', "X");
	$SexoObSol="Femenino";
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak137', $datobfechnac1d);
	$objPHPExcel->getActiveSheet()->setCellValue('am137', $datobfechnac1m);
	$objPHPExcel->getActiveSheet()->setCellValue('ao137', $datobfechnac1a);
	
	$objPHPExcel->getActiveSheet()->setCellValue('as137', $datobed1);
	$objPHPExcel->getActiveSheet()->setCellValue('af125', $datobcurp1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('v129', $datobrfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('w129', $datobrfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('x129', $datobrfc13);
	$objPHPExcel->getActiveSheet()->setCellValue('y129', $datobrfc14);
	$objPHPExcel->getActiveSheet()->setCellValue('z129', $datobrfc15);
	$objPHPExcel->getActiveSheet()->setCellValue('aa129', $datobrfc16);
	$objPHPExcel->getActiveSheet()->setCellValue('ab129', $datobrfc17);
	$objPHPExcel->getActiveSheet()->setCellValue('ac129', $datobrfc18);
	$objPHPExcel->getActiveSheet()->setCellValue('ad129', $datobrfc19);
	$objPHPExcel->getActiveSheet()->setCellValue('ae129', $datobrfc110);
	$objPHPExcel->getActiveSheet()->setCellValue('af129', $datobrfc111);
	$objPHPExcel->getActiveSheet()->setCellValue('ag129', $datobrfc112);
	$objPHPExcel->getActiveSheet()->setCellValue('ah129', $datobrfc113);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an125', $datobtel11);
	$objPHPExcel->getActiveSheet()->setCellValue('ao125', $datobtel12);
	$objPHPExcel->getActiveSheet()->setCellValue('ap125', $datobtel13);
	$objPHPExcel->getActiveSheet()->setCellValue('aq125', $datobtel14);
	$objPHPExcel->getActiveSheet()->setCellValue('ar125', $datobtel15);
	$objPHPExcel->getActiveSheet()->setCellValue('as125', $datobtel16);
	$objPHPExcel->getActiveSheet()->setCellValue('at125', $datobtel17);
	$objPHPExcel->getActiveSheet()->setCellValue('au125', $datobtel18);
	$objPHPExcel->getActiveSheet()->setCellValue('av125', $datobtel19);
	$objPHPExcel->getActiveSheet()->setCellValue('aw125', $datobtel110);
	////
	
	$objPHPExcel->getActiveSheet()->setCellValue('b142', $datobnom2);
	$objPHPExcel->getActiveSheet()->setCellValue('k142', $datobappat2);
	$objPHPExcel->getActiveSheet()->setCellValue('s142', $datobapmat2);
	$objPHPExcel->getActiveSheet()->setCellValue('b146', $datobdir2);
	$objPHPExcel->getActiveSheet()->setCellValue('b150', $datobcol2);
	$objPHPExcel->getActiveSheet()->setCellValue('af150', $datobcd2);
	$objPHPExcel->getActiveSheet()->setCellValue('m150', $datoblugnac2);
	$PropObSol2="";
	if($datobprop2=="Si"){
	$objPHPExcel->getActiveSheet()->setCellValue('ar150', "X");
	$PropObSol2="Si";
	}
	if($datobprop2=="No"){
	$objPHPExcel->getActiveSheet()->setCellValue('au150', "X");
	$PropObSol2="No";
	}
	$objPHPExcel->getActiveSheet()->setCellValue('b154', $datobedo2);
	$objPHPExcel->getActiveSheet()->setCellValue('j154', $datobcp2);
	$objPHPExcel->getActiveSheet()->setCellValue('q154', $datobmail2);
	
	$SexoObSol2="";
	if($datobsex2=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ae154', "X");
	$SexoObSol2="Masculino";
	}
	if($datobsex2=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('ah154', "X");
	$SexoObSol2="Femenino";
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak154', $datobfechnac2d);
	$objPHPExcel->getActiveSheet()->setCellValue('am154', $datobfechnac2m);
	$objPHPExcel->getActiveSheet()->setCellValue('ao154', $datobfechnac2a);
	
	$objPHPExcel->getActiveSheet()->setCellValue('as154', $datobed2);
	$objPHPExcel->getActiveSheet()->setCellValue('af142', $datobcurp2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('v146', $datobrfc21);
	$objPHPExcel->getActiveSheet()->setCellValue('w146', $datobrfc22);
	$objPHPExcel->getActiveSheet()->setCellValue('x146', $datobrfc23);
	$objPHPExcel->getActiveSheet()->setCellValue('y146', $datobrfc24);
	$objPHPExcel->getActiveSheet()->setCellValue('z146', $datobrfc25);
	$objPHPExcel->getActiveSheet()->setCellValue('aa146', $datobrfc26);
	$objPHPExcel->getActiveSheet()->setCellValue('ab146', $datobrfc27);
	$objPHPExcel->getActiveSheet()->setCellValue('ac146', $datobrfc28);
	$objPHPExcel->getActiveSheet()->setCellValue('ad146', $datobrfc29);
	$objPHPExcel->getActiveSheet()->setCellValue('ae146', $datobrfc210);
	$objPHPExcel->getActiveSheet()->setCellValue('af146', $datobrfc211);
	$objPHPExcel->getActiveSheet()->setCellValue('ag146', $datobrfc212);
	$objPHPExcel->getActiveSheet()->setCellValue('ah146', $datobrfc213);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an142', $datobtel21);
	$objPHPExcel->getActiveSheet()->setCellValue('ao142', $datobtel22);
	$objPHPExcel->getActiveSheet()->setCellValue('ap142', $datobtel23);
	$objPHPExcel->getActiveSheet()->setCellValue('aq142', $datobtel24);
	$objPHPExcel->getActiveSheet()->setCellValue('ar142', $datobtel25);
	$objPHPExcel->getActiveSheet()->setCellValue('as142', $datobtel26);
	$objPHPExcel->getActiveSheet()->setCellValue('at142', $datobtel27);
	$objPHPExcel->getActiveSheet()->setCellValue('au142', $datobtel28);
	$objPHPExcel->getActiveSheet()->setCellValue('av142', $datobtel29);
	$objPHPExcel->getActiveSheet()->setCellValue('aw142', $datobtel210);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b191', $clavcon);
	$objPHPExcel->getActiveSheet()->setCellValue('n191', $nomcons);
	$objPHPExcel->getActiveSheet()->setCellValue('at191', $fecha);
	$objPHPExcel->getActiveSheet()->setCellValue('b194', $nomvend);
	$objPHPExcel->getActiveSheet()->setCellValue('y194', $gerentegral);
	
	if($tipocredito=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('aj7', "X");
	}
	if($tipocredito=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('aq7', "X");
	}
	if($tipocredito=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('aw7', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('ae120', $inicoper1);
	$objPHPExcel->getActiveSheet()->setCellValue('ag120', $inicoper2);
	$objPHPExcel->getActiveSheet()->setCellValue('ak120', $inicoper3);
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('an129', $_REQUEST['datobtel112']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao129', $_REQUEST['datobtel122']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap129', $_REQUEST['datobtel132']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq129', $_REQUEST['datobtel142']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar129', $_REQUEST['datobtel152']);
	$objPHPExcel->getActiveSheet()->setCellValue('as129', $_REQUEST['datobtel162']);
	$objPHPExcel->getActiveSheet()->setCellValue('at129', $_REQUEST['datobtel172']);
	$objPHPExcel->getActiveSheet()->setCellValue('au129', $_REQUEST['datobtel182']);
	$objPHPExcel->getActiveSheet()->setCellValue('av129', $_REQUEST['datobtel192']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw129', $_REQUEST['datobtel1102']);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('an146', $_REQUEST['datobtel212']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao146', $_REQUEST['datobtel222']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap146', $_REQUEST['datobtel232']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq146', $_REQUEST['datobtel242']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar146', $_REQUEST['datobtel252']);
	$objPHPExcel->getActiveSheet()->setCellValue('as146', $_REQUEST['datobtel262']);
	$objPHPExcel->getActiveSheet()->setCellValue('at146', $_REQUEST['datobtel272']);
	$objPHPExcel->getActiveSheet()->setCellValue('au146', $_REQUEST['datobtel282']);
	$objPHPExcel->getActiveSheet()->setCellValue('av146', $_REQUEST['datobtel292']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw146', $_REQUEST['datobtel2102']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aN102', $_REQUEST['faxpermor1']);
	$objPHPExcel->getActiveSheet()->setCellValue('aO102', $_REQUEST['faxpermor2']);
	$objPHPExcel->getActiveSheet()->setCellValue('aP102', $_REQUEST['faxpermor3']);
	$objPHPExcel->getActiveSheet()->setCellValue('aQ102', $_REQUEST['faxpermor4']);
	$objPHPExcel->getActiveSheet()->setCellValue('aR102', $_REQUEST['faxpermor5']);
	$objPHPExcel->getActiveSheet()->setCellValue('aS102', $_REQUEST['faxpermor6']);
	$objPHPExcel->getActiveSheet()->setCellValue('aT102', $_REQUEST['faxpermor7']);
	$objPHPExcel->getActiveSheet()->setCellValue('aU102', $_REQUEST['faxpermor8']);
	$objPHPExcel->getActiveSheet()->setCellValue('aV102', $_REQUEST['faxpermor9']);
	$objPHPExcel->getActiveSheet()->setCellValue('aW102', $_REQUEST['faxpermor10']);
	
	
	
		
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AL302');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AL210');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());  
	
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AL1');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	
	
	
		$objPHPExcel->getActiveSheet()->setCellValue('D217', $fecha);

	if($_REQUEST['escliente']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AM217', "ü");
	}
	if($_REQUEST['escliente']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AW217', "ü");
	}

	if($_REQUEST['select']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L234', "Otra");
	$objPHPExcel->getActiveSheet()->setCellValue('W234', "1");
	}
	if($_REQUEST['select']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('l234', "Informal");
	$objPHPExcel->getActiveSheet()->setCellValue('W234', "2");
	}
	if($_REQUEST['select']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L234', "Vulnerable");
	$objPHPExcel->getActiveSheet()->setCellValue('W234', "3");
	}
	
	
	if($_REQUEST['select2']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "0");
	}
	if($_REQUEST['select2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "7-10 años");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "1");
	}
	if($_REQUEST['select2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "4-6 años");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "2");
	}
	if($_REQUEST['select2']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "1-3 años");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "3");
	}
	
	
	
	if($_REQUEST['select3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L236', "Prestamo");
	$objPHPExcel->getActiveSheet()->setCellValue('W236', "1");
	}
	if($_REQUEST['select3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L236', "Arrendamiento");
	$objPHPExcel->getActiveSheet()->setCellValue('W236', "2");
	}
	if($_REQUEST['select3']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L236', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W236', "3");
	}
	
	
	if($_REQUEST['select4']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "0");
	}
	if($_REQUEST['select4']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "1");
	}
	if($_REQUEST['select4']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "2");
	}
	if($_REQUEST['select4']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "3");
	}
	
	
	if($_REQUEST['select5']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "0");
	}
	if($_REQUEST['select5']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "1");
	}
	if($_REQUEST['select5']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "2");
	}
	if($_REQUEST['select5']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "3");
	}
	
	
	if($_REQUEST['select6']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L239', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('W239', "1");
	}
	if($_REQUEST['select6']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L239', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('W239', "2");
	}
	if($_REQUEST['select6']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L239', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('W239', "3");
	}
	
	
	if($_REQUEST['select7']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L240', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('W240', "1");
	}
	if($_REQUEST['select7']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L240', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('W240', "2");
	}
	if($_REQUEST['select7']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L240', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('W240', "3");
	}
	
	
	if($_REQUEST['select8']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L241', "$18000 - $20000");
	$objPHPExcel->getActiveSheet()->setCellValue('W241', "1");
	}
	if($_REQUEST['select8']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L241', "$21000 - $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('W241', "2");
	}
	if($_REQUEST['select8']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L241', "mas de $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('W241', "3");
	}
	
	
	if($_REQUEST['select9']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L242', "1 a 3");
	$objPHPExcel->getActiveSheet()->setCellValue('W242', "1");
	}
	if($_REQUEST['select9']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L242', "4 a 6");
	$objPHPExcel->getActiveSheet()->setCellValue('W242', "2");
	}
	if($_REQUEST['select9']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L242', "7 a 10");
	$objPHPExcel->getActiveSheet()->setCellValue('W242', "3");
	}
	
	
	if($_REQUEST['select10']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L243', "Transferencia");
	$objPHPExcel->getActiveSheet()->setCellValue('W243', "1");
	}
	if($_REQUEST['select10']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L243', "Cheque");
	$objPHPExcel->getActiveSheet()->setCellValue('W243', "2");
	}
	if($_REQUEST['select10']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L243', "Efectivo");
	$objPHPExcel->getActiveSheet()->setCellValue('W243', "3");
	}
	
	
	
	if($_REQUEST['select11']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L244', "Agencia");
	$objPHPExcel->getActiveSheet()->setCellValue('W244', "1");
	}
	if($_REQUEST['select11']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L244', "Internet");
	$objPHPExcel->getActiveSheet()->setCellValue('W244', "2");
	}
	if($_REQUEST['select11']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L244', "Otro");
	$objPHPExcel->getActiveSheet()->setCellValue('W244', "3");
	}
	
	
	if($_REQUEST['select12']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L245', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W245', "1");
	}
	if($_REQUEST['select12']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L245', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W245', "2");
	}
	if($_REQUEST['select12']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L245', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W245', "3");
	}
	
	
	if($_REQUEST['select13']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L246', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('W246', "1");
	}
	if($_REQUEST['select13']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L246', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('W246', "2");
	}
	if($_REQUEST['select13']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L246', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('W246', "3");
	}
	
	if($_REQUEST['select14']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L247', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('W247', "1");
	}
	if($_REQUEST['select14']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L247', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('W247', "2");
	}
	if($_REQUEST['select14']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L247', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('W247', "3");
	}
	
	
	if($_REQUEST['select15']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L248', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W248', "1");
	}
	if($_REQUEST['select15']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L248', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W248', "2");
	}
	if($_REQUEST['select15']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L248', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W248', "3");
	}
	
	
	if($_REQUEST['select16']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L249', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W249', "1");
	}
	if($_REQUEST['select16']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L249', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W249', "2");
	}
	if($_REQUEST['select16']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L249', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W249', "3");
	}
	
	
	if($_REQUEST['select17']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L250', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W250', "1");
	}
	if($_REQUEST['select17']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L250', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W250', "2");
	}
	if($_REQUEST['select17']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L250', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W250', "3");
	}
	
	
	
	$suma=$_REQUEST['select']+$_REQUEST['select2']+$_REQUEST['select3']+$_REQUEST['select4']+$_REQUEST['select5']+$_REQUEST['select6']+$_REQUEST['select7']+$_REQUEST['select8']+$_REQUEST['select9']+$_REQUEST['select10']+$_REQUEST['select11']+$_REQUEST['select12']+$_REQUEST['select13']+$_REQUEST['select14']+$_REQUEST['select15']+$_REQUEST['select16']+$_REQUEST['select17'];
	
	if(21<=$suma && $suma<=29){
	$objPHPExcel->getActiveSheet()->setCellValue('Z256', "Bajo");
	$objPHPExcel->getActiveSheet()->setCellValue('U231', "P");
	}
	if(30<=$suma && $suma<=45){
	$objPHPExcel->getActiveSheet()->setCellValue('Z256', "Medio");
	$objPHPExcel->getActiveSheet()->setCellValue('Z231', "P");
	}
	if(45<$suma){
	$objPHPExcel->getActiveSheet()->setCellValue('Z256', "Alto");
	$objPHPExcel->getActiveSheet()->setCellValue('AF231', "P");
	}
	
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('H312', $fecha);
	$objPHPExcel->getActiveSheet()->setCellValue('AL482', $fecha);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AF312', $cliente);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('B315', $apepasol);
	$objPHPExcel->getActiveSheet()->setCellValue('U315', $apemasol);
	$objPHPExcel->getActiveSheet()->setCellValue('AL315', $nomsol.' '.$segnomsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B325', $dirsol);
	$objPHPExcel->getActiveSheet()->setCellValue('B330', $colsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Q330', $_REQUEST['textfield22']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Y330', $edosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('T320', $lugnacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN325', $cpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AG330', $cdsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('U335', $mailsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AO335', $curpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V340', $nacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN340', $_REQUEST['textfield32']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B345', $_REQUEST['textfield33']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V345', $_REQUEST['textfield34']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AO345', $_REQUEST['textfield35']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B350', $_REQUEST['textfield36']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('S350', $_REQUEST['textfield37']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AJ350', $_REQUEST['textfield38']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L393', $_REQUEST['textfield39']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L394', $_REQUEST['textfield40']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L395', $_REQUEST['textfield41']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L396', $_REQUEST['textfield42']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L397', $_REQUEST['textfield43']);
	$objPHPExcel->getActiveSheet()->setCellValue('L398', $_REQUEST['textfield44']);
	
	if($_REQUEST['copias']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AC394', "P");
	}
	if($_REQUEST['copias']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AG394', "P");
	}
	
	if($_REQUEST['cotejo']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AC397', "P");
	}
	if($_REQUEST['cotejo']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('Ag397', "P");
	}
	
	
	if($_REQUEST['adjuntos1']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V403', "P");
	}
	if($_REQUEST['adjuntos1']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('Z403', "P");
	}
	
	if($_REQUEST['adjuntos2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V404', "P");
	}
	if($_REQUEST['adjuntos2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('Z404', "P");
	}
	
	if($_REQUEST['adjuntos3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V406', "P");
	}
	if($_REQUEST['adjuntos3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('Z406', "P");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('C414', $_REQUEST['textfield45']);
	$objPHPExcel->getActiveSheet()->setCellValue('V414', $_REQUEST['textfield46']);
	$objPHPExcel->getActiveSheet()->setCellValue('AN414', $_REQUEST['textfield47']);
	$objPHPExcel->getActiveSheet()->setCellValue('B419', $_REQUEST['textfield48']);
	$objPHPExcel->getActiveSheet()->setCellValue('R419', $_REQUEST['textfield49']);
	$objPHPExcel->getActiveSheet()->setCellValue('AE419', $_REQUEST['textfield50']);
	$objPHPExcel->getActiveSheet()->setCellValue('AS419', $_REQUEST['textfield51']);
	$objPHPExcel->getActiveSheet()->setCellValue('a425', $_REQUEST['textfield52']);
	$objPHPExcel->getActiveSheet()->setCellValue('W425', $_REQUEST['textfield53']);
	$objPHPExcel->getActiveSheet()->setCellValue('AO425', $_REQUEST['textfield54']);
	$objPHPExcel->getActiveSheet()->setCellValue('B430', $_REQUEST['textfield55']." - ".$_REQUEST['textfield56']);
	$objPHPExcel->getActiveSheet()->setCellValue('X430', $_REQUEST['textfield57']);
	$objPHPExcel->getActiveSheet()->setCellValue('AS430', $_REQUEST['textfield58']);
	$objPHPExcel->getActiveSheet()->setCellValue('B435', $_REQUEST['textfield59']);
	$objPHPExcel->getActiveSheet()->setCellValue('X435', $_REQUEST['textfield60']);
	$objPHPExcel->getActiveSheet()->setCellValue('AQ435', $_REQUEST['textfield61']);
	$objPHPExcel->getActiveSheet()->setCellValue('B440', $_REQUEST['textfield62']);
	$objPHPExcel->getActiveSheet()->setCellValue('X440', $_REQUEST['textfield63']);
	$objPHPExcel->getActiveSheet()->setCellValue('AN440', $_REQUEST['textfield64']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H484', $_REQUEST['textfield65']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA484', $_REQUEST['textfield66']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H486', $_REQUEST['textfield67']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA486', $_REQUEST['textfield68']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H488', $_REQUEST['textfield69']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA488', $_REQUEST['textfield70']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H490', $_REQUEST['textfield71']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA490', $_REQUEST['textfield72']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H492', $_REQUEST['textfield73']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA492', $_REQUEST['textfield74']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H494', $_REQUEST['textfield75']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA494', $_REQUEST['textfield76']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H496', $_REQUEST['textfield77']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA496', $_REQUEST['textfield78']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H498', $_REQUEST['textfield79']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA498', $_REQUEST['textfield80']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H500', $_REQUEST['textfield81']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA500', $_REQUEST['textfield82']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H502', $_REQUEST['textfield83']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA502', $_REQUEST['textfield84']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J504', $_REQUEST['textfield85']);
	$objPHPExcel->getActiveSheet()->setCellValue('J506', $_REQUEST['textfield86']);
	$objPHPExcel->getActiveSheet()->setCellValue('J507', $_REQUEST['textfield87']);
	$objPHPExcel->getActiveSheet()->setCellValue('J508', $_REQUEST['textfield88']);
	$objPHPExcel->getActiveSheet()->setCellValue('J509', $_REQUEST['textfield89']);
	$objPHPExcel->getActiveSheet()->setCellValue('J510', $_REQUEST['textfield90']);
	$objPHPExcel->getActiveSheet()->setCellValue('J511', $_REQUEST['textfield91']);
	$objPHPExcel->getActiveSheet()->setCellValue('J512', $_REQUEST['textfield92']);
	
	
	if(isset($_REQUEST['PEPS'])=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V579', "P");
	$objPHPExcel->getActiveSheet()->setCellValue('G583', $_REQUEST['textfield93']);
	$objPHPExcel->getActiveSheet()->setCellValue('AE583', $_REQUEST['textfield94']);
	$objPHPExcel->getActiveSheet()->setCellValue('G585', $_REQUEST['textfield95']);
	}
	if(isset($_REQUEST['PEPS'])=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA579', "P");
	}

	
	
	
	include("Conexion2.php");
	
	$row=mysqli_fetch_Array(mysqli_query($cnx,"select max(id)+1 from solicitudes"));
	
	$objPHPExcel->getActiveSheet()->setCellValue('At3', $row['max(id)+1']);
	
	$TipoCredito="";
	if($tipocredito=="1"){
	$TipoCredito="Leasing";
	}
	if($tipocredito=="2"){
	$TipoCredito="Credit";
	}
	if($tipocredito=="3"){
	$TipoCredito="Premium Credit";
	}
	
	$NomSolicitante="";
	if($segnomsol!=""){
	$NomSolicitante.=$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol;
	}else{
	$NomSolicitante.=$nomsol.' '.$apepasol.' '.$apemasol;
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('I221', $NomSolicitante);
	$objPHPExcel->getActiveSheet()->setCellValue('I222', $cliente);
	$objPHPExcel->getActiveSheet()->setCellValue('I223', $dirsol);
	$objPHPExcel->getActiveSheet()->setCellValue('I224', $colsol);
	$objPHPExcel->getActiveSheet()->setCellValue('I225', $_REQUEST['textfield5']);
	$objPHPExcel->getActiveSheet()->setCellValue('I226', $edosol);
	$objPHPExcel->getActiveSheet()->setCellValue('AM224', $cpsol);
	$objPHPExcel->getActiveSheet()->setCellValue('AM225', $cdsol);
	$objPHPExcel->getActiveSheet()->setCellValue('AM226', $lugnacsol);
	
	
	
	$RFCSolicitante="";
$RFCSolicitante.=$rfc1.$rfc2.$rfc3.$rfc4.$rfc5.$rfc6.$rfc7.$rfc8.$rfc9.$rfc10.$rfc11.$rfc12.$rfc13;
	$objPHPExcel->getActiveSheet()->setCellValue('AM227', $RFCSolicitante);
	$objPHPExcel->getActiveSheet()->setCellValue('B340', $RFCSolicitante.' / '.$_REQUEST['textfield30']);


	
	$TelSolicitante="";
	$TelSolicitante.=$telsol1.$telsol2.$telsol3.$telsol4.$telsol5.$telsol6.$telsol7.$telsol8.$telsol9.$telsol10;
	$objPHPExcel->getActiveSheet()->setCellValue('AP330', $TelSolicitante);
	
	
	
	$MovSolicitante="";
	$MovSolicitante.=$movsol1.$movsol2.$movsol3.$movsol4.$movsol5.$movsol6.$movsol7.$movsol8.$movsol9.$movsol10;
	
	$FaxSolicitante="";
	$FaxSolicitante.=$movsol12.$movsol22.$movsol32.$movsol42.$movsol52.$movsol62.$movsol72.$movsol82.$movsol92.$movsol102;
	
	$SexoDatGen="";
	if($sexsol=="M"){
	$SexoDatGen="Masculino";
	}
	if($sexsol=="F"){
	$SexoDatGen="Femenino";
	}
	
	$FeNacDatGen="";
	$FeNacDatGen.=$fechnacsol3.'-'.$fechnacsol2.'-'.$fechnacsol1;
	$objPHPExcel->getActiveSheet()->setCellValue('I227', $FeNacDatGen);
	$objPHPExcel->getActiveSheet()->setCellValue('AL320', $FeNacDatGen);
	
	
	$VivDatGen="";
	if($vivsol=="1"){
	$VivDatGen="Casa Propia";
	}
	if($vivsol=="2"){
	$VivDatGen="Rentada";
	}
	if($vivsol=="3"){
	$VivDatGen="Hipotecada";
	}
	if($vivsol=="4"){
	$VivDatGen="Con familiares";
	}
	
	if($inmusol=="1"){
	$PropInmuDatGen="Si";
	}
	if($inmusol=="2"){
	$PropInmuDatGen="No";
	}
	
	if($civilsol=="1"){
	$EstCivDatGen="Casado Bienes Mancomunados";
	}
	if($civilsol=="2"){
	$EstCivDatGen="Casado Bienes Separados";
	}
	if($civilsol=="3"){
	$EstCivDatGen="Viudo";
	}
	if($civilsol=="4"){
	$EstCivDatGen="Divorciado";
	}
	if($civilsol=="5"){
	$EstCivDatGen="Soltero";
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('B335', $EstCivDatGen);
	
	$MarDatGen="";
	if($autosol=="1"){
	$AuPropDatGen="Si";
	$MarDatGen=$marcasol;
	}
	if($autosol=="2"){
	$AuPropDatGen="No";
	}
	
	$DesAnDatEmp="";
	$DesAnDatEmp.=$desdesol3.'-'.$desdesol2.'-'.$desdesol1;
	
	$TelDatEmp="";
	$TelDatEmp.=$compatelsol1.$compatelsol2.$compatelsol3.$compatelsol4.$compatelsol5.$compatelsol6.$compatelsol7.$compatelsol8.$compatelsol9.$compatelsol10;
	
	$TelRefPer="";
	$TelRefPer.=$telref11.$telref12.$telref13.$telref14.$telref15.$telref16.$telref17.$telref18.$telref19.$telref110;
	
	$TelRefPer2="";
	$TelRefPer2.=$telref21.$telref22.$telref23.$telref24.$telref25.$telref26.$telref27.$telref28.$telref29.$telref210;
	
	$FecApRefBan="";
	$FecApRefBan.=$aperbanc1a.'-'.$aperbanc1m.'-'.$aperbanc1d;
	
	$FecApRefBan2="";
	$FecApRefBan2.=$aperbanc1a2.'-'.$aperbanc1m2.'-'.$aperbanc1d2;
	
	$TelRefCom="";
	$TelRefCom.=$telrefcom11.$telrefcom12.$telrefcom13.$telrefcom14.$telrefcom15.$telrefcom16.$telrefcom17.$telrefcom18.$telrefcom19.$telrefcom110;
	
	$TelRefCom2="";
	$TelRefCom2.=$telrefcom21.$telrefcom22.$telrefcom23.$telrefcom24.$telrefcom25.$telrefcom26.$telrefcom27.$telrefcom28.$telrefcom29.$telrefcom210;
	
	$NomDatCon="";
	$NomDatCon.=$conyunom.' '.$conyuape1.' '.$conyuape2;
	
	$RFCObPerMor="";
	$RFCObPerMor.=$permorrfc1.$permorrfc2.$permorrfc3.$permorrfc4.$permorrfc5.$permorrfc6.$permorrfc7.$permorrfc8.$permorrfc9.$permorrfc10.$permorrfc11.$permorrfc12.$permorrfc13;
	
	$TelObPerMor="";
	$TelObPerMor.=$telpermor1.$telpermor2.$telpermor3.$telpermor4.$telpermor5.$telpermor6.$telpermor7.$telpermor8.$telpermor9.$telpermor10;
	
	$FaxObPerMor="";
	$FaxObPerMor.=$_REQUEST['faxpermor1'].$_REQUEST['faxpermor2'].$_REQUEST['faxpermor3'].$_REQUEST['faxpermor4'].$_REQUEST['faxpermor5'].$_REQUEST['faxpermor6'].$_REQUEST['faxpermor7'].$_REQUEST['faxpermor8'].$_REQUEST['faxpermor9'].$_REQUEST['faxpermor10'];
	
	$IniOpDatGen="";
	$IniOpDatGen.=$inicoper3.'-'.$inicoper2.'-'.$inicoper1;
	
	$NomObSol="";
	$NomObSol.=$datobnom1.' '.$datobappat1.' '.$datobapmat1;
	
	$NomObSol2="";
	$NomObSol2.=$datobnom2.' '.$datobappat2.' '.$datobapmat2;
		
	
	$RFCObSol="";
		$RFCObSol.=$datobrfc11.$datobrfc12.$datobrfc13.$datobrfc14.$datobrfc15.$datobrfc16.$datobrfc17.$datobrfc18.$datobrfc19.$datobrfc110.$datobrfc111.$datobrfc112.$datobrfc113;
		
	$RFCObSol2="";
		$RFCObSol2.=$datobrfc21.$datobrfc22.$datobrfc23.$datobrfc24.$datobrfc25.$datobrfc26.$datobrfc27.$datobrfc28.$datobrfc29.$datobrfc210.$datobrfc211.$datobrfc212.$datobrfc213;
		
		$TelObSol="";
		$TelObSol.=$datobtel11.$datobtel12.$datobtel13.$datobtel14.$datobtel15.$datobtel16.$datobtel17.$datobtel18.$datobtel19.$datobtel110;
		
		$TelObSol2="";
		$TelObSol2.=$datobtel21.$datobtel22.$datobtel23.$datobtel24.$datobtel25.$datobtel26.$datobtel27.$datobtel28.$datobtel29.$datobtel210;
		
		$MovObSol="";
		$MovObSol.=$_REQUEST['datobtel112'].$_REQUEST['datobtel122'].$_REQUEST['datobtel132'].$_REQUEST['datobtel142'].$_REQUEST['datobtel152'].$_REQUEST['datobtel162'].$_REQUEST['datobtel172'].$_REQUEST['datobtel182'].$_REQUEST['datobtel192'].$_REQUEST['datobtel1102'];
		
		$MovObSol2="";
		$MovObSol2.=$_REQUEST['datobtel212'].$_REQUEST['datobtel222'].$_REQUEST['datobtel232'].$_REQUEST['datobtel242'].$_REQUEST['datobtel252'].$_REQUEST['datobtel262'].$_REQUEST['datobtel272'].$_REQUEST['datobtel282'].$_REQUEST['datobtel292'].$_REQUEST['datobtel2102'];
		
		
		$FeNacObSol="";
		$FeNacObSol.=$datobfechnac1a.'-'.$datobfechnac1m.'-'.$datobfechnac1d;
		
		$FeNacObSol2="";
		$FeNacObSol2.=$datobfechnac2a.'-'.$datobfechnac2m.'-'.$datobfechnac2d;
		
		
		
		
			
	mysqli_query($cnx,"insert into solicitudes (Cliente,
	TipoCredito,
	NomSolicitante,
	RFCSolicitante,
	TelSolicitante,
	MovSolicitante,
	DirSolicitante,
	ColSolicitante,
	CdSolicitante,
	LugNacSolicitante,
	EdoSolicitante,
	CPSolicitante,
	CURPSolicitante,
	EmailSolicitante,
	FaxSolicitante,
	SexoDatGen,
	FeNacDatGen,
	EdDatGen,
	NaDatGen,
	NoDepDatGen,
	AcDomDatGen,
	VivDatGen,
	ImpMenDatGen,
	PropInmuDatGen,
	ArDomDatGen,
	AnResDatGen,
	BenDatGen,
	EstCivDatGen,
	AuPropDatGen,
	MarDatGen,
	OcupDatEmp,
	PuestDatEmp,
	DesAnDatEmp,
	CompDatEmp,
	TelDatEmp,
	NoEmDatEmp,
	ExtDatEmp,
	GiroDatEmp,
	DomDatEmp,
	NomRefPer,
	ParenRefPer,
	TelRefPer,
	NomRefPer2,
	ParenRefPer2,
	TelRefPer2,
	BancRefBan,
	NoTarRefBan,
	BancRefBan2,
	NoTarRefBan2,
	SucRefBan,
	SucRefBan2,
	FecApRefBan,
	FecApRefBan2,
	EmpRefCom,
	AntRefCom,
	TelRefCom,
	EmpRefCom2,
	AntRefCom2,
	TelRefCom2,
	BancCarDir,
	NoTarCarDir,
	NomDatCon,
	CompDatCon,
	PuestDatCon,
	NomObPerMor,
	DirObPerMor,
	ColObPerMor,
	CdObPerMor,
	LugNacObPerMor,
	EdoObPerMor,
	CPObPerMor,
	RFCObPerMor,
	TelObPerMor,
	FaxObPerMor,
	AntConsEmpPM,
	ApoConsEmpPM,
	ActPrinDatGen,
	IniOpDatGen,
	CantPerDatGen,
	NomObSol,
	RFCObSol,
	TelObSol,
	MovObSol,
	DirObSol,
	ColObSol,
	CdObSol,
	LugNacObSol,
	PropObSol,
	EdoObSol,
	CPObSol,
	EmailObSol,
	SexoObSol,
	FeNacObSol,
	EdObSol,
	CURPObSol,
	NomObSol2,
	RFCObSol2,
	TelObSol2,
	MovObSol2,
	DirObSol2,
	ColObSol2,
	CdObSol2,
	LugNacObSol2,
	PropObSol2,
	EdoObSol2,
	CPObSol2,
	EmailObSol2,
	SexoObSol2,
	FeNacObSol2,
	EdObSol2,
	CURPObSol2,
	Fecha,
	ClavConcesionario,
	NomConcesionario,
	NomVendedor,
	NomGerenteGral,
	StatusSolicitud) 
	
	
	values(
	'$cliente',
	'$TipoCredito',
	'$NomSolicitante',
	'$RFCSolicitante',
	'$TelSolicitante',
	'$MovSolicitante',
	'$dirsol',
	'$colsol',
	'$cdsol',
	'$lugnacsol',
	'$edosol',
	'$cpsol',
	'$curpsol',
	'$mailsol',
	'$FaxSolicitante',
	'$SexoDatGen',
	'$FeNacDatGen',
	'$edsol',
	'$nacsol',
	'$depensol',
	'$acdomsol',
	'$VivDatGen',
	'$impmenpag',
	'$PropInmuDatGen',
	'$arraisol',
	'$anosol2',
	'$benesol',
	'$EstCivDatGen',
	'$AuPropDatGen',
	'$MarDatGen',
	'$giroprof',
	'$depasol',
	'$DesAnDatEmp',
	'$compasol',
	'$TelDatEmp',
	'$noempleados',
	'$compatelsolext',
	'$giroactreal',
	'$domneg',
	'$nomref1',
	'$parenref1',
	'$TelRefPer',
	'$nomref2',
	'$parenref2',
	'$TelRefPer2',
	'$refbanc',
	'$numcuebanc',
	'$refbanc2',
	'$tarjrefbanc',
	'$sucbanc1',
	'$sucbanc2',
	'$FecApRefBan',
	'$FecApRefBan2',
	'$refcomemp1',
	'$antirefcom1',
	'$TelRefCom',
	'$refcomemp2',
	'$antirefcom2',
	'$TelRefCom2',
	'$cargdir',
	'$nocuentcd',
	'$NomDatCon',
	'$compaconyu',
	'$puestconyu',
	'$nomrazsoc',
	'$dirpermor',
	'$colpermor',
	'$cdpermor',
	'$lugnacpermor',
	'$edopermor',
	'$cppremor',
	'$RFCObPerMor',
	'$TelObPerMor',
	'$FaxObPerMor',
	'$antemp',
	'$apodsusc',
	'$actprinc',
	'$IniOpDatGen',
	'$cantperson',
	'$NomObSol',
	'$RFCObSol',
	'$TelObSol',
	'$MovObSol',
	'$datobdir1',
	'$datobcol1',
	'$datobcd1',
	'$datoblugnac1',
	'$PropObSol',
	'$datobedo1',
	'$datobcp1',
	'$datobmail1',
	'$SexoObSol',
	'$FeNacObSol',
	'$datobed1',
	'$datobcurp1',
	'$NomObSol2',
	'$RFCObSol2',
	'$TelObSol2',
	'$MovObSol2',
	'$datobdir2',
	'$datobcol2',
	'$datobcd2',
	'$datoblugnac2',
	'$PropObSol2',
	'$datobedo2',
	'$datobcp2',
	'$datobmail2',
	'$SexoObSol2',
	'$FeNacObSol2',
	'$datobed2',
	'$datobcurp2',
	now(),
	'$clavcon',
	'$nomcons',
	'$nomvend',
	'$gerentegral',
	'Pendiente')");
	
	

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Solicitud PFNA '.$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol.'.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');




/*
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="Solicitud PFNA '.$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol.'.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
$objWriter->save('php://output');
*/


exit;
}
if(isset($_POST['cancelar'])){
include("carpetaraiz.php");
header('Location: '.$raiz.'indexmenu.php');
}

?>