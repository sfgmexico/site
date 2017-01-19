<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<script type="text/javascript">
$(document).ready(function() {
    $("#form1").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});


	
	

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
       
	   
	   
	   <?php
	   $id=$_GET['id'];
	  include('Conexion2.php');
  $result=mysqli_fetch_array(mysqli_query($cnx,"select * from solicitudes where Id='$id'"));
  
 
  if(!$result){
  ?><h4>No Se Encontro La Solicitud</h4><?php
  }else{
   	?>
			
		
			<h3><span class="label label-default">Datos del solicitante</span></h3>
			<br>
   
      <input style="display:none" id="res" value="<?php echo $id;?>">
             <?php

            $div=['DATOS DEL CONTACTO DE LA EMPRESA','DATOS GENERALES','CONSTITUCION DE LA EMPRESA','REFERENCIAS PERSONALES','REFERENCIAS BANCARIAS','REFERENCIAS COMERCIALES','CARGO DIRECTO','DATOS DEL CÓNYUGE','DATOS DEL OBLIGADO PM','CONSTITUCIÓN DE LA EMPRESA','DATOS GENERALES','ACCIONISTAS O TITULARES DE LAS PARTES SOCIALES','ACCIONISTAS PERSONAS MORALES','DATOS DEL OBLIGADO','DATOS DEL OBLIGADO(2)','AUTORIZACION RELATIVA A LA INVESTIGACION','OTROS DATOS','FORMATO DE IDENTIFOCACION','DOCUMENTACION DE IDENTIFICACION','BENEFICIARIO','PERFIL TRANSACCIONAL','PEPS','GRADO DE RIESGO'];
              for($i=2 ;$i<264;$i++){
                 $datos=mysqli_fetch_array(mysqli_query($cnx,"select * from ins where id='$i'"));
                if($i == 17 && $result[$datos['variable']]!=null)
                  echo "$div[0]";
                if($i == 24 && $result[$datos['variable']]!=null)
                  echo "$div[1]";
                if($i == 41 && $result[$datos['variable']]!=null)
                  echo "$div[2]";
                if($i == 55 && $result[$datos['variable']]!=null)
                  echo "$div[3]";
                if($i == 61 && $result[$datos['variable']]!=null)
                  echo "$div[4]";
                if($i == 68 && $result[$datos['variable']]!=null)
                  echo "$div[5]";
                if($i == 73 && $result[$datos['variable']]!=null)
                  echo "$div[6]";
                if($i == 77 && $result[$datos['variable']]!=null)
                  echo "$div[7]";
                if($i == 79 && $result[$datos['variable']]!=null)
                  echo "$div[8]";
                if($i == 88 && $result[$datos['variable']]!=null)
                  echo "$div[9]";
                if($i == 90 && $result[$datos['variable']]!=null)
                  echo "$div[10]";
                if($i == 93 && $result[$datos['variable']]!=null)
                  echo "$div[11]";
                if($i == 105 && $result[$datos['variable']]!=null)
                  echo "$div[12]";
                if($i == 113 && $result[$datos['variable']]!=null)
                  echo "$div[13]";
                if($i == 135 && $result[$datos['variable']]!=null)
                  echo "$div[14]";
                if($i == 155 && $result[$datos['variable']]!=null)
                  echo "$div[15]";
                if($i == 173 && $result[$datos['variable']]!=null)
                  echo "$div[16]";
                if($i == 181 && $result[$datos['variable']]!=null)
                  echo "$div[17]";
                 if($i == 186 && $result[$datos['variable']]!=null)
                  echo "$div[18]";
                 if($i == 198 && $result[$datos['variable']]!=null)
                  echo "$div[19]";
                 if($i == 214 && $result[$datos['variable']]!=null)
                  echo "$div[20]";
                  if($i == 243&& $result[$datos['variable']]!=null)
                  echo "$div[21]"; 
                if($i == 247 && $result[$datos['variable']]!=null)
                  echo "$div[22]";
                
                
                 if($result[$datos['variable']]==null || $result[$datos['variable']]== "  " || $result[$datos['variable']]== "0000-00-00" || $datos['label']=="B"||$datos['label']=="Tipo de solicitud") {

                  echo " ";
                 }
              else{
                
             
                ?>
             <table  width="100%" border="0">
              <tr>
                <td  class="bg-info" width="26%"><?php echo $datos['label'];?></td>
                <td  width="74%"><input class="<?php if($result[$datos['variable']]=='Bajo'){echo 'bg-success';}else if ($result[$datos['variable']]=='Medio') {echo 'bg-info';}else if ($result[$datos['variable']]=='Alto') {echo 'bg-danger';} else{echo 'bg-warning';}?> " readonly name="textfield" type="text" value="<?php echo $result[$datos['variable']];?>" size="100%"></td>
              </tr>

<?php 
            
}  }?>
</table>

<h3>Comentarios</h3>
<input id="comentario" name="comentario"class="form-control"  >
<div class="container">
			<p>&nbsp;</p>
			<p>
			  <input name="cancelar" class="btn btn-default" type="submit" id="cancelar" href="solicitudesPendientes.php" value="Atras">
			  <input name="rechazada"  class="btn btn-danger" type="button" id="rechazada" value="Rechazar">
			  <input name="aceptada" class="btn btn-primary" type="button" id="aceptada" data-toggle="modal" data-target="#exampleModal" value="Aceptar">
			</p>

 
			<?php
 		  }
		 
		// if(isset($_POST['cancelar'])){?>
			
		<?php ?>
<script type="text/javascript">
  $("#aceptada").click(function(event) {
 
var sub= "sub3.php?comentario="+document.getElementById("comentario").value+"&id="+ document.getElementById("res").value+"&status=Aceptada" ;
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
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
                $("#htmlext").load('solicitudesPendientes.php');
                                });

    $("#rechazada").click(function(event) {

   if(document.getElementById('comentario').value==""){
 alert("SE REQUIERE MOTIVO DE RECHAZO EN COMENTARIOS");
 return false;
    }
 var sub= "sub3.php?comentario="+document.getElementById("comentario").value+"&id="+ document.getElementById("res").value+"&status=Rechazada" ;
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
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);

               $("#htmlext").load('solicitudesPendientes.php');
                                });

</script>
	
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
</body>
</html>
