<?php
    if(isset($_GET['cliente'])){
        $cliente=$_GET['cliente'];
        
    include("Conexion2.php");
    $result = mysqli_query($cnx,"select * from solicitudpm where Folio_Cliente='$cliente' order by Id desc");
    if(!mysqli_num_rows($result)>0){

        echo "Error";
        exit;
    }

    $row=mysqli_fetch_array($result);
    $result2 = mysqli_query($cnx,"select * from pm where Folio_Cliente='$cliente'");
    $row2=mysqli_fetch_array($result2);
    $folio_sol=$row['Folio_Sol'];
    $result3=mysqli_query($cnx,"select * from gradoriesgo where Folio_sol='$folio_sol'");
    $row3=mysqli_fetch_array($result3);

    echo "Solicitud: ".$row['Id'];
    echo "Cliente: ".$row2['Id'];
    echo "grado de riesgo".$row3['Folio_sol'];
    ?><script>document.getElementById("cliente").readOnly = true;</script> <?php
 
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<script src="js/vendor/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="js/js/css/foundation.css">
    <link rel="stylesheet" href="js/js/css/foundation.min.css">
    <link rel="stylesheet" href="js/js/css/app.css">
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">



</head>
<body>
<!-- header -->
<script>

$( document ).ready(function() {
 
$('form#form1').find('input').each(function(){  
if(this.id=="fechnacsol" ||  this.id=="aperbanc1d" || this.id=="aperbanc1d2"  || this.id=="inicoper1" || this.id=="datobfechnac1d"  || this.id=="datobfechnac2d" || this.id=="textfield57" || this.id=="fechaComprobante"){
    $fecha=$(this);
    
    if ($fecha[0].type!="date"){
      $fecha.datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true} );
      }
      console.log( "ready!" );   
  }

  
 });
});


function Validacioncampos(){
  //alert("entrada");
var requerido=0;
//seccion del solicitante
$('#secSolicitante').find('input').each(function(){  
   //alert("seccion");
  if(document.getElementById("nomrazsoc2").value!=""  ){
//alert("entre a validar");

  if(this.id=="nocuentcd" || this.id=="cargdir" || this.id=="faxsol1" || this.id=="faxsol2" || this.id=="faxsol3" || this.id=="faxsol4" || this.id=="faxsol5" || this.id=="faxsol6" || this.id=="faxsol7" || this.id=="faxsol8" || this.id=="faxsol9" || this.id=="faxsol10" || this.id=="segnomsol" || this.id=="apemasol" || this.id=="vivsolesp" || this.id=="compatelsolext"||this.id=="movsol22"||this.id=="movsol32"||this.id=="movsol42"||this.id=="movsol52"||this.id=="movsol62"||this.id=="movsol72"||this.id=="movsol82"||this.id=="movsol92"||this.id=="movsol102"){
    //alert("encontre campos no requeridos");
    $(this).prop('required',false);

    
  }else{
    $(this).prop('required',true);
    //alert("el resto de estos campos son requeridos");
    
  }

  }else{
    $(this).prop('required',false);
    //alert("ninguno es requerido");

 }
});

$('#accionistas').find('input').each(function(){ 
if (document.getElementById("accionista1").value!="") {
  if (this.id=="rfcaccion1" || this.id=="%1" ) {
    $(this).prop('required',true);
  }

}
if (document.getElementById("accionista2").value!="") {
  if (this.id=="rfcaccion2" || this.id=="%2" ) {
    $(this).prop('required',true);
  }

}
if (document.getElementById("accionista3").value!="") {
  if (this.id=="rfcaccion3" || this.id=="%3" ) {
    $(this).prop('required',true);
  }

}
if (document.getElementById("accionista4").value!="") {
  if (this.id=="rfcaccion4" || this.id=="%4" ) {
    $(this).prop('required',true);
  }
  
}
if (document.getElementById("accpermor1").value!="") {
  if (this.id=="rfcaccpermor1" || this.id=="%permoracc1" ) {
    $(this).prop('required',true);
  }
  
}
if (document.getElementById("accpermor2").value!="") {
  if (this.id=="rfcaccpermor2" || this.id=="%permoracc2" ) {
    $(this).prop('required',true);
  }
  
}

});

 
$('#resto').find('input').each(function(){

if (document.getElementById("datobnom1").value!="") {

  if (this.id=="obsol1" || this.id=="datobfechnac1d2" || this.id=="datobfechnac1d2" || this.id=="datobnom22" || this.id=="datobappat22" || this.id=="datobapmat22") {
    $(this).prop('required',false);
  }
  else{


    $(this).prop('required',true);
  }


}



});

 
$('#part').find('input').each(function(){

if (document.getElementById("datobnom2").value!="") {




    $(this).prop('required',true);



}




});

 
$('#au').find('input').each(function(){

    $(this).prop('required',true);




});

  $('#ident').find('input').each(function(){

    $(this).prop('required',true);




});
    $('#fid').find('input').each(function(){
 $(this).prop('required',true);

if (document.getElementById("textfield65").value=="") {

if (this.id=="textfield66" || this.id=="textfield65") { $(this).prop('required',false);}


}

if (document.getElementById("textfield67").value=="") {

if (this.id=="textfield67" || this.id=="textfield68") { $(this).prop('required',false);}


}

if (document.getElementById("textfield69").value=="") {

if (this.id=="textfield69" || this.id=="textfield70") { $(this).prop('required',false);}


}

if (document.getElementById("textfield71").value=="") {

if (this.id=="textfield71" || this.id=="textfield72") { $(this).prop('required',false);}


}

if (document.getElementById("textfield73").value=="") {

if (this.id=="textfield73" || this.id=="textfield74") { $(this).prop('required',false);}


}

if (document.getElementById("textfield75").value=="") {

if (this.id=="textfield75" || this.id=="textfield76") { $(this).prop('required',false);}


}

if (document.getElementById("textfield77").value=="") {

if (this.id=="textfield77" || this.id=="textfield78") { $(this).prop('required',false);}


}

if (document.getElementById("textfield79").value=="") {

if (this.id=="textfield79" || this.id=="textfield80") { $(this).prop('required',false);}


}

if (document.getElementById("textfield81").value=="") {

if (this.id=="textfield81" || this.id=="textfield82") { $(this).prop('required',false);}


}

if (document.getElementById("textfield83").value=="") {

if (this.id=="textfield83" || this.id=="textfield84") { $(this).prop('required',false);}

}

if($('input:radio[name=PEPS]:checked').val()=="2" || !$('input:radio[name=PEPS]:radio').is(':checked') ){ 
  if (this.id=="textfield93"|| this.id=="textfield94" || this.id=="textfield95") {

      $(this).prop('required',false);
  }

  
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
      
 


      alert("¡¡Por Favor, Verifica Que Todos Los Datos Esten Correctos!!");
    
      
      
      
      
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
<header>
</header>

<!-- content -->
<section>
	
	  <form name="form1" id="form1" action="PDFpm.php"  method="post" data-abide novalidate onsubmit="Validacioncampos()" ><!--  -->
	  
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
  <li class="accordion-item is-active" data-accordion-item >
    <a href="#" class="accordion-title"><h5 id="uno" align="center">Solicitud Persona Moral</h5></a>
    <div class="accordion-content" data-tab-content>
  
      
      
      <p align="left"><strong>DATOS DEL SOLICITANTE:</strong>       

        <div class="small-3 columns">
        <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Para Realizar la Prueba Ingresa Folio: PM-001 y Tabulador"><input name="cliente" type="text" onChange="obten()" id="cliente"  value="<?php if(isset($row['Folio_Cliente'])) { echo $row['Folio_Cliente']; } ?>" placeholder="Si es Cliente, número de cliente/contrato"> </span>
         </div>
       
          <input id="tipocredito1" name="tipocredito" type="radio" value="1" required <?php if(isset($row['Folio_Cliente'])) { if($row['TipoCredito']=='Leasing'){echo "checked";} } ?>><label for="tipocredito1">Leasing</label>
          <input id="tipocredito2" name="tipocredito" type="radio" value="2" required <?php if(isset($row['Folio_Cliente'])) { if($row['TipoCredito']=='Credit'){echo "checked";} } ?>><label for="tipocredito2">Credit</label>
          <input id="tipocredito3"  name="tipocredito" type="radio" value="3" required <?php if(isset($row['Folio_Cliente'])) { if($row['TipoCredito']=='Premium Credit'){echo "checked";} } ?>><label for="tipocredito3">Premium Credit</label></p>
	  	<div id="secSolicitante">
<div class="row">
	     <div class="small-6 columns"> <input name="nomrazsoc2" type="text" id="nomrazsoc2" onchange="return valforms(this.form,this)" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>"  placeholder="Nombre, Razón Social">
</div>
 </div>
<div class="row">
	    <p align="left">
Telefono(Con lada - 10 dígitos):

<div class="small-1 columns"><input name="telsol1" type="text" id="telsol1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol2)"  ></div>
<div class="small-1 columns"><input name="telsol2" type="text" id="telsol2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol3)"  ></div>
<div class="small-1 columns"><input name="telsol3" type="text" id="telsol3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol4)"  ></div>
<div class="small-1 columns"><input name="telsol4" type="text" id="telsol4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol5)"  ></div>
<div class="small-1 columns"><input name="telsol5" type="text" id="telsol5" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol6)"  ></div>
<div class="small-1 columns"><input name="telsol6" type="text" id="telsol6" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol7)"  ></div>
<div class="small-1 columns"><input name="telsol7" type="text" id="telsol7" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol8)"  ></div>
<div class="small-1 columns"><input name="telsol8" type="text" id="telsol8" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol9)"  ></div>
<div class="small-1 columns"><input name="telsol9" type="text" id="telsol9" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol10)"  ></div>
<div class="small-1 columns"><input name="telsol10" type="text" id="telsol10" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcsol1)"  ></div>


	    </p>
