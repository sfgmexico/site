<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<script type="text/javascript" src="js/editcheck.js"></script>
<script type="text/javascript">
/*$(document).ready(function() {
    $("#form1").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});


function MaysPrimera(string){
  return string.charAt(0).toUpperCase() + string.slice(1);
}


function cambio(){
document.getElementById("solicitud").style.display = 'none';

document.getElementById("textfield").value=MaysPrimera(document.getElementById("nomrazsoc2").value);




document.getElementById("riesgo").style.display = 'block';
document.getElementById("textfield2").value=document.getElementById("cliente").value;
document.getElementById("textfield3").value=document.getElementById("dirsol").value;
document.getElementById("textfield4").value=document.getElementById("colsol").value;
//document.getElementById("textfield5").value="";
document.getElementById("textfield6").value=document.getElementById("edosol").value;
document.getElementById("textfield7").value=document.getElementById("inicoper33").value+"-"+document.getElementById("inicoper23").value+"-"+document.getElementById("inicoper13").value;
document.getElementById("textfield8").value=document.getElementById("cpsol").value;
document.getElementById("textfield9").value=document.getElementById("cdsol").value;

document.getElementById("textfield11").value=MaysPrimera(document.getElementById("rfcsol1").value)+MaysPrimera(document.getElementById("rfcsol2").value)+MaysPrimera(document.getElementById("rfcsol3").value)+MaysPrimera(document.getElementById("rfcsol4").value)+MaysPrimera(document.getElementById("rfcsol5").value)+MaysPrimera(document.getElementById("rfcsol6").value)+MaysPrimera(document.getElementById("rfcsol7").value)+MaysPrimera(document.getElementById("rfcsol8").value)+MaysPrimera(document.getElementById("rfcsol9").value)+MaysPrimera(document.getElementById("rfcsol10").value)+MaysPrimera(document.getElementById("rfcsol11").value)+MaysPrimera(document.getElementById("rfcsol12").value)+MaysPrimera(document.getElementById("rfcsol13").value);

window.scrollTo(0, 0);

}///cierre del cambio

function cambio2(){

document.getElementById("riesgo").style.display = 'none';


document.getElementById("identificacion").style.display = 'block';

window.scrollTo(0, 0);


}///cierre del cambio





function regreso(){
document.getElementById("riesgo").style.display = 'none';

document.getElementById("solicitud").style.display = 'block';
window.scrollTo(0, 0);
}

function regreso2(){
document.getElementById("identificacion").style.display = 'none';

document.getElementById("riesgo").style.display = 'block';
window.scrollTo(0, 0);
}



function myFunction(x, y, sig) {
    if (y.length == x.maxLength) {
        sig.focus();
		sig.select();
    }
}
*/
</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!-- header -->
<header>
</header>

<!-- content -->
<section>
	<div class="bg" align="center">
	  <div class="container_24" align="center">
	  <form name="form1" id="form1"  onsubmit="return valforms(this)" method="post">
	  
	  <style>
	 
	  input::-webkit-input-placeholder {
    color:    #c00;
	font-size:8px;
	font-weight: bold;
}
input::-moz-placeholder {
    color:    #c00;
	font-size:8px;
	font-weight: bold;
}
	  </style>

	  	<div id="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block">
	  <div id="solicitud">
	    <h1>Solicitud Persona Moral</h1>
	    <p align="left"><strong>DATOS DEL SOLICITANTE:</strong> 	      <input name="cliente" type="text" id="cliente" size="30px" placeholder="Si es Cliente, número de cliente/contrato"> 
          &nbsp;&nbsp;&nbsp;&nbsp; 
          Leasing:
          <input name="tipocredito" type="radio" value="1">
          Credit: 
           <input name="tipocredito" type="radio" value="2">
&nbsp;&nbsp;&nbsp;&nbsp;Premium Credit:          
<input name="tipocredito" type="radio" value="3">
	    </p>
	    <p align="left">
	      <input name="nomrazsoc2" type="text" id="nomrazsoc2" onchange="return valforms(this.form,this)"  editcheck ="req=Y=Nombre requerido"size="50px" placeholder="Nombre, Razón Social">
Telefono(Con lada - 10 dígitos):
<input name="telsol1" type="text" id="telsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol2)"><input name="telsol2" type="text" id="telsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol3)"><input name="telsol3" type="text" id="telsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol4)"><input name="telsol4" type="text" id="telsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol5)"><input name="telsol5" type="text" id="telsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol6)"><input name="telsol6" type="text" id="telsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol7)"><input name="telsol7" type="text" id="telsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol8)"><input name="telsol8" type="text" id="telsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol9)"><input name="telsol9" type="text" id="telsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol10)"><input name="telsol10" type="text" id="telsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol1)">
	    </p>
	    <p align="left">RFC con homoclave:
          <input name="rfcsol1" type="text" id="rfcsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol2)"><input name="rfcsol2" type="text" id="rfcsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol3)"><input name="rfcsol3" type="text" id="rfcsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol4)"><input name="rfcsol4" type="text" id="rfcsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol5)"><input name="rfcsol5" type="text" id="rfcsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol6)"><input name="rfcsol6" type="text" id="rfcsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol7)"><input name="rfcsol7" type="text" id="rfcsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol8)"><input name="rfcsol8" type="text" id="rfcsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol9)"><input name="rfcsol9" type="text" id="rfcsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol10)"><input name="rfcsol10" type="text" id="rfcsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol11)"><input name="rfcsol11" type="text" id="rfcsol11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol12)"><input name="rfcsol12" type="text" id="rfcsol12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol13)"><input name="rfcsol13" type="text" id="rfcsol13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol1)">
      </p>
	    <p align="left">Fax (Con Lada) :
          <input name="faxsol1" type="text" id="faxsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol2)"><input name="faxsol2" type="text" id="faxsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol3)"><input name="faxsol3" type="text" id="faxsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol4)"><input name="faxsol4" type="text" id="faxsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol5)"><input name="faxsol5" type="text" id="faxsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol6)"><input name="faxsol6" type="text" id="faxsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol7)"><input name="faxsol7" type="text" id="faxsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol8)"><input name="faxsol8" type="text" id="faxsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol9)"><input name="faxsol9" type="text" id="faxsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol10)"><input name="faxsol10" type="text" id="faxsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,dirsol)">
	    </p>
	    <p align="left">
	      <input name="dirsol" type="text" id="dirsol" size="74px" placeholder="Dirección / Calle">
          <input name="dirnumsol" type="text" id="dirnumsol" size="20px" placeholder="Número">
          <input name="mailsol2" type="text" id="mailsol2" size="20px" placeholder="Email">
