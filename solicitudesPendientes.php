<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<script type="text/javascript">


function inicio(){
	  		document.getElementById("contenido1").style.display='none';
			document.getElementById("contenido2").style.display='none';
			document.getElementById("contenido3").style.display='none';
	  }


	  function capturar()
    {
	
		if(document.getElementById("select").value=="---"){
			//alert("¡¡Selecciona un tipo de busqueda!!");
			document.getElementById("contenido1").style.display='none';
			document.getElementById("contenido2").style.display='none';
			document.getElementById("contenido3").style.display='none';
			document.getElementById("porid").style.display='none';
			document.getElementById("porpendientes").style.display='none';
			
			
		}else if (document.getElementById("select").value=="1"){
			document.getElementById("contenido2").style.display='none';
			document.getElementById("contenido1").style.display = 'block';
			document.getElementById("porid").style.display='none';
			document.getElementById("porpendientes").style.display='none';
			document.getElementById("contenido3").style.display = 'none';
			document.getElementById("poraceptados").style.display='none';
			
			
		}else if(document.getElementById("select").value=="2"){
		document.getElementById("contenido1").style.display = 'none';
		document.getElementById("porid").style.display='none';
		document.getElementById("contenido2").style.display = 'block';
		
		document.getElementById("porpendientes").style.display='none';
		document.getElementById("contenido3").style.display = 'none';
		document.getElementById("poraceptados").style.display='none';
		
			
			
		
		}else if(document.getElementById("select").value=="3"){
		document.getElementById("contenido1").style.display = 'none';
		document.getElementById("porid").style.display='none';
		document.getElementById("contenido2").style.display = 'none';
		
		document.getElementById("porpendientes").style.display='none';
		document.getElementById("contenido3").style.display = 'block';
		document.getElementById("poraceptados").style.display='none';
		
		}
	}  
			

</script>

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body onLoad="inicio()"
<!-- header -->
<header>
	<div class="container_24">
	  <div class="grid_24">
		
			
		    
           
	  </div>
		
	</div>
</header>

<!-- content -->
<section>
  <div class="bg" align="center">
    <div class="container_24" align="center">
      <form name="form1" id="form1" action="" method="post">
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
       
	   
	   <h4>Buscador de solicitudes</h4>
	   <p>Buscar por: 
	     <select name="select" id="select" size="1" onChange="capturar()">
	       <option value="---" selected >---</option>
	       <option value="1" >Número de solicitud</option>
	       <option value="2">Solicitudes Pendientes</option>
	       <option value="3" >Solicitudes Aceptadas</option>
          </select>
	   </p>
	   
	   <div id="contenido1" style="display:none">
	     <table width="100%" border="0">
           <tr>
             <td>Ingresa el elemento a buscar: </td>
             <td><input name="textfield" id="textfield"type="text" size="100%"></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
         </table>
	     <p>
	       <input name="aceptar" type="button" id="aceptar" value="Aceptar">
	       <input name="cancelar" type="submit" id="cancelar" value="Cancelar">
	      
	     </p>
	     <p>&nbsp;	   
		 
	      </p>
	   </div>
	   
	   <div id="contenido2" style="display:none">
	   
         <p>
           <input name="pendientes"  type="button" id="pendientes" value="Buscar">
         </p>
        </div>
		
		 <div id="contenido3" style="display:none" >
	   
         <p>
           <input name="aceptados" type="button" id="aceptados" value="Buscar">
            	<input type="text" style="display:none" name="id1" id="id1" >
	   <input type="text" style="display:none" name="id2" id="id2" >
         </p>
        </div>
	   
	   
	   
	   <?php
	   ?><div id="porid">
	<script type="text/javascript">

$("#aceptar").click(function(event) {
var sub = "sub2.php?textfield="+document.getElementById("textfield").value;
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
    	document.getElementById("htmlext").innerHTML=xmlhttp.responseText;
    	}
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);


    														});</script> 
    													</div>

		 <div id="porpendientes">
		
<script type="text/javascript">
$("#pendientes").click(function(event) {

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
    	document.getElementById("htmlext").innerHTML=xmlhttp.responseText;
    	}
  }
xmlhttp.open("POST","sub4.php",true);
xmlhttp.send('');


    														});

</script>

		 </div><?php
		 
		 ?><div id="poraceptados" >
	
      </form>
    </div>
  </div>
</section>
<!-- footer -->
<footer>
	<div class="container_24">
		<div class="wrapper">
			<div class="grid_24"><a href="index.html" class="link"></a> &copy; 2012</div>
		</div>
	</div>
</footer> 
<script type="text/javascript">

$("#aceptados").click(function(event) {

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
    	document.getElementById("htmlext").innerHTML=xmlhttp.responseText;
    	}
  }
xmlhttp.open("POST","sub.php",true);
xmlhttp.send('');


    														});</script> 
<script type="text/javascript">
						function su(id){
							$("#htmlext").load('validasolicitud.php?id='+id);

						}
</script>
</body>
</html>