</div>
	   
	  <div class="row">   <p align="left">RFC con homoclave:
	    	
      <div class="small-11 columns">    
      <div class="small-1 columns"><input name="rfcsol1" type="text" id="rfcsol1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol2)"></div>
      <div class="small-1 columns"><input name="rfcsol2" type="text" id="rfcsol2" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][1];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol3)"></div>
      <div class="small-1 columns"><input name="rfcsol3" type="text" id="rfcsol3" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][2];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol4)"></div>
      <div class="small-1 columns"><input name="rfcsol4" type="text" id="rfcsol4" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][3];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol5)"></div>
      <div class="small-1 columns"><input name="rfcsol5" type="text" id="rfcsol5" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][4];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol6)"></div>
      <div class="small-1 columns"><input name="rfcsol6" type="text" id="rfcsol6" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][5];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol7)"></div>
      <div class="small-1 columns"><input name="rfcsol7" type="text" id="rfcsol7" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][6];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol8)"></div>
      <div class="small-1 columns"><input name="rfcsol8" type="text" id="rfcsol8" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][7];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol9)"></div>
      <div class="small-1 columns"><input name="rfcsol9" type="text" id="rfcsol9" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][8];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol10)"></div>
      <div class="small-1 columns"><input name="rfcsol10" type="text" id="rfcsol10" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][9];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol11)"></div>
      <div class="small-1 columns"><input name="rfcsol11" type="text" id="rfcsol11" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][10];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol12)"></div>
      <div class="small-1 columns"><input name="rfcsol12" type="text" id="rfcsol12" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][11];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol13)"></div></div>
      <div class="small-1 columns"><input name="rfcsol13" type="text" id="rfcsol13" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][12];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,faxsol1)"></div>
      
      
      </p></div>
  
<div class="row">
	    <p align="left">Fax (Con Lada) :
          <div class="small-1 columns"><input name="faxsol1"  type="text" id="faxsol1" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][0];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol2)"></div>
          <div class="small-1 columns"><input name="faxsol2"  type="text" id="faxsol2" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][1];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol3)"></div>
          <div class="small-1 columns"><input name="faxsol3"  type="text" id="faxsol3" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][2];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol4)"></div>
          <div class="small-1 columns"><input name="faxsol4"  type="text" id="faxsol4" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][3];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol5)"></div>
          <div class="small-1 columns"><input name="faxsol5"  type="text" id="faxsol5" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][4];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol6)"></div>
          <div class="small-1 columns"><input name="faxsol6"  type="text" id="faxsol6" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][5];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol7)"></div>
          <div class="small-1 columns"><input name="faxsol7"  type="text" id="faxsol7" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][6];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol8)"></div>
          <div class="small-1 columns"><input name="faxsol8"  type="text" id="faxsol8" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][7];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol9)"></div>
          <div class="small-1 columns"><input name="faxsol9"  type="text" id="faxsol9" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][8];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxsol10)"></div>
          <div class="small-1 columns"><input name="faxsol10"  type="text" id="faxsol10" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxSolicitante']!= '' ) { echo $row2['FaxSolicitante'][9];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,dirsol)"></div>
	    </p>
	</div>
<hr>
<div class="row">
	<div class="small-6 columns">
	    <p align="left">
	      <input name="dirsol" type="text" id="dirsol" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" >
          <input name="dirnumsol" type="text" id="dirnumsol" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>"   placeholder="Número">
          <input name="mailsol2" type="text" id="mailsol2"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>" placeholder="Email">
       </p>
   </div>
	 <div class="small-6 columns">
	   <p align="left">
	      <input name="colsol" type="text" id="colsol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ColSolicitante']; } ?>" placeholder="Colonia">
          <input name="cdsol" type="text" id="cdsol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CdSolicitante']; } ?>" placeholder="Ciudad">
          <input name="edosol" type="text" id="edosol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EdoSolicitante']; } ?>"  placeholder="Estado">
          <input name="cpsol" type="text" id="cpsol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CPSolicitante']; } ?>"  placeholder="C.P.">
	    </p>
</div>
  </div>



      <hr>

      <p align="left"><strong>DATOS DEL CONTACTO DE LA EMPRESA</strong></p>
     <div class="row">
      <div class="small-6 columns">
      <p align="left">
        <input name="nomconemp" type="text" id="nomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NomDatContEmp']; } ?>" placeholder="Primer Nombre">
        <input name="segnomconemp" type="text" id="segnomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['SegNomDatContEmp']; } ?>" placeholder="Segundo Nombre">
    </div>
        <div class="small-6 columns">
        <input name="apepaconemp" type="text" id="apepaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApPatDatContEmp']; } ?>" placeholder="Apellido Parteno">
        <input name="apemaconemp" type="text" id="apemaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApMatDatContEmp']; } ?>" placeholder="Apellido Materno">
</p></div>
</div>
<div class="row">
      <div class="small-6 columns">
      <p align="left">
        <input name="datobdir22" type="text" id="datobdir22"  placeholder="Calle y No.:">
          <input name="datobcol23" type="text" id="datobcol23"  placeholder="Colonia:"></p>
    </div>
      <div class="small-6 columns">
      <p align="left">
        <input name="colsol22" type="text" id="colsol22"  placeholder="Ciudad:">
          <input name="cdsol22" type="text" id="cdsol22"  placeholder="Estado:">
    </p></div>
    <p align="left">
    <div class="small-6 columns">
          <input name="lugnacsol22" type="text" id="lugnacsol22"  placeholder="Código Postal:">
  </div>
  
<div class="row">
      <div class="small-12 columns"><p align="left">RFC con homoclave:</div>
        <div class="small-10 columns">  
        <div class="small-1 columns">  <input name="rfcconemp1" type="text" id="rfcconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp2)"></div>
        <div class="small-1 columns">  <input name="rfcconemp2" type="text" id="rfcconemp2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp3)"></div>
        <div class="small-1 columns">  <input name="rfcconemp3" type="text" id="rfcconemp3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp4)"></div>
        <div class="small-1 columns">  <input name="rfcconemp4" type="text" id="rfcconemp4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp5)"></div>
        <div class="small-1 columns">  <input name="rfcconemp5" type="text" id="rfcconemp5" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp6)"></div>
        <div class="small-1 columns">  <input name="rfcconemp6" type="text" id="rfcconemp6" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp7)"></div>
        <div class="small-1 columns">  <input name="rfcconemp7" type="text" id="rfcconemp7" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp8)"></div>
        <div class="small-1 columns">  <input name="rfcconemp8" type="text" id="rfcconemp8" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp9)"></div>
        <div class="small-1 columns">  <input name="rfcconemp9" type="text" id="rfcconemp9" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp10)"></div>
        <div class="small-1 columns">  <input name="rfcconemp10" type="text" id="rfcconemp10" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp11)"></div>
        <div class="small-1 columns">  <input name="rfcconemp11" type="text" id="rfcconemp11" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][10]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp12)"></div>
        <div class="small-1 columns">  <input name="rfcconemp12" type="text" id="rfcconemp12" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][11]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp13)"></div></div>
        <div class="small-1 columns">  <input name="rfcconemp13" type="text" id="rfcconemp13" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][12]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp1)"></div>
      </p>
</div>
<div class="row">
      <p align="left">Telefono partiular (Con lada - 10 dígitos) : 
        <div class="small-1 columns">  <input name="telconemp1" type="text" id="telconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp2)"></div>
        <div class="small-1 columns">  <input name="telconemp2" type="text" id="telconemp2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp3)"></div>
        <div class="small-1 columns">  <input name="telconemp3" type="text" id="telconemp3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp4)"></div>
        <div class="small-1 columns">  <input name="telconemp4" type="text" id="telconemp4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp5)"></div>
        <div class="small-1 columns">  <input name="telconemp5" type="text" id="telconemp5" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp6)"></div>
        <div class="small-1 columns">  <input name="telconemp6" type="text" id="telconemp6" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp7)"></div>
        <div class="small-1 columns">  <input name="telconemp7" type="text" id="telconemp7" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp8)"></div>
        <div class="small-1 columns">  <input name="telconemp8" type="text" id="telconemp8" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp9)"></div>
        <div class="small-1 columns">  <input name="telconemp9" type="text" id="telconemp9" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp10)"></div>
        <div class="small-1 columns"> <input name="telconemp10" type="text" id="telconemp10"value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp1)"></div>
        </p>
</div>

<div class="row">
      <p align="left">Fax (Con Lada) : 
        <div class="small-1 columns">  <input name="faxconemp1" type="text" id="faxconemp1" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][0];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp2)"></div>
        <div class="small-1 columns">  <input name="faxconemp2" type="text" id="faxconemp2" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][1];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp3)"></div>
        <div class="small-1 columns">  <input name="faxconemp3" type="text" id="faxconemp3" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][2];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp4)"></div>
        <div class="small-1 columns">  <input name="faxconemp4" type="text" id="faxconemp4" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][3];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp5)"></div>
        <div class="small-1 columns">  <input name="faxconemp5" type="text" id="faxconemp5" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][4];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp6)"></div>
        <div class="small-1 columns">  <input name="faxconemp6" type="text" id="faxconemp6" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][5];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp7)"></div>
        <div class="small-1 columns">  <input name="faxconemp7" type="text" id="faxconemp7" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][6];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp8)"></div>
        <div class="small-1 columns">  <input name="faxconemp8" type="text" id="faxconemp8" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][7];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp9)"></div>
        <div class="small-1 columns">  <input name="faxconemp9" type="text" id="faxconemp9" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][8];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxconemp10)"></div>
        <div class="small-1 columns"><input name="faxconemp10" type="text" id="faxconemp10" value="<?php if(isset($row2['Folio_Cliente']) && $row2['FaxDatConEmp']!= '' ) { echo $row2['FaxDatConEmp'][9];     }?>" maxlength="1" onKeyUp="myFunction(this,this.value,mailconemp)"></div>
      </p>
</div>
<div class="row">
      <p align="left">
  <div class="small-5 columns">  
        <input name="mailconemp" type="text" id="mailconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EmailDatConEmp']; } ?>" placeholder="Email">
        </div>
     <div class="small-5 columns">  
        <input name="puesconemp" type="text" id="puesconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PuestDatConEmp']; } ?>" placeholder="Puesto que desempeña en la empresa">
    </div>
      </p>
  
</div>
      <hr>

      <p align="left"><strong>DATOS GENERALES DE LA EMPRESA</strong></p>
      <div class="row">
        <p align="left">
        <div class="small-5 columns">  
              <input name="actprinc" type="text" id="actprinc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ActPrinDatGenPM']; } ?>" placeholder="Actividad Principal/según alta o último cambio ante SHCP">
          </div>
          <div class="small-5 columns">  
              <input name="cantperson" type="text" id="cantperson" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['CantPerDatGenPM']; } ?>" placeholder="Cantidad de personal">
          </div>
          </p>
      </div>

<div class="row">
      <p align="left">Fecha inicio de operaciones:
          <div class="small-2 columns"><input name="inicoper1" type="date" id="inicoper1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['IniOpDatGenPM']; } ?>" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper2)"></div>
       </p>
