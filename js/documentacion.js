$("#subir").click(function(event) {
    
   var data = new FormData(document.forms['subirdato']);
   data.append('function', "subir");

   

   
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
     
        
      }
  }
xmlhttp.open("POST","upload1.php",true);
xmlhttp.send(data);
});

$("#docu").change(function (event) {
//document.getElementById('docs').style.display="block";
//document.getElementById('botonesdocumentacion').style.display="none";
if(document.getElementById('docu').value==1){

document.getElementById('ident1').style.display="block";

  document.getElementById('nombres1').style.display="none";
}
if (document.getElementById('docu').value==2) {
document.getElementById('ident1').style.display="none";
  document.getElementById('nombres1').style.display="block";
}
if (document.getElementById('docu').value==3) {

document.getElementById('ident1').style.display="block";
  document.getElementById('nombres1').style.display="none";

}
});


function doc(fun){

 var data = new FormData();
   data.append('function', "nuevadocumentacion");
   data.append('cliente', fun);
   
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
        $( "#cerrarmodalnuevasolicitud" ).click();

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

function buscardocs(){

 
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#idnuevasolicitud").val();
                                           select= $("#idnuevadocumentacion").val();   
                                           nom= $("#nombrepf").val();
                                           pa= $("#ApellidoPadoc").val();
                                           ma= $("#ApellidoMadoc").val();                             
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "ANYBODY="+select+"&b="+consulta+"&c="+nom+"&d="+pa+"&e="+ma,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultadonuevasolicitud").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultadonuevasolicitud").empty();
                          $("#resultadonuevasolicitud").append(data);
                                                             
                    }
              });
                                                                                  
}
