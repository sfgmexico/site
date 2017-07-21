 <div class="container" id="htmlext" >
  
  <div class="medium-2 columns">
    <ul class="vertical tabs" data-tabs id="example-tabs">
      <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Clientes</a></li>
      <li class="tabs-title"><a href="#panel2v" id="panel2vitem">Solicitudes</a></li>
      <li class="tabs-title"><a href="#panel3v">Conocimiento del cliente</a></li>
      <li class="tabs-title"><a href="#panel4v">Documentacion</a></li>
      <li class="tabs-title"><a href="#panel5v">Tab 5</a></li>
      <li class="tabs-title"><a href="#panel6v">Tab 6</a></li>
    </ul>
  </div>

  <div class="medium-9 columns">
    <div class="tabs-content" data-tabs-content="example-tabs">
      <div class="tabs-panel is-active" id="panel1v">
        <form name="form1" id="form1" action=""  method="post" data-abide novalidate> 
        <div id="botonescliente">  
          <input class="button" type="button" name="nuevocliente" id="nuevocliente" value="Generar Cliente Nuevo">
          <input class="button" data-open="modalmodificarcliente" type="button" name="modificarcliente" id="modificarcliente" value="Modificar Cliente">
          

          <!-- This is the first modal -->
          <div class="reveal" id="modalmodificarcliente" data-reveal>
            <h4>Buscar por:</h4>
            <select name="selectmodificacliente" id="selectmodificacliente"><option value="">Seleccione una opción</option><option value="Persona Fisica">Persona Fisica</option><option value="Persona Moral">Persona Moral</option></select>
            <div id="divmodificacliente1" style="display: none;">
              <label>ID:<input type="text" name="idmodificacliente" id="idmodificacliente"></label>
              <h5>Ó</h5>
              <label>CURP:<input type="text" name="curpmodificacliente" id="curpmodificacliente"></label>
            </div>
            <div id="divmodificacliente2" style="display: none;">
              <label>ID:<input type="text" name="idmodificaclientepm" id="idmodificaclientepm"></label>
              <h5>Ó</h5>
              <label>RFC:<input type="text" name="curpmodificaclientepm" id="curpmodificaclientepm"></label>
            </div>






            <button id="requestmodificarcliente" name="requestmodificarcliente" class="button" >Buscar</button>
            <button id="cerrarmodalmodificacliente" class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!-- This is the nested modal -->
          <div class="reveal" id="modalcontregcliente" data-reveal>
            <h4>Registros Incompletos...</h4>
            <table  id="tablajson">
              <thead>
                <th>Id</th> 
                <th>Nombre/Razon Social</th>
                <th>CURP/RFC</th>
              </thead>
              <tbody></tbody>
            </table>
            <button id="cerrarmodalcontregcliente" class="close-button" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>





          <input class="button" type="button" data-open="modalcontregcliente" name="continuarcliente" id="continuarcliente" value="Continuar Con Registro">
        </div>
        <input type="text" name="idcliente" id="idcliente" style="display: none;">

        <div id="contenidorequestcliente" style="display: none;">

          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
            <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Datos Generales</a></li>
            <li class="tabs-title" id="tabpanel2c" style="display: none;"><a href="#panel2c">Datos Laborales</a></li>
            <li class="tabs-title"><a href="#panel3c">Referencias Personales</a></li>
            <li class="tabs-title"><a href="#panel4c">Informacion Bancaria</a></li>
            <li class="tabs-title"><a href="#panel5c"  style="display: none;">Referencias Comerciales</a></li>
            <li class="tabs-title"><a href="#panel6c">Datos del Conyuge</a></li>
            <li class="tabs-title" id="tabpanel7c" style="display: none;"><a href="#panel7c">Accionistas</a></li>
            <li class="tabs-title"><a href="#panel8c">Beneficiario</a></li>
            <li class="tabs-title"><a href="#panel9c">Situacion Financiera</a></li>
          </ul>
          <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <div class="tabs-panel is-active" id="panel1c">
              <div class="row">
                <div class="small-3 columns">
                  <select name="TipoCliente" id="TipoCliente" > <option value="">-Seleccione una opción-</option> <option value="Persona Fisica">Persona Fisica</option><option value="Persona Moral">Persona Moral</option> 
                  </select> 
                </div>
              </div>
              
              <div id="pm" style="display:none;">
                <div class="row">
                  <div class="small-6 columns"><label>Razon social <input name="nomrazsoc2" type="text" id="nomrazsoc2" onchange="return valforms(this.form,this)" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>"  placeholder="Nombre, Razón Social"></label>
                  </div>
                  <div class="small-3 columns">
                    <label>Telefono
                    <input name="telsol2" type="text" id="telsol2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>"  onKeyUp="myFunction(this,this.value,telsol2)"  ></label>
                  </div>
                  <div class="small-3 columns"><label> RFC
                    <input name="rfcsol1" type="text" id="rfcsol1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>" maxlength="1"  onKeyUp="myFunction(this,this.value,rfcsol2)"></label>
                  </div>
                  <p align="left">
                    <div class="small-3 columns"><label>
                      Direccion
                      <input name="dirsolpm" type="text" id="dirsolpm" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" >
                      </label>
                    </div>
                    <div class="small-3 columns"><label>Numero
                      <input name="dirnumsolpm" type="text" id="dirnumsolpm" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>"   placeholder="Número"></label>
                    </div>
                    <div class="small-3 columns"><label>Email
                      <input name="mailsol2" type="text" id="mailsol2"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>" placeholder="Email" pattern="email"></label>
                    </div>

                    <div class="small-3 columns"><label>Colonia
                      <input name="colsolpm" type="text" id="colsolpm"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ColSolicitante']; } ?>" placeholder="Colonia"></label>
                    </div>
                    <div class="small-3 columns"><label>Ciudad
                      <input name="cdsolpm" type="text" id="cdsolpm"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CdSolicitante']; } ?>" placeholder="Ciudad"></label>
                    </div>
                    <div class="small-3 columns"><label>Estado
                      <input name="edosolpm" type="text" id="edosolpm"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EdoSolicitante']; } ?>"  placeholder="Estado"></label>
                    </div>
                    <div class="small-3 columns"><label>Codigo Postal
                      <input name="cpsolpm" type="text" id="cpsolpm"  value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CPSolicitante']; } ?>"  placeholder="C.P."></label>
                    </div>
                  </p>

                  <p align="left">
                    <div class="small-3 columns">  <label> Actividad Principal/ségun SHCP
                      <input name="actprinc" type="text" id="actprinc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ActPrinDatGenPM']; } ?>" placeholder="Actividad Principal/según alta o último cambio ante SHCP"></label>
                    </div>
                    <div class="small-3 columns">  <label>Cantidad de personal
                      <input name="cantperson" type="text" id="cantperson" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['CantPerDatGenPM']; } ?>" placeholder="Cantidad de personal"></label>
                    </div>
                  </p>

                  <div class="small-3 columns"> <label>Inicio de operaciones:
                    <input name="inicoper1" type="date" id="inicoper1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['IniOpDatGenPM']; } ?>"  placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper2)"></label>
                  </div>
                  <div class="small-3 columns"><label>Constitución de la empresa:
                    <input name="inicoper13" type="date" id="inicoper13" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FechaConsEmp']; } ?>" maxlength="2" placeholder="dd" onKeyUp="myFunction(this,this.value,inicoper23)"></label>
                  </div>
                  
                  <div class="small-3 columns"><label>Antiguedad
                    <input name="antemp" type="text" id="antemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['AntConsEmp']; } ?>" placeholder="Antigüedad"></label>
                  </div>
                  
                  <p align="left">
                    <div class="small-7 columns"><label>Apoderado para suscribir Títulos de Crédito y realizar actos de administración
                      <input name="apodsusc" type="text" id="apodsusc" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApoConsEmp']; } ?>" placeholder="Apoderado para suscribir Títulos de Crédito y realizar actos de administración"></label>
                    </div>
                  </p>    
                </div>

                <div class="row">
                  <p align="left"><strong>DATOS DEL CONTACTO DE LA EMPRESA</strong></p>
                  <p align="left">
                    <div class="small-3 columns"><label>Primer Nombre
                      <input name="nomconemp" type="text" id="nomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NomDatContEmp']; } ?>" placeholder="Primer Nombre"></label>
                    </div>
                    <div class="small-3 columns"><label>Segundo Nombre
                      <input name="segnomconemp" type="text" id="segnomconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['SegNomDatContEmp']; } ?>" placeholder="Segundo Nombre"></label>
                    </div>
                    <div class="small-3 columns"><label>Apellido Paterno
                      <input name="apepaconemp" type="text" id="apepaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApPatDatContEmp']; } ?>" placeholder="Apellido Parteno"></label>
                    </div>
                    <div class="small-3 columns"><label>Apellido Materno
                      <input name="apemaconemp" type="text" id="apemaconemp" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ApMatDatContEmp']; } ?>" placeholder="Apellido Materno"></label>
                    </div>
                  </p>
                  <p align="left">
                    <div class="small-3 columns"><label>Calle y Numero
                      <input name="datobdir22" type="text" id="datobdir22" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirConEmp']; } ?>" placeholder="Calle y No.:"></label>
                    </div>
                    <div class="small-3 columns"><label>Colonia
                      <input name="datobcol23" type="text" id="datobcol23" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ColConEmp']; } ?>" placeholder="Colonia:"></label>
                    </div>
                  </p>
                  <p align="left">
                    <div class="small-3 columns"><label>Ciudad
                      <input name="colsol22" type="text" id="colsol22" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CdConEmp']; } ?>" placeholder="Ciudad:"></label>
                    </div>
                    <div class="small-3 columns"><label>Estado
                      <input name="cdsol22" type="text" id="cdsol22" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EdoConEmp']; } ?>" placeholder="Estado:"></label>
                    </div>
                  </p>
                  <p align="left">
                    <div class="small-3 columns"><label>Codigo Postal
                      <input name="lugnacsol22" type="text" id="lugnacsol22" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CPConEmp']; } ?>" placeholder="Código Postal:"></label>
                    </div>

                    <div class="small-3 columns"><label>RFC
                      <input name="rfcconemp1" type="text" id="rfcconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCDatConEmp'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfcconemp2)"></label>
                    </div>
     
                    <div class="small-3 columns"> <label> Telefono
                      <input name="telconemp1" type="text" id="telconemp1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelDatConEmp'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telconemp2)"></label>
                    </div>
                  </p>
                  <p align="left">
                    <div class="small-3 columns">  <label> Email
                      <input name="mailconemp" type="text" id="mailconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EmailDatConEmp']; } ?>" placeholder="Email"></label>
                    </div>
                    <div class="small-3 columns">  <label>Puesto que desempeña en la empresa
                      <input name="puesconemp" type="text" id="puesconemp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PuestDatConEmp']; } ?>" placeholder="Puesto que desempeña en la empresa"></label>
                    </div>
                  </p>
                </div>

                
              </div>
              <hr>

              <div id="pfa" style="display:none;" >
                <div class="row" >
                  <div class="medium-3 columns">
                    <label>Primer nombre<input name="nomsol" type="text" id="nomsol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>" onkeyup="viewButton()" placeholder="Primer Nombre"  onkeypress="return validaTexto(event)" pattern="alpha"> </label>
                  </div>
                  <div class="small-3 columns">
                    <label> Segundo Nombre <input name="segnomsol" type="text" id="segnomsol"   value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['SegNomSolicitante']; } ?>" placeholder="Segundo Nombre" onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>
                  <div class="small-3 columns">
                      <label> Apellido Paterno<input name="apepasol" type="text" id="apepasol"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApPatSolicitante']; } ?>" onkeyup="viewButton()" placeholder="Apellido Parteno"  onkeypress="return validaTexto(event)" pattern="alpha">  </label>
                  </div> 
                  <div class="small-3 columns">
                    <label>Apellido Materno<input name="apemasol" type="text" id="apemasol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApMatSolicitante']; } ?>" placeholder="Apellido Materno"  onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>
                </div>

      
                <p align="left">
                  <div class="small-3 columns">
                    <label> RFC
                    <input name="rfc1" type="text" id="rfc1" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>"  onKeyUp="myFunction(this,this.value,rfc2)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"> </label>
                  </div>
      
        
                  <div class="small-3 columns">
          
                    <label> Telefono Particular
                    <input name="telsol1" type="text" id="telsol1"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>"   onkeypress="return validaNumero(event)" pattern="integer"></label>
                  </div>

                  <div class="small-3 columns">
                    <label> Telefono Movil
                    <input name="movsol1" type="text" id="movsol1" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][0]; } ?>" onKeyUp="myFunction(this,this.value,movsol2)" onkeypress="return validaNumero(event)" pattern="integer">
                    </label>
                  </div>   
                  <div class="small-3 columns">
                    <label> Email
                    <input name="mailsol" type="text" id="mailsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>"placeholder="Email" pattern="email"></label>
                  </div>
                </p>
    
                <p align="left">
                  <div class="small-5 columns"><label> Direccion / Calle
                    <input name="dirsol" type="text" id="dirsol" size="74px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>
              
                  <div class="small-2 columns"><label> Numero <input name="dirnumsol" type="text" id="dirnumsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>" placeholder="Número" onkeypress="return validaNumero(event)" pattern="integer"></label>
                  </div>
             
                  <div class="small-3 columns"><label>Colonia<input name="colsol" type="text" id="colsol" size="49px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ColSolicitante']; } ?>"   placeholder="Colonia"></label>
                  </div>
             
                  <div class="small-2 columns"><label>Codigo Postal<input name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P." value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CPSolicitante']; } ?>"onkeypress="return validaNumero(event)" pattern="integer"></label>
                  </div>

                  <div class="small-3 columns"><label>Lugar de nacimiento<input name="lugnacsol" type="text" id="lugnacsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['LugNacSolicitante']; } ?>"placeholder="Lugar de nacimiento (País y Estado)"></label>
                  </div>
              
                  <div class="small-3 columns"><label>Estado <input name="edosol" type="text" id="edosol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EdoSolicitante']; } ?>"placeholder="Estado"></label>
                  </div>
             
                  <div class="small-3 columns"><label>Ciudad<input name="cdsol" type="text" id="cdsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CdSolicitante']; } ?>" placeholder="Ciudad"></label>
                  </div>
                  <div class="small-3 columns"><label>Delegacion o municipio<input name="textfield5" type="text" id="textfield5" size="100%" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['MunicipioSolicitante']; } ?>" required></label>
                  </div>

                  <div class="small-3 columns"><label>CURP <input name="curpsol" type="text" id="curpsol" size="49px" placeholder="CURP" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CURPSolicitante']; } ?>" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></label>
                  </div>
       
    

     
                  <div class="row">
           
                    <div class="small-3 columns">
                      <label>Sexo
                      <select name="sexsol" id="sexsol" ><option value="">-Seleccione una opción-</option><option value="Femenino">Mujer</option><option value="Masculino">Hombre</option></select>
                      </label>
                    </div>
           
                    <div class="small-3 columns">
                      <label>Fecha de nacimiento
                      <input name="fechnacsol" type="date" id="fechnacsol" onchange="calcularEdad()" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FeNacDatGen']; } ?>" placeholder="dd" ></label>
                    </div>

                    <div class="small-3 columns"> <label> Edad
                      <input name="edsol" type="number" id="edsol" size="2px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EdDatGen']; } ?>" placeholder="Edad" readonly   pattern="integer"></label>
                    </div>
              
                    <div class="small-3 columns"> <label>Nacionalidad
                      <input name="nacsol" type="text" id="nacsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NaDatGen']; } ?>" placeholder="Nacionalidad" onkeypress="return validaTexto(event)" pattern="alpha"></label>
                    </div>

                    <div class="small-3 columns"><label>Num. Dependientes
                      <input name="depensol" type="text" id="depensol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NoDepDatGen']; } ?>" placeholder="Num. Dependientes" onkeypress="return validaNumero(event)" pattern="integer"></label>
                    </div>

                    <div class="small-3 columns"><label>Acredita Domicilio con:
                      <input name="acdomsol" type="text" id="acdomsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" placeholder="Acredita Domicilio con"></label>
                    </div>
                  </div>
                </p>

           
                <p align="left">
                  <div class="small-3 columns"><label> Años de residir en la ciudad
                    <input name="anosol" type="text" id="anosol" size="13" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" placeholder="Años de residir en la ciudad" onkeypress="return validaNumero(event)" pattern="integer"></label>
                  </div>
              
                  <div class="small-3 columns"><label> Arraigo en el domicilio
                    <input name="arraisol" type="text" id="arraisol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ArDomDatGen']; } ?>" placeholder="Arraigo en el domicilio desde el año" onkeypress="return validaNumero(event)" pattern="integer"></label>
                  </div>
             
                  <div class="small-3 columns"><label>Acredita Domicilio con
                    <input name="acdomsol2" type="text" id="acdomsol2" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" size="16px" placeholder="Acredita Domicilio con"></label>
                  </div>
              
                  <div class="small-3 columns"> <label>Años de residir en la ciudad
                    <input name="anosol2" type="text" id="anosol2" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" size="20px" placeholder="Años de residir en la ciudad" onkeypress="return validaNumero(event)" pattern="integer"></label>
                  </div>
                </p>
                <div class="row">
                <div class="small-3 columns">
                  <label>Vive en:
                <select name="vivsol" id="vivsol"><option value="">-Seleccione una opcion-</option><option value="Casa Propia">Casa Propia</option><option value="Rentada">Rentada</option><option value="Hipotecada">Hipotecada</option><option value="Casa propiedad de sus familiares">Casa propiedad de sus familiares</option><option value="Otros especificar">Otros especificar</option></select></label>
                </div>
              <div class="small-3 columns">  <label>
               <input type="text" name="vivsolesp" id="vivsolesp" style="display: none;"></label></div>
                </div>
           
                <div class="row">
                  <p align="left">
                    <div class="small-5 columns">
                      <label>Estado civil:
                      <select name="civilsol" id="civilsol"><option>-Seleccione una opción-</option><option value="Casado Bienes Mancomunados">Casado Bienes Mancomunados</option><option value="Casado Bienes Separados">Casado Bienes Separados</option><option value="Viudo">Viudo</option><option value="Divorciado">Divorciado</option><option value="Soltero">Soltero</option></select></label>
            
                    </div>
        
                    <div class="small-3 columns">

                      <label>Tiene Auto Propio:
                    <select name="autosol" id="autosol"><option value="">-Seleccione una opción</option><option value="Si">Si</option><option value="No">No</option></select>

                       </label>

                    </div>
                    <div class="small-3 columns">
                        <input type="text" name="marcasol" id="marcasol" style="display: none;">
                    </div>
                    <div class="small-3 columns">
                    <label>
                      Es propietario de algún inmueble:
                  <select name="inmusol" id="inmusol"><option value="">-Seleccione una opción-</option><option value="Si">Si</option><option value="No">No</option></select>
                      </label>
                    </div>
                  </p>
                </div>
                
              </div>

            </div>


    
            <div class="tabs-panel" id="panel2c">
              <div class="row">
                <label>
                Actividad empresarial
                <select name="actempresarial" id="actempresarial"><option value="">-Seleccione una opcion-</option><option value="Si">Si</option><option value="No">No</option></select>
                </label>

                <p align="left">
                  <div class="small-3 columns"><label> Puesto
                    <input name="puestosol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['PuestDatEmp']; } ?>" type="text" id="puestosol" size="40px" placeholder="Puesto"></label>
                  </div>

                  <div class="small-3 columns"><label>Departamento o area
                    <input name="depasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['DepDatEmp']; } ?>" type="text" id="depasol" size="30px" placeholder="Departamento o área"></label>
                  </div>

             
             
                  <div class="small-3 columns"><label>Compañia
                    <input name="compasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['CompDatEmp']; } ?>" type="text" id="compasol" size="70px" placeholder="Compañía"></label>
                  </div>
                  <div class="small-3 columns" ><label>Telefono
                    <input name="compatelsol1" type="text" id="compatelsol1"  value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][0]; } ?>" size="1px"  onkeypress="return validaNumero(event)" ></label>
                  </div>
                  <div class="small-2 columns" ><label>Extension
                    <input name="compatelsolext" type="text" id="compatelsolext" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ExtDatEmp']; } ?>" size="20px" placeholder="Extensión" onkeypress="return validaNumero(event)"></label>
                  </div>
                </p>

                <p align="left">
       
                  <div class="small-3 columns" id="divgiroprof" style="display: none;"><label>Ocupacion / Giro
                    <input name="giroprof" type="text" id="giroprof" size="40px"  value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['Ocupacion_Profesion']; } ?>" placeholder="Ocupación/Giro según alta o último cambio ante SHCP" ></label>
                  </div>
           
        
                  <div class="small-3 columns"> <label> Antigüedad desde:<input name="desdesol" type="date" id="desdesol" size="1px" value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['DesAnDatEmp']; } ?>"  placeholder="dd" ></label>
                  </div>
            
                </p>
                <p align="left">
        
         
                  <div class="small-3 columns" id="divnoempleados" style="display: none;"><label>Numero de empleados
                    <input name="noempleados" type="text" id="noempleados"  value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['NoEmDatEmp']; } ?>" placeholder="Núm. de empleados"pattern="integer"></label>
                  </div>
         

      
                  <div class="small-3 columns" id="divdomneg" style="display: none;"> <label>Domicilio del negocio
                    <input name="domneg" type="text" id="domneg" size="44px"  value="<?php if (isset($row2['Folio_Cliente'])) {  echo $row2['DomicilioLaboral']; } ?>" placeholder="Domicilio del negocio:"></label>
                  </div>
           
                </p>


              </div>
            </div>

            <div class="tabs-panel" id="panel3c">
              <div class="row">
                <p align="left">

                  <div class="small-3 columns"><label>Nombre
                    <input name="nomref1" type="text" id="nomref1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="small-3 columns"><label>Parentesco o relacion
                    <input name="parenref1" type="text" id="parenref1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer']; } ?>" size="40px" placeholder="Parentesco o relación" pattern ="alpha"></label>
                  </div>
            
                  <div class="small-3 columns"><label>Telefono
                    <input name="telref11" type="text" id="telref11" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][0]; } ?>"   onkeypress="return validaNumero(event)"  pattern="integer"></label>
                  </div>
                </p>
              </div>
              <div class="row">
                <p align="left">

                  <div class="small-3 columns"><label>Nombre
                    <input name="nomref2" type="text" id="nomref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></label>
                  </div>

                  <div class="small-3 columns"><label>Parentesco o relacion
                    <input name="parenref2" type="text" id="parenref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer']; } ?>" size="40px" placeholder="Parentesco o relación" pattern ="alpha"></label>
                  </div>
            
                  <div class="small-3 columns"><label>Telefono
                    <input name="telref12" type="text" id="telref12" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][0]; } ?>"   onkeypress="return validaNumero(event)"  pattern="integer"></label>
                  </div>
                </p>
              </div>
            </div>
    
            <div class="tabs-panel" id="panel4c">

              <div id="secRefBancarias1" class="row">
       
       
                <p align="left">
                  <div class="small-3 columns"><label>Banco
                    <input name="refbanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" type="text" id="refbanc" size="54px" placeholder="Banco"></label>
                  </div>
          
                  <div class="small-3 columns"><label>Numero de cuenta
                    <input name="numcuebanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarRefBan']; } ?>" type="text" id="numcuebanc" size="40px" placeholder="Número de cuenta"></label>
                  </div>

                  <div class="small-3 columns"><label>Sucursal
                    <input name="sucbanc1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan']; } ?>" type="text" id="sucbanc1" size="54px" placeholder="Sucursal"></label>
                  </div>
                </p>
      
                <p align="left">
         
                  <div class="small-3 columns"><label>  Fecha de apertura: <input name="aperbanc1d" type="date" id="aperbanc1d" size="1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan']; } ?>" placeholder="dd" ></label>
                  </div>
                </p>
              </div>
              <div id="secRefBancarias1" class="row">
       
       
                <p align="left">
                  <div class="small-3 columns"><label>Banco
                    <input name="refbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" type="text" id="refbanc2" size="54px" placeholder="Banco"></label>
                  </div>
          
                  <div class="small-3 columns"><label>Numero de cuenta
                    <input name="numcuebanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarRefBan']; } ?>" type="text" id="numcuebanc2" size="40px" placeholder="Número de cuenta"></label>
                  </div>

                  <div class="small-3 columns"><label>Sucursal
                    <input name="sucbanc2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['SucRefBan']; } ?>" type="text" id="sucbanc2" size="54px" placeholder="Sucursal"></label>
                  </div>
                </p>
      
                <p align="left">
         
                  <div class="small-3 columns"><label>  Fecha de apertura: <input name="aperbanc2d" type="date" id="aperbanc2d" size="1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FecApRefBan']; } ?>" placeholder="dd" ></label>
                  </div>
                </p>
              </div>

              <div id="secCarDirecto" class="row">
                <p align="left"><strong>CARGO DIRECTO (para contratos en M.N.) </strong>
                </p>
                <p align="left">
                  <div class="small-3 columns"><label>Banco
                    <input name="cargdir" type="text" id="cargdir" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancCarDir']; } ?>" size="54px" placeholder="Banco"></label>
                  </div>

                  <div class="small-3 columns"><label>CLABE
                    <input name="nocuentcd" type="text" id="nocuentcd" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarCarDir']; } ?>" size="40px" placeholder="Número de Cuenta (CLABE)"></label>
                  </div>
                </p>
              </div>
            </div>


            <div class="tabs-panel" id="panel5c">
              <div id="secRefComerciales1" class="row">
       
                <p align="left">
                  <div class="small-3 columns"><label>Empresa
                    <input name="refcomemp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" type="text" id="refcomemp1"  placeholder="Empresa"></label>
                  </div>
       
                </p>
                <div class="small-3 columns"><label>Telefono
                  <input name="telrefcom11" type="text" id="telrefcom11" size="1px"  value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom'] != '' ) {  echo $row['TelRefCom'][0]; } ?>" pattern="integer"></label>
                </div>

                <p align="left">
                  <div class="small-3 columns"><label>Antiguedad desde el año
                    <input name="antirefcom1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom']; } ?>"type="text" id="antirefcom1" placeholder="Antigüedad Desde el Año" pattern="integer"></label>
                  </div>

                </p>
     

              </div>

              <div id="secRefComerciales2" class="row">
                <p align="left">
                  <div class="small-3 columns"><label>Empresa
                    <input name="refcomemp2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmpRefCom']; } ?>" type="text" id="refcomemp2"  placeholder="Empresa"></label>
                  </div>
       
                  <div class="small-3 columns"><label>Telefono
                    <input name="telrefcom22" type="text" id="telrefcom22" size="1px"  value="<?php if(isset($row['Folio_Cliente']) && $row['TelRefCom2']) {  echo $row['TelRefCom2'][0]; } ?>"pattern="integer"></label>
                  </div>
                </p>
                <p align="left">
                  <div class="small-3 columns"><label>Antiguedad desde el año
                    <input name="antirefcom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['AntRefCom2']; } ?>" type="text" id="antirefcom2" placeholder="Antigüedad Desde el Año" pattern="integer"></label>
                  </div>
                </p>
              </div>

            </div>

            <div class="tabs-panel" id="panel6c">
              <div class="row">
                <p align="left">
                  <div class="small-3 columns"><label>Nombre(s) del conyuge
                    <input name="conyunom" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomDatCon']; } ?>" type="text" id="conyunom" size="40px" placeholder="Nombre(s) del conyuge" pattern="alpha"></label>
                  </div>
                  <div class="small-3 columns">   <label> Apellido Paterno
                    <input name="conyuape1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatDatCon']; } ?>" type="text" pattern="alpha" id="conyuape1" size="20px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>
                    
                  <div class="small-3 columns">   <label> Apellido Materno         
                    <input name="conyuape2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatDatCon']; } ?>" type="text" id="conyuape2" size="20px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>
              
                  <div class="small-3 columns"><label>Compañia
                    <input name="compaconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CompDatCon']; } ?>" type="text" id="compaconyu" size="30px" placeholder="Compañia"></label>
                  </div>
             
                  <div class="small-3 columns"><label>Puesto
                    <input name="puestconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['PuestDatCon']; } ?>" type="text" id="puestconyu" size="20px" placeholder="Puesto"></label>
                  </div>
                </p>
              </div>
            </div>
   
            <div class="tabs-panel" id="panel7c">

              <p align="left">De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. * 
              </p>
       
              <div class="row">
                <p align="left">
                  <div class="small-4 columns"><label>Nombre
                    <input name="accionista1" type="text" id="accionista1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc1']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="small-4 columns"><label>RFC
                    <input name="rfcaccion1" type="text" id="rfcaccion1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC"></label>
                  </div>
                  <div class="small-4 columns"><label>Porcentaje de las acciones
                    <input name="porcent1" type="text" id="porcent1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%"></label>
                  </div>
                </p>
                <p align="left">
                  <div class="small-4 columns"><label>Nombre
                    <input name="accionista2" type="text" id="accionista2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc2']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="small-4 columns"><label>RFC
                    <input name="rfcaccion2" type="text" id="rfcaccion2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC"></label>
                  </div>
                  <div class="small-4 columns"><label>Porcentaje de las acciones
                    <input name="porcent2" type="text" id="porcent2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%"></label>
                  </div>
                </p>
                <p align="left">
                  <div class="small-4 columns"><label>Nombre
                    <input name="accionista3" type="text" id="accionista3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc3']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="small-4 columns"><label>RFC
                    <input name="rfcaccion3" type="text" id="rfcaccion3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC"></label>
                  </div>
                  <div class="small-4 columns"><label>Porcentaje de las acciones
                    <input name="porcent3" type="text" id="porcent3" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%"></label>
                  </div>
                </p>
                <p align="left">
                  <div class="small-4 columns"><label>Nombre
                    <input name="accionista4" type="text" id="accionista4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAcc4']; } ?>" placeholder="Nombre"></label>
                  </div>
                  <div class="small-4 columns"><label>RFC
                    <input name="rfcaccion4" type="text" id="rfcaccion4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAcc1']; } ?>" placeholder="RFC"></label>
                  </div>
                  <div class="small-4 columns"><label>Porcentaje de las acciones
                    <input name="porcent4" type="text" id="porcent4" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAcc1']; } ?>" placeholder="%"></label>
                  </div>
                </p>
              </div>
        
              <div class="row">
                <p align="left">* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:
                </p>
     
                <div class="small-4 columns"><label>Nombre
                  <input name="accpermor1" type="text" id="accpermor1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAccPM1']; } ?>" placeholder="Nombre"></label>
                </div>
                <div class="small-4 columns"><label>RFC
                  <input name="rfcaccpermor1" type="text" id="rfcaccpermor1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM1']; } ?>" placeholder="RFC"></label>
                </div>

                <div class="small-4 columns"><label>Porcentaje de las acciones
                  <input name="permoracc1" type="text" id="permoracc1" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM1']; } ?>" placeholder="%"></label>
                </div>

                <div class="small-4 columns"> <label>Nombre
                  <input name="accpermor2" type="text" id="accpermor2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomAccPM2']; } ?>" placeholder="Nombre"></label>
                </div>

                <div class="small-4 columns"><label>RFC
                  <input name="rfcaccpermor2" type="text" id="rfcaccpermor2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['RFCAccPM2']; } ?>" placeholder="RFC"></label>
                </div>

                <div class="small-4 columns"><label>Porcentaje de las acciones
                  <input name="permoracc2" type="text" id="permoracc2" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['PorAccPM2']; } ?>" placeholder="%"></label>
                </div>

              </div>
            </div>

            <div class="tabs-panel" id="panel8c">
              <div class="row">
                <p align="left">
                  Beneficiario en caso de fallecimiento:
                  <div class="small-4 columns"><label>Apellido Paterno
                    <input name="benesol1" type="text" id="benesol1" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApPatBenDatGen']; } ?>" placeholder="Apellido Paterno" onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>

                  <div class="small-4 columns"><label>Apellido Materno
                    <input name="benesol2" type="text" id="benesol2" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApMatBenDatGen']; } ?>" placeholder="Apellido Materno" onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>

                  <div class="small-4 columns"><label>Nombre(s)
                    <input name="benesol3" type="text" id="benesol3" size="30px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NomBenDatGen']; } ?>" placeholder="Nombre(s)" onkeypress="return validaTexto(event)" pattern="alpha"></label>
                  </div>
           

       
                
         
                  <div class="small-3 columns"><label>
                    Domicilio (calle y número) 
                    <input name="textfield48" type="text" id="textfield48" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['DomBeneficiario']; } ?>" ></label>
                  </div>
            
            
                  <div class="small-3 columns"><label>Colonia
                    <input name="textfield49" type="text" id="textfield49" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['ColBeneficiario']; } ?>"></label>
                  </div>
             
                  <div class="small-3 columns"><label>Código Postal 
                    <input name="textfield50" type="text" id="textfield50" size="50%" onkeypress="return validaNumero(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CPBeneficiario']; } ?>"></label>
                  </div>
            

                  <div class="small-3 columns"><label>País
                    <input name="textfield51" type="text" id="textfield51" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PaisBeneficiario']; } ?>" ></label>
                  </div>
            

                  <div class="small-3 columns"><label>   Teléfono
                    <input name="textfield52" type="text" id="textfield52" size="50%" onkeypress="return validaNumero(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['TelBeneficiario']; } ?>"></label>
                  </div>
              
             
                  <div class="small-3 columns"><label> CURP
                    <input name="textfield53" type="text" id="textfield53" size="50%" onkeypress="return validaRFC(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CURPBeneficiario']; } ?>"></label>
                  </div>
            

                  <div class="small-3 columns"><label> RFC
                    <input name="textfield54" type="text" id="textfield54" size="50%" onkeypress="return validaRFC(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['RFCBeneficiario']; } ?>"></label>
                  </div>
              

                  <div class="small-3 columns"><label> Parentesco
                    <input name="textfield55" type="text" id="textfield55" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['ParentescoBeneficiario']; } ?>"></label>
                  </div>

              
                  <div class="small-3 columns"><label> Porciento
                    <input name="textfield56" type="text" id="textfield56" size="50%"  onkeypress="return validaNumero(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PorcientoBeneficiario']; } ?>"></label>
                  </div>
              



                  <div class="small-3 columns"> <label>Fecha de Nacimiento 
                    <input name="textfield57" type="date" id="textfield57" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FeNacBeneficiario']; } ?>"></label>
                  </div>
              

                  <div class="small-3 columns"><label> Municipio
                    <input name="textfield58" type="text" id="textfield58" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['MunBeneficiario']; } ?>"></label>
                  </div>
              

                  <div class="small-3 columns"><label> Estado
                    <input name="textfield59" type="text" id="textfield59" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EdoBeneficiario']; } ?>"></label>
                  </div>
              


                  <div class="small-3 columns"><label>  Estado Civil 
                    <input name="textfield60" type="text" id="textfield60" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EdoCivilBeneficiario']; } ?>"></label>
                  </div>
          
              
                  <div class="small-3 columns"><label>Sociedad Conyugal 
                    <input name="textfield61" type="text" id="textfield61" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['SoConBeneficiario']; } ?>" ></label>
                  </div>
             
                  <div class="small-3 columns"><label> Ocupación o Profesión 
                    <input name="textfield62" type="text" id="textfield62" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OcuProfBeneficiario']; } ?>" ></label>
                  </div>
                </p>
              </div> 
            </div>

            <div class="tabs-panel" id="panel8c">
            </div>
            <div class="row">
              
            <input class="button" type="button" name="guardarcliente" id="guardarcliente" value="Guardar" style="display: none;">
            <input class="button" type="button" name="botonmodcliente" id="botonmodcliente" value="Guardar" style="display: none;">
            <input class="button" type="button" name="cancelarcliente" id="cancelarcliente" value="Cancelar Registro">
            <input name="fecharegistro" type="text" id="fecharegistro" value="<?php echo date("Y-m-d");?>" size="10px" readonly>
            </div>
          </div>
        </div>
        </form>
      </div>





      <div class="tabs-panel" id="panel2v">
        <ul class="tabs" data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge="500" data-tabs id="deeplinked-tabs">
          <li class="tabs-title is-active"><a href="#panel1d" aria-selected="true">Credito</a></li>
          <li class="tabs-title"><a href="#panel2d">Obligado Solidario</a></li>
          <li class="tabs-title"><a href="#panel3d">Concesionario</a></li>
          
        </ul>

        <div class="tabs-content" data-tabs-content="deeplinked-tabs">
          <div class="tabs-panel is-active" id="panel1d">
    

                                 <div class="row">
                                 <p align="left">
                                              <div class="small-3 columns">
                                                <label> Tipo Credito
                                                        <select name="tipocredito" size="1" id="tipocredito"  onchange="seleccionvalor()" required>
                                                          <option value="" ></option>
                                                          <?php
                                                          $rescreditos=mysqli_query($cnx,"select * from tiposcreditos");
                                                          while($rowcreditos=mysqli_fetch_array($rescreditos)){?> 
                                                          <option value="<?php echo $rowcreditos['descripcion'];?>" ><?php echo $rowcreditos['descripcion'];?></option>

                                                          <?php }
                                                          ?>
                                                        </select>
                                               </label>
                                              </div>
                                                    
                                                    <div class="small-3 columns"> 
                                                          <label>
                                                              <input name="textfield86" type="text" id="textfield86" size="50%" onkeypress="return validaNumeroDecimal(event)"  required >
                                                          </label> 
                                                    </div>

                                                  <div class="small-3 columns" id="engautochange">
                                                           <label>
                                                            Enganche <input name="textfield87" type="text" id="textfield87" size="50%" onkeypress="return validaNumeroDecimal(event)"   onchange="datosAuto()">
                                                          </label>
                                                  </div>

                                                  <div class="small-3 columns" id="porengautochange">
                                                          <label> Porcentaje de Enganche<input name="textfield88" type="text" id="textfield88" size="50%"  readonly>
                                                          </label>
                                                  </div>
                                                  <div class="small-3 columns" id="porfinautochange">
                                                    <label> 
                                                   Porcentaje de Financieamiento<input name="textfield89" type="text" id="textfield89" size="50%"  readonly>
                                                    </label>
                                                  </div>
                                                  <div class="small-3 columns" id="monfinautochange">
                                                    <label>
                                                    
                                                     Monto Financiado <input name="textfield90" type="text" id="textfield90" size="50%"  readonly>
                                                    </label>
                                                  </div>
                                                  <div class="small-3 columns">
                                                    <label>
                                                      Interes Anual<input name="textfield100" type="text" id="textfield100" size="50%"  readonly onkeypress="return validaNumero(event)" >
                                                    </label>
                                                  </div>
                                                  <div class="small-3 columns" id="comisionapchange">
                                                    <label>
                                                    
                                                  Comisión por Apertura<input name="textfield96" type="text" id="textfield96" size="50%"  readonly onkeypress="return validaNumero(event)" >
                                                    </label>
                                                  </div>

                                                          <div class="small-3 columns">
                                                              <label>
                                                               Seguro de Auto<input name="textfield97" type="text" id="textfield97" size="50%"  onkeypress="return validaNumero(event)" >
                                                              </label>
                                                            
                                                         </div>
                                                            <div class="small-3 columns">
                                                              <label>
                                                            
                                                            Seguro de Vida<input name="textfield98" type="text" id="textfield98" size="50%"  onkeypress="return validaNumero(event)" >
                                                              </label>
                                                            </div>

                                                            <div class="small-3 columns" id="segdeschange">
                                                              <label>
                                                            
                                                                <p align="left">Seguro de Desempleo<input name="textfield99" type="text" id="textfield99" size="50%"  onkeypress="return validaNumero(event)" ></p>
                                                              </label>
                                                            </div>
                                                            <div class="small-3 columns">
                                                              <label>
                                                            
                                                               Plazo (meses)<input name="textfield91" type="text" id="textfield91" size="50%"  onkeypress="return validaNumero(event)" required>
                                                              </label>
                                                            </div>
                                                          
                                                            <div class="small-3 columns">
                                                              <label>
                                                               Pago Mensual Esperado<input name="textfield92" type="text" id="textfield92" size="50%"  onkeypress="return validaNumeroDecimal(event)" required>
                                                              </label>
                                                            </div>
                                                            <div class="small-5 columns">
                                                            <input type="button" class="button" data-open="Aut" value="Cambiar Valores"></div>
                                                            
                                            </p>
                     </div>
            
