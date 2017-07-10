<?php

session_start();

if(!$_SESSION['usser']) {
	?> <script> window.location.href='index.php';</script>  <?php
}



?>


<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Financiera| Bienvenido</title>
		
		<script src="js/vendor/jquery-3.1.1.min.js"></script>
		
		<link rel="stylesheet" href="js/js/css/foundation.css">
	 
		<link rel="stylesheet" href="js/js/css/app.css">
		<link rel="stylesheet" href="js/js/css/foundation-icons/foundation-icons.css">
		 <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
		  
		<style type="text/css">

		</style>
	</head>
	<body>
<!-- header -->



<!-- content -->
<section>
	
		
		
			<head>
			<img src="images/logosfg.png" >
		


	<div class="title-bar" id="example-menu" titlebar-background="$white" >
	<div class="title-bar-left" >
	<ul class="dropdown menu" data-dropdown-menu >
	<li>
		<a href="indexmenu.php"><i class="fi-home"></i><span>Inicio</span></a>
	</li>
	<?php 
	if($_SESSION['GSolicitudes']=="1"){
		echo '<li>

		<a href="#"><i class="fi-pencil"></i><span>Registros</span></a>
		<ul class="menu">
			<li id="bot1"><a href="#"><i class="fi-clipboard-notes"></i><span>Solicitud PFA</span></a></li>
			<li id="bot2"><a href="#"><i class="fi-clipboard-notes"></i><span>Solicitud PM</span></a></li>
			<li id="bot3"><a href="#"><i class="fi-clipboard-notes"></i><span>Solicitud PFNA</span></a></li>


		</ul>
	</li>';
	}
	
	if($_SESSION['BSolicitudes']=="1"){
	echo '<li id="boton2"><a href="#"><i class="fi-graph-trend"></i><span>Solicitudes</span></a></li>';
	}
	
	if($_SESSION['GCotizacion']=="1"){
	echo '<li id="boton1"><a href="#"><i class="fi-dollar"></i><span>Cotizacion</span></a></li>';
	}
	if($_SESSION['BQeQ']=="1"){
	 echo '<li id="qeq"><a href="#"><i class="fi-dollar"></i><span>QeQ</span></a></li>';
	}
	if($_SESSION['SetConf']=="1"){
	 echo '<li id="Admin"><a href="#"><i class="fi-wrench"></i><span>Administración</span></a></li>';
	}
	?>
	<li id="sesion"><a href="cerrarsession.php"><i class="fi-power"></i><span></span></a></li>
</ul>


</div>
</div>

</head>

		<div class="container" id="htmlext" >


  <div class="medium-2 columns">
    <ul class="vertical tabs" data-tabs id="example-tabs">
      <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Clientes</a></li>
      <li class="tabs-title"><a href="#panel2v">Solicitudes</a></li>
      <li class="tabs-title"><a href="#panel3v">Conocimiento del cliente</a></li>
      <li class="tabs-title"><a href="#panel4v">Documentacion</a></li>
      <li class="tabs-title"><a href="#panel5v">Tab 5</a></li>
      <li class="tabs-title"><a href="#panel6v">Tab 6</a></li>
    </ul>

  </div>
  <div class="medium-9 columns">
    <div class="tabs-content" data-tabs-content="example-tabs">
      <div class="tabs-panel is-active" id="panel1v">
      <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Datos Generales</a></li>
  <li class="tabs-title"><a href="#panel2c">Datos Laborales</a></li>
  <li class="tabs-title"><a href="#panel3c">Referencias Personales</a></li>
  <li class="tabs-title"><a href="#panel4c">Informacion Bancaria</a></li>
  <li class="tabs-title"><a href="#panel5c">Referencias Comerciales</a></li>
  <li class="tabs-title"><a href="#panel6c">Datos del Conyuge</a></li>
  <li class="tabs-title"><a href="#panel7c">Accionistas</a></li>
  <li class="tabs-title"><a href="#panel8c">Beneficiario</a></li>
</ul>

<div class="tabs-content" data-tabs-content="collapsing-tabs">
  <div class="tabs-panel is-active" id="panel1c">
  <div class="row">
  <div class="small-3 columns">
  	
<select name="TipoCliente" id="TipoCliente" onchange="cambiacartas()"> <option value="">-Seleccione una opción-</option> <option value="1">Persona Fisica</option><option value="2">Persona Moral</option> </select> 
  </div>
  </div>

