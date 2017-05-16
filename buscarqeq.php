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


 <p align="left">

		
<div class="column small-6">
 <div id="pf" >
	<div class="callout">
 <form action="qeq.php" method="post" >
 	<label>Nombre
 <input type="text" name="nombre" id="nombre">
 	</label>
 <label>
 	Paterno
  <input type="text" name="paterno" id="paterno">
 </label>
 <label>
 	Materno
   <input type="text" name="materno" id="materno">
 </label>
 <label>
 	CURP
    <input type="text" name="curp" id="curp">
 </label>
 <label>
 	RFC
     <input type="text" name="rfc" id="rfc">
 </label>
      <input type="submit" class="primary button" name="buscar"  value="Buscar">
 </form>

</div>
 </div>
</div>
</p>



<p align="left">
	
<div class="column small-6">
  <div id="pm" style="display:none">
  <div class="callout">
  	
  <form action="qeq.php" method="post" >
  <label>
  	Razon social
 <input type="text" name="razonsoc" id="razonsoc">
  </label>
  <label>
  	RFC
     <input type="text" name="rfc1" id="rfc1">
  </label>
      <input type="submit" class="primary button" name="buscar"  value="Buscar">
  </form>
  </div>

 </div>
</div>
</p>




 </body>
 </html>