</p>
	    <p align="left">
	      <input name="colsol" type="text" id="colsol" size="49px" placeholder="Colonia">
          <input name="cdsol" type="text" id="cdsol" size="20px" placeholder="Ciudad">
          <input name="edosol" type="text" id="edosol" size="20px" placeholder="Estado">
          <input name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P.">
	    </p>
	    <hr>
	    <p align="left"><strong>DATOS DEL CONTACTO DE LA EMPRESA</strong></p>
	    <p align="left">
	      <input name="nomconemp" type="text" id="nomconemp" placeholder="Primer Nombre">
	      &nbsp;&nbsp;&nbsp;&nbsp;<input name="segnomconemp" type="text" id="segnomconemp" placeholder="Segundo Nombre">
	      &nbsp;&nbsp;&nbsp;&nbsp;<input name="apepaconemp" type="text" id="apepaconemp" placeholder="Apellido Parteno">
	      &nbsp;&nbsp;&nbsp;&nbsp;<input name="apemaconemp" type="text" id="apemaconemp" placeholder="Apellido Materno">
</p>
	    <p align="left">RFC con homoclave:
	      <input name="rfcconemp1" type="text" id="rfcconemp1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp2)"><input name="rfcconemp2" type="text" id="rfcconemp2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp3)"><input name="rfcconemp3" type="text" id="rfcconemp3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp4)"><input name="rfcconemp4" type="text" id="rfcconemp4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp5)"><input name="rfcconemp5" type="text" id="rfcconemp5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp6)"><input name="rfcconemp6" type="text" id="rfcconemp6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp7)"><input name="rfcconemp7" type="text" id="rfcconemp7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp8)"><input name="rfcconemp8" type="text" id="rfcconemp8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp9)"><input name="rfcconemp9" type="text" id="rfcconemp9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp10)"><input name="rfcconemp10" type="text" id="rfcconemp10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp11)"><input name="rfcconemp11" type="text" id="rfcconemp11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp12)"><input name="rfcconemp12" type="text" id="rfcconemp12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp13)"><input name="rfcconemp13" type="text" id="rfcconemp13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp1)">
	    </p>
	    <p align="left">Telefono partiular (Con lada - 10 dígitos) : 
	      <input name="telconemp1" type="text" id="telconemp1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp2)"><input name="telconemp2" type="text" id="telconemp2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp3)"><input name="telconemp3" type="text" id="telconemp3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp4)"><input name="telconemp4" type="text" id="telconemp4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp5)"><input name="telconemp5" type="text" id="telconemp5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp6)"><input name="telconemp6" type="text" id="telconemp6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp7)"><input name="telconemp7" type="text" id="telconemp7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp8)"><input name="telconemp8" type="text" id="telconemp8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp9)"><input name="telconemp9" type="text" id="telconemp9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp10)"><input name="telconemp10" type="text" id="telconemp10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp1)">
        </p>
	    <p align="left">Fax (Con Lada) : 
	      <input name="faxconemp1" type="text" id="faxconemp1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp2)"><input name="faxconemp2" type="text" id="faxconemp2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp3)"><input name="faxconemp3" type="text" id="faxconemp3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp4)"><input name="faxconemp4" type="text" id="faxconemp4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp5)"><input name="faxconemp5" type="text" id="faxconemp5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp6)"><input name="faxconemp6" type="text" id="faxconemp6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp7)"><input name="faxconemp7" type="text" id="faxconemp7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp8)"><input name="faxconemp8" type="text" id="faxconemp8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp9)"><input name="faxconemp9" type="text" id="faxconemp9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp10)"><input name="faxconemp10" type="text" id="faxconemp10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,mailconemp)">
	    </p>
	    <p align="left">
	      <input name="mailconemp" type="text" id="mailconemp" size="20px" placeholder="Email">
	      <input name="puesconemp" type="text" id="puesconemp" size="49px" placeholder="Puesto que desempeña en la empresa">
	    </p>
	    <hr>
	    <p align="left"><strong>DATOS GENERALES DE LA EMPRESA</strong></p>
	    <p align="left">
          <input name="actprinc" type="text" id="actprinc" size="50px" placeholder="Actividad Principal/según alta o último cambio ante SHCP">
          <input name="cantperson" type="text" id="cantperson" size="20px" placeholder="Cantidad de personal">
        </p>
	    <p align="left">Fecha inicio de operaciones:
	      <input name="inicoper1" type="text" id="inicoper1" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper2)">
            <input name="inicoper2" type="text" id="inicoper2" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,inicoper3)">
            <input name="inicoper3" type="text" id="inicoper3" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,inicoper13)">
	    </p>
	    <hr>
	    <p align="left"><strong>CONSTITUCIÓN DE LA EMPRESA</strong></p>
	    <p align="left">
          Fecha de contitución de la empresa:
	        <input name="inicoper13" type="text" id="inicoper13" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper23)">
            <input name="inicoper23" type="text" id="inicoper23" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,inicoper33)">
            <input name="inicoper33" type="text" id="inicoper33" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,antemp)">