</div>
      <hr>
      <p align="left"><strong>CONSTITUCIÓN DE LA EMPRESA</strong></p>
      <div class="row">
      <p align="left">
          Fecha de contitución de la empresa:
           <div class="small-2 columns"><input name="inicoper13" type="date" id="inicoper13" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FechaConsEmp']; } ?>" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper23)"></div>
        </p>
      </div>
      <div class="row">
          <p align="left">
             <div class="small-5 columns"><input name="antemp" type="text" id="antemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['AntConsEmp']; } ?>" placeholder="Antigüedad"></div>
             <div class="small-7 columns"><input name="apodsusc" type="text" id="apodsusc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApoConsEmp']; } ?>" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración"></div>
          </p>
      </div>
      <hr>
      <p align="left"><strong>REFERENCIAS BANCARIAS (TARJETA DE CRÉDITO)</strong></p>
      <div class="row">
      <p align="left">
          <div class="small-4 columns"><input name="refbanc" type="text" id="refbanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" placeholder="Banco"></div>
          <div class="small-4 columns"><input name="numcuebanc" type="text" id="numcuebanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarRefBan']; } ?>" placeholder="Número de cuenta"></div>
          <div class="small-4 columns"><input name="sucbanc1" type="text" id="sucbanc1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan']; } ?>" placeholder="Sucursal"></div>
        </p>
      </div>

<div class="row">
      <p align="left">
         
        Fecha de apertura:
  <div class="small-2 columns"><input name="aperbanc1d" type="date" id="aperbanc1d" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan']; } ?>" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,aperbanc1m)"></div>
   </p>
</div>
<hr>
     <div class="row">
      <p align="left">
          <div class="small-4 columns"><input name="refbanc2" type="text" id="refbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan2']; } ?>" id="refbanc2" placeholder="Banco"></div>
          <div class="small-4 columns"><input name="tarjrefbanc" type="text" id="tarjrefbanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarRefBan2']; } ?>" placeholder="Número de Tarjeta de Crédito"></div>
          <div class="small-4 columns"><input name="sucbanc2" type="text" id="sucbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan2']; } ?>" placeholder="Sucursal"></div>
        </p>
     </div>
<div>
      <p align="left">
        Fecha de apertura:
  <div class="small-2 columns"><input name="aperbanc1d2" type="date" id="aperbanc1d2"  maxlength="2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan2']; } ?>" placeholder="dd" onKeyUp="myFunction(this,this.value,aperbanc1m2)"></div>
   </p>
</div>
      <hr>
      <p align="left"><strong>CARGO DIRECTO CUENTA DE CHEQUES (para contratos en M.N. BBVA Bancomer, HSBC, Banamex, BANORTE, Scotiabank Inverlat, Santander o Inbursa)<br>(para contratos en USD únicamente BBVA Bancomer y HSBC) </strong></p>
      <div class="row">
      <p align="left">
          <div class="small-5 columns"><input name="cargdir" type="text" id="cargdir" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancCarDir']; } ?>" placeholder="Banco"></div>
          <div class="small-5 columns"><input name="nocuentcd" type="text" id="nocuentcd" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarCarDir']; } ?>" placeholder="Número de Cuenta (CLAVE)"></div>
      </p>
      </div>
      <hr>
      <p align="left"><strong>REFERENCIAS COMERCIALES</strong></p>
      <p align="left">
        <div class="row">
       <div class="small-5 columns"> <input name="refcomemp1" type="text" id="refcomemp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" placeholder="Empresa"></div>
        </div>
        </p>
        <div class="row">
       <p align="left">  Telefono(Con lada - 10 dígitos):
          <div class="small-1 columns"><input name="telrefcom11" type="text" id="telrefcom11" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom12)"></div>
          <div class="small-1 columns"><input name="telrefcom12" type="text" id="telrefcom12" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom13)"></div>
          <div class="small-1 columns"><input name="telrefcom13" type="text" id="telrefcom13" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom14)"></div>
          <div class="small-1 columns"><input name="telrefcom14" type="text" id="telrefcom14" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom15)"></div>
          <div class="small-1 columns"><input name="telrefcom15" type="text" id="telrefcom15" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom16)"></div>
          <div class="small-1 columns"><input name="telrefcom16" type="text" id="telrefcom16" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom17)"></div>
          <div class="small-1 columns"><input name="telrefcom17" type="text" id="telrefcom17" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom18)"></div>
          <div class="small-1 columns"><input name="telrefcom18" type="text" id="telrefcom18" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom19)"></div>
          <div class="small-1 columns"><input name="telrefcom19" type="text" id="telrefcom19" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom110)"></div>
          <div class="small-1 columns"><input name="telrefcom110" type="text" id="telrefcom110" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom1)"></div>
         </p>
        </div>
     <div class="row">
      <p align="left">
       <div class="small-5 columns"> <input name="antirefcom1" type="text" id="antirefcom1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom']; } ?>" placeholder="Antigüedad Desde del Año"></div>
       <div class="small-5 columns"> <input name="refcomemp2" type="text" id="refcomemp2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" placeholder="Empresa"></div>
      </p>
     </div>
     
        <div class="row">
 <p align="left">Telefono(Con lada - 10 dígitos):
<div class="small-1 columns"><input name="telrefcom21" type="text" id="telrefcom21" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom22)"></div>
<div class="small-1 columns"><input name="telrefcom22" type="text" id="telrefcom22" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom23)"></div>
<div class="small-1 columns"><input name="telrefcom23" type="text" id="telrefcom23" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom24)"></div>
<div class="small-1 columns"><input name="telrefcom24" type="text" id="telrefcom24" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom25)"></div>
<div class="small-1 columns"><input name="telrefcom25" type="text" id="telrefcom25" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom26)"></div>
<div class="small-1 columns"><input name="telrefcom26" type="text" id="telrefcom26" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom27)"></div>
<div class="small-1 columns"><input name="telrefcom27" type="text" id="telrefcom27" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom28)"></div>
<div class="small-1 columns"><input name="telrefcom28" type="text" id="telrefcom28" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom29)"></div>
<div class="small-1 columns"><input name="telrefcom29" type="text" id="telrefcom29" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telrefcom210)"></div>
<div class="small-1 columns"><input name="telrefcom210" type="text" id="telrefcom210" value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,antirefcom2)"> </div>
    </p>
        </div>

      <p align="left">
          <div class="small-5 columns"><input name="antirefcom2" type="text" id="antirefcom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom2']; } ?>" placeholder="Antigüedad Desde del Año"></div>
        </p>
    <hr>
      <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA MORAL</strong></p>
      <div class="row"> 
      <p align="left">
          <div class="small-4 columns"><input name="nomrazsoc" type="text" id="nomrazsoc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObPerMor']; } ?>" placeholder="Nombre, Razón Social"></div>
        </p>
      </div>

      <div class="row">
      <p align="left">Telefono(Con lada - 10 dígitos):
  <div class="small-1 columns"><input name="telpermor1" type="text" id="telpermor1" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor2)"></div>
  <div class="small-1 columns"><input name="telpermor2" type="text" id="telpermor2" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor3)"></div>
  <div class="small-1 columns"><input name="telpermor3" type="text" id="telpermor3" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor4)"></div>
  <div class="small-1 columns"><input name="telpermor4" type="text" id="telpermor4" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor5)"></div>
  <div class="small-1 columns"><input name="telpermor5" type="text" id="telpermor5" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor6)"></div>
  <div class="small-1 columns"><input name="telpermor6" type="text" id="telpermor6" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor7)"></div>
  <div class="small-1 columns"><input name="telpermor7" type="text" id="telpermor7" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor8)"></div>
  <div class="small-1 columns"><input name="telpermor8" type="text" id="telpermor8" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor9)"></div>
  <div class="small-1 columns"><input name="telpermor9" type="text" id="telpermor9" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telpermor10)"></div>
  <div class="small-1 columns"><input name="telpermor10" type="text" id="telpermor10" value="<?php if(isset($row['Folio_Cliente']) && $row['TelObPerMor']) {  echo $row['TelObPerMor'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc1)"></div>
      </p>
      </div>
      <div class="row">
        
      <p align="left">RFC con homoclave:
        <div class="small-10 columns">
        <div class="small-1 columns"><input name="permorrfc1" type="text" id="permorrfc1" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc2)"></div>
        <div class="small-1 columns"><input name="permorrfc2" type="text" id="permorrfc2" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc3)"></div>
        <div class="small-1 columns"><input name="permorrfc3" type="text" id="permorrfc3" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc4)"></div>
        <div class="small-1 columns"><input name="permorrfc4" type="text" id="permorrfc4" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc5)"></div>
        <div class="small-1 columns"><input name="permorrfc5" type="text" id="permorrfc5" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc6)"></div>
        <div class="small-1 columns"><input name="permorrfc6" type="text" id="permorrfc6" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc7)"></div>
        <div class="small-1 columns"><input name="permorrfc7" type="text" id="permorrfc7" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc8)"></div>
        <div class="small-1 columns"><input name="permorrfc8" type="text" id="permorrfc8" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc9)"></div>
        <div class="small-1 columns"><input name="permorrfc9" type="text" id="permorrfc9" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc10)"></div>
        <div class="small-1 columns"><input name="permorrfc10" type="text" id="permorrfc10" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc11)"></div>
        <div class="small-1 columns"><input name="permorrfc11" type="text" id="permorrfc11" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][10]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc12)"></div>
        <div class="small-1 columns"><input name="permorrfc12" type="text" id="permorrfc12" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][11]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,permorrfc13)"></div></div>
        <div class="small-1 columns"><input name="permorrfc13" type="text" id="permorrfc13" value="<?php if(isset($row['Folio_Cliente']) && $row['RFCObPerMor']) {  echo $row['RFCObPerMor'][12]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,dirpermor)"></div>
        </p>
      </div>
      <div class="row">
      <p align="left">
         <div class="small-6 columns"> <input name="dirpermor" type="text" id="dirpermor" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['DirObPerMor']; } ?>" placeholder="Dirección / Calle y número"></div>
       </p>
       </div>
       <div>
    <p align="left">    Fax(Con lada - 10 dígitos):
  <div class="small-1 columns"><input name="faxpermor1" type="text" id="faxpermor1" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor2)"></div>
  <div class="small-1 columns"><input name="faxpermor2" type="text" id="faxpermor2" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][1]; } ?>" maxlength="1"onKeyUp="myFunction(this,this.value,faxpermor3)" ></div>
  <div class="small-1 columns"><input name="faxpermor3" type="text" id="faxpermor3" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor4)"></div>
  <div class="small-1 columns"><input name="faxpermor4" type="text" id="faxpermor4" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor5)"></div>
  <div class="small-1 columns"><input name="faxpermor5" type="text" id="faxpermor5" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor6)"></div>
  <div class="small-1 columns"><input name="faxpermor6" type="text" id="faxpermor6" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor7)"></div>
  <div class="small-1 columns"><input name="faxpermor7" type="text" id="faxpermor7" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor8)"></div>
  <div class="small-1 columns"><input name="faxpermor8" type="text" id="faxpermor8" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor9)"></div>
  <div class="small-1 columns"><input name="faxpermor9" type="text" id="faxpermor9" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,faxpermor10)"></div>
  <div class="small-1 columns"><input name="faxpermor10" type="text" id="faxpermor10" value="<?php if(isset($row['Folio_Cliente']) && $row['FaxObPerMor']) {  echo $row['FaxObPerMor'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,colpermor)"></div>
        </p>
      </div>
