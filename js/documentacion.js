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