</p>
	    <p align="left">
	      <input name="antemp" type="text" id="antemp" size="54px" placeholder="Antigüedad">
	      <input name="apodsusc" type="text" id="apodsusc" size="40px" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración">
	      </p>
	    <hr>
	    <p align="left"><strong>REFERENCIAS BANCARIAS (TARJETA DE CRÉDITO)</strong></p>
	    <p align="left">
          <input name="refbanc" type="text" id="refbanc" size="54px" placeholder="Banco">
          <input name="numcuebanc" type="text" id="numcuebanc" size="40px" placeholder="Número de cuenta">
        </p>
	    <p align="left">
          <input name="sucbanc1" type="text" id="sucbanc1" size="54px" placeholder="Sucursal">
	      Fecha de apertura:
  <input name="aperbanc1d" type="text" id="aperbanc1d" size="1" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,aperbanc1m)">
  <input name="aperbanc1m" type="text" id="aperbanc1m" size="1" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,aperbanc1a)">
  <input name="aperbanc1a" type="text" id="aperbanc1a" size="1" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,refbanc2)">
        </p>
	    <p align="left">
          <input name="refbanc2" type="text" id="refbanc2" size="54px" placeholder="Banco">
          <input name="tarjrefbanc" type="text" id="tarjrefbanc" size="40px" placeholder="Número de Tarjeta de Crédito">
        </p>
	    <p align="left">
          <input name="sucbanc2" type="text" id="sucbanc2" size="54px" placeholder="Sucursal">
	      Fecha de apertura:
  <input name="aperbanc1d2" type="text" id="aperbanc1d2" size="1" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,aperbanc1m2)">
  <input name="aperbanc1m2" type="text" id="aperbanc1m2" size="1" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,aperbanc1a2)">
  <input name="aperbanc1a2" type="text" id="aperbanc1a2" size="1" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,cargdir)">
	    </p>
	    <hr>
	    <p align="left"><strong>CARGO DIRECTO CUENTA DE CHEQUES (para contratos en M.N. BBVA Bancomer, HSBC, Banamex, BANORTE, Scotiabank Inverlat, Santander o Inbursa)<br>(para contratos en USD únicamente BBVA Bancomer y HSBC) </strong></p>
	    <p align="left">
          <input name="cargdir" type="text" id="cargdir" size="54px" placeholder="Banco">
          <input name="nocuentcd" type="text" id="nocuentcd" size="40px" placeholder="Número de Cuenta (CLAVE)">
	    </p>
	    <hr>
	    <p align="left"><strong>REFERENCIAS COMERCIALES</strong></p>
	    <p align="left">
	      <input name="refcomemp1" type="text" id="refcomemp1" size="50px" placeholder="Empresa">
	      Telefono(Con lada - 10 dígitos):
          <input name="telrefcom11" type="text" id="telrefcom11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom12)"><input name="telrefcom12" type="text" id="telrefcom12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom13)"><input name="telrefcom13" type="text" id="telrefcom13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom14)"><input name="telrefcom14" type="text" id="telrefcom14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom15)"><input name="telrefcom15" type="text" id="telrefcom15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom16)"><input name="telrefcom16" type="text" id="telrefcom16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom17)"><input name="telrefcom17" type="text" id="telrefcom17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom18)"><input name="telrefcom18" type="text" id="telrefcom18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom19)"><input name="telrefcom19" type="text" id="telrefcom19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom110)"><input name="telrefcom110" type="text" id="telrefcom110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom1)">
	    </p>
	    <p align="left">
	      <input name="antirefcom1" type="text" id="antirefcom1" placeholder="Antigüedad Desde del Año">
	    </p>
	    <p align="left">
	      <input name="refcomemp2" type="text" id="refcomemp2" size="50px" placeholder="Empresa">
Telefono(Con lada - 10 dígitos):
<input name="telrefcom21" type="text" id="telrefcom21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom22)"><input name="telrefcom22" type="text" id="telrefcom22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom23)"><input name="telrefcom23" type="text" id="telrefcom23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom24)"><input name="telrefcom24" type="text" id="telrefcom24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom25)"><input name="telrefcom25" type="text" id="telrefcom25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom26)"><input name="telrefcom26" type="text" id="telrefcom26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom27)"><input name="telrefcom27" type="text" id="telrefcom27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom28)"><input name="telrefcom28" type="text" id="telrefcom28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom29)"><input name="telrefcom29" type="text" id="telrefcom29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom210)"><input name="telrefcom210" type="text" id="telrefcom210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom2)">	    </p>
	    <p align="left">
          <input name="antirefcom2" type="text" id="antirefcom2" placeholder="Antigüedad Desde del Año">
        </p>
		<hr>
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA MORAL</strong></p>
	    <p align="left">
          <input name="nomrazsoc" type="text" id="nomrazsoc" size="50px" placeholder="Nombre, Razón Social">
	      Telefono(Con lada - 10 dígitos):
  <input name="telpermor1" type="text" id="telpermor1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor2)"><input name="telpermor2" type="text" id="telpermor2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor3)"><input name="telpermor3" type="text" id="telpermor3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor4)"><input name="telpermor4" type="text" id="telpermor4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor5)"><input name="telpermor5" type="text" id="telpermor5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor6)"><input name="telpermor6" type="text" id="telpermor6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor7)"><input name="telpermor7" type="text" id="telpermor7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor8)"><input name="telpermor8" type="text" id="telpermor8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor9)"><input name="telpermor9" type="text" id="telpermor9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor10)"><input name="telpermor10" type="text" id="telpermor10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc1)">
        </p>
	    <p align="left">RFC con homoclave:
	      <input name="permorrfc1" type="text" id="permorrfc1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc2)"><input name="permorrfc2" type="text" id="permorrfc2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc3)"><input name="permorrfc3" type="text" id="permorrfc3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc4)"><input name="permorrfc4" type="text" id="permorrfc4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc5)"><input name="permorrfc5" type="text" id="permorrfc5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc6)"><input name="permorrfc6" type="text" id="permorrfc6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc7)"><input name="permorrfc7" type="text" id="permorrfc7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc8)"><input name="permorrfc8" type="text" id="permorrfc8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc9)"><input name="permorrfc9" type="text" id="permorrfc9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc10)"><input name="permorrfc10" type="text" id="permorrfc10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc11)"><input name="permorrfc11" type="text" id="permorrfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc12)"><input name="permorrfc12" type="text" id="permorrfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc13)"><input name="permorrfc13" type="text" id="permorrfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,dirpermor)">
        </p>
	    <p align="left">
          <input name="dirpermor" type="text" id="dirpermor" size="50px" placeholder="Dirección / Calle y número">
	      Fax(Con lada - 10 dígitos):
  <input name="faxpermor1" type="text" id="faxpermor1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor2)">
  <input name="faxpermor2" type="text" id="faxpermor2" size="1px" maxlength="1"onKeyUp="myFunction(this,this.value,faxpermor3)" >
  <input name="faxpermor3" type="text" id="faxpermor3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor4)">
  <input name="faxpermor4" type="text" id="faxpermor4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor5)">
  <input name="faxpermor5" type="text" id="faxpermor5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor6)">
  <input name="faxpermor6" type="text" id="faxpermor6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor7)">
  <input name="faxpermor7" type="text" id="faxpermor7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor8)">
  <input name="faxpermor8" type="text" id="faxpermor8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor9)">
  <input name="faxpermor9" type="text" id="faxpermor9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor10)">
  <input name="faxpermor10" type="text" id="faxpermor10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,colpermor)">
        </p>
	    <p align="left">
          <input name="colpermor" type="text" id="colpermor" size="49px" placeholder="Colonia">
          <input name="cdpermor" type="text" id="cdpermor" size="20px" placeholder="Ciudad">
          <input name="edopermor" type="text" id="edopermor" size="20px" placeholder="Estado">
          <input name="cppremor" type="text" id="cppremor" size="20px" placeholder="C.P.">
        </p>
	    <hr>
	    <p align="left"><strong>CONSTITUCIÓN DE LA EMPRESA</strong></p>
	    <p align="left">
          <input name="antemp2" type="text" id="antemp2" size="54px" placeholder="Antigüedad">
          <input name="apodsusc2" type="text" id="apodsusc2" size="40px" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración">
	    </p>
	    <hr>
	    <p align="left"><strong>DATOS GENERALES</strong></p>
	    <p align="left">
          <input name="actprinc2" type="text" id="actprinc2" size="50px" placeholder="Actividad Principal/según alta o último cambio ante SHCP">
          <input name="cantperson2" type="text" id="cantperson2" size="20px" placeholder="Cantidad de personal">
        </p>
	    <p align="left">Fecha inicio de operaciones:
	      <input name="inicoper12" type="text" id="inicoper12" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper22)">
            <input name="inicoper22" type="text" id="inicoper22" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,inicoper32)">
            <input name="inicoper32" type="text" id="inicoper32" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,accionista1)">
        </p>
	    <hr>
	    <p align="left">De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. * </p>
	    <p align="left">
	      <input name="accionista1" type="text" id="accionista1" size="49px" placeholder="Nombre">
	      <input name="rfcaccion1" type="text" id="rfcaccion1" size="20px" placeholder="RFC">
	      <input name="%1" type="text" id="%1" size="20px" placeholder="%">
        </p>
	    <p align="left">
	      <input name="accionista2" type="text" id="accionista2" size="49px" placeholder="Nombre">
          <input name="rfcaccion2" type="text" id="rfcaccion2" size="20px" placeholder="RFC">
          <input name="%2" type="text" id="%2" size="20px" placeholder="%">