<div>
      <p align="left">  
          <div class="small-3 columns"><input name="colpermor" type="text" id="colpermor" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ColObPerMor']; } ?>" placeholder="Colonia"></div>
          <div class="small-3 columns"><input name="cdpermor" type="text" id="cdpermor" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CdObPerMor']; } ?>" placeholder="Ciudad"></div>
          <div class="small-3 columns"><input name="edopermor" type="text" id="edopermor" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdoObPerMor']; } ?>" placeholder="Estado"></div>
          <div class="small-3 columns"><input name="cppremor" type="text" id="cppremor" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CPObPerMor']; } ?>" placeholder="C.P."></div>
        </p>
</div>
      <hr>
      <p align="left"><strong>CONSTITUCIÓN DE LA EMPRESA</strong></p>
      <div class="row">
      <p align="left">
          <div class="small-5 columns"><input name="antemp2" type="text" id="antemp2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntConsEmpPM']; } ?>" placeholder="Antigüedad"></div>
          <div class="small-5 columns"><input name="apodsusc2" type="text" id="apodsusc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApoConsEmpPM']; } ?>" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración"></div>
      </p>
      </div>
      <hr>
      <p align="left"><strong>DATOS GENERALES</strong></p>
      <div class="row">
      <p align="left">
          <div class="small-5 columns"><input name="actprinc2" type="text" id="actprinc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ActPrinDatGen']; } ?>" placeholder="Actividad Principal/según alta o último cambio ante SHCP"></div>
          <div class="small-5 columns"><input name="cantperson2" type="text" id="cantperson2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CantPerDatGen']; } ?>" placeholder="Cantidad de personal"></div>
        </p>
      </div>
      <div class="row">
      <p align="left">Fecha inicio de operaciones:
        <div class="small-4 columns"><input name="inicoper12" type="date" id="inicoper12"  maxlength="2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['IniOpDatGen']; } ?>" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper22)"></div>
          </p>
      </div>
      <hr>
</div>
      <p align="left">De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. * </p>
      <div id="accionistas">
      <div class="row">
        <div class="small-6 columns">
      <p align="left">
        <input name="accionista1" type="text" id="accionista1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc1']; } ?>" placeholder="Nombre">
        <input name="rfcaccion1" type="text" id="rfcaccion1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC">
        <input name="%1" type="text" id="%1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%">
        </p>
      <p align="left">
        <input name="accionista2" type="text" id="accionista2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc2']; } ?>" placeholder="Nombre">
          <input name="rfcaccion2" type="text" id="rfcaccion2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC">
          <input name="%2" type="text" id="%2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%">
</p>
      <p align="left">
        <input name="accionista3" type="text" id="accionista3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc3']; } ?>" placeholder="Nombre">
          <input name="rfcaccion3" type="text" id="rfcaccion3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC">
          <input name="%3" type="text" id="%3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%">
</p>
      <p align="left">
        <input name="accionista4" type="text" id="accionista4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc4']; } ?>" placeholder="Nombre">
          <input name="rfcaccion4" type="text" id="rfcaccion4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC">
          <input name="%4" type="text" id="%4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%">
</p>
</div>
      </div>

      <p align="left">* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:</p>
      <div class="row">
        <div class="small-6 columns">
      <p align="left">
        <input name="accpermor1" type="text" id="accpermor1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAccPM1']; } ?>" placeholder="Nombre">
          <input name="rfcaccpermor1" type="text" id="rfcaccpermor1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM1']; } ?>" placeholder="RFC">
          <input name="%permoracc1" type="text" id="%permoracc1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM1']; } ?>" placeholder="%">
</p>
      <p align="left">
        <input name="accpermor2" type="text" id="accpermor2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAccPM2']; } ?>" placeholder="Nombre">
          <input name="rfcaccpermor2" type="text" id="rfcaccpermor2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM2']; } ?>" placeholder="RFC">
          <input name="%permoracc2" type="text" id="%permoracc2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM2']; } ?>" placeholder="%">
</p>
      </div>
  </div>
      </div>

	    <hr>
      <div id="resto">
      <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA FÍSICA</strong></p>
      <div class="row">
        <div class="small-5 columns">
      <p align="left">
        <input name="datobnom1" type="text" id="datobnom1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol']; } ?>" placeholder="Nombre(s)">
          <input name="datobappat1" type="text" id="datobappat1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol']; } ?>" placeholder="Apellido Paterno">
          <input name="datobapmat1" type="text" id="datobapmat1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol']; } ?>" placeholder="Apellido Materno">
      </p>
  </div>
      </div>
      <div>
      </div>
      <div class="row">
        
      <p align="left">
        <div class="small-6 columns">
        <input name="datobdir1" type="text" id="datobdir1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['DirObSol']; } ?>" placeholder="Dirección / Calle y número">
        <input name="datobcol1" type="text" id="datobcol1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ColObSol']; } ?>" placeholder="Colonia">
      </div>
      <div class="small-6 columns">
        <input name="datobcd1" type="text" id="datobcd1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CdObSol']; } ?>" placeholder="Ciudad">
        <input name="datoblugnac1" type="text" id="datoblugnac1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol']; } ?>" placeholder="Lugar nacimiento (País y Edo.)">
    </div>
      Tiene propiedad a su nombre? 
      <input id="prop1" name="datobprop1" required type="radio" value="1" <?php if(isset($row['Folio_Cliente'])) {if($row['PropObSol']=='Si') {echo "checked";} }?>> <label for="prop1">Si</label>
     
      <input id="prop2" name="datobprop1" required type="radio" value="2"><label for="prop2" <?php if(isset($row['Folio_Cliente'])) {if($row['PropObSol']=='No') {echo "checked";} }?>>No</label>
</p>
      
  </div>

  <div class="row">
    <div class="small-6 columns">
      <p align="left">
        <input name="datobedo1" type="text" id="datobedo1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdoObSol']; } ?>" placeholder="Estado">
          <input name="datobcp1" type="text" id="datobcp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CPObSol']; } ?>" placeholder="C.P.">
          <input  name="datobmail1" type="text" id="datobmail1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol']; } ?>" placeholder="Email">
      </p>
  </div>
  </div>
      <p align="left">
      sexo:
     
        <input id="se1"  name="datobsex1" required type="radio" value="M"<?php if(isset($row['Folio_Cliente'])){if ($row['SexoObSol']=='Masculino') {echo "checked"; } } ?>>  <label for="se1"><i class="step fi-male size-72"></i> M</label> 
      
        <input id="se2" name="datobsex1" required type="radio" value="F" <?php if(isset($row['Folio_Cliente'])){if ($row['SexoObSol']=='Femenino') {echo "checked"; } } ?>>   <label for="se2" ><i class="fi-female size-36"></i>F</label>
    </p>
<div class="row">
<p align="left">
Fecha de nacimiento:
<div class="small-2 columns"><input name="datobfechnac1d" type="date" id="datobfechnac1d" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSol']; } ?>" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac1m)"></div>
      </p>
      </div>
      <div class="row">
      <p align="left">
      <div class="small-6 columns"><input name="datobed1" type="text" id="datobed1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSol']; } ?>" placeholder="Edad"></div>
    <div class="small-6 columns"><input name="datobcurp1" type="text" id="datobcurp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol']; } ?>" placeholder="CURP"></div>
      </p>
      </div>
<div class="row">
      <p align="left">RFC con homoclave:
        <div class="small-10 columns">
          <div class="small-1 columns"><input name="datobrfc11" type="text" id="datobrfc11" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc12)"></div>
          <div class="small-1 columns"><input name="datobrfc12" type="text" id="datobrfc12" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc13)"></div>
          <div class="small-1 columns"><input name="datobrfc13" type="text" id="datobrfc13" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc14)"></div>
          <div class="small-1 columns"><input name="datobrfc14" type="text" id="datobrfc14" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc15)"></div>
          <div class="small-1 columns"><input name="datobrfc15" type="text" id="datobrfc15" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc16)"></div>
          <div class="small-1 columns"><input name="datobrfc16" type="text" id="datobrfc16" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc17)"></div>
          <div class="small-1 columns"><input name="datobrfc17" type="text" id="datobrfc17" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc18)"></div>
          <div class="small-1 columns"><input name="datobrfc18" type="text" id="datobrfc18" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc19)"></div>
          <div class="small-1 columns"><input name="datobrfc19" type="text" id="datobrfc19" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc110)"></div>
          <div class="small-1 columns"><input name="datobrfc110" type="text" id="datobrfc110" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc111)"></div>
          <div class="small-1 columns"><input name="datobrfc111" type="text" id="datobrfc111" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][10]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc112)"></div>
          <div class="small-1 columns"><input name="datobrfc112" type="text" id="datobrfc112" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][11]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc113)"></div></div>
          <div class="small-1 columns"><input name="datobrfc113" type="text" id="datobrfc113" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol'][12]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel11)"></div>
        </p>
</div>

    <div class="row">
      <p align="left">Telefono(Con lada - 10 dígitos):
          <div class="small-1 columns"><input name="datobtel11" type="text" id="datobtel11" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel12)"></div>
          <div class="small-1 columns"><input name="datobtel12" type="text" id="datobtel12" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel13)"></div>
          <div class="small-1 columns"><input name="datobtel13" type="text" id="datobtel13" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel14)"></div>
          <div class="small-1 columns"><input name="datobtel14" type="text" id="datobtel14" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel15)"></div>
          <div class="small-1 columns"><input name="datobtel15" type="text" id="datobtel15" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel16)"></div>
          <div class="small-1 columns"><input name="datobtel16" type="text" id="datobtel16" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel17)"></div>
          <div class="small-1 columns"><input name="datobtel17" type="text" id="datobtel17" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel18)"></div>
          <div class="small-1 columns"><input name="datobtel18" type="text" id="datobtel18" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel19)"></div>
          <div class="small-1 columns"><input name="datobtel19" type="text" id="datobtel19" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel110)"></div>
          <div class="small-1 columns"><input name="datobtel110" type="text" id="datobtel110" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel112)"></div>
