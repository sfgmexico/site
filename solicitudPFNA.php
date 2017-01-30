<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<script src="js/vendor/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="js/js/css/foundation.css">
    <link rel="stylesheet" href="js/js/css/foundation.min.css">
    <link rel="stylesheet" href="js/js/css/app.css">
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
</head>
<body >
<!-- header -->
<header>
<script>

$( document ).ready(function() {

$('form#form1').find('input').each(function(){  
if(this.id=="fechnacsol" || this.id=="desdesol" || this.id=="aperbanc1d" || this.id=="aperbanc1d2"  || this.id=="inicoper1" || this.id=="datobfechnac1d"  || this.id=="datobfechnac2d"){
    $fecha=$(this);
    if ($fecha[0].type!="date"){
      $fecha.datepicker({ dateFormat: 'yy-mm-dd' ,changeMonth: true,changeYear: true} );
      }
      console.log( "ready!" );   
  }

  
 });
});


    
   










function Validacioncampos(){
 
var requerido=0;
//seccion del solicitante
$('#secSolicitante').find('input').each(function(){  
  if(document.getElementById("nomsol").value!="" && document.getElementById("apepasol").value!="" ){


  if(this.id=="segnomsol" || this.id=="apemasol" || this.id=="movsol12"||this.id=="movsol22"||this.id=="movsol32"||this.id=="movsol42"||this.id=="movsol52"||this.id=="movsol62"||this.id=="movsol72"||this.id=="movsol82"||this.id=="movsol92"||this.id=="movsol102"){
    $(this).prop('required',false);
    
  }else{
    $(this).prop('required',true);
    
  }

  }else{
    $(this).prop('required',false);

 }
});
////SECCION DE REFERENCIAS PERSONALES 1 
$('#secRefPersonales1').find('input').each(function(){  
  
  if(document.getElementById("nomref1").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }
});
//SECCION DE REFERENCIAS PERSONALES 2 
$('#secRefPersonales2').find('input').each(function(){  
  
  if(document.getElementById("nomref2").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }
});
///SECCION DE REFERENCIAS BANCARIAS 1
$('#secRefBancarias1').find('input').each(function(){
  
  if(document.getElementById("refbanc").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }

});
///SECCION DE REFERENCIAS BANCARIAS 2
$('#secRefBancarias2').find('input').each(function(){
  
  if(document.getElementById("refbanc2").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }

});
///SECCION DE REFERENCIAS COMERCIALES 1
$('#secRefComerciales1').find('input').each(function(){
  
  if(document.getElementById("refcomemp1").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }

});
///SECCION DE REFERENCIAS COMERCIALES 2
$('#secRefComerciales2').find('input').each(function(){
  
  if(document.getElementById("refcomemp2").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }

});
///SECCION DE CARGO DIRECTO 
$('#secCarDirecto').find('input').each(function(){
  
  if(document.getElementById("cargdir").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }

});
//SECCION DEL CONYUGE 
$('#secDatConyuge').find('input').each(function(){
  
  if(document.getElementById("conyunom").value!="" && document.getElementById("conyuape1").value!=""){
    if(this.id=="conyuape2"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
///SECCION OBLIGADO SOLIDARIO PERSONA MORAL 
$('#secDatObligadoPersonaMoral').find('input').each(function(){
  
  if(document.getElementById("nomrazsoc").value!="" ){
    if(this.id=="faxpermor1" || this.id=="faxpermor2" || this.id=="faxpermor3" || this.id=="faxpermor4" || this.id=="faxpermor5" || this.id=="faxpermor6" || this.id=="faxpermor7" || this.id=="faxpermor8" || this.id=="faxpermor9" || this.id=="faxpermor10"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
///SECCION OBLIGADO SOLIDARIO PERSONA FISICA 1 
$('#secDatObligadoSolidarioPF1').find('input').each(function(){
  
  if(document.getElementById("datobnom1").value!="" && document.getElementById("datobappat1").value!="" ){
    if(this.id=="datobapmat1"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
////SECCION OBLIGADO SOLIDARIO PERSONA FISICA
$('#secDatObligadoSolidarioPF2').find('input').each(function(){
  
  if(document.getElementById("datobnom2").value!="" && document.getElementById("datobappat2").value!="" ){
    if(this.id=="datobapmat2"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
///SECCION CREDENCIALES 
///INE
$('#secINE').find('input').each(function(){
  if(document.getElementById("textfield39").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///SECCION PASAPORTE CEDULA PROF
$('#secCedProfesional').find('input').each(function(){
  if(document.getElementById("textfield40").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///CARTILLA SERV MILITAR    
$('#secCarMilitar').find('input').each(function(){
  if(document.getElementById("textfield41").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///LICENCIA PARA CONDUCIR 
$('#secLicConducir').find('input').each(function(){
  if(document.getElementById("textfield42").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///OTRA IDENTIFICACION
$('#secOtrIdentificacion').find('input').each(function(){
  if(document.getElementById("textfield43").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
$('#secOtrIdentificacion2').find('input').each(function(){
  if(document.getElementById("textfield43").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
////SECCION DE BENEFICIARIO 
$('#secBeneficiario').find('input').each(function(){
  if(document.getElementById("textfield45").value!="" && document.getElementById("textfield47").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///SECCION PERFIL TRANSACCIONAL INICIAL 
$('#secPerTransaccional').find('input').each(function(){
 
  if(this.id=="textfield66" && document.getElementById("textfield65").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield68" && document.getElementById("textfield67").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield70" && document.getElementById("textfield69").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield72" && document.getElementById("textfield71").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield74" && document.getElementById("textfield73").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield76" && document.getElementById("textfield75").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield78" && document.getElementById("textfield77").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield80" && document.getElementById("textfield79").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield82" && document.getElementById("textfield81").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  if(this.id=="textfield84" && document.getElementById("textfield83").value!="" ){ $(this).prop('required',true);}else{ $(this).prop('required',false);}
  
});
///SECCION PEPS 
$('#secPEPS').find('input').each(function(){
 
  if($('input:radio[name=PEPS]:checked').val()=="1" ){ 
    $(this).prop('required',true);
    }else{
      $(this).prop('required',false);
    }
});

var pagina=1;
///ciclo de seleccion de pagina
$('form#form1').find('input').each(function(){
  

      
      if(this.id=="escliente1"){
        pagina=2;
      }
      if(this.id=="textfield12"){
        pagina=3;
      }


if(($(this).prop('required') && this.value=="") || ($(this).prop('required') && !$("#form1 input[name='"+this.name+"']:radio").is(':checked') && $(this).get(0).type == 'radio') ){
      
 


      alert("dentro: "+this.id);
    
      
      
      
      
        console.log("IR");



        if(pagina=="1"){
        $( '#uno' ).click ();
        window.scrollTo(0,0);
        this.focus();
        this.select();
        return false;
      }
      if(pagina=="2"){
        $( '#dos' ).click ();
        window.scrollTo(0,0);
        this.focus();
        this.select();
        return false;
      }
      if(pagina=="3"){
       
        this.focus();
        this.select();
        return false;
      }
        
        
    } else {
      console.log("NR");
    }
    
    return true;
});

}
</script>
	
</header>

<!-- content -->
<section>


	<div class="bg" align="center">
	  <div class="container_24" align="center">
	  <form name="form1" id="form1" action="templatePFNA.php" method="post"  data-abide novalidate onsubmit="Validacioncampos()">
	  
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








    <ul class="accordion" data-accordion>
   
        <li  class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title"> <label> <h4 id="uno">Solicitud PFNA</h4>
            <span class="form-error">
          Yo, you had better fill this out, it's required.
        </span></label></a>
            
                <div class="accordion-content" data-tab-content>
                     <div id="solicitud">
                     	       <div data-sticky-container="" class="sticky-container" style="height: 40.375px;">
  <div class="sticky is-at-top is-stuck" id="sticky-magellan" style="width: 100%; max-width: 555px; margin-top: 0em; bottom: auto; top: 0px;" data-sticky="a2lq9k-sticky" data-margin-top="0" data-margin-bottom="0" data-top-anchor="setup" data-btm-anchor="destroy:bottom" data-sticky-on="small" data-resize="sticky-magellan" data-events="resize">
    <nav data-magellan="8odbqt-magellan" class="sticky-mag stuck-mag" data-bar-offset="25" data-resize="cq4a0b-magellan" data-scroll="cq4a0b-magellan" id="cq4a0b-magellan" data-events="scroll">
      <ul class="horizontal menu expanded">
        <li><a href="#dos" class="">Clasificacion de riesgo</a></li>
        <li><a href="#tres" class="active">Constancia de entrevista</a></li>
      </ul>
    </nav>
  </div>
</div>
	    
	    <p align="left"><strong>DATOS DEL SOLICITANTE:</strong> 
            <div class="row">

    <div  class="small-4 columns">   <input  name="cliente" type="text" id="cliente" size="30px" onChange="window.location.href='ObtenInfo2.php?dato='+this.value+'&tipocliente=PFNA'" placeholder="Si es Cliente, número de cliente/contrato"> </div> 
          <input id="tipocredito1" name="tipocredito" type="radio" value="1" required><label for="tipocredito1">Leasing</label>
          <input id="tipocredito2" name="tipocredito" type="radio" value="2" required><label for="tipocredito2">Credit</label>
          <input id="tipocredito3"  name="tipocredito" type="radio" value="3" required><label for="tipocredito3">Premium Credit</label>

	    </p></div>

      <!-- empieza seccion del solicitante-->
      <div id="secSolicitante">
         <div class="row">
  
	    <p align="left">
	        <div class="small-3 columns"> <input name="nomsol" type="text" id="nomsol" placeholder="Primer Nombre" onChange="BuscaInfo()"  pattern="alpha"> </div> <div class="small-3 columns"> <input name="segnomsol" type="text" id="segnomsol" placeholder="Segundo Nombre" onChange="BuscaInfo()"   pattern="alpha"></div>  <div class="small-3 columns"> <input name="apepasol" type="text" id="apepasol" placeholder="Apellido Parteno" onChange="BuscaInfo()" pattern="alpha"></div>  <div class="small-3 columns"> <input name="apemasol" type="text" id="apemasol" placeholder="Apellido Materno" onChange="BuscaInfo()" pattern="alpha"></div>
</p></div>
	    <div class="row"><p align="left">RFC con homoclave:
             <div class="column small-10 ">
	    <div class="small-1 columns"><input name="rfc1" type="text" id="rfc1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc2)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc2" type="text" id="rfc2" size="1px" maxlength="1"onkeyup="myFunction(this,this.value,rfc3)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc3" type="text" id="rfc3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc4)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc4" type="text" id="rfc4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc5)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc5" type="text" id="rfc5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc6)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc6" type="text" id="rfc6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc7)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc7" type="text" id="rfc7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc8)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc8" type="text" id="rfc8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc9)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc9" type="text" id="rfc9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc10)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc10" type="text" id="rfc10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc11)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc11" type="text" id="rfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc12)" pattern="alpha_numeric"></div>
      <div class="small-1 columns"><input name="rfc12" type="text" id="rfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,rfc13)" pattern="alpha_numeric"></div></div>
      <div class="small-1 columns"><input name="rfc13" type="text" id="rfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol1)"pattern="alpha_numeric"></div>
 </p></div>

	    <div class="row"> <p align="left">Telefono partiular (Con lada - 10 dígitos) : 
             <div class="column small-10">
	    <div class="small-1 columns">  <input name="telsol1" type="text" id="telsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol2)" pattern="integer"></div><div class="small-1 columns"><input name="telsol2" type="text" id="telsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol3)" pattern="integer"></div><div class="small-1 columns"><input name="telsol3" type="text" id="telsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol4)" pattern="integer"></div><div class="small-1 columns"><input name="telsol4" type="text" id="telsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol5)" pattern="integer"></div><div class="small-1 columns"><input name="telsol5" type="text" id="telsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol6)" pattern="integer"></div><div class="small-1 columns"><input name="telsol6" type="text" id="telsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol7)" pattern="integer"></div><div class="small-1 columns"><input name="telsol7" type="text" id="telsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol8)" pattern="integer"></div><div class="small-1 columns"><input name="telsol8" type="text" id="telsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol9)" pattern="integer"></div><div class="small-1 columns"><input name="telsol9" type="text" id="telsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telsol10)" pattern="integer"></div><div class="small-1 columns"><input name="telsol10" type="text" id="telsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol1)" pattern="integer"></div>
	   </p></div></div> 

        <div class="row"> 

	    <p align="left">Telefono movil (Con lada - 10 dígitos):

            <div class="column small-10"><div class="small-1 columns"><input name="movsol1" type="text" id="movsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol2)"pattern="integer"></div><div class="small-1 columns"><input name="movsol2" type="text" id="movsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol3)"pattern="integer"></div><div class="small-1 columns"><input name="movsol3" type="text" id="movsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol4)"pattern="integer"></div><div class="small-1 columns"><input name="movsol4" type="text" id="movsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol5)"pattern="integer"></div><div class="small-1 columns"><input name="movsol5" type="text" id="movsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol6)"pattern="integer"></div><div class="small-1 columns"><input name="movsol6" type="text" id="movsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol7)"pattern="integer"></div><div class="small-1 columns"><input name="movsol7" type="text" id="movsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol8)"pattern="integer"></div><div class="small-1 columns"><input name="movsol8" type="text" id="movsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol9)"pattern="integer"></div><div class="small-1 columns"><input name="movsol9" type="text" id="movsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol10)"pattern="integer"></div><div class="small-1 columns"><input name="movsol10" type="text" id="movsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol12)"pattern="integer"> </div>
	    </p></div></div>


        <div class="row"> 

	    <p align="left">Fax (Con Lada) : 
<div class="column small-10">
	    <div class="small-1 columns">  <input name="movsol12" type="text" id="movsol12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol22)"pattern="integer"></div><div class="small-1 columns"><input name="movsol22" type="text" id="movsol22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol32)"pattern="integer"></div><div class="small-1 columns"><input name="movsol32" type="text" id="movsol32" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol42)"pattern="integer"></div><div class="small-1 columns"><input name="movsol42" type="text" id="movsol42" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol52)"pattern="integer"></div><div class="small-1 columns"><input name="movsol52" type="text" id="movsol52" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol62)"pattern="integer"></div><div class="small-1 columns"><input name="movsol62" type="text" id="movsol62" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol72)"pattern="integer"></div><div class="small-1 columns"><input name="movsol72" type="text" id="movsol72" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol82)"pattern="integer"></div><div class="small-1 columns"><input name="movsol82" type="text" id="movsol82" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol92)"pattern="integer"></div><div class="small-1 columns"><input name="movsol92" type="text" id="movsol92" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,movsol102)"pattern="integer"></div><div class="small-1 columns"><input name="movsol102" type="text" id="movsol102" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,dirsol)"pattern="integer"></div>
</p></div></div>
<div class="row"> 
	    <p align="left">
         <div class="small-3 columns"> <input name="mailsol" type="text" id="mailsol" size="20px" placeholder="Email" pattern="email"></div>
	    <div class="small-3 columns"> <input name="dirsol" type="text" id="dirsol" size="74px" placeholder="Dirección / Calle" pattern="text"></div>
         <div class="small-2 columns"> <input name="dirnumsol" type="text" id="dirnumsol" size="20px" placeholder="No #" pattern="alpha_numeric"></div>
		    <div class="small-3 columns"> <input name="colsol" type="text" id="colsol" size="49px" placeholder="Colonia" pattern="text"> </div>
	    </p>
</div>

<div class="row"> 
	    <p align="left">
		<div class="small-3 columns">  <input name="cdsol" type="text" id="cdsol" size="20px" placeholder="Ciudad"></div>
		<div class="small-3 columns"><input name="edosol" type="text" id="edosol" size="20px" placeholder="Estado"></div>
        <div class="small-3 columns">  <input name="lugnacsol" type="text" id="lugnacsol" size="20px" placeholder="Lugar de nacimiento (País y Estado)"></div>
		</p>
</div>   
<div class="row">
      <p align="left">
   <div class="small-5 columns" ><input name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P."  pattern="integer"></div>
   <div class="small-5 columns" ><input name="curpsol" type="text" id="curpsol" size="49px" placeholder="CURP"  pattern="alpha_numeric"></div>
   </p>
</div>     
		<hr>
	    <p align="left"><strong>DATOS GENERALES</strong> </p>
	    <p align="left">Sexo:
	      
	      <input id="sexsol1" name="sexsol" type="radio" value="M"><label for="sexsol1"> <i class="step fi-male size-72"></i> M</label> 
	       
	      <input id="sexsol2" name="sexsol" type="radio" value="F"><label for="sexsol2"> <i class="step fi-female size-72"></i> F</label>
	      Fecha de nacimiento: <input name="fechnacsol" type="date" id="fechnacsol" size="1px" maxlength="2" placeholder="dd" pattern="date">
	    </p>
      <div class="row">
         <p align="left">
          <div class="small-5 columns"><input name="edsol" type="text" id="edsol" size="2px" placeholder="Edad" pattern="integer"></div>
          <div class="small-5 columns"><input name="nacsol" type="text" id="nacsol" size="10px" placeholder="Nacionalidad"></div>
          <div class="small-5 columns"><input name="depensol" type="text" id="depensol" size="10px" placeholder="Num. Dependientes" pattern="integer"></div>
          <div class="small-5 columns"><input name="acdomsol" type="text" id="acdomsol" size="10px" placeholder="Acredita Domicilio con"></div>
      </p>
    </div>
	   <div class="row">
      <p align="left">vive en: <br>
        <input id="vivsol1" name="vivsol" type="radio" value="1"><label for="vivsol1">Casa Propia</label>
        <input id="vivsol2" name="vivsol" type="radio" value="2"><label for="vivsol2">Rentada</label>
        <input id="vivsol3" name="vivsol" type="radio" value="3"><label for="vivsol3">Hipotecada</label>
        <input id="vivsol4" name="vivsol" type="radio" value="4"><label for="vivsol4">Con familiares</label>
        <input name="impmenpag" type="text" id="impmenpag" placeholder="Importe mensual del pago" pattern="number">
      </p>
     </div>
	    <p align="left">Tiene una Propiedad a su nombre?: 
	      <input id="inmusol1" name="inmusol" type="radio" value="1"><label for="inmusol1">Si</label>
	      <input id="inmusol2" name="inmusol" type="radio" value="2"><label for="inmusol2">No</label>
	      <input name="arraisol" type="text" id="arraisol" placeholder="Arraigo en el domicilio desde el año" pattern="integer">
	    </p>
	    <p align="left">
	      <input name="anosol2" type="text" id="anosol2" size="20px" placeholder="Años de residir en la ciudad" pattern="integer">
        </p>
	      <p align="left">
                Beneficiario en caso de fallecimiento:
            <input name="benesol1" type="text" id="benesol1" size="20px" placeholder="Apellido Paterno"pattern="alpha">
            <input name="benesol2" type="text" id="benesol2" size="20px" placeholder="Apellido Materno"pattern="alpha">
            <input name="benesol3" type="text" id="benesol3" size="30px" placeholder="Nombre(s)">
          </p>
	    <p align="left">Estado civil:<br> 
		      <input id="civilsol1" name="civilsol" type="radio" value="1"><label for="civilsol1">Casado Bienes Mancomunados</label>
		      <input id="civilsol2" name="civilsol" type="radio" value="2"><label for="civilsol2">Casado Bienes Separados</label>
		      <input id="civilsol3" name="civilsol" type="radio" value="3"><label for="civilsol3">Viudo</label>
		      <input id="civilsol4" name="civilsol" type="radio" value="4"><label for="civilsol4">Divorciado</label>
		      <input id="civilsol5" name="civilsol" type="radio" value="5"><label for="civilsol5">Soltero</label>
	    </p>
	    <p align="left">Tiene Auto Propio: 
	      <input id="autosol1" name="autosol" type="radio" value="1"><label for="autosol1">Si</label>
        <input id="autosol2" name="autosol" type="radio" value="2"><label for="autosol2"> No</label>
        <input name="marcasol" type="text" id="marcasol" size="70px" placeholder="Especifique Marca y Tipo">
	    </p>
		<hr>
	    <p align="left"><strong>DATOS DE SU EMPLEO O PROFESIÓN</strong></p>
	    <p align="left">
	      <input name="giroprof" type="text" id="giroprof" size="40px" placeholder="Ocupación/Giro según alta o último cambio ante SHCP">
          <input name="depasol" type="text" id="depasol" size="30px" placeholder="Puesto">
          Antigüedad desde: <input name="desdesol" type="date" id="desdesol" size="1px" maxlength="2" placeholder="dd" >
          
</p>
	    <p align="left">
	      <input name="compasol" type="text" id="compasol" size="70px" placeholder="Compañía">
	      <input name="noempleados" type="text" id="noempleados"placeholder="Núm. de empleados"pattern="integer">
	    </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
	      <input name="compatelsol1" type="text" id="compatelsol1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol2)"pattern="integer"><input name="compatelsol2" type="text" id="compatelsol2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol3)"pattern="integer"><input name="compatelsol3" type="text" id="compatelsol3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol4)"pattern="integer"><input name="compatelsol4" type="text" id="compatelsol4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol5)"pattern="integer"><input name="compatelsol5" type="text" id="compatelsol5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol6)"pattern="integer"><input name="compatelsol6" type="text" id="compatelsol6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol7)"pattern="integer"><input name="compatelsol7" type="text" id="compatelsol7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol8)"pattern="integer"><input name="compatelsol8" type="text" id="compatelsol8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol9)"pattern="integer"><input name="compatelsol9" type="text" id="compatelsol9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsol10)"pattern="integer"><input name="compatelsol10" type="text" id="compatelsol10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,compatelsolext)"pattern="integer">
	      <input name="compatelsolext" type="text" id="compatelsolext" size="20px" placeholder="Extensión"pattern="integer">
	    </p>
	    <p align="left">
	      <input name="giroactreal" type="text" id="giroactreal" size="44px" placeholder="Giro del negocio: actividad que realiza">
          <input name="domneg" type="text" id="domneg" size="44px" placeholder="Domicilio del negocio:">
</p>

</div>
	    <hr>
      <div id="secRefPersonales1">
	    <p align="left"><strong>REFERENCIAS PERSONALES</strong></p>
	    <p align="left">
	      <input name="nomref1" type="text" id="nomref1" size="54px" placeholder="Nombre"onkeypress="return validaTexto(event)">
          <input name="parenref1" type="text" id="parenref1" size="40px" placeholder="Parentesco o relación"onkeypress="return validaTexto(event)">
</p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
          <input name="telref11" type="text" id="telref11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref12)"pattern="integer"><input name="telref12" type="text" id="telref12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref13)"pattern="integer"><input name="telref13" type="text" id="telref13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref14)"pattern="integer"><input name="telref14" type="text" id="telref14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref15)"pattern="integer"><input name="telref15" type="text" id="telref15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref16)"pattern="integer"><input name="telref16" type="text" id="telref16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref17)"pattern="integer"><input name="telref17" type="text" id="telref17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref18)"pattern="integer"><input name="telref18" type="text" id="telref18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref19)"pattern="integer"><input name="telref19" type="text" id="telref19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref110)"pattern="integer"><input name="telref110" type="text" id="telref110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,nomref2)"pattern="integer">
	    </p>
      </div>
      <div id="secRefPersonales2">
		<p align="left">
	      <input name="nomref2" type="text" id="nomref2" size="54px" placeholder="Nombre"onkeypress="return validaTexto(event)">
          <input name="parenref2" type="text" id="parenref2" size="40px" placeholder="Parentesco o relación"onkeypress="return validaTexto(event)">
</p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
          <input name="telref21" type="text" id="telref21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref22)"pattern="integer"><input name="telref22" type="text" id="telref22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref23)"pattern="integer"><input name="telref23" type="text" id="telref23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref24)"pattern="integer"><input name="telref24" type="text" id="telref24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref25)"pattern="integer"><input name="telref25" type="text" id="telref25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref26)"pattern="integer"><input name="telref26" type="text" id="telref26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref27)"pattern="integer"><input name="telref27" type="text" id="telref27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref28)"pattern="integer"><input name="telref28" type="text" id="telref28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref29)"pattern="integer"><input name="telref29" type="text" id="telref29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telref210)"pattern="integer"><input name="telref210" type="text" id="telref210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,refbanc)"pattern="integer">
	    </p>
      </div>
		<hr>
    <div id="secRefBancarias1">
	    <p align="left"><strong>REFERENCIAS BANCARIAS (TARJETA DE CRÉDITO)</strong></p>
	    <p align="left">
	      <input name="refbanc" type="text" id="refbanc" size="54px" placeholder="Banco">
          <input name="numcuebanc" type="text" id="numcuebanc" size="40px" placeholder="Número de cuenta">
</p>
	    <p align="left">
	      <input name="sucbanc1" type="text" id="sucbanc1" size="54px" placeholder="Sucursal">
	      Fecha de apertura: 
	      <input name="aperbanc1d" type="date" id="aperbanc1d" size="1" placeholder="dd" >
	    </p>
      </div>
      <div id="secRefBancarias2">
	    <p align="left">
	      <input name="refbanc2" type="text" id="refbanc2" size="54px" placeholder="Banco">
          <input name="tarjrefbanc" type="text" id="tarjrefbanc" size="40px" placeholder="Número de Tarjeta de Crédito">
</p>
	    <p align="left">
          <input name="sucbanc2" type="text" id="sucbanc2" size="54px" placeholder="Sucursal">
	      Fecha de apertura:
  <input name="aperbanc1d2" type="date" id="aperbanc1d2" size="1" placeholder="dd" >
        </p>
        </div>
		<hr>
    <div id="secRefComerciales1">
	    <p align="left"><strong>REFERENCIAS COMERCIALES</strong></p>
	    <p align="left">
	      <input name="refcomemp1" type="text" id="refcomemp1" size="50px" placeholder="Empresa">
	      Telefono(Con lada - 10 dígitos):
          <input name="telrefcom11" type="text" id="telrefcom11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom12)"pattern="integer"><input name="telrefcom12" type="text" id="telrefcom12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom13)"pattern="integer"><input name="telrefcom13" type="text" id="telrefcom13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom14)"pattern="integer"><input name="telrefcom14" type="text" id="telrefcom14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom15)"pattern="integer"><input name="telrefcom15" type="text" id="telrefcom15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom16)"pattern="integer"><input name="telrefcom16" type="text" id="telrefcom16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom17)"pattern="integer"><input name="telrefcom17" type="text" id="telrefcom17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom18)"pattern="integer"><input name="telrefcom18" type="text" id="telrefcom18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom19)"pattern="integer"><input name="telrefcom19" type="text" id="telrefcom19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom110)"pattern="integer"><input name="telrefcom110" type="text" id="telrefcom110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom1)"pattern="integer">
	    </p>
	    <p align="left">
	      <input name="antirefcom1" type="text" id="antirefcom1" placeholder="Antigüedad Desde el Año"pattern="integer">
	    </p>
      </div>
      <div id="secRefComerciales2">
	    <p align="left">
	      <input name="refcomemp2" type="text" id="refcomemp2" size="50px" placeholder="Empresa">
Telefono(Con lada - 10 dígitos):
<input name="telrefcom21" type="text" id="telrefcom21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom22)"pattern="integer"><input name="telrefcom22" type="text" id="telrefcom22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom23)"pattern="integer"><input name="telrefcom23" type="text" id="telrefcom23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom24)"pattern="integer"><input name="telrefcom24" type="text" id="telrefcom24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom25)"pattern="integer"><input name="telrefcom25" type="text" id="telrefcom25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom26)"pattern="integer"><input name="telrefcom26" type="text" id="telrefcom26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom27)"pattern="integer"><input name="telrefcom27" type="text" id="telrefcom27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom28)"pattern="integer"><input name="telrefcom28" type="text" id="telrefcom28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom29)"pattern="integer"><input name="telrefcom29" type="text" id="telrefcom29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom210)"pattern="integer"><input name="telrefcom210" type="text" id="telrefcom210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom2)"pattern="integer">	    </p>
	    <p align="left">
          <input name="antirefcom2" type="text" id="antirefcom2" placeholder="Antigüedad Desde el Año"pattern="integer">
        </p>
        </div>
		<hr>
    <div id="secCarDirecto">
	    <p align="left"><strong>CARGO DIRECTO (para contratos en M.N.) </strong></p>
	    <p align="left">
          <input name="cargdir" type="text" id="cargdir" size="54px" placeholder="Banco">
          <input name="nocuentcd" type="text" id="nocuentcd" size="40px" placeholder="Número de Cuenta (CLAVE)">
	    </p>
      </div>
	    <hr>
      <div id="secDatConyuge">
	    <p align="left"><strong>DATOS DEL CONYUGE (EN CASO DE UNIR INGRESOS) </strong></p>
	    <p align="left">
          <input name="conyunom" type="text" id="conyunom" size="20px" placeholder="Nombre(s)"onkeypress="return validaTexto(event)">
          <input name="conyuape1" type="text" id="conyuape1" size="20px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)">
          <input name="conyuape2" type="text" id="conyuape2" size="20px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)">
          <input name="compaconyu" type="text" id="compaconyu" size="30px" placeholder="Compañia">
          <input name="puestconyu" type="text" id="puestconyu" size="20px" placeholder="Puesto">
	    </p>
      </div>
	    <hr>
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA MORAL</strong></p>
      <div id="secDatObligadoPersonaMoral">
	    <p align="left">
          <input name="nomrazsoc" type="text" id="nomrazsoc" size="50px" placeholder="Nombre, Razón Social">
	      Telefono(Con lada - 10 dígitos):
  <input name="telpermor1" type="text" id="telpermor1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor2)"pattern="integer"><input name="telpermor2" type="text" id="telpermor2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor3)"pattern="integer"><input name="telpermor3" type="text" id="telpermor3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor4)"pattern="integer"><input name="telpermor4" type="text" id="telpermor4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor5)"pattern="integer"><input name="telpermor5" type="text" id="telpermor5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor6)"pattern="integer"><input name="telpermor6" type="text" id="telpermor6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor7)"pattern="integer"><input name="telpermor7" type="text" id="telpermor7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor8)"pattern="integer"><input name="telpermor8" type="text" id="telpermor8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor9)"pattern="integer"><input name="telpermor9" type="text" id="telpermor9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor10)"pattern="integer"><input name="telpermor10" type="text" id="telpermor10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc1)"pattern="integer">
         </p>
	    <p align="left">RFC con homoclave:
	      <input name="permorrfc1" type="text" id="permorrfc1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc2)" pattern="alpha_numeric">
            <input name="permorrfc2" type="text" id="permorrfc2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc3)" pattern="alpha_numeric">
            <input name="permorrfc3" type="text" id="permorrfc3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc4)" pattern="alpha_numeric">
            <input name="permorrfc4" type="text" id="permorrfc4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc5)" pattern="alpha_numeric">
            <input name="permorrfc5" type="text" id="permorrfc5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc6)" pattern="alpha_numeric">
            <input name="permorrfc6" type="text" id="permorrfc6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc7)" pattern="alpha_numeric">
            <input name="permorrfc7" type="text" id="permorrfc7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc8)" pattern="alpha_numeric">
            <input name="permorrfc8" type="text" id="permorrfc8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc9)" pattern="alpha_numeric">
            <input name="permorrfc9" type="text" id="permorrfc9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc10)" pattern="alpha_numeric">
            <input name="permorrfc10" type="text" id="permorrfc10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc11)" pattern="alpha_numeric">
            <input name="permorrfc11" type="text" id="permorrfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc12)" pattern="alpha_numeric">
            <input name="permorrfc12" type="text" id="permorrfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc13)" pattern="alpha_numeric">
            <input name="permorrfc13" type="text" id="permorrfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,dirpermor)" pattern="alpha_numeric">
        </p>
	    <p align="left">
          <input name="dirpermor" type="text" id="dirpermor" size="50px" placeholder="Dirección / Calle y número">
	      Fax(Con lada - 10 dígitos):
  <input name="faxpermor1" type="text" id="faxpermor1" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor2)" pattern="integer">
  <input name="faxpermor2" type="text" id="faxpermor2" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor3)" pattern="integer">
  <input name="faxpermor3" type="text" id="faxpermor3" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor4)" pattern="integer">
  <input name="faxpermor4" type="text" id="faxpermor4" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor5)" pattern="integer">
  <input name="faxpermor5" type="text" id="faxpermor5" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor6)" pattern="integer">
  <input name="faxpermor6" type="text" id="faxpermor6" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor7)" pattern="integer">
  <input name="faxpermor7" type="text" id="faxpermor7" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor8)" pattern="integer">
  <input name="faxpermor8" type="text" id="faxpermor8" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor9)" pattern="integer">
  <input name="faxpermor9" type="text" id="faxpermor9" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor10)" pattern="integer">
  <input name="faxpermor10" type="text" id="faxpermor10" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,colpermor)" pattern="integer">
        </p>
	    <p align="left">
	      <input name="colpermor" type="text" id="colpermor" size="49px" placeholder="Colonia">
	      <input name="cdpermor" type="text" id="cdpermor" size="20px" placeholder="Ciudad">
          <input name="lugnacpermor" type="text" id="lugnacpermor" size="20px" placeholder="Lugar de nacimiento (País y Estado)">
        </p>
	    <p align="left">
          <input name="edopermor" type="text" id="edopermor" size="20px" placeholder="Estado">
          <input name="cppremor" type="text" id="cppremor" size="20px" placeholder="C.P." pattern="integer">
	    </p>
     
	    <hr>
	    <p align="left"><strong>CONSTITUCIÓN DE LA EMPRESA</strong></p>
	    <p align="left">
          <input name="antemp" type="text" id="antemp" size="54px" placeholder="Antigüedad">
          <input name="apodsusc" type="text" id="apodsusc" size="40px" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración">
        </p>
	    <hr>
	    <p align="left"><strong>DATOS GENERALES</strong></p>
	    <p align="left">
          <input name="actprinc" type="text" id="actprinc" size="50px" placeholder="Actividad Principal/según alta o último cambio ante SHCP">
          <input name="cantperson" type="text" id="cantperson" size="20px" placeholder="Cantidad de personal" pattern="integer">
        </p>
	    <p align="left">Fecha inicio de operaciones:
	      <input name="inicoper1" type="date" id="inicoper1" size="1px" maxlength="2" placeholder="dd" >
        </p>
         </div>
	    <hr>
      <div id="secDatObligadoSolidarioPF1">
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>
	    <p align="left">
	      <input name="datobnom1" type="text" id="datobnom1" size="30px" placeholder="Nombre(s)"onkeypress="return validaTexto(event)">
          <input name="datobappat1" type="text" id="datobappat1" size="30px" placeholder="Apellido Paterno" pattern="alpha">
          <input name="datobapmat1" type="text" id="datobapmat1" size="30px" placeholder="Apellido Materno"pattern="alpha">
	    </p>
	    <p align="left">
	      <input name="datobdir1" type="text" id="datobdir1" size="48px" placeholder="Dirección / Calle y número">
	      <input name="datobcol1" type="text" id="datobcol1" size="48px" placeholder="Colonia">
	    </p>
	    <p align="left">
	      <input name="datobcd1" type="text" id="datobcd1" size="20px" placeholder="Ciudad">
	      <input name="datoblugnac1" type="text" id="datoblugnac1" size="30px" placeholder="Lugar nacimiento (País y Edo.)">
	    Tiene propiedad a su nombre? 
	    <input id="datobprop1A" name="datobprop1" type="radio" value="1"><label for="datobprop1A">Si</label>
	    
	    <input id="datobprop1B" name="datobprop1" type="radio" value="2"><label for="datobprop1B">No</label>
</p>
	    <p align="left">
	      <input name="datobedo1" type="text" id="datobedo1" size="30px" placeholder="Estado">
          <input name="datobcp1" type="text" id="datobcp1" size="30px" placeholder="C.P."onkeypress="return validaNumero(event)">
          <input  name="datobmail1" type="text" id="datobmail1" size="30px" placeholder="Email">
	    </p>
	    <p align="left">sexo:
	      <input id="datobsex1A" name="datobsex1" type="radio" value="M"> <label for="datobsex1A">M</label>
	      
	      <input id="datobsex1B" name="datobsex1" type="radio" value="F"><label for="datobsex1B">F</label>
Fecha de nacimiento:
<input name="datobfechnac1d" type="date" id="datobfechnac1d" size="1px" maxlength="2" placeholder="dd" >
	    <input name="datobed1" type="text" id="datobed1" size="2px" placeholder="Edad"onkeypress="return validaNumero(event)">
		<input name="datobcurp1" type="text" id="datobcurp1" size="22px" placeholder="CURP"onkeypress="return validaRFC(event)">
	    </p>
	    <p align="left">RFC con homoclave:
          <input name="datobrfc11" type="text" id="datobrfc11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc12)"onkeypress="return validaRFC(event)"><input name="datobrfc12" type="text" id="datobrfc12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc13)"onkeypress="return validaRFC(event)"><input name="datobrfc13" type="text" id="datobrfc13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc14)"onkeypress="return validaRFC(event)"><input name="datobrfc14" type="text" id="datobrfc14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc15)"onkeypress="return validaRFC(event)"><input name="datobrfc15" type="text" id="datobrfc15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc16)"onkeypress="return validaRFC(event)"><input name="datobrfc16" type="text" id="datobrfc16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc17)"onkeypress="return validaRFC(event)"><input name="datobrfc17" type="text" id="datobrfc17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc18)"onkeypress="return validaRFC(event)"><input name="datobrfc18" type="text" id="datobrfc18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc19)"onkeypress="return validaRFC(event)"><input name="datobrfc19" type="text" id="datobrfc19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc110)"onkeypress="return validaRFC(event)"><input name="datobrfc110" type="text" id="datobrfc110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc111)"onkeypress="return validaRFC(event)"><input name="datobrfc111" type="text" id="datobrfc111" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc112)"onkeypress="return validaRFC(event)"><input name="datobrfc112" type="text" id="datobrfc112" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc113)"onkeypress="return validaRFC(event)"><input name="datobrfc113" type="text" id="datobrfc113" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel11)"onkeypress="return validaRFC(event)">
        </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
          <input name="datobtel11" type="text" id="datobtel11" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel12)"onkeypress="return validaNumero(event)"><input name="datobtel12" type="text" id="datobtel12" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel13)"onkeypress="return validaNumero(event)"><input name="datobtel13" type="text" id="datobtel13" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel14)"onkeypress="return validaNumero(event)"><input name="datobtel14" type="text" id="datobtel14" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel15)"onkeypress="return validaNumero(event)"><input name="datobtel15" type="text" id="datobtel15" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel16)"onkeypress="return validaNumero(event)"><input name="datobtel16" type="text" id="datobtel16" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel17)"onkeypress="return validaNumero(event)"><input name="datobtel17" type="text" id="datobtel17" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel18)"onkeypress="return validaNumero(event)"><input name="datobtel18" type="text" id="datobtel18" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel19)"onkeypress="return validaNumero(event)"><input name="datobtel19" type="text" id="datobtel19" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel110)"onkeypress="return validaNumero(event)"><input name="datobtel110" type="text" id="datobtel110" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel112)"onkeypress="return validaNumero(event)">
</p>
	    <p align="left">Telefono Movil(Con lada - 10 dígitos):
          <input name="datobtel112" type="text" id="datobtel112" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel122)"onkeypress="return validaNumero(event)">
          <input name="datobtel122" type="text" id="datobtel122" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel132)"onkeypress="return validaNumero(event)">
          <input name="datobtel132" type="text" id="datobtel132" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel142)"onkeypress="return validaNumero(event)">
          <input name="datobtel142" type="text" id="datobtel142" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel152)"onkeypress="return validaNumero(event)">
          <input name="datobtel152" type="text" id="datobtel152" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel162)"onkeypress="return validaNumero(event)">
          <input name="datobtel162" type="text" id="datobtel162" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel172)"onkeypress="return validaNumero(event)">
          <input name="datobtel172" type="text" id="datobtel172" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel182)"onkeypress="return validaNumero(event)">
          <input name="datobtel182" type="text" id="datobtel182" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel192)"onkeypress="return validaNumero(event)">
          <input name="datobtel192" type="text" id="datobtel192" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1102)"onkeypress="return validaNumero(event)">
          <input name="datobtel1102" type="text" id="datobtel1102" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobnom2)"onkeypress="return validaNumero(event)">
</p>
      </div>
	    <hr>
      <div id="secDatObligadoSolidarioPF2">
	    <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO (2) PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>
	    <p align="left">
	      <input name="datobnom2" type="text" id="datobnom2" size="30px" placeholder="Nombre(s)"onkeypress="return validaTexto(event)">
          <input name="datobappat2" type="text" id="datobappat2" size="30px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)">
          <input name="datobapmat2" type="text" id="datobapmat2" size="30px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)">
</p>
	    <p align="left">
          <input name="datobdir2" type="text" id="datobdir2" size="48px" placeholder="Dirección / Calle y número">
          <input name="datobcol2" type="text" id="datobcol2" size="48px" placeholder="Colonia">
        </p>
	    <p align="left">
          <input name="datobcd2" type="text" id="datobcd2" size="20px" placeholder="Ciudad">
          <input name="datoblugnac2" type="text" id="datoblugnac2" size="30px" placeholder="Lugar nacimiento (País y Edo.)">
	      Tiene propiedad a su nombre? Si
  <input id="datobprop2" name="datobprop2" type="radio" value="Si">
	      No
  <input id="datobprop2" name="datobprop2" type="radio" value="No">
        </p>
	    <p align="left">
          <input name="datobedo2" type="text" id="datobedo2" size="30px" placeholder="Estado">
          <input name="datobcp2" type="text" id="datobcp2" size="30px" placeholder="C.P."onkeypress="return validaNumero(event)">
          <input  name="datobmail2" type="text" id="datobmail2" size="30px" placeholder="Email">
        </p>
	    <p align="left">sexo: M
	      <input id="datobsex2" name="datobsex2" type="radio" value="M">
	      F
  <input id="datobsex2"name="datobsex2" type="radio" value="F">
	      Fecha de nacimiento:
  <input name="datobfechnac2d" type="date" id="datobfechnac2d" size="1px" maxlength="2" placeholder="dd" >
  <input name="datobed2" type="text" id="datobed2" size="2px" placeholder="Edad"onkeypress="return validaNumero(event)">
    <input name="datobcurp2" type="text" id="datobcurp2" size="22px" placeholder="CURP"onkeypress="return validaRFC(event)">
        </p>
	    <p align="left">RFC con homoclave:
	      <input name="datobrfc21" type="text" id="datobrfc21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc22)"onkeypress="return validaRFC(event)"><input name="datobrfc22" type="text" id="datobrfc22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc23)"onkeypress="return validaRFC(event)"><input name="datobrfc23" type="text" id="datobrfc23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc24)"onkeypress="return validaRFC(event)"><input name="datobrfc24" type="text" id="datobrfc24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc25)"onkeypress="return validaRFC(event)"><input name="datobrfc25" type="text" id="datobrfc25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc26)"onkeypress="return validaRFC(event)"><input name="datobrfc26" type="text" id="datobrfc26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc27)"onkeypress="return validaRFC(event)"><input name="datobrfc27" type="text" id="datobrfc27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc28)"onkeypress="return validaRFC(event)"><input name="datobrfc28" type="text" id="datobrfc28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc29)"onkeypress="return validaRFC(event)"><input name="datobrfc29" type="text" id="datobrfc29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc210)"onkeypress="return validaRFC(event)"><input name="datobrfc210" type="text" id="datobrfc210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc211)"onkeypress="return validaRFC(event)"><input name="datobrfc211" type="text" id="datobrfc211" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc212)"onkeypress="return validaRFC(event)"><input name="datobrfc212" type="text" id="datobrfc212" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc213)"onkeypress="return validaRFC(event)"><input name="datobrfc213" type="text" id="datobrfc213" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel21)"onkeypress="return validaRFC(event)">
        </p>
	    <p align="left">Telefono(Con lada - 10 dígitos):
	      <input name="datobtel21" type="text" id="datobtel21" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel22)"onkeypress="return validaNumero(event)"><input name="datobtel22" type="text" id="datobtel22" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel23)"onkeypress="return validaNumero(event)"><input name="datobtel23" type="text" id="datobtel23" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel24)"onkeypress="return validaNumero(event)"><input name="datobtel24" type="text" id="datobtel24" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel25)"onkeypress="return validaNumero(event)"><input name="datobtel25" type="text" id="datobtel25" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel26)"onkeypress="return validaNumero(event)"><input name="datobtel26" type="text" id="datobtel26" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel27)"onkeypress="return validaNumero(event)"><input name="datobtel27" type="text" id="datobtel27" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel28)"onkeypress="return validaNumero(event)"><input name="datobtel28" type="text" id="datobtel28" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel29)"onkeypress="return validaNumero(event)"><input name="datobtel29" type="text" id="datobtel29" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel210)"onkeypress="return validaNumero(event)"><input name="datobtel210" type="text" id="datobtel210" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel212)"onkeypress="return validaNumero(event)">
        </p>
	    <p align="left">Telefono Movil(Con lada - 10 dígitos):
          <input name="datobtel212" type="text" id="datobtel212" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel222)"onkeypress="return validaNumero(event)">
          <input name="datobtel222" type="text" id="datobtel222" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel232)"onkeypress="return validaNumero(event)">
          <input name="datobtel232" type="text" id="datobtel232" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel242)"onkeypress="return validaNumero(event)">
          <input name="datobtel242" type="text" id="datobtel242" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel252)"onkeypress="return validaNumero(event)">
          <input name="datobtel252" type="text" id="datobtel252" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel262)"onkeypress="return validaNumero(event)">
          <input name="datobtel262" type="text" id="datobtel262" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel272)"onkeypress="return validaNumero(event)">
          <input name="datobtel272" type="text" id="datobtel272" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel282)"onkeypress="return validaNumero(event)">
          <input name="datobtel282" type="text" id="datobtel282" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel292)"onkeypress="return validaNumero(event)">
          <input name="datobtel292" type="text" id="datobtel292" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel2102)"onkeypress="return validaNumero(event)">
          <input name="datobtel2102" type="text" id="datobtel2102" size="1px" maxlength="1" onKeyUp="myFunction(this,this.value,clavcon)"onkeypress="return validaNumero(event)">
	    </p>
      </div>
	    <hr>
	    <p align="justify">
	      <input name="clavcon" type="text" id="clavcon" size="30px" placeholder="Clave Consesionario o Distribuidor" required>
          <input name="nomcons" type="text" id="nomcons" size="30px" placeholder="Nombre Concesionario o Distribuidor" required>
          <input name="fecha" type="text" id="fecha" value="<?php echo date("Y-m-d");?>" size="10px" readonly>