<!-- This is the first modal -->


                                                                        <div class="reveal" id="Aut" data-reveal>
                                                                          <h3>Clave de Autorizacion
                                                                          </h3>
                                                                          <div class="row">
                                                                            <div class="small-5 columns">
                                                                
                                                                              <input type="text" id="clave" name="clave">
                                                                              <button class="button" data-close aria-label="Close reveal" id="keycheck" data-open="exampleModal3">Aceptar!</button>
                                                                            </div>
                                                                          </div>
                                                                          <button class="close-button" data-close aria-label="Close reveal" type="button">
                                                                            <span aria-hidden="true">X</span>
                                                                            </button>
                                                                          </div>
                                              </div>
                                      <div class="tabs-panel" id="panel2d">
                                         <div class="row">
       <p align="left">
            <div class="small-3 columns"><label>Nombre
            <input name="datobnom1" type="text" id="datobnom1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol']; } ?>" placeholder="Nombre(s)" pattern="alpha"></label></div>

            <div class="small-3 columns"><label>Apellido Paterno
            <input name="datobappat1" type="text" id="datobappat1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol']; } ?>" placeholder="Apellido Paterno" pattern="alpha"></label></div>

            <div class="small-3 columns"><label>Apellido Materno
            <input name="datobapmat1" type="text" id="datobapmat1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol']; } ?>" placeholder="Apellido Materno" pattern="alpha"></label></div>

            <div class="small-3 columns"><label>Direccion/ Calle y numero
            <input name="datobdir1" type="text" id="datobdir1" size="48px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['DirObSol']; } ?>" placeholder="Dirección / Calle y número"></label></div>

            <div class="small-3 columns"><label>Colonia
            <input name="datobcol1" type="text" id="datobcol1" size="48px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ColObSol']; } ?>" placeholder="Colonia"></label></div>

            <div class="small-3 columns"><label>Ciudad
            <input name="datobcd1" type="text" id="datobcd1" size="20px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CdObSol']; } ?>" placeholder="Ciudad"></label></div>

            <div class="small-3 columns"><label>Lugar de nacimiento
            <input name="datoblugnac1" type="text" id="datoblugnac1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol']; } ?>" size="30px" placeholder="Lugar nacimiento (País y Edo.)"></label></div>
          </p>
          </div>
          <div class="row"> 
          <p align="left">
            <div class="small-3 columns"><label>Estado
            <input name="datobedo1" type="text" id="datobedo1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdoObSol']; } ?>" size="30px" placeholder="Estado"></label></div>
            <div class="small-3 columns"><label>Codigo Postal
            <input name="datobcp1" type="text" id="datobcp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CPObSol']; } ?>" size="30px" placeholder="C.P." onkeypress="return validaNumero(event)" patern="integer"></label></div>

            <div class="small-3 columns"><label>Email
            <input  name="datobmail1" type="text" id="datobmail1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol']; } ?>" size="30px" placeholder="Email" pattern="email"></label></div>
        
        <div class="small-3 columns"> <label>Sexo <select name="datobsex1"><option>Femenino</option><option>Masculino</option></select></label></div>
          </p>
          </div>
         
     
          
          <div class="row">
          <p align="left">
            
            <div class="small-3 columns"><label>Fecha de nacimiento:
            <input name="datobfechnac1d" type="date" id="datobfechnac1d" size="1px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSol']; } ?>" maxlength="2" placeholder="dd" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobfechnac1m)"></label></div>

            <div class="small-3 columns"><label>Edad
            <input name="datobed1" type="text" id="datobed1" size="2px" placeholder="Edad" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSol']; } ?>" onkeypress="return validaNumero(event)" pattern="integer"></label></div>

            <div class="small-3 columns"><label>CURP
            <input name="datobcurp1" type="text" id="datobcurp1" size="22px" placeholder="CURP" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol']; } ?>" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></label></div>
          <div class="small-3 columns"><label>RFC
          <input name="datobrfc11" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][0]; } ?>" type="text" id="datobrfc11" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc12)" pattern="alpha_numeric"></label></div>

           <div class="small-3 columns"><label>Telefono Particular
           <input name="datobtel11" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][0]; } ?>" type="text" id="datobtel11" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel12)" pattern="integer"></label></div>

            <div class="small-3 columns"><label>Telefono Movil
            <input name="datobtel112" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][0]; } ?>" type="text" id="datobtel112" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel122)" pattern="integer"></label></div>
            <div class="small-3 columns">
            <label>Tiene propiedad a su nombre?
            <select name="datobprop1" ><option>Si</option><option>No</option></select></label>
              
          </div>
          </p>
          </div>