</p>
    </div>
      <div class="row">
      <p align="left">Telefono móvil(Con lada - 10 dígitos):
          <div class="small-1 columns"><input name="datobtel112" type="text" id="datobtel112" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel122)"></div>
          <div class="small-1 columns"><input name="datobtel122" type="text" id="datobtel122" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel132)"></div>
          <div class="small-1 columns"><input name="datobtel132" type="text" id="datobtel132" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel142)"></div>
          <div class="small-1 columns"><input name="datobtel142" type="text" id="datobtel142" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel152)"></div>
          <div class="small-1 columns"><input name="datobtel152" type="text" id="datobtel152" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel162)"></div>
          <div class="small-1 columns"><input name="datobtel162" type="text" id="datobtel162" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel172)"></div>
          <div class="small-1 columns"><input name="datobtel172" type="text" id="datobtel172" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel182)"></div>
          <div class="small-1 columns"><input name="datobtel182" type="text" id="datobtel182" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel192)"></div>
          <div class="small-1 columns"><input name="datobtel192" type="text" id="datobtel192" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1102)"></div>
          <div class="small-1 columns"><input name="datobtel1102" type="text" id="datobtel1102" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,obsol1)"></div>
</p>
      </div>
      <div class="row">
      <p align="left">
       <div class="small-7 columns"> <input name="obsol1" type="text" id="obsol1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSolPF']; } ?>" placeholder="Obligado Solidario (Nombre (s), apellido paterno, apellido materno )"></div>
    
    </p>
   
      <p align="left">
    <div class="small-6 columns">
          sexo: 
            <input id="se3" name="datobsex11" required type="radio" value="M" <?php if(isset($row['Folio_Cliente'])){if ($row['SexoObSolPF']=='Masculino') {echo "checked"; } } ?>> <label for="se3"><i class="step fi-male size-72"></i> M</label>


      <input id="se4" name="datobsex11" required type="radio" value="F" <?php if(isset($row['Folio_Cliente'])){if ($row['SexoObSolPF']=='Femenino') {echo "checked"; } } ?>>  <label for="se4"><i class="step fi-female size-72"></i> F</label>
    </div>
    </p>
    </div>
      <div class="row">
        <p align="left">
      Fecha de nacimiento:
      <div class="small-2 columns"><input name="datobfechnac1d2" type="date" id="datobfechnac1d2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSolPF']; } ?>" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac1m2)"></div>
       </p>
      </div>

<div class="row">
      <p align="left">
        <div class="small-4 columns"><input name="datobnom22" type="text" id="datobnom22" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSolPF']; } ?>" placeholder="R.F.C. con homoclave"></div>
          <div class="small-4 columns"><input name="CURPObSolPF" type="text" id="CURPObSolPF" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSolPF']; } ?>" placeholder="CURP"></div>
          <div class="small-4 columns"><input name="EdObSolPF" type="text" id="EdObSolPF" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSolPF']; } ?>" placeholder="Edad"></div>
</p>
</div>
      </div>
      <hr>
      <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO (2) PERSONA FÍSICA</strong></p>
      <div id="part">
     <div class="row">
      <p align="left">
        <div class="small-4 columns"><input name="datobnom2" type="text" id="datobnom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol2']; } ?>" placeholder="Nombre(s)"></div>
          <div class="small-4 columns"><input name="datobappat2" type="text" id="datobappat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol2']; } ?>" placeholder="Apellido Paterno"></div>
          <div class="small-4 columns"><input name="datobapmat2" type="text" id="datobapmat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol2']; } ?>" placeholder="Apellido Materno"></div>
</p>
      <p align="left">
          <div class="small-5 columns"><input name="datobdir2" type="text" id="datobdir2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['DirObSol2']; } ?>" placeholder="Dirección / Calle y número"></div>
          <div class="small-5 columns"><input name="datobcol2" type="text" id="datobcol2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ColObSol2']; } ?>" placeholder="Colonia"></div>
          <div class="small-5 columns"><input name="datobcd2" type="text" id="datobcd2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CdObSol2']; } ?>" placeholder="Ciudad"></div>
          <div class="small-5 columns"><input name="datoblugnac2" type="text" id="datoblugnac2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol2']; } ?>" placeholder="Lugar nacimiento (País y Edo.)"></div>
        </p>
     </div>
      <p align="left">
        Tiene propiedad a su nombre? 
  <input id="pro1" name="datobprop2" required type="radio" value="Si" <?php if(isset($row['Folio_Cliente'])){ if($row['PropObSol2']=='Si') {echo "checked";} } ?> ><label for="pro1">Si</label>
      
  <input id="pro2" name="datobprop2" required type="radio" value="No" <?php if(isset($row['Folio_Cliente'])){ if($row['PropObSol2']=='No') {echo "checked";} } ?> ><label for="pro2">  No</label>
        </p>

        <div class="row">
      <p align="left">
          <div class="small-6 columns"><input name="datobedo2" type="text" id="datobedo2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdoObSol2']; } ?>" placeholder="Estado"></div>
          <div class="small-6 columns"><input name="datobcp2" type="text" id="datobcp2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CPObSol2']; } ?>" placeholder="C.P."></div>
          <div class="small-6 columns"><input  name="datobmail2" type="text" id="datobmail2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol2']; } ?>" placeholder="Email"></div>
        </p>
        </div>
      <p align="left">sexo: 
        <input id="se5" required name="datobsex2" type="radio" value="M" <?php if(isset($row['Folio_Cliente'])){ if($row['SexoObSol2']=='Masculino'){echo "checked";} }?>><label for="se5" ><i class="step fi-male size-72"></i> M</label>
       
  <input id="se6" required name="datobsex2" type="radio" value="F" <?php if(isset($row['Folio_Cliente'])){ if($row['SexoObSol2']=='Femenino'){echo "checked";} }?>><label for="se6"><i class="step fi-female size-72"></i> F</label>
</p>
<div class="row">
<p align="left">
        Fecha de nacimiento:
     <div class="small-2 columns"><input name="datobfechnac2d" type="date" id="datobfechnac2d"  maxlength="2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSol2']; } ?>" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac2m)"></div>
    
     <div class="small-6 columns"><input name="datobed2" type="text" id="datobed2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSol2']; } ?>" placeholder="Edad"></div>
     <div class="small-6 columns"><input name="datobcurp2" type="text" id="datobcurp2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol2']; } ?>" placeholder="CURP"></div>
        </p>
</div>

        <div class="row">
           
      <p align="left">RFC con homoclave:
        <div class="small-10 columns">
         <div class="small-1 columns"><input name="datobrfc21" type="text" id="datobrfc21" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc22)"></div>
         <div class="small-1 columns"><input name="datobrfc22" type="text" id="datobrfc22" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc23)"></div>
         <div class="small-1 columns"><input name="datobrfc23" type="text" id="datobrfc23" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc24)"></div>
         <div class="small-1 columns"><input name="datobrfc24" type="text" id="datobrfc24" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc25)"></div>
         <div class="small-1 columns"><input name="datobrfc25" type="text" id="datobrfc25" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc26)"></div>
         <div class="small-1 columns"><input name="datobrfc26" type="text" id="datobrfc26" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc27)"></div>
         <div class="small-1 columns"><input name="datobrfc27" type="text" id="datobrfc27" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc28)"></div>
         <div class="small-1 columns"><input name="datobrfc28" type="text" id="datobrfc28" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc29)"></div>
         <div class="small-1 columns"><input name="datobrfc29" type="text" id="datobrfc29" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc210)"></div>
         <div class="small-1 columns"><input name="datobrfc210" type="text" id="datobrfc210" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc211)"></div>
         <div class="small-1 columns"><input name="datobrfc211" type="text" id="datobrfc211" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][10]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc212)"></div>
         <div class="small-1 columns"><input name="datobrfc212" type="text" id="datobrfc212" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][11]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobrfc213)"></div></div>
         <div class="small-1 columns"><input name="datobrfc213" type="text" id="datobrfc213" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSol2'][12]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel21)"></div>
        </p>
        </div>
        <div class="row">
      <p align="left">Telefono(Con lada - 10 dígitos):
        <div class="small-1 columns"><input name="datobtel21" type="text" id="datobtel21" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel22)"></div>
        <div class="small-1 columns"><input name="datobtel22" type="text" id="datobtel22" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel23)"></div>
        <div class="small-1 columns"><input name="datobtel23" type="text" id="datobtel23" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel24)"></div>
        <div class="small-1 columns"><input name="datobtel24" type="text" id="datobtel24" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel25)"></div>
        <div class="small-1 columns"><input name="datobtel25" type="text" id="datobtel25" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel26)"></div>
        <div class="small-1 columns"><input name="datobtel26" type="text" id="datobtel26" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel27)"></div>
        <div class="small-1 columns"><input name="datobtel27" type="text" id="datobtel27" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel28)"></div>
        <div class="small-1 columns"><input name="datobtel28" type="text" id="datobtel28" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel29)"></div>
        <div class="small-1 columns"><input name="datobtel29" type="text" id="datobtel29" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel210)"></div>
        <div class="small-1 columns"><input name="datobtel210" type="text" id="datobtel210" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['TelObSol2'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1122)"></div>
        </p>
        </div>
        <div class="row">

      <p align="left">Telefono móvil(Con lada - 10 dígitos):
          <div class="small-1 columns"><input name="datobtel1122" type="text" id="datobtel1122" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1222)"></div>
          <div class="small-1 columns"><input name="datobtel1222" type="text" id="datobtel1222" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1322)"></div>
          <div class="small-1 columns"><input name="datobtel1322" type="text" id="datobtel1322" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1422)"></div>
          <div class="small-1 columns"><input name="datobtel1422" type="text" id="datobtel1422" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1522)"></div>
          <div class="small-1 columns"><input name="datobtel1522" type="text" id="datobtel1522" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1622)"></div>
          <div class="small-1 columns"><input name="datobtel1622" type="text" id="datobtel1622" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1722)"></div>
          <div class="small-1 columns"><input name="datobtel1722" type="text" id="datobtel1722" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1822)"></div>
          <div class="small-1 columns"><input name="datobtel1822" type="text" id="datobtel1822" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel1922)"></div>
          <div class="small-1 columns"><input name="datobtel1922" type="text" id="datobtel1922" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,datobtel11022)"></div>
          <div class="small-1 columns"><input name="datobtel11022" type="text" id="datobtel11022" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['MovObSol2'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,obsol2)"></div>
</p>
        </div>
      <p align="left">
        <input name="obsol2" type="text" id="obsol2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSolPF2']; } ?>" placeholder="Obligado Solidario (Nombre (s), apellido paterno, apellido materno )">
sexo: 
<input id="se7"  required name="datobsex22" type="radio" value="M"<?php if(isset($row['Folio_Cliente'])){ if($row['SexoObSolPF2']=='Masculino'){echo "checked";} }?>> <label for="se7"><i class="step fi-male size-72"></i>M</label>