</p>
	    <p align="justify">
	      <input  name="nomvend" type="text" id="nomvend" size="48px" placeholder="Nombre del Vendedor"onkeypress="return validaTexto(event)" required>
          <input name="gerentegral" type="text" id="gerentegral" size="48px" placeholder="Nombre y firma del Gerente General" required>
</p>
	   
	    <hr>
		
		
		</div>
                 </div>
        </li>
        
       
        
        <li class="accordion-item " data-accordion-item>
            <a href="#" class="accordion-title" onClick="cambio()"><h4 id="dos" >FORMATO DE IDENTIFICACIÓN DEL CLIENTE POR CLASIFICACIÓN DE RIESGO&nbsp;</h4></a>
                <div class="accordion-content" data-tab-content>
                      <div id="riesgo" >
		     	       <div data-sticky-container="" class="sticky-container" style="height: 40.375px;">
  <div class="sticky is-at-top is-stuck" id="sticky-magellan" style="width: 100%; max-width: 555px; margin-top: 0em; bottom: auto; top: 0px;" data-sticky="a2lq9k-sticky" data-margin-top="0" data-margin-bottom="3" data-top-anchor="setup" data-btm-anchor="destroy:bottom" data-sticky-on="small" data-resize="sticky-magellan" data-events="resize">
    <nav data-magellan="8odbqt-magellan" class="sticky-mag stuck-mag" data-bar-offset="25" data-resize="cq4a0b-magellan" data-scroll="cq4a0b-magellan" id="cq4a0b-magellan" data-events="scroll">
      <ul class="horizontal menu expanded">
        <li><a href="#uno" class="">PFNA</a></li>
        <li><a href="#tres" class="active">Constancia de entrevista</a></li>
      </ul>
    </nav>
  </div>
