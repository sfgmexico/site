<?php




?>


  <style>
.loader {
  color: #000;
  font-size: 15px;
  text-indent: -9999em;
  overflow: hidden;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  margin: 2px;
  position: relative;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load6 1.7s infinite ease, round 1.7s infinite ease;
  animation: load6 1.7s infinite ease, round 1.7s infinite ease;
  }
@-webkit-keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  }
@keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  }
@-webkit-keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  }
@keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  }
  </style>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
      <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="js/js/css/foundation.css">
    <link rel="stylesheet" href="js/js/css/foundation.min.css">
    <link rel="stylesheet" href="js/js/css/app.css">
    <link rel="stylesheet" href="js/js/css/foundation-icons/foundation-icons.css">
     <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
  </head>
  <body>
    

<div class="menu-centered">
  <ul class='tabs' data-tabs id='example-tabs'>
  <li class='tabs-title'><a href='#panel1' id="tab1" aria-selected='true'>Tipo de Créditos</a></li>
  <li class='tabs-title'><a href='#panel2' id="tab2">Usuarios</a></li>
  <li class='tabs-title'><a href='#panel3' id="tab3">Otros</a></li>

</ul>
</div>




   <div class='tabs-content' data-tabs-content='example-tabs'>


<div class="tabs-panel" id="panel1">
    <div id="panel1A"></div>
    <input name="updatecreditos" class="button" type="button" id="updatecreditos"  value="Modificar">
 </div>

<div class="tabs-panel" id="panel2">
    <div id="panel2A"></div>
</div>

<div class="tabs-panel" id="panel3" >
   
</div>
<script>



$("#tab1").click(function(event) {
 

   var data = new FormData();


   data.append('panel', 'panel1');

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
        document.getElementById("panel1A").innerHTML = xmlhttp.responseText;
        
        

        
      }
  }
xmlhttp.open("POST","confdata.php",true);
xmlhttp.send(data);
                
                                });

$("#tab2").click(function(event) {
 

   var data = new FormData();


   data.append('panel', 'panel2');

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
        document.getElementById("panel2A").innerHTML = xmlhttp.responseText;
        
        

        
      }
  }
xmlhttp.open("POST","confdata.php",true);
xmlhttp.send(data);
                
                                });




$("#updatecreditos").click(function(event) {
 

   var data = new FormData();


   data.append('panel', 'updatepanel1');

   data.append('tasa_1', document.getElementById("tasa_1").value);
   data.append('tasa_2', document.getElementById("tasa_2").value);
   data.append('tasa_3', document.getElementById("tasa_3").value);
   data.append('tasa_4', document.getElementById("tasa_4").value);
   data.append('tasa_5', document.getElementById("tasa_5").value);
   data.append('tasa_6', document.getElementById("tasa_6").value);
   data.append('tasa_7', document.getElementById("tasa_7").value);
   data.append('tasa_8', document.getElementById("tasa_8").value);
   data.append('tasa_9', document.getElementById("tasa_9").value);
   data.append('tasa_10', document.getElementById("tasa_10").value);
   data.append('tasa_11', document.getElementById("tasa_11").value);
   data.append('tasa_12', document.getElementById("tasa_12").value);
  
   data.append('comision_1', document.getElementById("comision_1").value);
   data.append('comision_2', document.getElementById("comision_2").value);
   data.append('comision_3', document.getElementById("comision_3").value);
   data.append('comision_4', document.getElementById("comision_4").value);
   data.append('comision_5', document.getElementById("comision_5").value);
   data.append('comision_6', document.getElementById("comision_6").value);
   data.append('comision_7', document.getElementById("comision_7").value);
   data.append('comision_8', document.getElementById("comision_8").value);
   data.append('comision_9', document.getElementById("comision_9").value);
   data.append('comision_10', document.getElementById("comision_10").value);
   data.append('comision_11', document.getElementById("comision_11").value);
   data.append('comision_12', document.getElementById("comision_12").value);






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
xmlhttp.open("POST","confdata.php",true);
xmlhttp.send(data);
                
                                });






</script>

    <script  scr="js/validasolicitud.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    
  </body>
</html>


    