<div id="pm" style="display:none;">
	
  <div class="row">
	     <div class="small-6 columns"><label>Razon social <input name="nomrazsoc2" type="text" id="nomrazsoc2" onchange="return valforms(this.form,this)" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>"  placeholder="Nombre, Razón Social"></label>
</div>

<div class="small-3 columns">
<label>Telefono
<input name="telsol1" type="text" id="telefono" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol2)"  ></label></div>

   <div class="small-3 columns"><label> RFC
   <input name="rfcsol1" type="text" id="rfcsol1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol2)"></label></div>


	
	    <p align="left">
	      <input name="dirsol" type="text" id="dirsol" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" >

	<label>
          <input name="dirnumsol" type="text" id="dirnumsol" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>"   placeholder="Número"></label>

          <input name="mailsol2" type="text" id="mailsol2"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>" placeholder="Email" pattern="email">

	   
	      <input name="colsol" type="text" id="colsol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ColSolicitante']; } ?>" placeholder="Colonia">

          <input name="cdsol" type="text" id="cdsol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CdSolicitante']; } ?>" placeholder="Ciudad">
          <input name="edosol" type="text" id="edosol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EdoSolicitante']; } ?>"  placeholder="Estado">
          <input name="cpsol" type="text" id="cpsol"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CPSolicitante']; } ?>"  placeholder="C.P.">
	    </p>
</div>


 </div>
 <hr>

 <div id="pfa" style="display:none;">
 	
  <div class="row">
  	
<div class="medium-3 columns">
	
           <label>Primer nombre
           	 <input name="nomsol" type="text" id="nomsol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>" onkeyup="viewButton()" placeholder="Primer Nombre"  onkeypress="return validaTexto(event)"pattern="alpha"> 
           </label>
</div>
<div class="small-3 columns">
	
          <label> Segundo Nombre <input name="segnomsol" type="text" id="segnomsol"   value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['SegNomSolicitante']; } ?>" placeholder="Segundo Nombre" onkeypress="return validaTexto(event)" pattern="alpha"></label>
