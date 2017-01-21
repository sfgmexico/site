$(document).ready(function() {
    $("#form1").keypress(function(e) {
        if (e.which == 13) {
        	$('#aceptar').click();
            return false;
        }
    });
});
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


    														});

						function su(id){
							$("#htmlext").load('validasolicitud.php?id='+id);

						}


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


    														});