</p>
	    <p align="left">
	      <input name="accionista3" type="text" id="accionista3" size="49px" placeholder="Nombre">
          <input name="rfcaccion3" type="text" id="rfcaccion3" size="20px" placeholder="RFC">
          <input name="%3" type="text" id="%3" size="20px" placeholder="%">
</p>
	    <p align="left">
	      <input name="accionista4" type="text" id="accionista4" size="49px" placeholder="Nombre">
          <input name="rfcaccion4" type="text" id="rfcaccion4" size="20px" placeholder="RFC">
          <input name="%4" type="text" id="%4" size="20px" placeholder="%">
</p>
	    <p align="left">* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:</p>
	    <p align="left">
	      <input name="accpermor1" type="text" id="accpermor1" size="49px" placeholder="Nombre">
          <input name="rfcaccpermor1" type="text" id="rfcaccpermor1" size="20px" placeholder="RFC">
          <input name="%permoracc1" type="text" id="%permoracc1" size="20px" placeholder="%">
</p>
	    <p align="left">
	      <input name="accpermor2" type="text" id="accpermor2" size="49px" placeholder="Nombre">
          <input name="rfcaccpermor2" type="text" id="rfcaccpermor2" size="20px" placeholder="RFC">
          <input name="%permoracc2" type="text" id="%permoracc2" size="20px" placeholder="%">
</p>
	    <hr>
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA FÍSICA</strong></p>
	    <p align="left">
	      <input name="datobnom1" type="text" id="datobnom1" size="30px" placeholder="Nombre(s)">
          <input name="datobappat1" type="text" id="datobappat1" size="30px" placeholder="Apellido Paterno">
          <input name="datobapmat1" type="text" id="datobapmat1" size="30px" placeholder="Apellido Materno">
	    </p>
	    <p align="left">
	      <input name="datobdir1" type="text" id="datobdir1" size="48px" placeholder="Dirección / Calle y número">
	      <input name="datobcol1" type="text" id="datobcol1" size="48px" placeholder="Colonia">
	    </p>
	    <p align="left">
	      <input name="datobcd1" type="text" id="datobcd1" size="20px" placeholder="Ciudad">
	      <input name="datoblugnac1" type="text" id="datoblugnac1" size="30px" placeholder="Lugar nacimiento (País y Edo.)">
	    Tiene propiedad a su nombre? Si
	    <input name="datobprop1" type="radio" value="1"> 
	    No
	    <input name="datobprop1" type="radio" value="2">
</p>
	    <p align="left">
	      <input name="datobedo1" type="text" id="datobedo1" size="30px" placeholder="Estado">
          <input name="datobcp1" type="text" id="datobcp1" size="30px" placeholder="C.P.">
          <input  name="datobmail1" type="text" id="datobmail1" size="30px" placeholder="Email">
	    </p>
	    <p align="left">sexo: M
	      <input name="datobsex1" type="radio" value="M"> 
	      F
	      <input name="datobsex1" type="radio" value="F">
Fecha de nacimiento:
<input name="datobfechnac1d" type="text" id="datobfechnac1d" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac1m)"><input name="datobfechnac1m" type="text" id="datobfechnac1m" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,datobfechnac1a)"><input name="datobfechnac1a" type="text" id="datobfechnac1a" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,datobed1)">
	    <input name="datobed1" type="text" id="datobed1" size="2px" placeholder="Edad">
		<input name="datobcurp1" type="text" id="datobcurp1" size="22px" placeholder="CURP">
	    </p>
	    <p align="left">RFC con homoclave:
          <input name="datobrfc11" type="text" id="datobrfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc12)"><input name="datobrfc12" type="text" id="datobrfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc13)"><input name="datobrfc13" type="text" id="datobrfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc14)"><input name="datobrfc14" type="text" id="datobrfc14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc15)"><input name="datobrfc15" type="text" id="datobrfc15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc16)"><input name="datobrfc16" type="text" id="datobrfc16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc17)"><input name="datobrfc17" type="text" id="datobrfc17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc18)"><input name="datobrfc18" type="text" id="datobrfc18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc19)"><input name="datobrfc19" type="text" id="datobrfc19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc110)"><input name="datobrfc110" type="text" id="datobrfc110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc111)"><input name="datobrfc111" type="text" id="datobrfc111" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc112)"><input name="datobrfc112" type="text" id="datobrfc112" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc113)"><input name="datobrfc113" type="text" id="datobrfc113" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel11)">
        </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
          <input name="datobtel11" type="text" id="datobtel11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel12)"><input name="datobtel12" type="text" id="datobtel12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel13)"><input name="datobtel13" type="text" id="datobtel13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel14)"><input name="datobtel14" type="text" id="datobtel14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel15)"><input name="datobtel15" type="text" id="datobtel15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel16)"><input name="datobtel16" type="text" id="datobtel16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel17)"><input name="datobtel17" type="text" id="datobtel17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel18)"><input name="datobtel18" type="text" id="datobtel18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel19)"><input name="datobtel19" type="text" id="datobtel19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel110)"><input name="datobtel110" type="text" id="datobtel110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel112)">