</div>

        <div class="small-3 columns">
        	<label> Apellido Paterno
            <input name="apepasol" type="text" id="apepasol"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApPatSolicitante']; } ?>" onkeyup="viewButton()" placeholder="Apellido Parteno"  onkeypress="return validaTexto(event)" pattern="alpha">  </label>
        </div> 
        <div class="small-3 columns">
        	<labbel> Apellido Materno
            <input name="apemasol" type="text" id="apemasol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApMatSolicitante']; } ?>" placeholder="Apellido Materno"  onkeypress="return validaTexto(event)" pattern="alpha"></labbel>
        </div>
  </div>
  
    
		<p align="left">
		<div class="small-3 columns">
			<label> RFC
				<input name="rfc1" type="text" id="rfc1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc2)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"> </label>
		</div>
		
			
	<div class="small-3 columns">
				
			<label> Telefono Particular
				<input name="telsol1" type="text" id="telsol1"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol2)" onkeypress="return validaNumero(event)" pattern="integer"></label>
			</div>

	 <div class="small-3 columns">
	 <label> Telefono Movil
	 <input name="movsol1" type="text" id="movsol1" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol2)" onkeypress="return validaNumero(event)" pattern="integer">
	 </label>
	 </div>		
            <div class="small-3 columns">
            <label> Email
            <input name="mailsol" type="text" id="mailsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>"placeholder="Email" pattern="email"></label></div>
		</p>
	
       <p align="left">
            <div class="small-5 columns"><label> Direccion / Calle
            <input name="dirsol" type="text" id="dirsol" size="74px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" onkeypress="return validaTexto(event)" pattern="alpha"></label></div>
            
            <div class="small-2 columns"><label> Numero <input name="dirnumsol" type="text" id="dirnumsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>" placeholder="Número" onkeypress="return validaNumero(event)" pattern="integer"></label></div>
           
            <div class="small-3 columns"><label>Colonia<input name="colsol" type="text" id="colsol" size="49px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ColSolicitante']; } ?>" placeholder="Colonia"></label></div>
           
            <div class="small-2 columns"><label>Codigo Postal<input name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P." value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CPSolicitante']; } ?>"onkeypress="return validaNumero(event)" pattern="integer"></label></div>

            <div class="small-3 columns"><label>Lugar de nacimiento<input name="lugnacsol" type="text" id="lugnacsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['LugNacSolicitante']; } ?>"placeholder="Lugar de nacimiento (País y Estado)"></label></div>
            
            <div class="small-3 columns"><label>Estado <input name="edosol" type="text" id="edosol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EdoSolicitante']; } ?>"placeholder="Estado"></label></div>
           
            <div class="small-3 columns"><label>Ciudad<input name="cdsol" type="text" id="cdsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CdSolicitante']; } ?>" placeholder="Ciudad"></label></div>
           	<div class="small-3 columns"><label>Delegacion o municipio<input name="textfield5" type="text" id="textfield5" size="100%" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['MunicipioSolicitante']; } ?>" required></label></div>

            <div class="small-3 columns"><label>CURP <input name="curpsol" type="text" id="curpsol" size="49px" placeholder="CURP" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CURPSolicitante']; } ?>" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></label></div>
     
  

   
           <div class="row">
         
           <div class="small-3 columns">
           <label>Sexo
             <select name="sexsol" id="sexsol" ><option>-Seleccione una opción-</option><option>Mujer</option><option>Hombre</option></select>
    </label>
           </div>
         
            <div class="small-3 columns">
            <label>Fecha de nacimiento
            <input name="fechnacsol" type="date" id="fechnacsol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FeNacDatGen']; } ?>" placeholder="dd" ></label></div>

            <div class="small-3 columns"> <label> Edad
            <input name="edsol" type="number" id="edsol" size="2px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EdDatGen']; } ?>" placeholder="Edad"maxlength="2" onKeyUp="mayorEdad(this, this.value)" onkeypress="return validaNumero(event)" pattern="integer"></label></div>
            
            <div class="small-3 columns"> <label>Nacionalidad
            <input name="nacsol" type="text" id="nacsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NaDatGen']; } ?>" placeholder="Nacionalidad" onkeypress="return validaTexto(event)" pattern="alpha"></label></div>

            <div class="small-3 columns"><label>Num. Dependientes
            <input name="depensol" type="text" id="depensol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NoDepDatGen']; } ?>" placeholder="Num. Dependientes" onkeypress="return validaNumero(event)" pattern="integer"></label></div>

            <div class="small-3 columns"><label>Acredita Domicilio con:
            <input name="acdomsol" type="text" id="acdomsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" placeholder="Acredita Domicilio con"></label></div>
          </p>

         
          <p align="left">
            <div class="small-3 columns"><label> Años de residir en la ciudad
            <input name="anosol" type="text" id="anosol" size="13" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" placeholder="Años de residir en la ciudad" onkeypress="return validaNumero(event)" pattern="integer"></label></div>
            
            <div class="small-3 columns"><label> Arraigo en el domicilio
            <input name="arraisol" type="text" id="arraisol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ArDomDatGen']; } ?>" placeholder="Arraigo en el domicilio desde el año" onkeypress="return validaNumero(event)" pattern="integer"></label></div>
           
            <div class="small-3 columns"><label>Acredita Domicilio con
            <input name="acdomsol2" type="text" id="acdomsol2" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" size="16px" placeholder="Acredita Domicilio con"></label></div>
            
            <div class="small-3 columns"> <label>Años de residir en la ciudad
            <input name="anosol2" type="text" id="anosol2" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" size="20px" placeholder="Años de residir en la ciudad" onkeypress="return validaNumero(event)" pattern="integer"></label></div>
          </p>
            </div>
                   <div class="row">
          <p align="left">vive en: <br>
             <div class="small-2 columns">
               <input id="vivsol1" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Casa Propia'){echo "checked";} }?> value="1"><label for="vivsol1">Casa Propia</label>
             </div>
              <div class="small-2 columns">
              	
               <input id="vivsol2" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Rentada'){echo "checked";} } ?> value="2"><label for="vivsol2">Rentada</label>
              </div>
              <div class="small-2 columns">
               <input id="vivsol3" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Hipotecada'){echo "checked";} } ?> value="3"><label for="vivsol3">Hipotecada</label>
               </div>
                       <div class="small-3 columns">
                <input id="vivsol4" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Casa propiedad de sus familiares'){echo "checked";} } ?> value="4"><label for="vivsol4">Casa propiedad de sus familiares</label>
          </div>
                     <div class="small-3 columns">
               	
                <input id="vivsol5" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Otros especificar'){echo "checked";} } ?> value="5"><label for="vivsol5">Otros especificar<input name="vivsolesp" type="text" id="vivsolesp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['OtrDatGen']; } ?>" pattern="alpha">
