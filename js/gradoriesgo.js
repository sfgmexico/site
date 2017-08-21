
$("#guardargradriesgo").click(function(event) {
   
   var data = new FormData(document.forms['form3']);
   data.append('function', "guardargradriesgo");
   data.append('registro', obj2[0]);
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        if(xmlhttp.responseText.indexOf("Error") !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        alert(xmlhttp.responseText);
        //obJ = JSON.parse(xmlhttp.responseText);
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
});




function traertipocliente(idsol){
   
   var data = new FormData();
   data.append('function', "tipodeclientepeps");
   data.append('solicitud', idsol);
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        
        //alert(xmlhttp.responseText);
        if(xmlhttp.responseText=="null"){
          alert("¿¿Error -- Tipo de Cliente Inexistente favor de comunicarse con Sistemas!!");
          return false;
        }
        obj3 = JSON.parse(xmlhttp.responseText);
        //alert(obj3.TipoCliente);
        if(obj3.TipoCliente=="Persona Fisica"){
          document.getElementById('spangradoreisgoedan').innerHTML='Edad del cliente';
          document.getElementById('select21').style.display='block';
          document.getElementById('select18').style.display='block';
          document.getElementById('select20').style.display='none';
          document.getElementById('select19').style.display='none';

        }else if(obj3.TipoCliente=="Persona Moral"){
          document.getElementById('spangradoreisgoedan').innerHTML='Años de constitucion';
          document.getElementById('select20').style.display='block';
          document.getElementById('select19').style.display='block';
          document.getElementById('select21').style.display='none';
          document.getElementById('select18').style.display='none';
        }else{
          document.getElementById('spangradoreisgoedan').innerHTML='Error tipo de cliente no detectado';
          document.getElementById('select21').style.display='none';
          document.getElementById('select18').style.display='none';
          document.getElementById('select19').style.display='none';
          document.getElementById('select20').style.display='none';
        }

        
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
}





$("#nuevaconocimiento").click(function(event) {
   
   var data = new FormData();
   data.append('function', "nuevaconocimiento");
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        $("#tablajson3 tbody tr").remove();
        //alert(xmlhttp.responseText);
        obJ = JSON.parse(xmlhttp.responseText);
        
        $.each(obJ, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='obtengradoriesgo(this.id)' class='button' type='button' name='"+solicitud.Id+"' id='"+solicitud.Id+"' value='"+solicitud.Id+"'></td>";

            newRow+="<td>"+solicitud.TipoCredito+"</td>";

            newRow+="<td>"+solicitud.NombrePF+" "+solicitud.SegNombrePF+" "+solicitud.ApPatPF+" "+solicitud.ApMatPF+" "+solicitud.RazonSocial+"</td>";




            newRow+="</tr>";

            
           
            $(newRow).appendTo("#tablajson3 tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
});

function obtengradoriesgo(id){


 var data = new FormData();
   data.append('function', "nuevaregistroconocimiento");
   data.append('solicitud', id);

   
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
        
        $( "#cerrarmodalnuevaconocimiento" ).click();
        //alert(xmlhttp.responseText);
        obj2 = JSON.parse(xmlhttp.responseText);
        document.getElementById('contenidorequestconocimiento').style.display='block';
        document.getElementById('botonesconocimiento').style.display='none';
        //alert(obj2[0]);
        traertipocliente(id);
       
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
  
}