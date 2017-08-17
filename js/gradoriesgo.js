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
        if(xmlhttp.responseText=="Error solicitud activa"){
          alert("¡¡Error -- El usuario tiene una solicitud activa, favor de verificar!!");
          return false;
        }
        $( "#cerrarmodalnuevasolicitud" ).click();
        alert(xmlhttp.responseText);
        obj2 = JSON.parse(xmlhttp.responseText);
        document.getElementById("botonessolicitud").style.display="none";
        document.getElementById("contenidorequestsolicitud").style.display="block";
        document.getElementById("guardarsolicitud").style.display="block";
        document.getElementById("idcliente").value=obj2[0];
        obtendatoscliente(fun);
       
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);
  
}