<input id="se8" required name="datobsex22" type="radio" value="F"<?php if(isset($row['Folio_Cliente'])){ if($row['SexoObSolPF2']=='Femenino'){echo "checked";} }?>> <label for="se8"><i class="step fi-female size-72"></i>F</label>
</p>
<div class="row">
<p align="left">
Fecha de nacimiento:
<div class="small-2 columns"><input name="datobfechnac1d22" type="date" id="datobfechnac1d22" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSolPF2']; } ?>" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,datobfechnac1m22)"></div>
</p>
</div>
<div class="row">
      <p align="left">
          <div class="small-4 columns"><input name="datobnom222" type="text" id="datobnom222" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['RFCObSolPF2']; } ?>" placeholder="R.F.C. con homoclave"></div>
          <div class="small-4 columns"><input name="datobappat222" type="text" id="datobappat222" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSolPF2']; } ?>" placeholder="CURP"></div>
          <div class="small-4 columns"><input name="datobapmat222" type="text" id="datobapmat222" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSolPF2']; } ?>" placeholder="Edad"></div>
        </p>
</div>
      </div>
      <hr>
      <div id="au"></div>

<hr>

      <hr>
      <div class="row">
      <p align="left">
        <div class="small-4 columns"><input name="clavcon" type="text" id="clavcon" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ClavConcesionario']; } ?>" placeholder="Clave Consesionario o Distribuidor"></div>
          <div class="small-4 columns"><input name="nomcons" type="text" id="nomcons" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomConcesionario']; } ?>" placeholder="Nombre Concesionario o Distribuidor"></div>
          <div class="small-4 columns"><input name="fecha" type="text" id="fecha" value="<?php echo date("Y-m-d");?>"  readonly></div>
    </p>  
      </div>
      <div class="row">
      <p align="justify">
        <div class="small-4 columns"><input name="nomvend" type="text" id="nomvend" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomVendedor']; } ?>" placeholder="Nombre del Vendedor"></div>
          <div class="small-4 columns"><input name="gerentegral" type="text" id="gerentegral" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomGerenteGral']; } ?>" placeholder="Nombre y firma del Gerente General"></div>
