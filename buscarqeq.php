<?php 






 ?>

 <!DOCTYPE html>
 <html>

 <script type="text/javascript">

 	 function capturar()
    {
	
		

			
			
 if (document.getElementById("pep").value=="1"){
			
			document.getElementById("pf").style.display='block';
			document.getElementById("pm").style.display = 'none';
	

			
			
		}else if(document.getElementById("pep").value=="2"){
			
		document.getElementById("pf").style.display = 'none';
		document.getElementById("pm").style.display='block';
	
}
}
 </script>
 <head>
 	<title>Financiera</title>
 </head>
 <body onLoad="inicio()">
 <select name="pep" id="pep" size="1" onChange="capturar()">
	       <option value="1" >Persona fisica</option>
	       <option value="2">Persona Moral</option>
	    
          </select>


 <div id="pf" >
 <form>
 	
 <input type="text" name="nombre" id="nombre">
  <input type="text" name="paterno" id="paterno">
   <input type="text" name="materno" id="materno">
    <input type="text" name="curp" id="curp">
     <input type="text" name="rfc" id="rfc">
      <input type="submit" name="buscar"  value="Buscar">
 </form>

 </div>


  <div id="pm" style="display:none">
  <form>
 <input type="text" name="razonsoc" id="razonsoc">
     <input type="text" name="rfc1" id="rfc1">
      <input type="submit" name="buscar"  value="Buscar">
  </form>

 </div>




 </body>
 </html>