</p>
	    <p align="left">Telefono móvil(Con lada - 10 dígitos):
          <input name="datobtel112" type="text" id="datobtel112" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel122)"><input name="datobtel122" type="text" id="datobtel122" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel132)"><input name="datobtel132" type="text" id="datobtel132" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel142)"><input name="datobtel142" type="text" id="datobtel142" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel152)"><input name="datobtel152" type="text" id="datobtel152" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel162)"><input name="datobtel162" type="text" id="datobtel162" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel172)"><input name="datobtel172" type="text" id="datobtel172" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel182)"><input name="datobtel182" type="text" id="datobtel182" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel192)"><input name="datobtel192" type="text" id="datobtel192" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1102)"><input name="datobtel1102" type="text" id="datobtel1102" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,obsol1)">
</p>
	    <p align="left">
	      <input name="obsol1" type="text" id="obsol1" size="48px" placeholder="Obligado Solidario (Nombre (s), apellido paterno, apellido materno )">
	      sexo: M
          <input name="datobsex11" type="radio" value="M">
F
<input name="datobsex11" type="radio" value="F">
Fecha de nacimiento:
<input name="datobfechnac1d2" type="text" id="datobfechnac1d2" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac1m2)">
<input name="datobfechnac1m2" type="text" id="datobfechnac1m2" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,datobfechnac1a2)">
<input name="datobfechnac1a2" type="text" id="datobfechnac1a2" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,datobnom22)">
	    </p>
	    <p align="left">
	      <input name="datobnom22" type="text" id="datobnom22" size="30px" placeholder="R.F.C. con homoclave">
          <input name="datobappat22" type="text" id="datobappat22" size="30px" placeholder="CURP">
          <input name="datobapmat22" type="text" id="datobapmat22" size="30px" placeholder="Edad">
</p>
	    <hr>
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO (2) PERSONA FÍSICA</strong></p>
	    <p align="left">
	      <input name="datobnom2" type="text" id="datobnom2" size="30px" placeholder="Nombre(s)">
          <input name="datobappat2" type="text" id="datobappat2" size="30px" placeholder="Apellido Paterno">
          <input name="datobapmat2" type="text" id="datobapmat2" size="30px" placeholder="Apellido Materno">
</p>
	    <p align="left">
          <input name="datobdir2" type="text" id="datobdir2" size="48px" placeholder="Dirección / Calle y número">
          <input name="datobcol2" type="text" id="datobcol2" size="48px" placeholder="Colonia">
        </p>
	    <p align="left">
          <input name="datobcd2" type="text" id="datobcd2" size="20px" placeholder="Ciudad">
          <input name="datoblugnac2" type="text" id="datoblugnac2" size="30px" placeholder="Lugar nacimiento (País y Edo.)">
	      Tiene propiedad a su nombre? Si
  <input name="datobprop2" type="radio" value="Si">
	      No
  <input name="datobprop2" type="radio" value="No">
        </p>
	    <p align="left">
          <input name="datobedo2" type="text" id="datobedo2" size="30px" placeholder="Estado">
          <input name="datobcp2" type="text" id="datobcp2" size="30px" placeholder="C.P.">
          <input  name="datobmail2" type="text" id="datobmail2" size="30px" placeholder="Email">
        </p>
	    <p align="left">sexo: M
	      <input name="datobsex2" type="radio" value="M">
	      F
  <input name="datobsex2" type="radio" value="F">
	      Fecha de nacimiento:
  <input name="datobfechnac2d" type="text" id="datobfechnac2d" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac2m)"><input name="datobfechnac2m" type="text" id="datobfechnac2m" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,datobfechnac2a)"><input name="datobfechnac2a" type="text" id="datobfechnac2a" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,datobed2)">
  <input name="datobed2" type="text" id="datobed2" size="2px" placeholder="Edad">
    <input name="datobcurp2" type="text" id="datobcurp2" size="22px" placeholder="CURP">
        </p>
	    <p align="left">RFC con homoclave:
	      <input name="datobrfc21" type="text" id="datobrfc21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc22)"><input name="datobrfc22" type="text" id="datobrfc22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc23)"><input name="datobrfc23" type="text" id="datobrfc23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc24)"><input name="datobrfc24" type="text" id="datobrfc24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc25)"><input name="datobrfc25" type="text" id="datobrfc25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc26)"><input name="datobrfc26" type="text" id="datobrfc26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc27)"><input name="datobrfc27" type="text" id="datobrfc27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc28)"><input name="datobrfc28" type="text" id="datobrfc28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc29)"><input name="datobrfc29" type="text" id="datobrfc29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc210)"><input name="datobrfc210" type="text" id="datobrfc210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc211)"><input name="datobrfc211" type="text" id="datobrfc211" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc212)"><input name="datobrfc212" type="text" id="datobrfc212" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc213)"><input name="datobrfc213" type="text" id="datobrfc213" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel21)">
        </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
	      <input name="datobtel21" type="text" id="datobtel21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel22)"><input name="datobtel22" type="text" id="datobtel22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel23)"><input name="datobtel23" type="text" id="datobtel23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel24)"><input name="datobtel24" type="text" id="datobtel24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel25)"><input name="datobtel25" type="text" id="datobtel25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel26)"><input name="datobtel26" type="text" id="datobtel26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel27)"><input name="datobtel27" type="text" id="datobtel27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel28)"><input name="datobtel28" type="text" id="datobtel28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel29)"><input name="datobtel29" type="text" id="datobtel29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel210)"><input name="datobtel210" type="text" id="datobtel210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1122)">
        </p>
	    <p align="left">Telefono móvil(Con lada - 10 dígitos):
          <input name="datobtel1122" type="text" id="datobtel1122" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1222)">
          <input name="datobtel1222" type="text" id="datobtel1222" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1322)">
          <input name="datobtel1322" type="text" id="datobtel1322" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1422)">
          <input name="datobtel1422" type="text" id="datobtel1422" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1522)">
          <input name="datobtel1522" type="text" id="datobtel1522" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1622)">
          <input name="datobtel1622" type="text" id="datobtel1622" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1722)">
          <input name="datobtel1722" type="text" id="datobtel1722" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1822)">
          <input name="datobtel1822" type="text" id="datobtel1822" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1922)">
          <input name="datobtel1922" type="text" id="datobtel1922" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel11022)">
          <input name="datobtel11022" type="text" id="datobtel11022" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,obsol2)">
</p>
	    <p align="left">
	      <input name="obsol2" type="text" id="obsol2" size="48px" placeholder="Obligado Solidario (Nombre (s), apellido paterno, apellido materno )">