</p>
      </div>
     
      <hr>
      </div>
        </div>
    
     <p align="justify">
     </p>
    </div>

         </div>

    
  </li>
  <!-- ... -->
  <li class="accordion-item " data-accordion-item>
    <a href="#" onClick="cambio()" class="accordion-title"><h5 align="center" >FORMATO DE IDENTIFICACIÓN DEL CLIENTE POR CLASIFICACIÓN DE RIESGO</h5></a>
    <div class="accordion-content" data-tab-content>
  
   
    <!--datos generales termina aqui-->
    <div id="ident">
    
    <h4 align="left">Datos generales del cliente</h4> 
    <p align="left">Tipo de Cliente: Nuevo <input name="escliente" type="radio" value="1">
     Actualización <input name="escliente" type="radio" value="2" <?php if(isset($row['Folio_Cliente'])){echo "checked";}?>>
    </p>
    <table width="100%" border="0">
            <tr>
              <td width="22%">Nombre o razón social </td>
              <td width="78%"><input name="textfield" type="text" id="textfield" readonly=""></td>
            </tr>
            <tr>
              <td>Número de cliente </td>
              <td><input name="textfield2" type="text" id="textfield2" readonly=""></td>
            </tr>
            <tr>
              <td>Domicilio particular(Calle, número) </td>
              <td><input name="textfield3" type="text" id="textfield3" readonly=""></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield4" type="text" id="textfield4" readonly=""></td>
            </tr>
            <tr>
              <td>Delegación o municipio </td>
              <td><input name="textfield5" type="text" id="textfield5" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['MunicipioSolicitante']; } ?>"></td>
            </tr>
            <tr>
              <td>Estado o provincia </td>
              <td><input name="textfield6" type="text" id="textfield6" readonly=""></td>
            </tr>
            <tr>
              <td>Fecha de nacimiento o constitución </td>
              <td><input name="textfield7" type="text" id="textfield7" readonly=""></td>
            </tr>
            <tr>
              <td>Código postal </td>
              <td><input name="textfield8" type="text" id="textfield8" readonly=""></td>
            </tr>
            <tr>
              <td>Ciudad o población </td>
              <td><input name="textfield9" type="text" id="textfield9" readonly=""></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield10" type="text" id="textfield10" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['PaisSolicitante']; } ?>"></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield11" type="text" id="textfield11" readonly="" ></td>
            </tr>
          </table>
      <p>&nbsp;</p>
      <h4 align="left">Calificación del grado de riesgo</h4>
      <table width="100%" border="0">
            <tr>
              <td width="32%">Actividad | Objeto Social </td>
              <td width="68%"><select id="select" name="select" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3" <?php  if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_ObjetoSocial']=="Vulnerable"){echo "selected";} } ?>>Vulnerable</option>
                <option value="2" <?php  if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_ObjetoSocial']=="Informal"){echo "selected";} } ?>>Informal</option>
                <option value="1" <?php  if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_ObjetoSocial']=="Otra"){echo "selected";} } ?>>Otra</option>
              </select>
              </td>
            </tr>
            <tr>
              <td>Antigüedad del cliente </td>
              <td><select id="select2" name="select2" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3" <?php  if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="1-3 años"){echo "selected";} } ?> >1-3 años</option>
                <option value="2" <?php  if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="4-6 años"){echo "selected";} } ?> >4-6 años</option>
                <option value="1" <?php  if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="7-10 años"){echo "selected";} } ?> >7-10 años</option>
                <option value="0"<?php  if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="N/A"){echo "selected";}} ?>>N/A</option>
                                          </select></td>
            </tr>
            <tr>
              <td>Naturaleza de las operaciones </td>
              <td><select id="select3" name="select3" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1" <?php if(isset($row['Folio_Cliente'])) { if($row3['Naturaleza_Operaciones']=="Prestamo"){echo "selected";} } ?>>Prestamo</option>
                <option value="2" <?php if(isset($row['Folio_Cliente'])) { if($row3['Naturaleza_Operaciones']=="Arrendamiento"){echo "selected";} } ?>>Arrendamiento</option>
                <option value="3" <?php if(isset($row['Folio_Cliente'])) { if($row3['Naturaleza_Operaciones']=="Otros"){echo "selected";} } ?>>Otros</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Beneficiarios </td>
              <td><select id="select4" name="select4" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1" <?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_Beneficiarios']=="1 a 2"){echo "selected";} } ?>>1 a 2</option>
                <option value="2" <?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_Beneficiarios']=="3 a 4"){echo "selected";} } ?>>3 a 4</option>
                <option value="3" <?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_Beneficiarios']=="5 o mas"){echo "selected";} } ?>>5 o mas</option>
                <option value="0" <?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_Beneficiarios']=="N/A"){echo "selected";} } ?>>N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>Q de Terceros Relacionados (Apoderados y Cotitulares) </td>
              <td><select id="select5" name="select5" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_TercerosRelacionados']=="1 a 2"){echo "selected";} } ?>>1 a 2</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_TercerosRelacionados']=="3 a 4"){echo "selected";} } ?>>3 a 4</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_TercerosRelacionados']=="5 o mas"){echo "selected";} } ?>>5 o mas</option>
                <option value="0"<?php if(isset($row['Folio_Cliente'])) { if($row3['Numero_TercerosRelacionados']=="N/A"){echo "selected";} } ?>>N/A</option>
                            </select></td>
            </tr>
            <tr>
              <td>PEPs Relacionados </td>
              <td><select id="select6" name="select6" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1" <?php if(isset($row['Folio_Cliente']))  { if($row3['PEPs_Relacionados']=="1% - 49%"){echo "selected";} }?>>1% - 49%</option>
                <option value="2" <?php if(isset($row['Folio_Cliente'])) { if($row3['PEPs_Relacionados']=="50% - 74%"){echo "selected";} }?>>50% - 74%</option>
                <option value="3" <?php if(isset($row['Folio_Cliente'])) { if($row3['PEPs_Relacionados']=="75% - 100%"){echo "selected";} }?>>75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Alerta Reputacional </td>
              <td><select id="select7" name="select7" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1" <?php if(isset($row['Folio_Cliente'])) { if($row3['Alerta_Reputacional']=="1% - 49%"){echo "selected";} }?>>1% - 49%</option>
                <option value="2" <?php if(isset($row['Folio_Cliente'])) { if($row3['Alerta_Reputacional']=="50% - 74%"){echo "selected";} }?>>50% - 74%</option>
                <option value="3" <?php if(isset($row['Folio_Cliente'])) { if($row3['Alerta_Reputacional']=="75% - 100%"){echo "selected";} }?>>75% - 100%</option>
                            </select></td>
            </tr>
            <tr>
              <td>Volumen esperado (Monto) </td>
              <td><select id="select8" name="select8" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Volumen_Esperado']=="$18000 - $20000"){echo "selected";} }?>>$18000 - $20000</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Volumen_Esperado']=="$21000 - $25000"){echo "selected";} }?>>$21000 - $25000</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Volumen_Esperado']=="mas de $25000"){echo "selected";} }?>>mas de $25000</option>
                            </select></td>
            </tr>
            <tr>
              <td>Frecuencia esperada (No. Veces) </td>
              <td><select id="select9" name="select9" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Frecuencia_Esperada']=="1 a 3"){echo "selected";} } ?>>1 a 3</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Frecuencia_Esperada']=="4 a 6"){echo "selected";} } ?>>4 a 6</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Frecuencia_Esperada']=="7 a 10"){echo "selected";} } ?>>7 a 10</option>
                            </select></td>
            </tr>
            <tr>
              <td>Instrumento Monetario Utilizado </td>
              <td><select id="select10" name="select10" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Instrumento_Monetario']=="Transferencia"){echo "selected";} } ?>>Transferencia</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Instrumento_Monetario']=="Cheque"){echo "selected";} } ?>>Cheque</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Instrumento_Monetario']=="Efectivo"){echo "selected";} } ?>>Efectivo</option>
                            </select></td>
            </tr>
            <tr>
              <td>Canales o Medios Utilizados </td>
              <td><select id="select11" name="select11" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Canales_MediosUtilizados']=="Agencia"){echo "selected";} } ?>>Agencia</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Canales_MediosUtilizados']=="Internet"){echo "selected";} } ?>>Internet</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Canales_MediosUtilizados']=="Otro"){echo "selected";} } ?>>Otro</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Oficial </td>
              <td><select id="select12" name="select12" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoOficial']=="México"){echo "selected";} } ?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoOficial']=="Otros"){echo "selected";} } ?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoOficial']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";} } ?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia </td>
              <td><select id="select13" name="select13" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoResidencia']=="Guerrero-Michoacan-Tamaulipas-Morelos"){echo "selected";} } ?>>Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoResidencia']=="Durango-Chihuhua-Jalisco-México-CD México-Sonora"){echo "selected";} } ?>>Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoResidencia']=="Puebla-Coahuila-Zcatecas-Hidalgo-Durango"){echo "selected";} } ?>>Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Operación </td>
              <td><select id="select14" name="select14" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoOperacion']=="Guerrero-Michoacan-Tamaulipas-Morelos"){echo "selected";} } ?>>Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoOperacion']=="Durango-Chihuhua-Jalisco-México-CD México-Sonora"){echo "selected";} } ?>>Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1"<?php if(isset($row['Folio_Cliente']))  { if($row3['Pais_EstadoOperacion']=="Puebla-Coahuila-Zcatecas-Hidalgo-Durango"){echo "selected";} }?>>Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                            </select></td>
            </tr>
            <tr>
              <td>Origen de los recursos </td>
              <td><select id="select15" name="select15" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente']))  { if($row3['Origen_Recursos']=="México"){echo "selected";} } ?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Origen_Recursos']=="Otros"){echo "selected";} } ?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Origen_Recursos']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";} } ?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>Destino de los recursos </td>
              <td><select id="select16" name="select16" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Destino_Recursos']=="México"){echo "selected";} } ?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Destino_Recursos']=="Otros"){echo "selected";} } ?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Destino_Recursos']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";} } ?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia de Terceros Relacionados </td>
              <td><select id="select17" name="select17" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoResidenciaTerceros']=="México"){echo "selected";} } ?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoResidenciaTerceros']=="Otros"){echo "selected";} } ?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) { if($row3['Pais_EstadoResidenciaTerceros']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";} } ?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                            </select></td>
            </tr>
          </table>    </div>
      <p align="left">&nbsp;</p>
      <p align="justify">
        </p>
    </div>
    </li>
    <!--formato de riesgo termina aqui-->
   <li class="accordion-item" data-accordion-item>
   
    <a href="#" onClick="cambio2()" class="accordion-title">  <h5 align="center">FORMATO DE IDENTIFICACION, CONOCIMIENTO DEL CLIENTE Y CONSTANCIA DE ENTREVISTA</h5></a>
    <div class="accordion-content" data-tab-content>
   <div id="fid">

          <h6 align="left">PERSONA FÍSICA Y RELACIONADOS </h6>
          <table width="100%" border="0">
            <tr>
              <td width="28%">Apellido Paterno </td>
              <td width="72%"><input name="textfield12" type="text" id="textfield12" ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield13" type="text" id="textfield13"  ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield14" type="text" id="textfield14" ></td>
            </tr>
            <tr>
              <td>Género</td>
              <td><input id="sexsol1" name="sexsol" type="radio"  <?php if (isset($row2['Folio_Cliente'])) { if($row2['SexoContEmp']=='Masculino'){echo "checked";} } ?> value="M"><label for="sexsol1"  > <i class="step fi-male size-72"></i> M</label> 
         
        <input id="sexsol2" name="sexsol" type="radio"  <?php if (isset($row2['Folio_Cliente'])) { if($row2['SexoContEmp']=='Femenino'){echo "checked";} } ?>  value="F"><label for="sexsol2" > <i class="step fi-female size-72"></i> F</label></td>
            </tr>
            <tr>
              <td>Lugar de Nacimiento (Estado y País) </td>
              <td><input name="textfield16" type="text" id="textfield16" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['LugNacContEmp']; } ?>"></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield17" type="date" id="textfield17" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['FechNacContEmp']; } ?>" ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield18" type="text" id="textfield18" ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield20" type="text" id="textfield20" ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield21" type="text" id="textfield21"  ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield22" type="text" id="textfield22"  ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield23" type="text" id="textfield23" ></td>
            </tr>
            <tr>
              <td>Ciudad</td>
              <td><input name="textfield24" type="text" id="textfield24"  ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield25" type="text" id="textfield25"  ></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input id="civilsol1" name="civilsol" type="radio" <?php if (isset($row2['Folio_Cliente'])) { if($row2['EstCivContEmp']=='Casado Bienes Mancomunados'){echo "checked";} } ?> value="1"><label for="civilsol1">Casado Bienes Mancomunados</label>
          <input id="civilsol2" name="civilsol" type="radio" <?php if (isset($row2['Folio_Cliente'])) { if($row2['EstCivContEmp']=='Casado Bienes Separados'){echo "checked";} } ?> value="2"><label for="civilsol2">Casado Bienes Separados</label>
          <input id="civilsol3" name="civilsol" type="radio" <?php if (isset($row2['Folio_Cliente'])) { if($row2['EstCivContEmp']=='Viudo'){echo "checked";} } ?> value="3"><label for="civilsol3">Viudo</label>
          <input id="civilsol4" name="civilsol" type="radio" <?php if (isset($row2['Folio_Cliente'])) { if($row2['EstCivContEmp']=='Divorciado'){echo "checked";} } ?> value="4"><label for="civilsol4">Divorciado</label>
          <input id="civilsol5" name="civilsol" type="radio" <?php if (isset($row2['Folio_Cliente'])) { if($row2['EstCivContEmp']=='Soltero'){echo "checked";} } ?> value="5"><label for="civilsol5">Soltero</label></td>
            </tr>
            <tr>
              <td>Correo Electrónico </td>
              <td><input name="textfield27" type="text" id="textfield27" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['EmailDatConEmp']; } ?>" ></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield28" type="text" id="textfield28" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['CURPDatConEmp']; } ?>" ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield29" type="text" id="textfield29"  ></td>
            </tr>
            <tr>
              <td>Numero de serie de la FIEL*</td>
              <td><input name="textfield30" type="text" id="textfield30" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['NumSerieFIELContEmp']; } ?>" ></td>
            </tr>
            <tr>
              <td>Nacionalidad</td>
              <td><input name="textfield31" type="text" id="textfield31" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['NacionalidadContEmp']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield32" type="text" id="textfield32" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['OcupacionContEmp']; } ?>" ></td>
            </tr>
            <tr>
              <td>Nombre de la Empresa y Giro (donde labora) </td>
              <td><input name="textfield33" type="text" id="textfield33"  ></td>
            </tr>
            <tr>
              <td>Domicilio donde labora </td>
              <td><input name="textfield34" type="text" id="textfield34" ></td>
            </tr>
            <tr>
              <td>Sueldo o ingreso mensual </td>
              <td><input name="textfield35" type="text" id="textfield35" value="<?php  if(isset($row['Folio_Cliente'])) {  echo $row2['SueldoContEmp']; } ?>" ></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield36" type="text" id="textfield36"  ></td>
            </tr>
            <tr>
              <td>Actividad Económica Adicional </td>
              <td><input name="textfield37" type="text" id="textfield37" value="<?php  if(isset($row['Folio_Cliente'])) {  echo $row2['ActEcoAdicionalContEmp']; } ?>"></td>
            </tr>
            <tr>
              <td>Ingresos Adicionales Mensuales Apox </td>
              <td><input name="textfield38" type="text" id="textfield38" value="<?php  if(isset($row['Folio_Cliente'])) {  echo $row2['IngAdMensualAproxContEmp']; } ?>" ></td>
            </tr>
          </table>
      <br>
          <hr>
      <br>
         <h6 align="left">DOCUMENTACION DE IDENTIFICACION </h6>
          <table width="100%" border="0">
            
            <tr>
            
              <td width="21%">Credencial para votar </td>
              <td width="35%"><input name="textfield39" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['INESolicitante']; } ?>" type="text" id="textfield39" size="50%" ></td>
              <td width="15%">Se adjunta copia: </td>
              <td id="secINE"> 
              <input id="copiasA" name="copias" type="radio" value="1" <?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_INESolicitante']=='Si'){echo "checked";}}?> ><label for="copiasA">Si</label>
             
              <input id="copiasB" name="copias" type="radio" value="2" <?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_INESolicitante']=='No'){echo "checked";}}?> ><label for="copiasB">No</label></td>
             
            </tr>
            
           
            <tr>
              <td>Pasaporte cedula profesional </td>
              <td><input name="textfield40" type="text" id="textfield40" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['Pasaporte_o_CedulaProfSolicitante']; } ?>" ></td>
              <td>Se adjunta copia: </td>
              <td id="secCedProfesional">
              <input id="copias2A" name="copias2" type="radio" value="1"<?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_Pasaporte_o_CedulaProfSolicitante']=='Si'){echo "checked";}}?> ><label for="copias2A">Si</label>
              
              <input id="copias2B" name="copias2" type="radio" value="2"<?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_Pasaporte_o_CedulaProfSolicitante']=='No'){echo "checked";}}?> ><label for="copias2B">No</label></td>
            </tr>
            
            
            <tr>
              <td>Cartilla de servicio militar </td>
              <td><input name="textfield41" type="text" id="textfield41" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CartillaMilitarSolicitante']; } ?>" size="50%" ></td>
              <td>Se adjunta copia: </td>
              <td id="secCarMilitar">
              <input id="copias3A" name="copias3" type="radio" value="1" <?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_CartillaMilitarSolicitante']=='Si'){echo "checked";}}?> ><label for="copias3A">Si</label>
              
              <input id="copias3B" name="copias3" type="radio" value="2" <?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_CartillaMilitarSolicitante']=='No'){echo "checked";}}?> ><label for="copias3B">No</label></td>
            </tr>
            
            
            <tr>
              <td>Licencia para conducir </td>
              <td><input name="textfield42" type="text" id="textfield42" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['LicenciaConducirSolicitante']; } ?>" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td id="secLicConducir">
              <input id="copias4A" name="copias4" type="radio" value="1" <?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_LicenciaConducirSolicitante']=='Si'){echo "checked";}}?> ><label for="copias4A">Si</label>
              
              <input id="copias4B" name="copias4" type="radio" value="2" <?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_LicenciaConducirSolicitante']=='No'){echo "checked";}}?> ><label for="copias4B">No</label></td>
            </tr>
            
           
            <tr>
              <td>Otra</td>
              <td><input name="textfield43" type="text" id="textfield43" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OtraIdentSolicitante']; } ?>" size="50%"  ></td>
              <td>Se adjunta copia: </td>
              <td id="secOtrIdentificacion">
              <input id="copias5A" name="copias5" type="radio" value="1"<?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_OtraIdentSolicitante']=='Si'){echo "checked";}}?>><label for="copias5A">Si</label>
              
              <input id="copias5B" name="copias5" type="radio" value="2"<?php  if(isset($row['Folio_Cliente'])){if($row3['Adjunta_OtraIdentSolicitante']=='No'){echo "checked";}}?>><label for="copias5B">No</label></td>
            </tr>
           
            <tr>
              <td>Especificar</td>
              <td id="secOtrIdentificacion2"><input name="textfield44" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EspIdentSolicitante']; } ?>" type="text" id="textfield44" size="50%"  ></td>
              <td>Se cotejo vs original: </td>
              <td>
                <input id="cotejo1" name="cotejo" type="radio" value="1" <?php  if(isset($row['Folio_Cliente'])){if($row3['CotejoVsOriginal']=='Si'){echo "checked";}}?> required><label for="cotejo1">Si</label>

                <input id="cotejo2" name="cotejo" type="radio" value="2" <?php  if(isset($row['Folio_Cliente'])){if($row3['CotejoVsOriginal']=='No'){echo "checked";}}?> required><label for="cotejo2">No</label></td>
            </tr>
             </div>
          </table>
      <BR>
      <p align="left">OTROS DOCUMENTOS QUE SE ADJUNTAN:</p>
      <table width="100%" border="0">
            <tr>
              <td width="30%">Se adjunta CURP y/o cédula RFC, FEA* </td>
              <td width="70%">
                <input id="adjuntos1A" name="adjuntos1" type="radio" value="1" <?php if(isset($row2['Folio_Cliente'])) {if($row3['Adjunta_CURP_RFC_FEA']=='Si'){echo "checked";} } ?> required><label for="adjuntos1A" >Si</label>

                <input id="adjuntos1B" name="adjuntos1" type="radio" value="2" <?php if(isset($row2['Folio_Cliente'])) {if($row3['Adjunta_CURP_RFC_FEA']=='No'){echo "checked";} } ?> required><label for="adjuntos1B" >No</label></td>
            </tr>
            <tr>
              <td>Se adjunta comprobante de domicilio </td>
              <td>
                <input id="adjuntos2A" name="adjuntos2" type="radio" value="1" <?php if(isset($row2['Folio_Cliente'])) {if($row3['Adjunta_ComprobanteDom']=='Si'){echo "checked";} } ?> required><label for="adjuntos2A"  >Si</label>

                <input id="adjuntos2B" name="adjuntos2" type="radio" value="2" <?php if(isset($row2['Folio_Cliente'])) {if($row3['Adjunta_ComprobanteDom']=='No'){echo "checked";} } ?> required><label for="adjuntos2B"  >No</label></td>
            </tr>
            <tr>
              <td>Fecha del comprobante de domicilio </td>
              <td><input name="fechaComprobante" type="date" id="fechaComprobante" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FechaComprobanteDom']; } ?>" required></td>
            </tr>
            <tr>
              <td>Domicilio manifestado coincide con la ID</td>
              <td>
                <input id="adjuntos3A" name="adjuntos3" type="radio" value="1" <?php if(isset($row2['Folio_Cliente'])) {if($row3['DomicilioCoincideId']=='Si'){echo "checked";} } ?> required><label for="adjuntos3A" >Si</label>

                <input id="adjuntos3B" name="adjuntos3" type="radio" value="2" <?php if(isset($row2['Folio_Cliente'])) {if($row3['DomicilioCoincideId']=='No'){echo "checked";} } ?> required><label for="adjuntos3B" >No</label></td>
            </tr>
          </table>
      <br>
      <p align
      <hr>
      <br>
     
          <H6 align="left">BENEFICIARIO</H6>
          <table width="100%" border="0">
            <tr>
              <td width="18%">Apellido Paterno </td>
              <td width="82%"><input name="textfield45" type="text" id="textfield45"   ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield46" type="text" id="textfield46"   ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield47" type="text" id="textfield47"  ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield48" type="text" id="textfield48"   ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield49" type="text" id="textfield49"  ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield50" type="text" id="textfield50"   ></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield51" type="text" id="textfield51"  ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield52" type="text" id="textfield52"  ></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield53" type="text" id="textfield53"  ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield54" type="text" id="textfield54"  ></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield55" type="text" id="textfield55"   ></td>
            </tr>
            <tr>
              <td>Porciento</td>
              <td><input name="textfield56" type="text" id="textfield56"   ></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield57" type="text" id="textfield57"  ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield58" type="text" id="textfield58"  ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield59" type="text" id="textfield59" ></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield60" type="text" id="textfield60"  ></td>
            </tr>
            <tr>
              <td>Sociedad Conyugal </td>
              <td><input name="textfield61" type="text" id="textfield61"   ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield62" type="text" id="textfield62"   ></td>
            </tr>
            <tr>
              <td>PEP´s</td>
              <td><input name="textfield63" type="text" id="textfield63"  ></td>
            </tr>
            <tr>
              <td>Origen de los Recursos </td>
              <td><input name="textfield64" type="text" id="textfield64"   ></td>
            </tr>
          </table>
      <br>
      <hr>
      <br> 
    
          <H6 align="left">PERFIL TRANSACCIONAL INICIAL</H6>
          <table width="100%" border="0">
            <tr>
              <td width="21%">Ingresos Comprobable(1) </td>
              <td width="39%"><input name="textfield65" type="text" id="textfield65" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans1']!=""){ echo $row3['PerTrans1'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()"  ></td>
              <td width="7%">Fuente</td>
              <td width="33%"><input name="textfield66" type="text" id="textfield66" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans1']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(2) </td>
              <td><input name="textfield67" type="text" id="textfield67" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans2']!=""){ echo $row3['PerTrans2'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield68" type="text" id="textfield68" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans2']; } ?>" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(3) </td>
              <td><input name="textfield69" type="text" id="textfield69" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans3']!=""){ echo $row3['PerTrans3'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield70" type="text" id="textfield70" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans3']; } ?>" size="50%" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(4) </td>
              <td><input name="textfield71" type="text" id="textfield71" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans4']!=""){ echo $row3['PerTrans4'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield72" type="text" id="textfield72" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans4']; } ?>" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(5) </td>
              <td><input name="textfield73" type="text" id="textfield73" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans5']!=""){ echo $row3['PerTrans5'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield74" type="text" id="textfield74" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans5']; } ?>" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(1) </td>
              <td><input name="textfield75" type="text" id="textfield75" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans6']!=""){ echo $row3['PerTrans6'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield76" type="text" id="textfield76" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans6']; } ?>" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(2)</td>
              <td><input name="textfield77" type="text" id="textfield77" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans7']!=""){ echo $row3['PerTrans7'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield78" type="text" id="textfield78" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans7']; } ?>" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(3)</td>
              <td><input name="textfield79" type="text" id="textfield79" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans8']!=""){ echo $row3['PerTrans8'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield80" type="text" id="textfield80" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans8']; } ?>" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(4)</td>
              <td><input name="textfield81" type="text" id="textfield81" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans9']!=""){ echo $row3['PerTrans9'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield82" type="text" id="textfield82" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans9']; } ?>" size="50%"  ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(5)</td>
              <td><input name="textfield83" type="text" id="textfield83" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans10']!=""){ echo $row3['PerTrans10'];} } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield84" type="text" id="textfield84" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans10']; } ?>" size="50%"  ></td>
            </tr>
          </table>
      <br>
          <table width="100%" border="0">
         <tr>
              <td width="19%">Total de Ingresos </td>
              <td width="81%"><input name="textfield85" type="text" id="textfield85" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['TotalIngreso']; } ?>" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Valor del Automóvil </td>
              <td><input name="textfield86" type="text" id="textfield86" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['ValorAuto']; } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)"></td>
            </tr>
            <tr>
              <td>Enganche del Automóvil </td>
              <td><input name="textfield87" type="text" id="textfield87" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['EngAutomovil']; } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)" onchange="datosAuto()"></td>
            </tr>
            <tr>
              <td>Porcentaje de Enganche </td>
              <td><input name="textfield88" type="text" id="textfield88" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['PorEnganche']; } ?>" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Porcentaje de Financieamiento </td>
              <td><input name="textfield89" type="text" id="textfield89" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['PorFinanciamiento']; } ?>" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Monto Financiado </td>
              <td><input name="textfield90" type="text" id="textfield90" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['MontoFinanciado']; } ?>" size="50%" readonly></td>
            </tr>
            <tr>
              <td>Plazo (meses)</td>
              <td><input name="textfield91" type="text" id="textfield91" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['Plazo']; } ?>" size="50%" onkeypress="return validaNumero(event)"></td>
            </tr>
            <tr>
              <td>Pago Mensual Esperado </td>
              <td><input name="textfield92" type="text" id="textfield92" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['PagoMensEsp']; } ?>" size="50%" onkeypress="return validaNumeroDecimal(event)"></td>
            </tr>
          </table>
      
      <br>
         
        <p align="left">¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?<br>
       
                <input id="PEPS1" name="PEPS" type="radio" value="1" required <?php if(isset($row2['Folio_Cliente'])) { if($row3['PEPS']=='Si'){echo "checked";} } ?>><label for="PEPS1"> Si</label>