<br>


<p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO (2) PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>

             <div class="row">
          <p align="left">
            <div class="small-3 columns"><label>Nombre(s)
            <input name="datobnom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol2']; } ?>" type="text" id="datobnom2" size="30px" placeholder="Nombre(s)" pattern="alpha"></label></div>

            <div class="small-3 columns"><label>Apellido paterno
            <input name="datobappat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol2']; } ?>" type="text" id="datobappat2" size="30px" placeholder="Apellido Paterno" pattern="alpha"></label></div>

            <div class="small-3 columns"><label>Apellido Materno
            <input name="datobapmat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol2']; } ?>" type="text" id="datobapmat2" size="30px" placeholder="Apellido Materno" pattern="alpha"></label></div>

            <div class="small-3 columns"><label>Direccion / Calle y numero 
            <input name="datobdir2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['DirObSol2']; } ?>" type="text" id="datobdir2" size="48px" placeholder="Dirección / Calle y número"></label></div>

            <div class="small-3 columns"><label>Colonia
            <input name="datobcol2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ColObSol2']; } ?>"type="text" id="datobcol2" size="48px" placeholder="Colonia"></label></div>

            <div class="small-3 columns"><label>Ciudad
            <input name="datobcd2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CdObSol2']; } ?>" type="text" id="datobcd2" size="20px" placeholder="Ciudad"></label></div>

            <div class="small-3 columns"><label>Lugar de nacimiento
            <input name="datoblugnac2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol2']; } ?>" type="text" id="datoblugnac2" size="30px" placeholder="Lugar nacimiento (País y Edo.)"></label></div>
          </p>
         </div>
          <div class="row">
          <p align="left">
            <div class="small-3 columns"><label>Estado
            <input name="datobedo2" type="text" id="datobedo2" size="30px" placeholder="Estado" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdoObSol2']; } ?>"></label></div>

            <div class="small-3 columns"><label>Codigo Postal
            <input name="datobcp2" type="text" id="datobcp2" size="30px" placeholder="C.P." value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CPObSol2']; } ?>" onkeypress="return validaNumero(event)" pattern="integer"></label></div>

            <div class="small-3 columns"><label>Email
            <input  name="datobmail2" type="text" id="datobmail2" size="30px" placeholder="Email" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol2']; } ?>" pattern="email"></label></div>
          </p>
          <div class="small-3 columns"><label>Sexo
          <select name="datobsex2"><option>-Seleccione una opcion-</option><option>Femenino</option><option>Masculino</option></select></label>
         </div>
          </div>
            <div class="row"> 
            <p align="left">
           
            <div class="small-3 columns"><label> Fecha de nacimiento:
            <input name="datobfechnac2d" type="date" id="datobfechnac2d" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSol2']; } ?>" size="1px" maxlength="2" placeholder="dd" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobfechnac2m)"></label></div>
            <div class="small-3 columns"><label>Edad
            <input name="datobed2" type="text" id="datobed2" size="2px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSol2']; } ?>" placeholder="Edad" onkeypress="return validaNumero(event)"></label></div>

            <div class="small-3 columns"><label>CURP
            <input name="datobcurp2" type="text" id="datobcurp2" size="22px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol2']; } ?>" placeholder="CURP" onkeypress="return validaRFC(event)"></label></div>

          <div class="small-3 columns"><label>RFC
          <input name="datobrfc21" type="text" id="datobrfc21" size="1px" maxlength="1"  value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][0]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc22)"></label></div>

                <div class="small-3 columns"><label>Telefono
                <input name="datobtel21" type="text" id="datobtel21" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][0]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel22)"></label></div>

                   <div class="small-3 columns"><label>Telefono Movil
                   <input name="datobtel212" type="text" id="datobtel212" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][0]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel222)"></label></div>
          <div class="small-3 columns">
          <label>Tiene propiedad a su nombre?
          <select name="datobprop2" ><option>Si</option><option>No</option></select></label></div>
         

          </p>
            </div>
                                      </div>
                                            <div class="tabs-panel" id="panel3d">
                                                       <div class="row">
          <p align="justify">
            <div class="small-3 columns"><label>Concesionario
            <input name="clavcon" type="text" id="clavcon" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ClavConcesionario']; } ?>" placeholder="Clave Consesionario o Distribuidor" required></label></div>

            <div class="small-3 columns"><label>Nombre Concesionario
            <input name="nomcons" type="text" id="nomcons" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomConcesionario']; } ?>" placeholder="Nombre Concesionario o Distribuidor" required></label></div>

            <div class="small-3 columns"><label>Nombre del Vendedor
            <input name="nomvend" type="text" id="nomvend" size="48px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomVendedor']; } ?>" placeholder="Nombre del Vendedor" required></label></div>

            <div class="small-3 columns"><label>Nombre y firma
            <input name="gerentegral" type="text" id="gerentegral" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomGerenteGral']; } ?>" size="48px" placeholder="Nombre y firma del Gerente General" required></label></div>

            <div class="small-3 columns"><label>Fecha
            <input name="fecha" type="text" id="fecha" value="<?php echo date("Y-m-d");?>" size="10px" readonly></label></div>
          </p>
          </div>
                                            </div>
                                      <div class="tabs-panel" id="panel4d">
                                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                      </div>
                      </div>
            </div>
        
 


      <div class="tabs-panel" id="panel3v">
                   <h4 align="left">Calificación del grado de riesgo</h4>
                    <table width="100%" border="0">
                      <tr>
                        <td width="32%">Actividad | Objeto Social </td>
                        <td width="68%"><select id="select" name="select" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="3" <?php if(isset($row['Folio_Cliente'])) { if($row3['Antiguedad_ObjetoSocial']=="Vulnerable"){echo "selected";}}?>>Vulnerable</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_ObjetoSocial']=="Informal"){echo "selected";}}?>>Informal</option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_ObjetoSocial']=="Otra"){echo "selected";}}?>>Otra</option>
                        </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Antigüedad del cliente </td>
                        <td><select id="select2" name="select2" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="1-3 años"){echo "selected";}}?>>1-3 años</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="4-6 años"){echo "selected";}}?>>4-6 años</option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="7-10 años"){echo "selected";}}?>>7-10 años</option>
                          <option value="0"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="N/A"){echo "selected";}}?>>N/A</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Naturaleza de las operaciones </td>
                        <td><select id="select3" name="select3" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Naturaleza_Operaciones']=="Prestamo"){echo "selected";}}?>>Prestamo</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Naturaleza_Operaciones']=="Arrendamiento"){echo "selected";}}?>>Arrendamiento</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Naturaleza_Operaciones']=="Otros"){echo "selected";}}?>>Otros</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Q de Beneficiarios </td>
                        <td><select id="select4" name="select4" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="1 a 2"){echo "selected";}}?>>1 a 2</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="3 a 4"){echo "selected";}}?>>3 a 4</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="5 o mas"){echo "selected";}}?>>5 o mas</option>
                          <option value="0"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="N/A"){echo "selected";}}?>>N/A</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Q de Terceros Relacionados (Apoderados y Cotitulares) </td>
                        <td><select id="select5" name="select5" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="1 a 2"){echo "selected";}}?>>1 a 2</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="3 a 4"){echo "selected";}}?>>3 a 4</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="5 o mas"){echo "selected";}}?>>5 o mas</option>
                          <option value="0"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="N/A"){echo "selected";}}?>>N/A</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>PEPs Relacionados </td>
                        <td><select id="select6" name="select6" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['PEPs_Relacionados']=="1% - 49%"){echo "selected";}}?>>1% - 49%</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['PEPs_Relacionados']=="50% - 74%"){echo "selected";}}?>>50% - 74%</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['PEPs_Relacionados']=="75% - 100%"){echo "selected";}}?>>75% - 100%</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Alerta Reputacional </td>
                        <td><select id="select7" name="select7" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Alerta_Reputacional']=="1% - 49%"){echo "selected";}}?>>1% - 49%</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Alerta_Reputacional']=="50% - 74%"){echo "selected";}}?>>50% - 74%</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Alerta_Reputacional']=="75% - 100%"){echo "selected";}}?>>75% - 100%</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Volumen esperado (Monto) </td>
                        <td><select id="select8" name="select8" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Volumen_Esperado']=="$18000 - $20000"){echo "selected";}}?>>$18000 - $20000</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Volumen_Esperado']=="$21000 - $25000"){echo "selected";}}?>>$21000 - $25000</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Volumen_Esperado']=="mas de $25000"){echo "selected";}}?>>mas de $25000</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Frecuencia esperada (No. Veces) </td>
                        <td><select id="select9" name="select9" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Frecuencia_Esperada']=="1 a 3"){echo "selected";}}?>>1 a 3</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Frecuencia_Esperada']=="4 a 6"){echo "selected";}}?>>4 a 6</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Frecuencia_Esperada']=="7 a 10"){echo "selected";}}?>>7 a 10</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Instrumento Monetario Utilizado </td>
                        <td><select id="select10" name="select10" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Instrumento_Monetario']=="Transferencia"){echo "selected";}}?>>Transferencia</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Instrumento_Monetario']=="Cheque"){echo "selected";}}?>>Cheque</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Instrumento_Monetario']=="Efectivo"){echo "selected";}}?>>Efectivo</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Canales o Medios Utilizados </td>
                        <td><select id="select11" name="select11" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Canales_MediosUtilizados']=="Agencia"){echo "selected";}}?>>Agencia</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Canales_MediosUtilizados']=="Internet"){echo "selected";}}?>>Internet</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Canales_MediosUtilizados']=="Otro"){echo "selected";}}?>>Otro</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>País | Estado Oficial </td>
                        <td><select id="select12" name="select12" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOficial']=="México"){echo "selected";}}?>>México</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOficial']=="Otros"){echo "selected";}}?>>Otros</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOficial']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>País | Estado Residencia </td>
                        <td><select id="select13" name="select13" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidencia']=="Guerrero-Michoacan-Tamaulipas-Morelos"){echo "selected";}}?>>Guerrero-Michoacan-Tamaulipas-Morelos</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidencia']=="Durango-Chihuhua-Jalisco-México-CD México-Sonora"){echo "selected";}}?>>Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidencia']=="Puebla-Coahuila-Zcatecas-Hidalgo-Durango"){echo "selected";}}?>>Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>País | Estado Operación </td>
                        <td><select id="select14" name="select14" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOperacion']=="Guerrero-Michoacan-Tamaulipas-Morelos"){echo "selected";}}?>>Guerrero-Michoacan-Tamaulipas-Morelos</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOperacion']=="Durango-Chihuhua-Jalisco-México-CD México-Sonora"){echo "selected";}}?>>Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOperacion']=="Puebla-Coahuila-Zcatecas-Hidalgo-Durango"){echo "selected";}}?>>Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Origen de los recursos </td>
                        <td><select id="select15" name="select15" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Origen_Recursos']=="México"){echo "selected";}}?>>México</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Origen_Recursos']=="Otros"){echo "selected";}}?>>Otros</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Origen_Recursos']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>Destino de los recursos </td>
                        <td><select id="select16" name="select16" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Destino_Recursos']=="México"){echo "selected";}}?>>México</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Destino_Recursos']=="Otros"){echo "selected";}}?>>Otros</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Destino_Recursos']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td>País | Estado Residencia de Terceros Relacionados </td>
                        <td><select id="select17" name="select17" size="1" style="width:60%;" required>
                          <option value="" selected></option>
                          <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidenciaTerceros']=="México"){echo "selected";}}?>>México</option>
                          <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidenciaTerceros']=="Otros"){echo "selected";}}?>>Otros</option>
                          <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidenciaTerceros']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
                        </select></td>
                      </tr>
                    </table>
      </div>
      <div class="tabs-panel" id="panel4v">
         <p>Four</p>
        <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
  <li class="tabs-title is-active"><a href="#panel1f" aria-selected="true">Identificación</a></li>
  <li class="tabs-title"><a href="#panel2f">Otros documentos</a></li>
  <li class="tabs-title"><a href="#panel3f">Tab 3</a></li>
  <li class="tabs-title"><a href="#panel4f">Tab 4</a></li>