sexo: M
<input name="datobsex22" type="radio" value="M">
F
<input name="datobsex22" type="radio" value="F">
Fecha de nacimiento:
<input name="datobfechnac1d22" type="text" id="datobfechnac1d22" size="1px" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac1m22)">
<input name="datobfechnac1m22" type="text" id="datobfechnac1m22" size="1px" maxlength="2" placeholder="mm" onKeyUp="myFunction(this,this.value,datobfechnac1a22)">
<input name="datobfechnac1a22" type="text" id="datobfechnac1a22" size="1px" maxlength="4" placeholder="aaaa" onKeyUp="myFunction(this,this.value,datobnom222)">
</p>
	    <p align="left">
          <input name="datobnom222" type="text" id="datobnom222" size="30px" placeholder="R.F.C. con homoclave">
          <input name="datobappat222" type="text" id="datobappat222" size="30px" placeholder="CURP">
          <input name="datobapmat222" type="text" id="datobapmat222" size="30px" placeholder="Edad">
        </p>
	    <hr>
	    <p align="left"><strong>AUTORIZACIÓN RELATIVA A LA INVESTIGACION DEL HISTORIAL CREDITICIO DEL REPRESENTANTE LEGAL Y/U OBLIGADO SOLIDARIO Y/O PRINCIPAL INVERSIONISTA, PERSONA FISICA </strong></p>
	    <p align="left">
	      <input name="datobnom2222" type="text" id="datobnom2222" size="30px" placeholder="Nombre del Representante Legal:">
          <input name="datobappat2222" type="text" id="datobappat2222" size="30px" placeholder="RFC del Representante Legal:">
	    </p>
	    <p align="left">
	      <input name="datobdir22" type="text" id="datobdir22" size="48px" placeholder="Calle y No.:">
          <input name="datobcol23" type="text" id="datobcol23" size="48px" placeholder="Colonia:">
</p>
	    <p align="left">
	      <input name="colsol22" type="text" id="colsol22" size="49px" placeholder="Ciudad:">
          <input name="cdsol22" type="text" id="cdsol22" size="20px" placeholder="Estado:">
          <input name="lugnacsol22" type="text" id="lugnacsol22" size="20px" placeholder="Código Postal:">
          <input name="cpsol22" type="text" id="cpsol22" size="20px" placeholder="Teléfono(s):">
</p>
	    <p align="left">
	      <input name="datobnom22222" type="text" id="datobnom22222" size="30px" placeholder="Nombre y firma del Obligado Solidario Persona Física:">
          <input name="datobappat22222" type="text" id="datobappat22222" size="30px" placeholder="RFC del Obligado Solidario Persona Física:">
	    </p>
	    <p align="left">
	      <input name="datobdir222" type="text" id="datobdir222" size="48px" placeholder="Calle y No.:">
          <input name="datobcol232" type="text" id="datobcol232" size="48px" placeholder="Colonia">
</p>
	    <p align="left">
	      <input name="colsol222" type="text" id="colsol222" size="49px" placeholder="Ciudad:">
          <input name="cdsol222" type="text" id="cdsol222" size="20px" placeholder="Estado:">
          <input name="lugnacsol222" type="text" id="lugnacsol222" size="20px" placeholder="Código Postal:">
          <input name="cpsol222" type="text" id="cpsol222" size="20px" placeholder="Teléfono(s):">
</p>
	    <hr>
	    <p align="justify">
	      <input name="clavcon" type="text" id="clavcon" size="30px" placeholder="Clave Consesionario o Distribuidor">
          <input name="nomcons" type="text" id="nomcons" size="30px" placeholder="Nombre Concesionario o Distribuidor">
          <input name="fecha" type="text" id="fecha" value="<?php echo date("Y-m-d");?>" size="10px" readonly>
</p>
	    <p align="justify">
	      <input name="nomvend" type="text" id="nomvend" size="48px" placeholder="Nombre del Vendedor">
          <input name="gerentegral" type="text" id="gerentegral" size="48px" placeholder="Nombre y firma del Gerente General">