<input id="PEPS2" name="PEPS" type="radio" value="2" required <?php if(isset($row2['Folio_Cliente'])) { if($row3['PEPS']=='No'){echo "checked";} } ?>><label for="PEPS2"> No</label>
        </p>
	      <p align="left">En caso de si:</p>
        <div id="secPEPS">
	      <table width="100%" border="0">
           <tr>
              <td width="18%">¿Quién? (Nombre) </td>
              <td width="82%"><input name="textfield93" type="text" id="textfield93" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['NombrePEPS']; } ?>" size="50%" ></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield94" type="text" id="textfield94" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['ParentescoPEPS']; } ?>" size="50%" ></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield95" type="text" id="textfield95" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['PuestoPEPS']; } ?>" size="50%"  ></td>
            </tr>
          </table>
        <p align="left">&nbsp; </p>
        <hr>
      <br>
          
          <p align="justify">
         <input class="alert button " name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="window.location.href='indexmenu.php'">
            <input class="success button" name="aceptar" type="submit" id="aceptar" value="Aceptar">

          </p>
      </div>
    </div>
  </li>

</ul>
    
    
    </form>
  </div>
  
</section>
<!-- footer -->
<footer>

</footer>  
<script type="text/javascript">  


function obten() {
var sub = "ObtenInfo3.php?dato="+document.getElementById("cliente").value;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        if(xmlhttp.responseText!="cliente no encontrado"){
        
            $("#htmlext").load("solicitudPM.php?cliente="+xmlhttp.responseText);
            
            
        }else{
            alert(xmlhttp.responseText);
            document.getElementById("cliente").value="";
        }

      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
}

</script>
<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    <script src="js/PM.js"></script>
</body>
</html>