</ul>

<div class="tabs-content" data-tabs-content="collapsing-tabs">
  <div class="tabs-panel is-active" id="panel1f">
    
                   <h6 align="left">DOCUMENTACION DE IDENTIFICACION </h6>
                      <table width="100%" border="0">
                        <tr id="secINE">
                          <td width="15%">Credencial para votar </td>
                          <td width="15%"><input name="textfield39" type="text" id="textfield39" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['INESolicitante']; } ?>"></td>
                          <td width="15%"><input class="button" type="button" name="copias" value=" adjuntar copia ">  </td>
                          <td width="10%" >
                              <img  src="images/sfg.jpg" >
                          
                          </td>
                        </tr>
                        <tr id="secCedProfesional">
                          <td>Pasaporte cedula profesional </td>
                          <td><input name="textfield40" type="text" id="textfield40" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['Pasaporte_o_CedulaProfSolicitante']; } ?>" ></td>
                          <td><input class="button" type="button" name="copias" value=" adjuntar copia ">  </td>
                          <td >
                    
                          </td>
                        </tr>
                        <tr id="secCarMilitar">
                          <td>Cartilla de servicio militar </td>
                          <td><input name="textfield41" type="text" id="textfield41" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CartillaMilitarSolicitante']; } ?>" ></td>
                          <td><input class="button" type="button" name="copias" value=" adjuntar copia ">  </td>
                          <td >
                       
                          </td>
                        </tr>
                        <tr id="secLicConducir">
                          <td>Licencia para conducir </td>
                          <td><input name="textfield42" type="text" id="textfield42" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['LicenciaConducirSolicitante']; } ?>" ></td>
                          <td><input class="button" type="button" name="copias" value=" adjuntar copia ">  </td>
                          <td >
                        
                          </td>
                        </tr>
                        <tr id="secOtrIdentificacion">
                          <td>  <label>Otra (Especificar)<input name="textfield44" type="text" id="textfield44" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EspIdentSolicitante']; } ?>" ></label></td>
                          <td><input name="textfield43" type="text" id="textfield43" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OtraIdentSolicitante']; } ?>" ></td>
                          <td><input class="button" type="button" name="copias" value=" adjuntar copia ">  </td>
                          <td >
                       
                                                        </td>
                        </tr>
                        <tr>
                          
                          <td>Se cotejo vs original: </td>
                          <td >
                          <select><option>Si</option><option>Ño</option></select>
                               </td>
                        </tr>
                      </table>
  </div>
  <div class="tabs-panel" id="panel2f">
               <p align="left">OTROS DOCUMENTOS QUE SE ADJUNTAN:</p>
                <table width="100%" border="0">
                      <tr>
                        <td width="30%">Se adjunta CURP y/o cédula RFC, FEA* </td>
                        <td width="70%"><input id="adjuntos1A" name="adjuntos1" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_CURP_RFC_FEA']=='Si'){echo "checked";} } ?> required><label for="adjuntos1A"> Si</label>
                                        <input id="adjuntos1B" name="adjuntos1" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_CURP_RFC_FEA']=='No'){echo "checked";} } ?> required><label for="adjuntos1B"> No</label></td>
                      </tr>
                      <tr>
                        <td>Se adjunta comprobante de domicilio </td>
                        <td><input id="adjuntos2A" name="adjuntos2" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_ComprobanteDom']=='Si'){echo "checked";} } ?> required><label for="adjuntos2A"> Si</label>
                            <input id="adjuntos2B" name="adjuntos2" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_ComprobanteDom']=='No'){echo "checked";} } ?> required><label for="adjuntos2B"> No</label></td>
                      </tr>
                      <tr>
                        <td>Fecha del comprobante de domicilio </td>
                        <td><input name="fechaComprobante" type="date" id="fechaComprobante" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FechaComprobanteDom']; } ?>" required></td>
                      </tr>
                      <tr>
                        <td>Domicilio manifestado coincide con la ID</td>
                        <td><input id="adjuntos3A" name="adjuntos3" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['DomicilioCoincideId']=='Si'){echo "checked";} } ?> required><label for="adjuntos3A"> Si</label>
                            <input id="adjuntos3B" name="adjuntos3" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['DomicilioCoincideId']=='No'){echo "checked";} } ?> required><label for="adjuntos3B"> No</label></td>
                      </tr>
                    </table>
          </div>
                             <div class="tabs-panel" id="panel3f">
                                                      <img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">
                              </div>
                              <div class="tabs-panel" id="panel4f">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                             </div>
        </div>
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

<script src="js/clientes.js"></script>