</p>
	   
	    <hr>
		
		 <p align="justify">
		 </p>
		</div>

        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
		<!--datos generales termina aqui-->

  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" onClick="window.scrollTo(0,0)" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-block">



		<div id="riesgo" >
		<h4 align="center">FORMATO DE IDENTIFICACIÓN DEL CLIENTE POR CLASIFICACIÓN DE RIESGO&nbsp;</h4>
		<h4 align="left">Datos generales del cliente</h4> 
		<p align="left">Tipo de Cliente: Nuevo <input name="escliente" type="radio" value="1">
		 Actualización <input name="escliente" type="radio" value="2">
		</p>
		<table width="100%" border="0">
            <tr>
              <td width="22%">Nombre o razón social </td>
              <td width="78%"><input name="textfield" type="text" id="textfield" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Número de cliente </td>
              <td><input name="textfield2" type="text" id="textfield2" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Domicilio particular(Calle, número) </td>
              <td><input name="textfield3" type="text" id="textfield3" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield4" type="text" id="textfield4" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Delegación o municipio </td>
              <td><input name="textfield5" type="text" id="textfield5" size="100%" ></td>
            </tr>
            <tr>
              <td>Estado o provincia </td>
              <td><input name="textfield6" type="text" id="textfield6" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Fecha de nacimiento o constitución </td>
              <td><input name="textfield7" type="text" id="textfield7" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Código postal </td>
              <td><input name="textfield8" type="text" id="textfield8" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Ciudad o población </td>
              <td><input name="textfield9" type="text" id="textfield9" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield10" type="text" id="textfield10" size="100%" ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield11" type="text" id="textfield11" size="100%" readonly="" ></td>
            </tr>
          </table>
		  <p>&nbsp;</p>
		  <h4 align="left">Calificación del grado de riesgo</h4>
		  <table width="100%" border="0">
            <tr>
              <td width="32%">Actividad | Objeto Social </td>
              <td width="68%"><select name="select" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">Vulnerable</option>
                <option value="2">Informal</option>
                <option value="1">Otra</option>
              </select>
              </td>
            </tr>
            <tr>
              <td>Antigüedad del cliente </td>
              <td><select name="select2" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">1-3 años</option>
                <option value="2">4-6 años</option>
                <option value="1">7-10 años</option>
                <option value="0">N/A</option>
                                          </select></td>
            </tr>
            <tr>
              <td>Naturaleza de las operaciones </td>
              <td><select name="select3" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">Prestamo</option>
                <option value="2">Arrendamiento</option>
                <option value="3">Otros</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Beneficiarios </td>
              <td><select name="select4" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1 a 2</option>
                <option value="2">3 a 4</option>
                <option value="3">5 o mas</option>
                <option value="0">N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Terceros Relacionados (Apoderados y Cotitulares) </td>
              <td><select name="select5" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1 a 2</option>
                <option value="2">3 a 4</option>
                <option value="3">5 o mas</option>
                <option value="0">N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>PEPs Relacionados </td>
              <td><select name="select6" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1% - 49%</option>
                <option value="2">50% - 74%</option>
                <option value="3">75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Alerta Reputacional </td>
              <td><select name="select7" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1% - 49%</option>
                <option value="2">50% - 74%</option>
                <option value="3">75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Volumen esperado (Monto) </td>
              <td><select name="select8" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">$18000 - $20000</option>
                <option value="2">$21000 - $25000</option>
                <option value="3">mas de $25000</option>
                            </select></td>
            </tr>
            <tr>
              <td>Frecuencia esperada (No. Veces) </td>
              <td><select name="select9" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">1 a 3</option>
                <option value="2">4 a 6</option>
                <option value="3">7 a 10</option>
                            </select></td>
            </tr>
            <tr>
              <td>Instrumento Monetario Utilizado </td>
              <td><select name="select10" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">Transferencia</option>
                <option value="2">Cheque</option>
                <option value="3">Efectivo</option>
                            </select></td>
            </tr>
            <tr>
              <td>Canales o Medios Utilizados </td>
              <td><select name="select11" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">Agencia</option>
                <option value="2">Internet</option>
                <option value="3">Otro</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Oficial </td>
              <td><select name="select12" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia </td>
              <td><select name="select13" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Operación </td>
              <td><select name="select14" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="3">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>Origen de los recursos </td>
              <td><select name="select15" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>Destino de los recursos </td>
              <td><select name="select16" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia de Terceros Relacionados </td>
              <td><select name="select17" size="1" style="width:60%;">
                <option value="---" selected>---</option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
          </table>
		  <p align="left">&nbsp;</p>
		  <p align="justify">
		    </p>
		
		</div>
		   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
		<!--formato de riesgo termina aqui-->
		  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed"  data-toggle="collapse" onClick="window.scrollTo(0,0)" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" >
      <div class="card-block">

		<div id="identificacion" >
          <h4>FORMATO DE IDENTIFICACION, CONOCIMIENTO DEL CLIENTE Y CONSTANCIA DE ENTREVISTA</h4>
          <h6 align="left">PERSONA FÍSICA Y RELACIONADOS </h6>
          <table width="100%" border="0">
            <tr>
              <td width="28%">Apellido Paterno </td>
              <td width="72%"><input name="textfield12" type="text" id="textfield12" size="100%" ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield13" type="text" id="textfield13" size="100%"  ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield14" type="text" id="textfield14" size="100%" ></td>
            </tr>
            <tr>
              <td>Género</td>
              <td><input name="textfield15" type="text" id="textfield15" size="100%"  ></td>
            </tr>
            <tr>
              <td>Lugar de Nacimiento (Estado y País) </td>
              <td><input name="textfield16" type="text" id="textfield16" size="100%" ></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield17" type="text" id="textfield17" size="100%"  ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield18" type="text" id="textfield18" size="100%" ></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="textfield19" type="text" id="textfield19" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield20" type="text" id="textfield20" size="100%" ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield21" type="text" id="textfield21" size="100%"  ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield22" type="text" id="textfield22" size="100%"  ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield23" type="text" id="textfield23" size="100%" ></td>
            </tr>
            <tr>
              <td>Ciudad</td>
              <td><input name="textfield24" type="text" id="textfield24" size="100%"  ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield25" type="text" id="textfield25" size="100%"  ></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield26" type="text" id="textfield26" size="100%" ></td>
            </tr>
            <tr>
              <td>Correo Electrónico </td>
              <td><input name="textfield27" type="text" id="textfield27" size="100%"  ></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield28" type="text" id="textfield28" size="100%"  ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield29" type="text" id="textfield29" size="100%"  ></td>
            </tr>
            <tr>
              <td>Numero de serie de la FIEL*</td>
              <td><input name="textfield30" type="text" id="textfield30" size="100%"  ></td>
            </tr>
            <tr>
              <td>Nacionalidad</td>
              <td><input name="textfield31" type="text" id="textfield31" size="100%"  ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield32" type="text" id="textfield32" size="100%"  ></td>
            </tr>
            <tr>
              <td>Nombre de la Empresa y Giro (donde labora) </td>
              <td><input name="textfield33" type="text" id="textfield33" size="100%"  ></td>
            </tr>
            <tr>
              <td>Domicilio donde labora </td>
              <td><input name="textfield34" type="text" id="textfield34" size="100%" ></td>
            </tr>
            <tr>
              <td>Sueldo o ingreso mensual </td>
              <td><input name="textfield35" type="text" id="textfield35" size="100%" ></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield36" type="text" id="textfield36" size="100%"  ></td>
            </tr>
            <tr>
              <td>Actividad Económica Adicional </td>
              <td><input name="textfield37" type="text" id="textfield37" size="100%" ></td>
            </tr>
            <tr>
              <td>Ingresos Adicionales Mensuales Apox </td>
              <td><input name="textfield38" type="text" id="textfield38" size="100%"  ></td>
            </tr>
          </table>
		  <br>
          <hr>
		  <br>
          <h6 align="left">DOCUMENTACION DE IDENTIFICACION </h6>
          <table width="100%" border="0">
            <tr>
              <td width="21%">Credencial para votar </td>
              <td width="35%"><input name="textfield39" type="text" id="textfield39" size="50%" ></td>
              <td width="15%">&nbsp;</td>
              <td width="29%">&nbsp;</td>
            </tr>
            <tr>
              <td>Pasaporte cedula profesional </td>
              <td><input name="textfield40" type="text" id="textfield40" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td>Si:
              <input name="copias" type="radio" value="1">
              No:
              <input name="copias" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Cartilla de servicio militar </td>
              <td><input name="textfield41" type="text" id="textfield41" size="50%" ></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Licencia para conducir </td>
              <td><input name="textfield42" type="text" id="textfield42" size="50%"  ></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Otra</td>
              <td><input name="textfield43" type="text" id="textfield43" size="50%"  ></td>
              <td>Se cotejo vs original: </td>
              <td>Si:
                <input name="cotejo" type="radio" value="1">
No:
<input name="cotejo" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Especificar</td>
              <td><input name="textfield44" type="text" id="textfield44" size="50%"  ></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
		  <BR>
		  <p align="left">OTROS DOCUMENTOS QUE SE ADJUNTAN:</p>
		  <table width="100%" border="0">
            <tr>
              <td width="30%">Se adjunta CURP y/o cédula RFC, FEA* </td>
              <td width="70%">Si:
                <input name="adjuntos1" type="radio" value="1">
No:
<input name="adjuntos1" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Se adjunta comprobante de domicilio </td>
              <td>Si:
                <input name="adjuntos2" type="radio" value="1">