</div>
		<h4 align="left">Datos generales del cliente</h4> 
		<p align="left">Tipo de Cliente: <input id="escliente1" name="escliente" type="radio" value="1" required><label for="escliente1">Nuevo</label>
		<input id="escliente2" name="escliente" type="radio" value="2" required><label for="escliente2"> Actualización </label>
		</p>
		<table width="100%" border="0">
            <tr>
              <td width="22%">Nombre o razón social </td>
              <td width="78%"><input name="textfield" type="text" id="textfield" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Número de cliente </td>
              <td><input name="textfield2" type="text" id="textfield2" size="100%"  readonly=""></td>
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
              <td><input name="textfield5" type="text" id="textfield5" size="100%" required pattern="number"></td>
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
              <td><input name="textfield10" type="text" id="textfield10" size="100%" readonly=""></td>
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
              <td width="68%"><select id="select" name="select" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3">Vulnerable</option>
                <option value="2">Informal</option>
                <option value="1">Otra</option>
              </select>
              </td>
            </tr>
            <tr>
              <td>Antigüedad del cliente </td>
              <td><select id="select2" name="select2" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3">1-3 años</option>
                <option value="2">4-6 años</option>
                <option value="1">7-10 años</option>
                <option value="0">N/A</option>
                                          </select></td>
            </tr>
            <tr>
              <td>Naturaleza de las operaciones </td>
              <td><select id="select3" name="select3" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">Prestamo</option>
                <option value="2">Arrendamiento</option>
                <option value="3">Otros</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Beneficiarios </td>
              <td><select id="select4" name="select4" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">1 a 2</option>
                <option value="2">3 a 4</option>
                <option value="3">5 o mas</option>
                <option value="0">N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Terceros Relacionados (Apoderados y Cotitulares) </td>
              <td><select id="select5" name="select5" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">1 a 2</option>
                <option value="2">3 a 4</option>
                <option value="3">5 o mas</option>
                <option value="0">N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>PEPs Relacionados </td>
              <td><select id="select6" name="select6" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">1% - 49%</option>
                <option value="2">50% - 74%</option>
                <option value="3">75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Alerta Reputacional </td>
              <td><select id="select7" name="select7" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">1% - 49%</option>
                <option value="2">50% - 74%</option>
                <option value="3">75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Volumen esperado (Monto) </td>
              <td><select id="select8" name="select8" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">$18000 - $20000</option>
                <option value="2">$21000 - $25000</option>
                <option value="3">mas de $25000</option>
                            </select></td>
            </tr>
            <tr>
              <td>Frecuencia esperada (No. Veces) </td>
              <td><select id="select9" name="select9" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">1 a 3</option>
                <option value="2">4 a 6</option>
                <option value="3">7 a 10</option>
                            </select></td>
            </tr>
            <tr>
              <td>Instrumento Monetario Utilizado </td>
              <td><select id="select10" name="select10" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">Transferencia</option>
                <option value="2">Cheque</option>
                <option value="3">Efectivo</option>
                            </select></td>
            </tr>
            <tr>
              <td>Canales o Medios Utilizados </td>
              <td><select id="select11" name="select11" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">Agencia</option>
                <option value="2">Internet</option>
                <option value="3">Otro</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Oficial </td>
              <td><select id="select12" name="select12" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia </td>
              <td><select id="select13" name="select13" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Operación </td>
              <td><select id="select14" name="select14" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3">Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2">Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1">Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>Origen de los recursos </td>
              <td><select id="select15" name="select15" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>Destino de los recursos </td>
              <td><select id="select16" name="select16" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1">México</option>
                <option value="2">Otros</option>
                <option value="3">Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia de Terceros Relacionados </td>
              <td><select id="select17" name="select17" size="1" style="width:60%;" required>
                <option value="" selected></option>
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
                 </div>
        </li>
        

        <li class="accordion-item " data-accordion-item>
            <a href="#" class="accordion-title" onClick="cambio2()"><h4 id="tres">FORMATO DE IDENTIFICACION, CONOCIMIENTO DEL CLIENTE Y CONSTANCIA DE ENTREVISTA</h4></a>
                <div class="accordion-content" data-tab-content>
                     <div id="identificacion" >
          <div data-sticky-container="" class="sticky-container" style="height: 40.375px;">
  <div class="sticky is-at-top is-stuck" id="sticky-magellan" style="width: 100%; max-width: 555px; margin-top: 0em; bottom: auto; top: 0px;" data-sticky="a2lq9k-sticky" data-margin-top="0" data-margin-bottom="0" data-top-anchor="setup" data-btm-anchor="destroy:bottom" data-sticky-on="small" data-resize="sticky-magellan" data-events="resize">
    <nav data-magellan="8odbqt-magellan" class="sticky-mag stuck-mag" data-bar-offset="25" data-resize="cq4a0b-magellan" data-scroll="cq4a0b-magellan" id="cq4a0b-magellan" data-events="scroll">
      <ul class="horizontal menu expanded">
        <li><a href="#uno" class="active">PFNA</a></li>
        <li><a href="#dos" class="">Clasificacion de riesgo</a></li>
      </ul>
    </nav>
  </div>