</label>
               </div> 
                
          </p>
           </div>
         
           <div class="row">
          <p align="left">
            <div class="small-5 columns">
            <label>Estado civil:
          <select name="civilsol"><option>-Seleccione una opción-</option><option>Casado Bienes Mancomunados</option><option>Casado Bienes Separados</option><option>Viudo</option><option>Divorciado</option><option>Soltero</option></select></label>
          
            </div>
      
          <div class="small-3 columns">
         <label>Tiene Auto Propio: </label>
            <input id="autosol1" name="autosol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['AuPropDatGen']=='Si'){echo "checked";} } ?> value="Si"><label for="autosol1">Si</label>
            
            <input id="autosol2" name="autosol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['AuPropDatGen']=='No'){echo "checked";} } ?> value="No"><label for="autosol2">No</label>
        <input name="marcasol"value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['MarDatGen']; } ?>"  type="text" id="marcasol" size="70px" placeholder="Especifique Marca y Tipo">

          </div>
          <div class="small-3 columns">
           Es propietario de algún inmueble:
            <input id="inmusol1" name="inmusol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['PropInmuDatGen']=='Si'){echo "checked";} } ?> value="1"><label for="inmusol1">Si</label>
            
            <input id="inmusol2" name="inmusol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['PropInmuDatGen']=='No'){echo "checked";} } ?> value="2"><label for="inmusol2">No</label>
         </div>
          </p>
            </div>


 </div>

<div class="row">

</div>
  </div>
  <div class="tabs-panel" id="panel2c">
    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
  </div>
  <div class="tabs-panel" id="panel3c">
    
  </div>
  <div class="tabs-panel" id="panel4c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
 <div class="tabs-panel" id="panel5c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
   <div class="tabs-panel" id="panel6c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
 <div class="tabs-panel" id="panel7c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
   <div class="tabs-panel" id="panel8c">
     <div class="row">
            <p align="left">
                Beneficiario en caso de fallecimiento:
             <div class="small-4 columns"><input name="benesol1" type="text" id="benesol1" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApPatBenDatGen']; } ?>" placeholder="Apellido Paterno" onkeypress="return validaTexto(event)" pattern="alpha"></div>
             <div class="small-4 columns"><input name="benesol2" type="text" id="benesol2" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApMatBenDatGen']; } ?>" placeholder="Apellido Materno" onkeypress="return validaTexto(event)" pattern="alpha"></div>
             <div class="small-4 columns"><input name="benesol3" type="text" id="benesol3" size="30px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NomBenDatGen']; } ?>" placeholder="Nombre(s)" onkeypress="return validaTexto(event)" pattern="alpha"></div>
          </p>
            </div>
  </div>
</div>

      </div>
      <div class="tabs-panel" id="panel2v">
        <p>Two</p>
        
      </div>
      <div class="tabs-panel" id="panel3v">
        <p>Three</p>
        <p>Check me out! I'm a super cool Tab panel with text content!</p>
      </div>
      <div class="tabs-panel" id="panel4v">
        <p>Four</p>
        
      </div>
      <div class="tabs-panel" id="panel5v">
        <p>Five</p>
        <p>Check me out! I'm a super cool Tab panel with text content!</p>
      </div>
      <div class="tabs-panel" id="panel6v">
        <p>Six</p>
        
      </div>
    </div>
  </div>


<!--
<img src="images/sfg.jpg" width="100%">
	-->
				 <div>
 

		</div>

		</div>
		
	

	
</section>

		
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/what-input.js"></script>
		<script src="js/vendor/foundation.js"></script>

		 <script src="js/jquery-ui/jquery-ui.js"></script>
		<script src="js/vendor/app.js"></script>


		<script src="js/jquery-ui/jquery-ui.js"></script>
		<script src="js/vendor/app.js"></script>
		
	<script>$(document).foundation();
	$('.title-bar').on('sticky.zf.stuckto:top', function(){
	$(this).addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function(){
	$(this).removeClass('shrink');
})</script>

		<script type="text/javascript" src="js/botones.js"></script>
    <script type="text/javascript" src="js/clientes.js"></script>
			 
			
			
</body>

</html>