No:
<input name="adjuntos2" type="radio" value="2"></td>
            </tr>
            <tr>
              <td>Fecha del comprobante de domicilio </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Domicilio manifestado coincide con la ID</td>
              <td>Si:
                <input name="adjuntos3" type="radio" value="1">
No:
<input name="adjuntos3" type="radio" value="2"></td>
            </tr>
          </table>
		  <br>
		  <p align="left" style="font-size:8px;">*Cuando cuente con ellas. <br>No será necesario presentar la constancia de la Clave Única de Registro de Población si ésta aparece en otro documento o identificación oficial;</p>
		
		  <hr>
		  <br>
          <H6 align="left">BENEFICIARIO</H6>
          <table width="100%" border="0">
            <tr>
              <td width="18%">Apellido Paterno </td>
              <td width="82%"><input name="textfield45" type="text" id="textfield45" size="50%"  ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield46" type="text" id="textfield46" size="50%"  ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield47" type="text" id="textfield47" size="50%" ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield48" type="text" id="textfield48" size="50%"  ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield49" type="text" id="textfield49" size="50%" ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield50" type="text" id="textfield50" size="50%"  ></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield51" type="text" id="textfield51" size="50%" ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield52" type="text" id="textfield52" size="50%" ></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield53" type="text" id="textfield53" size="50%" ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield54" type="text" id="textfield54" size="50%" ></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield55" type="text" id="textfield55" size="50%"  ></td>
            </tr>
            <tr>
              <td>Porciento</td>
              <td><input name="textfield56" type="text" id="textfield56" size="50%"  ></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield57" type="text" id="textfield57" size="50%" ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield58" type="text" id="textfield58" size="50%" ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield59" type="text" id="textfield59" size="50%"></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield60" type="text" id="textfield60" size="50%" ></td>
            </tr>
            <tr>
              <td>Sociedad Conyugal </td>
              <td><input name="textfield61" type="text" id="textfield61" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield62" type="text" id="textfield62" size="50%"  ></td>
            </tr>
            <tr>
              <td>PEP´s</td>
              <td><input name="textfield63" type="text" id="textfield63" size="50%" ></td>
            </tr>
            <tr>
              <td>Origen de los Recursos </td>
              <td><input name="textfield64" type="text" id="textfield64" size="50%"  ></td>
            </tr>
          </table>
		  <br>
		  <hr>
		  <br>
          <H6 align="left">PERFIL TRANSACCIONAL INICIAL</H6>
          <table width="100%" border="0">
            <tr>
              <td width="21%">Ingresos Comprobable(1) </td>
              <td width="39%"><input name="textfield65" type="text" id="textfield65" size="50%"  ></td>
              <td width="7%">Fuente</td>
              <td width="33%"><input name="textfield66" type="text" id="textfield66" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(2) </td>
              <td><input name="textfield67" type="text" id="textfield67" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield68" type="text" id="textfield68" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(3) </td>
              <td><input name="textfield69" type="text" id="textfield69" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield70" type="text" id="textfield70" size="50%" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(4) </td>
              <td><input name="textfield71" type="text" id="textfield71" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield72" type="text" id="textfield72" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(5) </td>
              <td><input name="textfield73" type="text" id="textfield73" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield74" type="text" id="textfield74" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(1) </td>
              <td><input name="textfield75" type="text" id="textfield75" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield76" type="text" id="textfield76" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(2)</td>
              <td><input name="textfield77" type="text" id="textfield77" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield78" type="text" id="textfield78" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(3)</td>
              <td><input name="textfield79" type="text" id="textfield79" size="50%" ></td>
              <td>Fuente</td>
              <td><input name="textfield80" type="text" id="textfield80" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(4)</td>
              <td><input name="textfield81" type="text" id="textfield81" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield82" type="text" id="textfield82" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(5)</td>
              <td><input name="textfield83" type="text" id="textfield83" size="50%"  ></td>
              <td>Fuente</td>
              <td><input name="textfield84" type="text" id="textfield84" size="50%"  ></td>
            </tr>
          </table>
		  <br>
          <table width="100%" border="0">
            <tr>
              <td width="19%">Total de Ingresos </td>
              <td width="81%"><input name="textfield85" type="text" id="textfield85" size="50%"  ></td>
            </tr>
            <tr>
              <td>Valor del Automóvil </td>
              <td><input name="textfield86" type="text" id="textfield86" size="50%"  ></td>
            </tr>
            <tr>
              <td>Enganche del Automóvil </td>
              <td><input name="textfield87" type="text" id="textfield87" size="50%"  ></td>
            </tr>
            <tr>
              <td>Porcentaje de Enganche </td>
              <td><input name="textfield88" type="text" id="textfield88" size="50%" ></td>
            </tr>
            <tr>
              <td>Porcentaje de Financieamiento </td>
              <td><input name="textfield89" type="text" id="textfield89" size="50%" ></td>
            </tr>
            <tr>
              <td>Monto Financiado </td>
              <td><input name="textfield90" type="text" id="textfield90" size="50%"  ></td>
            </tr>
            <tr>
              <td>Plazo (meses)</td>
              <td><input name="textfield91" type="text" id="textfield91" size="50%" ></td>
            </tr>
            <tr>
              <td>Pago Mensual Esperado </td>
              <td><input name="textfield92" type="text" id="textfield92" size="50%" ></td>
            </tr>
          </table>
		  
		  <br>
	      <p align="left">¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?<br>
	        Si:
                <input name="PEPS" type="radio" value="1">
No:
<input name="PEPS" type="radio" value="2">
	      </p>
	      <p align="left">En caso de si:</p>
	      <table width="100%" border="0">
            <tr>
              <td width="18%">¿Quién? (Nombre) </td>
              <td width="82%"><input name="textfield93" type="text" id="textfield93" size="50%" ></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield94" type="text" id="textfield94" size="50%" ></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield95" type="text" id="textfield95" size="50%"  ></td>
            </tr>
          </table>
	      <p align="left">&nbsp; </p>
	      <hr>
		  <br>
          
          <p align="justify">
         <input name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="window.location.href='indexmenu.php'">
            <input name="aceptar" type="submit" id="aceptar" value="Aceptar">
            <input name="regresar" type="button" id="regresar" value="Regresar" onClick="regreso2()">
          </p>
        </div>
	
		
		    		 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
         
		
		
	  </form>
	  </div>
	</div>
	
</section>
<!-- footer -->
<footer>
	<div class="container_24">
		<div class="wrapper">
			<div class="grid_24"><a href="index.html" class="link"></a> &copy; 2012</div>
		</div>
	</div>
</footer>  
</body>
</html>