</div>
          <h6 align="left">PERSONA FÍSICA Y RELACIONADOS </h6>
          <table width="100%" border="0">
            <tr>
              <td width="28%">Apellido Paterno </td>
              <td width="72%"><input name="textfield12" type="text" id="textfield12" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield13" type="text" id="textfield13" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield14" type="text" id="textfield14" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Género</td>
              <td><input name="textfield15" type="text" id="textfield15" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Lugar de Nacimiento (Estado y País) </td>
              <td><input name="textfield16" type="text" id="textfield16" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield17" type="text" id="textfield17" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield18" type="text" id="textfield18" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="textfield19" type="text" id="textfield19" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield20" type="text" id="textfield20" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield21" type="text" id="textfield21" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield22" type="text" id="textfield22" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield23" type="text" id="textfield23" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Ciudad</td>
              <td><input name="textfield24" type="text" id="textfield24" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield25" type="text" id="textfield25" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield26" type="text" id="textfield26" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Correo Electrónico </td>
              <td><input name="textfield27" type="text" id="textfield27" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield28" type="text" id="textfield28" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield29" type="text" id="textfield29" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Numero de serie de la FIEL*</td>
              <td><input name="textfield30" type="text" id="textfield30" size="100%"  required></td>
            </tr>
            <tr>
              <td>Nacionalidad</td>
              <td><input name="textfield31" type="text" id="textfield31" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield32" type="text" id="textfield32" size="100%"  readonly></td>
            </tr>
            <tr>
              <td>Nombre de la Empresa y Giro (donde labora) </td>
              <td><input name="textfield33" type="text" id="textfield33" size="100%"  readonly></td>
            </tr>
            <tr>
              <td>Domicilio donde labora </td>
              <td><input name="textfield34" type="text" id="textfield34" size="100%"  readonly></td>
            </tr>
            <tr>
              <td>Sueldo o ingreso mensual </td>
              <td><input name="textfield35" type="text" id="textfield35" size="100%" required></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield36" type="text" id="textfield36" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Actividad Económica Adicional </td>
              <td><input name="textfield37" type="text" id="textfield37" size="100%" required></td>
            </tr>
            <tr>
              <td>Ingresos Adicionales Mensuales Apox </td>
              <td><input name="textfield38" type="text" id="textfield38" size="100%"  required></td>
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
              <td width="15%">Se adjunta copia: </td>
              <td id="secINE"> 
              <input id="copiasA" name="copias" type="radio" value="1"><label for="copiasA">Si</label>
             
              <input id="copiasB" name="copias" type="radio" value="2"><label for="copiasB">No</label></td>
             
            </tr>
            
           
            <tr>
              <td>Pasaporte cedula profesional </td>
              <td><input name="textfield40" type="text" id="textfield40" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td id="secCedProfesional">
              <input id="copias2A" name="copias2" type="radio" value="1"><label for="copias2A">Si</label>
              
              <input id="copias2B" name="copias2" type="radio" value="2"><label for="copias2B">No</label></td>
            </tr>
            
            
            <tr>
              <td>Cartilla de servicio militar </td>
              <td><input name="textfield41" type="text" id="textfield41" size="50%" ></td>
              <td>Se adjunta copia: </td>
              <td id="secCarMilitar">
              <input id="copias3A" name="copias3" type="radio" value="1"><label for="copias3A">Si</label>
              
              <input id="copias3B" name="copias3" type="radio" value="2"><label for="copias3B">No</label></td>
            </tr>
            
            
            <tr>
              <td>Licencia para conducir </td>
              <td><input name="textfield42" type="text" id="textfield42" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td id="secLicConducir">
              <input id="copias4A" name="copias4" type="radio" value="1"><label for="copias4A">Si</label>
              
              <input id="copias4B" name="copias4" type="radio" value="2"><label for="copias4B">No</label></td>
            </tr>
            
           
            <tr>
              <td>Otra</td>
              <td><input name="textfield43" type="text" id="textfield43" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td id="secOtrIdentificacion">
              <input id="copias5A" name="copias5" type="radio" value="1"><label for="copias5A">Si</label>
              
              <input id="copias5B" name="copias5" type="radio" value="2"><label for="copias5B">No</label></td>
            </tr>
           
            <tr>
              <td>Especificar</td>
              <td id="secOtrIdentificacion2"><input name="textfield44" type="text" id="textfield44" size="50%"  ></td>
              <td>Se cotejo vs original: </td>
              <td>
                <input id="cotejo1" name="cotejo" type="radio" value="1" required><label for="cotejo1">Si</label>

                <input id="cotejo2" name="cotejo" type="radio" value="2" required><label for="cotejo2">No</label></td>
            </tr>
             </div>
          </table>
		  <BR>
		  <p align="left">OTROS DOCUMENTOS QUE SE ADJUNTAN:</p>
		  <table width="100%" border="0">
            <tr>
              <td width="30%">Se adjunta CURP y/o cédula RFC, FEA* </td>
              <td width="70%">
                <input id="adjuntos1A" name="adjuntos1" type="radio" value="1" required><label for="adjuntos1A" >Si</label>

                <input id="adjuntos1B" name="adjuntos1" type="radio" value="2" required><label for="adjuntos1B" >No</label></td>
            </tr>
            <tr>
              <td>Se adjunta comprobante de domicilio </td>
              <td>
                <input id="adjuntos2A" name="adjuntos2" type="radio" value="1" required><label for="adjuntos2A" >Si</label>

                <input id="adjuntos2B" name="adjuntos2" type="radio" value="2" required><label for="adjuntos2B" >No</label></td>
            </tr>
            <tr>
              <td>Fecha del comprobante de domicilio </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Domicilio manifestado coincide con la ID</td>
              <td>
                <input id="adjuntos3A" name="adjuntos3" type="radio" value="1" required><label for="adjuntos3A" >Si</label>

                <input id="adjuntos3B" name="adjuntos3" type="radio" value="2" required><label for="adjuntos3B" >No</label></td>
            </tr>
          </table>
		  <br>
		  <p align="left" style="font-size:8px;">*Cuando cuente con ellas. <br>No será necesario presentar la constancia de la Clave Única de Registro de Población si ésta aparece en otro documento o identificación oficial;</p>
		
		  <hr>
		  <br>
        <div id="secBeneficiario">
          <H6 align="left">BENEFICIARIO</H6>
          <table width="100%" border="0">
            <tr>
              <td width="18%">Apellido Paterno </td>
              <td width="82%"><input name="textfield45" type="text" id="textfield45" size="50%" readonly ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield46" type="text" id="textfield46" size="50%" readonly  ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield47" type="text" id="textfield47" size="50%" readonly ></td>
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
              <td><input name="textfield50" type="text" id="textfield50" size="50%" onkeypress="return validaNumero(event)" ></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield51" type="text" id="textfield51" size="50%" ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield52" type="text" id="textfield52" size="50%" onkeypress="return validaNumero(event)"></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield53" type="text" id="textfield53" size="50%" onkeypress="return validaRFC(event)"></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield54" type="text" id="textfield54" size="50%" onkeypress="return validaRFC(event)"></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield55" type="text" id="textfield55" size="50%"  ></td>
            </tr>
            <tr>
              <td>Porciento</td>
              <td><input name="textfield56" type="text" id="textfield56" size="50%" onkeypress="return validaNumero(event)" ></td>
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
          </div>
		  <br>
		  <hr>
		  <br>
          <H6 align="left">PERFIL TRANSACCIONAL INICIAL</H6>
          <div id="secPerTransaccional">
          <table width="100%" border="0">
            <tr>
              <td width="21%">Ingresos Comprobable(1) </td>
              <td width="39%"><input name="textfield65" type="text" id="textfield65" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td width="7%">Fuente</td>
              <td width="33%"><input name="textfield66" type="text" id="textfield66" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(2) </td>
              <td><input name="textfield67" type="text" id="textfield67" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield68" type="text" id="textfield68" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(3) </td>
              <td><input name="textfield69" type="text" id="textfield69" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield70" type="text" id="textfield70" size="50%" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(4) </td>
              <td><input name="textfield71" type="text" id="textfield71" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield72" type="text" id="textfield72" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(5) </td>
              <td><input name="textfield73" type="text" id="textfield73" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield74" type="text" id="textfield74" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(1) </td>
              <td><input name="textfield75" type="text" id="textfield75" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield76" type="text" id="textfield76" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(2)</td>
              <td><input name="textfield77" type="text" id="textfield77" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield78" type="text" id="textfield78" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(3)</td>
              <td><input name="textfield79" type="text" id="textfield79" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield80" type="text" id="textfield80" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(4)</td>
              <td><input name="textfield81" type="text" id="textfield81" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield82" type="text" id="textfield82" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(5)</td>
              <td><input name="textfield83" type="text" id="textfield83" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td>Fuente</td>
              <td><input name="textfield84" type="text" id="textfield84" size="50%"  ></td>
            </tr>
          </table>
          </div>
		  <br>
          <table width="100%" border="0">
            <tr>
              <td width="19%">Total de Ingresos </td>
              <td width="81%"><input name="textfield85" type="text" id="textfield85" size="50%" onkeypress="return validaNumeroDecimal(event)"  readonly></td>
            </tr>
            <tr>
              <td>Valor del Automóvil </td>
              <td><input name="textfield86" type="text" id="textfield86" size="50%" onkeypress="return validaNumeroDecimal(event)" required></td>
            </tr>
            <tr>
              <td>Enganche del Automóvil </td>
              <td><input name="textfield87" type="text" id="textfield87" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="datosAuto()" required></td>
            </tr>
            <tr>
              <td>Porcentaje de Enganche </td>
              <td><input name="textfield88" type="text" id="textfield88" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Porcentaje de Financieamiento </td>
              <td><input name="textfield89" type="text" id="textfield89" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Monto Financiado </td>
              <td><input name="textfield90" type="text" id="textfield90" size="50%" readonly ></td>
            </tr>
            <tr>
              <td>Plazo (meses)</td>
              <td><input name="textfield91" type="text" id="textfield91" size="50%" onkeypress="return validaNumero(event)" required></td>
            </tr>
            <tr>
              <td>Pago Mensual Esperado </td>
              <td><input name="textfield92" type="text" id="textfield92" size="50%" onkeypress="return validaNumero(event)" required></td>
            </tr>
          </table>
		  
		  <br>
	      <p align="left">¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?<br>
	        
                <input id="PEPS1" name="PEPS" type="radio" value="1"><label for="PEPS1" required>Si</label>

                <input id="PEPS2" name="PEPS" type="radio" value="2"><label for="PEPS2" required>No</label>
	      </p>
	      <p align="left">En caso de si:</p>
        <div id="secPEPS">
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
          </div>
	      <p align="left">&nbsp; </p>
	      <hr>
		  <br>
          
          <p align="justify">
            <input name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="window.location.href='indexmenu.php'">
            <input name="aceptar" type="submit" id="aceptar" value="Aceptar" >
          
          </p>
        </div>
		
                </div>
  </li>
  <!-- ... -->
    </ul>


	  
		
		
		
	
		

</section>
<!-- footer -->
<footer>
	<div class="container_24">
		<div class="wrapper">
			<div class="grid_24"><a href="index.html" class="link"></a> &copy; 2012</div>
		</div>
	</div>
</footer>  

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    
    <script src="js/vendor/app.js"></script>
    <script src="js/PFNA.js"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
    <!--sd-->
</body>
</html>
