<?php
?>

<h1> Prueba Quien es Quien </h1>
<input type="button" id="aceptada" name="aceptada" value="prueba quien es quien" onClick="conecta()">
<input type="button" id="aceptada" name="aceptada" value="prueba quien es quien" onClick="busqueda()">
<script>

function conecta(){
    alert("Entra funcion");
var session="https://qeq.mx/datos/qws/access?var1=credito@vwdgo.com&var2=qeq312";
var busqueda="https://qeq.mx/datos/qws/pepsp?nombre=miguel&paterno=osorio&materno=chong";
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
      alert(xmlhttp.responseXML);
      
      }
  }
xmlhttp.open("GET",session,true);
xmlhttp.send(null);

}

function busqueda(){
    alert("Busqueda");
var session="https://qeq.mx/datos/qws/access?var1=credito@vwdgo.com&var2=qeq312";
var busqueda="https://qeq.mx/datos/qws/pepsp?nombre=miguel&paterno=osorio&materno=chong";
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
      alert(xmlhttp.responseXML);
    }
  }
xmlhttp.open("GET",busqueda,true);
xmlhttp.send(null);
}


$("#aceptada").click(function(event) {
 alert("Entra funcion");
var session="https://qeq.mx/datos/qws/access?var1=credito@vwdgo.com&var2=qeq939";
var busqueda="https://qeq.mx/datos/qws/pepsp?nombre=miguel&paterno=osorio&materno=chong";
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
xmlhttp.open("GET",session,true);
xmlhttp.open("GET",busqueda,true);
xmlhttp.send(null);
               // $("#htmlext").load('solicitudesPendientes.php');
                                });
</script>


