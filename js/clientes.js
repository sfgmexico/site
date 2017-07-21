



function contiregcliente(idlcliente){
    
    
   var data = new FormData();
   

   data.append('function', "contregcliente");
   data.append('idlcliente', idlcliente );
   
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
        
        if(xmlhttp.responseText=='null'){
            alert("¡No Existe el Registro!, Favor de Ingresar Información correcta");
            return;
        }
        if(xmlhttp.responseText=='¡Por favor de Ingresar un Dato!'){
            alert("¡Por favor de Ingresar un Dato!");
            return;
        }


        obj = JSON.parse(xmlhttp.responseText);

        $( "#cerrarmodalcontregcliente" ).click();
        document.getElementById("botonescliente").style.display="none";
        document.getElementById("contenidorequestcliente").style.display="block";
        document.getElementById("idcliente").value=obj.id;
        document.getElementById("cancelarcliente").disabled=true;
        document.getElementById("TipoCliente").value=obj.TipoCliente;
        document.getElementById("TipoCliente").disabled=true;
        cambiacartas();
        document.getElementById("nomsol").value=obj.NombrePF;
        document.getElementById("segnomsol").value=obj.SegNombrePF;
        document.getElementById("apepasol").value=obj.ApPatPF;
        document.getElementById("apemasol").value=obj.ApMatPF;
        document.getElementById("rfc1").value=obj.RFCPF;
        document.getElementById("telsol1").value=obj.TelefonoPF;
        document.getElementById("movsol1").value=obj.MovilPF;
        document.getElementById("mailsol").value=obj.EmailPF;
        document.getElementById("dirsol").value=obj.DireccionPF;
        document.getElementById("dirnumsol").value=obj.NumDireccionPF;
        document.getElementById("colsol").value=obj.ColoniaPF;
        document.getElementById("cpsol").value=obj.CPPF;
        document.getElementById("lugnacsol").value=obj.LugNacimientoPF;
        document.getElementById("edosol").value=obj.EstadoPF;
        document.getElementById("cdsol").value=obj.CiudadPF;
        document.getElementById("textfield5").value=obj.MunicipioPF;
        document.getElementById("curpsol").value=obj.CURPPF;
        document.getElementById("sexsol").value=obj.SexoPF;
        document.getElementById("fechnacsol").value=obj.FechNacimientoPF;
        document.getElementById("edsol").value=obj.Edad;
        document.getElementById("nacsol").value=obj.NacionalidadPF;
        document.getElementById("depensol").value=obj.NumDependientesPF;
        document.getElementById("acdomsol").value=obj.AcreditaDomPF;
        document.getElementById("anosol").value=obj.RecidirCiudadPF;
        document.getElementById("arraisol").value=obj.ArraigoDomPF;
        document.getElementById("vivsol").value=obj.ViviendaPF;
        vivsol();

        document.getElementById("vivsolesp").value=obj.EspViviendaPF;
        document.getElementById("civilsol").value=obj.EstCivilPF;
        civilsol();
        document.getElementById("autosol").value=obj.AutoPropioPF;
        autosol();
        document.getElementById("marcasol").value=obj.EspAuto;
        document.getElementById("inmusol").value=obj.InmueblePF;
        document.getElementById("actempresarial").value=obj.ActividadEmpresarial;
        actempresarial();
        document.getElementById("puestosol").value=obj.PuestoPF;

        document.getElementById("depasol").value=obj.DepartamentoPF;
        document.getElementById("desdesol").value=obj.DesdeEmpPF;
        document.getElementById("compasol").value=obj.CompaniaPF;
        document.getElementById("compatelsol1").value=obj.TelefonoEmpPF;
        document.getElementById("compatelsolext").value=obj.ExtensionEmpPF;
        document.getElementById("giroprof").value=obj.GiroPF;
        document.getElementById("noempleados").value=obj.NumEmpleadosPF;

        document.getElementById("domneg").value=obj.DomicilioNegPF;
        document.getElementById("nomref1").value=obj.RefPerNom1PF;
        document.getElementById("parenref1").value=obj.RefPerParentesco1PF;
        document.getElementById("telref11").value=obj.RefPerTelefono1PF;
        document.getElementById("nomref2").value=obj.RefPerNom2PF;
        document.getElementById("parenref2").value=obj.RefPerParentesco2PF;
        document.getElementById("telref12").value=obj.RefPerTelefono2PF;

        document.getElementById("refbanc").value=obj.Banco1;
        document.getElementById("numcuebanc").value=obj.CuentaBanc1;
        document.getElementById("sucbanc1").value=obj.SucursalBanc1;
        document.getElementById("aperbanc1d").value=obj.FechaApertura1;
        document.getElementById("refbanc2").value=obj.Banco2;
        document.getElementById("numcuebanc2").value=obj.CuentaBanc2;
        document.getElementById("sucbanc2").value=obj.SucursalBanc2;

        document.getElementById("aperbanc2d").value=obj.FechaApertura2;
        document.getElementById("cargdir").value=obj.CarDirBanco;
        document.getElementById("nocuentcd").value=obj.CLABE;
        document.getElementById("refcomemp1").value=obj.RefComEmp1;
        document.getElementById("telrefcom11").value=obj.RefComTel1;
        document.getElementById("antirefcom1").value=obj.RefComAnt1;
        document.getElementById("refcomemp2").value=obj.RefComEmp2;

        document.getElementById("telrefcom22").value=obj.RefComTel1;
        document.getElementById("antirefcom2").value=obj.RefComAnt1;
        document.getElementById("conyunom").value=obj.ConyugeNom;
        document.getElementById("conyuape1").value=obj.ConyugeApPat;
        document.getElementById("conyuape2").value=obj.ConyugeApMat;
        document.getElementById("compaconyu").value=obj.ConyugeCompania;
        document.getElementById("puestconyu").value=obj.ConyugePuesto;

        document.getElementById("benesol3").value=obj.BeneficiarioNom;
        document.getElementById("benesol1").value=obj.BeneficiarioApPat;
        document.getElementById("benesol2").value=obj.BeneficiarioApMat;
        document.getElementById("textfield48").value=obj.BeneficiarioDom;
        document.getElementById("textfield49").value=obj.BeneficiarioCol;
        document.getElementById("textfield50").value=obj.BeneficiarioCP;
        document.getElementById("textfield51").value=obj.BeneficiarioPais;

        document.getElementById("textfield52").value=obj.BeneficiarioTel;
        document.getElementById("textfield53").value=obj.BeneficiarioCURP;
        document.getElementById("textfield54").value=obj.BeneficiarioRFC;
        document.getElementById("textfield55").value=obj.BeneficiarioParent;
        document.getElementById("textfield56").value=obj.BeneficiarioPorciento;
        document.getElementById("textfield57").value=obj.BeneficiarioFechNac;
        document.getElementById("textfield58").value=obj.BeneficiarioMun;

        document.getElementById("textfield59").value=obj.BeneficiarioEstado;
        document.getElementById("textfield60").value=obj.BeneficiarioEstCivil;
        document.getElementById("textfield61").value=obj.BeneficiarioSocConyugal;
        document.getElementById("textfield62").value=obj.BeneficiarioOcupacion;
        document.getElementById("nomrazsoc2").value=obj.RazonSocial;
        document.getElementById("telsol2").value=obj.TelPM;
        document.getElementById("rfcsol1").value=obj.RFCPM;

        document.getElementById("dirsolpm").value=obj.DireccionPM;
        document.getElementById("dirnumsolpm").value=obj.NumDireccionPM;
        document.getElementById("mailsol2").value=obj.EmailPM;
        document.getElementById("colsolpm").value=obj.ColoniaPM;
        document.getElementById("cdsolpm").value=obj.CiudadPM;
        document.getElementById("edosolpm").value=obj.EstadoPM;
        document.getElementById("cpsolpm").value=obj.CPPM;

        document.getElementById("actprinc").value=obj.ActPrinPM;
        document.getElementById("cantperson").value=obj.CantPersonalPM;
        document.getElementById("inicoper1").value=obj.InOperacionesPM;
        document.getElementById("inicoper13").value=obj.ConstEmpresaPM;
        document.getElementById("antemp").value=obj.AntiguedadPM;
        document.getElementById("apodsusc").value=obj.ApoderadoPM;
        document.getElementById("nomconemp").value=obj.ContEmpNombre;

        document.getElementById("segnomconemp").value=obj.ContEmpSegNombre;
        document.getElementById("apepaconemp").value=obj.ContEmpApPat;
        document.getElementById("apemaconemp").value=obj.ContEmpApMat;
        document.getElementById("datobdir22").value=obj.ContEmpDireccion;
        document.getElementById("datobcol23").value=obj.ContEmpColonia;
        document.getElementById("colsol22").value=obj.ContEmpCiudad;
        document.getElementById("cdsol22").value=obj.ContEmpEstado;

        document.getElementById("lugnacsol22").value=obj.ContEmpCP;
        document.getElementById("rfcconemp1").value=obj.ContEmpRFC;
        document.getElementById("telconemp1").value=obj.ContEmpTel;
        document.getElementById("mailconemp").value=obj.ContEmpEmail;
        document.getElementById("puesconemp").value=obj.ContEmpPuesto;
        document.getElementById("accionista1").value=obj.Acc1Nombre;
        document.getElementById("rfcaccion1").value=obj.Acc1RFC;

        document.getElementById("porcent1").value=obj.Acc1Porcentaje;
        document.getElementById("accionista2").value=obj.Acc2Nombre;
        document.getElementById("rfcaccion2").value=obj.Acc2RFC;
        document.getElementById("porcent2").value=obj.Acc2Porcentaje;
        document.getElementById("accionista3").value=obj.Acc3Nombre;
        document.getElementById("rfcaccion3").value=obj.Acc3RFC;
        document.getElementById("porcent3").value=obj.Acc3Porcentaje;

        document.getElementById("accionista4").value=obj.Acc4Nombre;
        document.getElementById("rfcaccion4").value=obj.Acc4RFC;
        document.getElementById("porcent4").value=obj.Acc4Porcentaje;
        document.getElementById("accpermor1").value=obj.Acc5Nombre;
        document.getElementById("rfcaccpermor1").value=obj.Acc5RFC;
        document.getElementById("permoracc1").value=obj.Acc5Porcentaje;
        document.getElementById("accpermor2").value=obj.Acc6Nombre;
        document.getElementById("rfcaccpermor2").value=obj.Acc6RFC;
        document.getElementById("permoracc2").value=obj.Acc6Porcentaje;




         document.getElementById("botonmodcliente").style.display="block";


      
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
}



$("#continuarcliente").click(function(event) {
    
   var data = new FormData();
   data.append('function', "continuaregistro");
   
   //data.append('id', obj.id);

   data.append('TipoCliente', "df");
   
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
        $("#tablajson tbody tr").remove();
        //alert(xmlhttp.responseText);
        obj = JSON.parse(xmlhttp.responseText);
        //alert(obj[0].id);
        $.each(obj, function(i,cliente){
            var newRow =
            "<tr>"
            +"<td> <input onclick='contiregcliente(this.id)' class='button' type='button' name='"+cliente.id+"' id='"+cliente.id+"' value='"+cliente.id+"'></td>";

            if(cliente.TipoCliente=="Persona Fisica"){
                 newRow +="<td> "+cliente.NombrePF+" "+cliente.SegNombrePF+" "+cliente.ApPatPF+" "+cliente.ApMatPF+"</td>"
                +"<td> "+cliente.CURPPF+"</td>"
                +"</tr>";
            }
            if(cliente.TipoCliente=="Persona Moral"){
                 newRow +="<td> "+cliente.RazonSocial+"</td>"
                +"<td> "+cliente.RFCPM+"</td>"
                +"</tr>";
            }

           
            $(newRow).appendTo("#tablajson tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});




$("#botonmodcliente").click(function(event) {


var validacion=false;

$('form#form1').find('input').each(function(){ 

        if($( "#"+this.id).hasClass( "is-invalid-input" )){
            console.log(this.id);
            validacion=true;
            return false;
        }


         
        });


    if(validacion){
         console.log("Hay errores");
         return validacion;
    }





   
    
   var data = new FormData(document.forms['form1']);
   data.append('function', "modificacioncliente");
   
   data.append('id', obj.id);

   data.append('TipoCliente', obj.TipoCliente);
   
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
        
        alert(xmlhttp.responseText);
        
        document.getElementById("cancelarcliente").disabled = true;
        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});







$("#requestmodificarcliente").click(function(event) {


    
   var data = new FormData();
   data.append('tipodecliente', document.getElementById("selectmodificacliente").value);
   data.append('idpf', document.getElementById("idmodificacliente").value);
   data.append('curppf', document.getElementById("curpmodificacliente").value);
   data.append('idpm', document.getElementById("idmodificaclientepm").value);
   data.append('rfcpm', document.getElementById("curpmodificaclientepm").value);

   document.getElementById("idmodificacliente").value="";
   document.getElementById("curpmodificacliente").value="";
   document.getElementById("idmodificaclientepm").value="";
   document.getElementById("curpmodificaclientepm").value="";
   document.getElementById("idmodificaclientepm").disabled=false;
   document.getElementById("curpmodificaclientepm").disabled=false;
   document.getElementById("idmodificacliente").disabled=false;
   document.getElementById("curpmodificacliente").disabled=false;

   data.append('function', "modificarcliente");
   
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
        
        if(xmlhttp.responseText=='null'){
            alert("¡No Existe el Registro!, Favor de Ingresar Información correcta");
            return;
        }
        if(xmlhttp.responseText=='¡Por favor de Ingresar un Dato!'){
            alert("¡Por favor de Ingresar un Dato!");
            return;
        }


        obj = JSON.parse(xmlhttp.responseText);

        $( "#cerrarmodalmodificacliente" ).click();
        document.getElementById("botonescliente").style.display="none";
        document.getElementById("contenidorequestcliente").style.display="block";
        document.getElementById("idcliente").value=obj.id;
        document.getElementById("cancelarcliente").disabled=true;
        document.getElementById("TipoCliente").value=obj.TipoCliente;
        document.getElementById("TipoCliente").disabled=true;
        cambiacartas();
        document.getElementById("nomsol").value=obj.NombrePF;
        document.getElementById("segnomsol").value=obj.SegNombrePF;
        document.getElementById("apepasol").value=obj.ApPatPF;
        document.getElementById("apemasol").value=obj.ApMatPF;
        document.getElementById("rfc1").value=obj.RFCPF;
        document.getElementById("telsol1").value=obj.TelefonoPF;
        document.getElementById("movsol1").value=obj.MovilPF;
        document.getElementById("mailsol").value=obj.EmailPF;
        document.getElementById("dirsol").value=obj.DireccionPF;
        document.getElementById("dirnumsol").value=obj.NumDireccionPF;
        document.getElementById("colsol").value=obj.ColoniaPF;
        document.getElementById("cpsol").value=obj.CPPF;
        document.getElementById("lugnacsol").value=obj.LugNacimientoPF;
        document.getElementById("edosol").value=obj.EstadoPF;
        document.getElementById("cdsol").value=obj.CiudadPF;
        document.getElementById("textfield5").value=obj.MunicipioPF;
        document.getElementById("curpsol").value=obj.CURPPF;
        document.getElementById("sexsol").value=obj.SexoPF;
        document.getElementById("fechnacsol").value=obj.FechNacimientoPF;
        document.getElementById("edsol").value=obj.Edad;
        document.getElementById("nacsol").value=obj.NacionalidadPF;
        document.getElementById("depensol").value=obj.NumDependientesPF;
        document.getElementById("acdomsol").value=obj.AcreditaDomPF;
        document.getElementById("anosol").value=obj.RecidirCiudadPF;
        document.getElementById("arraisol").value=obj.ArraigoDomPF;
        document.getElementById("vivsol").value=obj.ViviendaPF;
        vivsol();

        document.getElementById("vivsolesp").value=obj.EspViviendaPF;
        document.getElementById("civilsol").value=obj.EstCivilPF;
        civilsol();
        document.getElementById("autosol").value=obj.AutoPropioPF;
        autosol();
        document.getElementById("marcasol").value=obj.EspAuto;
        document.getElementById("inmusol").value=obj.InmueblePF;
        document.getElementById("actempresarial").value=obj.ActividadEmpresarial;
        actempresarial();
        document.getElementById("puestosol").value=obj.PuestoPF;

        document.getElementById("depasol").value=obj.DepartamentoPF;
        document.getElementById("desdesol").value=obj.DesdeEmpPF;
        document.getElementById("compasol").value=obj.CompaniaPF;
        document.getElementById("compatelsol1").value=obj.TelefonoEmpPF;
        document.getElementById("compatelsolext").value=obj.ExtensionEmpPF;
        document.getElementById("giroprof").value=obj.GiroPF;
        document.getElementById("noempleados").value=obj.NumEmpleadosPF;

        document.getElementById("domneg").value=obj.DomicilioNegPF;
        document.getElementById("nomref1").value=obj.RefPerNom1PF;
        document.getElementById("parenref1").value=obj.RefPerParentesco1PF;
        document.getElementById("telref11").value=obj.RefPerTelefono1PF;
        document.getElementById("nomref2").value=obj.RefPerNom2PF;
        document.getElementById("parenref2").value=obj.RefPerParentesco2PF;
        document.getElementById("telref12").value=obj.RefPerTelefono2PF;

        document.getElementById("refbanc").value=obj.Banco1;
        document.getElementById("numcuebanc").value=obj.CuentaBanc1;
        document.getElementById("sucbanc1").value=obj.SucursalBanc1;
        document.getElementById("aperbanc1d").value=obj.FechaApertura1;
        document.getElementById("refbanc2").value=obj.Banco2;
        document.getElementById("numcuebanc2").value=obj.CuentaBanc2;
        document.getElementById("sucbanc2").value=obj.SucursalBanc2;

        document.getElementById("aperbanc2d").value=obj.FechaApertura2;
        document.getElementById("cargdir").value=obj.CarDirBanco;
        document.getElementById("nocuentcd").value=obj.CLABE;
        document.getElementById("refcomemp1").value=obj.RefComEmp1;
        document.getElementById("telrefcom11").value=obj.RefComTel1;
        document.getElementById("antirefcom1").value=obj.RefComAnt1;
        document.getElementById("refcomemp2").value=obj.RefComEmp2;

        document.getElementById("telrefcom22").value=obj.RefComTel1;
        document.getElementById("antirefcom2").value=obj.RefComAnt1;
        document.getElementById("conyunom").value=obj.ConyugeNom;
        document.getElementById("conyuape1").value=obj.ConyugeApPat;
        document.getElementById("conyuape2").value=obj.ConyugeApMat;
        document.getElementById("compaconyu").value=obj.ConyugeCompania;
        document.getElementById("puestconyu").value=obj.ConyugePuesto;

        document.getElementById("benesol3").value=obj.BeneficiarioNom;
        document.getElementById("benesol1").value=obj.BeneficiarioApPat;
        document.getElementById("benesol2").value=obj.BeneficiarioApMat;
        document.getElementById("textfield48").value=obj.BeneficiarioDom;
        document.getElementById("textfield49").value=obj.BeneficiarioCol;
        document.getElementById("textfield50").value=obj.BeneficiarioCP;
        document.getElementById("textfield51").value=obj.BeneficiarioPais;

        document.getElementById("textfield52").value=obj.BeneficiarioTel;
        document.getElementById("textfield53").value=obj.BeneficiarioCURP;
        document.getElementById("textfield54").value=obj.BeneficiarioRFC;
        document.getElementById("textfield55").value=obj.BeneficiarioParent;
        document.getElementById("textfield56").value=obj.BeneficiarioPorciento;
        document.getElementById("textfield57").value=obj.BeneficiarioFechNac;
        document.getElementById("textfield58").value=obj.BeneficiarioMun;

        document.getElementById("textfield59").value=obj.BeneficiarioEstado;
        document.getElementById("textfield60").value=obj.BeneficiarioEstCivil;
        document.getElementById("textfield61").value=obj.BeneficiarioSocConyugal;
        document.getElementById("textfield62").value=obj.BeneficiarioOcupacion;
        document.getElementById("nomrazsoc2").value=obj.RazonSocial;
        document.getElementById("telsol2").value=obj.TelPM;
        document.getElementById("rfcsol1").value=obj.RFCPM;

        document.getElementById("dirsolpm").value=obj.DireccionPM;
        document.getElementById("dirnumsolpm").value=obj.NumDireccionPM;
        document.getElementById("mailsol2").value=obj.EmailPM;
        document.getElementById("colsolpm").value=obj.ColoniaPM;
        document.getElementById("cdsolpm").value=obj.CiudadPM;
        document.getElementById("edosolpm").value=obj.EstadoPM;
        document.getElementById("cpsolpm").value=obj.CPPM;

        document.getElementById("actprinc").value=obj.ActPrinPM;
        document.getElementById("cantperson").value=obj.CantPersonalPM;
        document.getElementById("inicoper1").value=obj.InOperacionesPM;
        document.getElementById("inicoper13").value=obj.ConstEmpresaPM;
        document.getElementById("antemp").value=obj.AntiguedadPM;
        document.getElementById("apodsusc").value=obj.ApoderadoPM;
        document.getElementById("nomconemp").value=obj.ContEmpNombre;

        document.getElementById("segnomconemp").value=obj.ContEmpSegNombre;
        document.getElementById("apepaconemp").value=obj.ContEmpApPat;
        document.getElementById("apemaconemp").value=obj.ContEmpApMat;
        document.getElementById("datobdir22").value=obj.ContEmpDireccion;
        document.getElementById("datobcol23").value=obj.ContEmpColonia;
        document.getElementById("colsol22").value=obj.ContEmpCiudad;
        document.getElementById("cdsol22").value=obj.ContEmpEstado;

        document.getElementById("lugnacsol22").value=obj.ContEmpCP;
        document.getElementById("rfcconemp1").value=obj.ContEmpRFC;
        document.getElementById("telconemp1").value=obj.ContEmpTel;
        document.getElementById("mailconemp").value=obj.ContEmpEmail;
        document.getElementById("puesconemp").value=obj.ContEmpPuesto;
        document.getElementById("accionista1").value=obj.Acc1Nombre;
        document.getElementById("rfcaccion1").value=obj.Acc1RFC;

        document.getElementById("porcent1").value=obj.Acc1Porcentaje;
        document.getElementById("accionista2").value=obj.Acc2Nombre;
        document.getElementById("rfcaccion2").value=obj.Acc2RFC;
        document.getElementById("porcent2").value=obj.Acc2Porcentaje;
        document.getElementById("accionista3").value=obj.Acc3Nombre;
        document.getElementById("rfcaccion3").value=obj.Acc3RFC;
        document.getElementById("porcent3").value=obj.Acc3Porcentaje;

        document.getElementById("accionista4").value=obj.Acc4Nombre;
        document.getElementById("rfcaccion4").value=obj.Acc4RFC;
        document.getElementById("porcent4").value=obj.Acc4Porcentaje;
        document.getElementById("accpermor1").value=obj.Acc5Nombre;
        document.getElementById("rfcaccpermor1").value=obj.Acc5RFC;
        document.getElementById("permoracc1").value=obj.Acc5Porcentaje;
        document.getElementById("accpermor2").value=obj.Acc6Nombre;
        document.getElementById("rfcaccpermor2").value=obj.Acc6RFC;
        document.getElementById("permoracc2").value=obj.Acc6Porcentaje;
        document.getElementById("fecharegistro").value=obj.FechaRegistro;

        


         document.getElementById("botonmodcliente").style.display="block";


      
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});

$( "#curpmodificaclientepm" ).change(function() {
    document.getElementById("idmodificaclientepm").disabled=false;
    document.getElementById("curpmodificaclientepm").disabled=false;
  if(document.getElementById("curpmodificaclientepm").value!=""){
    document.getElementById("idmodificaclientepm").disabled=true;
    document.getElementById("curpmodificaclientepm").disabled=false;
  }
  
});


$( "#idmodificaclientepm" ).change(function() {
    document.getElementById("idmodificaclientepm").disabled=false;
    document.getElementById("curpmodificaclientepm").disabled=false;
  if(document.getElementById("idmodificaclientepm").value!=""){
    document.getElementById("idmodificaclientepm").disabled=false;
    document.getElementById("curpmodificaclientepm").disabled=true;
  }
  
});




$( "#curpmodificacliente" ).change(function() {
    document.getElementById("idmodificacliente").disabled=false;
    document.getElementById("curpmodificacliente").disabled=false;
  if(document.getElementById("curpmodificacliente").value!=""){
    document.getElementById("idmodificacliente").disabled=true;
    document.getElementById("curpmodificacliente").disabled=false;
  }
  
});


$( "#idmodificacliente" ).change(function() {
    document.getElementById("idmodificacliente").disabled=false;
    document.getElementById("curpmodificacliente").disabled=false;
  if(document.getElementById("idmodificacliente").value!=""){
    document.getElementById("idmodificacliente").disabled=false;
    document.getElementById("curpmodificacliente").disabled=true;
  }
  
});



$( "#selectmodificacliente" ).change(function() {
    document.getElementById("divmodificacliente1").style.display='none';
    document.getElementById("divmodificacliente2").style.display='none';
  if(document.getElementById("selectmodificacliente").value=="Persona Fisica"){
    document.getElementById("divmodificacliente1").style.display='block';
    document.getElementById("divmodificacliente2").style.display='none';
  }
  if(document.getElementById("selectmodificacliente").value=="Persona Moral"){
    document.getElementById("divmodificacliente1").style.display='none';
    document.getElementById("divmodificacliente2").style.display='block';
  }
});



        
        
 

$("#nuevocliente").click(function(event) {
    
   var data = new FormData();
   data.append('function', "nuevocliente");
   
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
        
        obj = JSON.parse(xmlhttp.responseText);
        document.getElementById("botonescliente").style.display="none";
        document.getElementById("contenidorequestcliente").style.display="block";
        document.getElementById("guardarcliente").style.display="block";
        document.getElementById("idcliente").value=obj[0];
        
      
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});

$("#guardarcliente").click(function(event) {



var validacion=false;

$('form#form1').find('input').each(function(){ 

        if($( "#"+this.id).hasClass( "is-invalid-input" )){
            console.log(this.id);
            validacion=true;
            return false;
        }


         
        });


    if(validacion){
         console.log("Hay errores");
         return validacion;
    }






    
   var data = new FormData(document.forms['form1']);
   data.append('function', "guardacliente");
   
   data.append('id', obj[0]);
   
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
        
        alert(xmlhttp.responseText);
        
        document.getElementById("cancelarcliente").disabled = true;
        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});


$("#cancelarcliente").click(function(event) {
    
   var data = new FormData();
   data.append('function', "cancelarcliente");
   
   
   
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
        
        alert(xmlhttp.responseText);
        document.getElementById("botonescliente").style.display="block";
        document.getElementById("contenidorequestcliente").style.display="none";
        document.getElementById("guardarcliente").style.display="none";
        
      }
  }
xmlhttp.open("POST","clientes.php",true);
xmlhttp.send(data);
});






function cambiacartas(){
	if(document.getElementById('TipoCliente').value==""){
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='none';
		document.getElementById('tabpanel7c').style.display='none';
		document.getElementById('tabpanel2c').style.display='none';
	}else if(document.getElementById('TipoCliente').value=="Persona Fisica"){
		document.getElementById("pfa").style.display = "block";
		document.getElementById('tabpanel2c').style.display='block';
		document.getElementById('pm').style.display='none';
		document.getElementById('tabpanel7c').style.display='none';
	}else if(document.getElementById('TipoCliente').value=="Persona Moral"){
		document.getElementById('tabpanel2c').style.display='none';
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='block';
		document.getElementById('tabpanel7c').style.display='block';
	}
	


}

$( "#TipoCliente" ).change(function() {
    if(document.getElementById('TipoCliente').value==""){
        document.getElementById('pfa').style.display='none';
        document.getElementById('pm').style.display='none';
        document.getElementById('tabpanel7c').style.display='none';
        document.getElementById('tabpanel2c').style.display='none';
    }else if(document.getElementById('TipoCliente').value=="Persona Fisica"){
        document.getElementById("pfa").style.display = "block";
        document.getElementById('tabpanel2c').style.display='block';
        document.getElementById('pm').style.display='none';
        document.getElementById('tabpanel7c').style.display='none';
    }else if(document.getElementById('TipoCliente').value=="Persona Moral"){
        document.getElementById('tabpanel2c').style.display='none';
        document.getElementById('pfa').style.display='none';
        document.getElementById('pm').style.display='block';
        document.getElementById('tabpanel7c').style.display='block';
    }
    
  
});



$( "#civilsol" ).change(function() {
    if(document.getElementById('civilsol').value==""){
        document.getElementById('panel6c-label').style.display='none';
    }else if(document.getElementById('civilsol').value=="Casado Bienes Mancomunados" || document.getElementById('civilsol').value=="Casado Bienes Separados"){
        document.getElementById('panel6c-label').style.display='block';
    }else {
        document.getElementById('panel6c-label').style.display='none';
    }
    
  
});

function civilsol(){
    if(document.getElementById('civilsol').value==""){
        document.getElementById('panel6c-label').style.display='none';
    }else if(document.getElementById('civilsol').value=="Casado Bienes Mancomunados" || document.getElementById('civilsol').value=="Casado Bienes Separados"){
        document.getElementById('panel6c-label').style.display='block';
    }else {
        document.getElementById('panel6c-label').style.display='none';
    }
}


$( "#actempresarial" ).change(function() {
    if(document.getElementById('actempresarial').value==""){
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
    }else if(document.getElementById('actempresarial').value=="Si"){
        document.getElementById('divgiroprof').style.display='block';
        document.getElementById('divnoempleados').style.display='block';
        document.getElementById('divdomneg').style.display='block';
        document.getElementById('panel5c-label').style.display='block';
    }else {
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
    }
    
  
});

function actempresarial(){
    if(document.getElementById('actempresarial').value==""){
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
    }else if(document.getElementById('actempresarial').value=="Si"){
        document.getElementById('divgiroprof').style.display='block';
        document.getElementById('divnoempleados').style.display='block';
        document.getElementById('divdomneg').style.display='block';
        document.getElementById('panel5c-label').style.display='block';
    }else {
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
    }
    
}



$( "#autosol" ).change(function() {
    if(document.getElementById('autosol').value==""){
        document.getElementById('marcasol').style.display='none';
    }else if(document.getElementById('autosol').value=="Si"){
        document.getElementById('marcasol').style.display='block';
    }else {
        document.getElementById('marcasol').style.display='none';
    }
    
  
});

function autosol(){
    if(document.getElementById('autosol').value==""){
        document.getElementById('marcasol').style.display='none';
    }else if(document.getElementById('autosol').value=="Si"){
        document.getElementById('marcasol').style.display='block';
    }else {
        document.getElementById('marcasol').style.display='none';
    }
    
}

$( "#vivsol" ).change(function() {
    if(document.getElementById('vivsol').value==""){
        document.getElementById('vivsolesp').style.display='none';
    }else if(document.getElementById('vivsol').value=="Otros especificar"){
        document.getElementById('vivsolesp').style.display='block';
    }else {
        document.getElementById('vivsolesp').style.display='none';
    }
    
  
});

function vivsol(){
    if(document.getElementById('vivsol').value==""){
        document.getElementById('vivsolesp').style.display='none';
    }else if(document.getElementById('vivsol').value=="Otros especificar"){
        document.getElementById('vivsolesp').style.display='block';
    }else {
        document.getElementById('vivsolesp').style.display='none';
    }
}



/**
 * Funcion que devuelve true o false dependiendo de si la fecha es correcta.
 * Tiene que recibir el dia, mes y año
 */
function isValidDate(day,month,year)
{
    var dteDate;
 
    // En javascript, el mes empieza en la posicion 0 y termina en la 11 
    //   siendo 0 el mes de enero
    // Por esta razon, tenemos que restar 1 al mes
    month=month-1;
    // Establecemos un objeto Data con los valore recibidos
    // Los parametros son: año, mes, dia, hora, minuto y segundos
    // getDate(); devuelve el dia como un entero entre 1 y 31
    // getDay(); devuelve un num del 0 al 6 indicando siel dia es lunes,
    //   martes, miercoles ...
    // getHours(); Devuelve la hora
    // getMinutes(); Devuelve los minutos
    // getMonth(); devuelve el mes como un numero de 0 a 11
    // getTime(); Devuelve el tiempo transcurrido en milisegundos desde el 1
    //   de enero de 1970 hasta el momento definido en el objeto date
    // setTime(); Establece una fecha pasandole en milisegundos el valor de esta.
    // getYear(); devuelve el año
    // getFullYear(); devuelve el año
    dteDate=new Date(year,month,day);
 
    //Devuelva true o false...
    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}
 
/**
 * Funcion para validar una fecha
 * Tiene que recibir:
 *  La fecha en formato ingles yyyy-mm-dd
 * Devuelve:
 *  true-Fecha correcta
 *  false-Fecha Incorrecta
 */
function validate_fecha(fecha)
{
    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
 
    if(fecha.search(patron)==0)
    {
        var values=fecha.split("-");
        if(isValidDate(values[2],values[1],values[0]))
        {
            return true;
        }
    }
    return false;
}
 
/**
 * Esta función calcula la edad de una persona y los meses
 * La fecha la tiene que tener el formato yyyy-mm-dd que es
 * metodo que por defecto lo devuelve el <input type="date">
 */
function calcularEdad()
{
    var fecha=document.getElementById("fechnacsol").value;
    if(validate_fecha(fecha)==true)
    {
        // Si la fecha es correcta, calculamos la edad
        var values=fecha.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];
 
        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth()+1;
        var ahora_dia = fecha_hoy.getDate();
 
        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes )
        {
            edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }
 
        // calculamos los meses
        var meses=0;
        if(ahora_mes>mes)
            meses=ahora_mes-mes;
        if(ahora_mes<mes)
            meses=12-(mes-ahora_mes);
        if(ahora_mes==mes && dia>ahora_dia)
            meses=11;
 
        // calculamos los dias
        var dias=0;
        if(ahora_dia>dia)
            dias=ahora_dia-dia;
        if(ahora_dia<dia)
        {
            ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
            dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
        }
 
        document.getElementById("edsol").value=edad;
    }else{
        document.getElementById("edsol").value=0;
    }
}





