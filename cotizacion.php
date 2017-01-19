<?php
include("Conexion2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cotización</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=2.0">


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
<body onLoad="inicio()" >
<!-- header -->

<header>

</header>

<!-- content -->
<section>

	
	  <div class="container_2">
	    <p>Tipo de Crédito:
	    <select name="seleccion" size="1" id="seleccion" onChange="capturar()">
	      <option value="---" onClick="capturar()">---</option>
		  <?php
		  $result=mysqli_query($cnx,"select * from tiposcreditos");
		  while($row=mysqli_fetch_array($result)){?>
		  	<option value="<?php echo $row['tasa'];?>" onClick="capturar()"><?php echo $row['descripcion'];?></option>
		 <?php }
		  ?>
        </select></p>
		
		
		<div id="contenido" style="display:none">
<div class="row">
  <div class="col-sm-6">
    <div class="card card-outline-success">
      <div class="card-block">
        <h5 class="card-title">Precio: (Costo del vehículo a adquirir)</h5>
        <p class="card-text"><input size="12" style="border-width: 2px; border-style: solid; font-size:24pt; color: #009900; letter-spacing : 3px;" onFocus="this.select()" name="price" type="text" value="$0"
data-previousvalue="0" id="price" data-val-min="0" data-val-max="1000000" data-val-regex="^[0-9]*$" onKeyUp="if(event.keyCode == 13) clicked_text1()" onkeydown=
"if(event.keyCode == 9 || event.keyCode == 13) clicked_text1()" /></p>
        <a><input name="valor" type="range" id="valor" value="0" min="0" max="1000000" step="1" onClick="clicked_valor()" onChange="clicked_valor()" /></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card-outline-success">
      <div class="card-block">
        <h5 class="card-title">Enganche: (Aportación inicial)</h5>
        <p class="card-text"><input size="12" style="border-width: 2px; border-style: solid; font-size:24pt; color: #009900; letter-spacing : 3px;" onFocus="this.select()" name="price2" type="text" value="$0"
data-previousvalue="0" id="price2" data-val-min="0" data-val-max="1000000" data-val-regex="^[0-9]*$" onKeyUp="if(event.keyCode == 13) clicked_text2()" onkeydown=
"if(event.keyCode == 9 || event.keyCode == 13) clicked_text2()" /></p>
        <a><input name="valor2" type="range" id="valor2" value="0" min="0" max="0" step="1" onClick="clicked_valor2()" onChange="clicked_valor2()" /></a>
      </div>
    </div>
  </div>
</div>

<br>
<div class="row">
  <div class="col-sm-8">
    <div class="card card-outline-primary">
      <div class="card-block">

<h4 >Selecciona el plazo de tu preferencia</h4>
<br />
<table class="table table-striped" width="100%" border="0">
<tr>
<td width="25%">
<div align="center"><input class="btn btn-default"  type="submit" name="Submit" value=" 6 meses" onClick="CalcularPago6()" /></div>
</td>
<td width="25%">
<div align="center">
<div id="12meses"></div>
</div>
</td>
<td width="25%">
<div align="center"><input class="btn btn-default" type="submit" name="Submit4" value="24 meses" onClick="CalcularPago24()" />
</div>
</td>
<td width="25%">
<div align="center">
<div id="36meses"></div>
</div>
</td>
</tr>
<tr>
<td width="25%">
<div align="center"><input class="btn btn-default" type="submit" name="Submit2" value="12 meses" onClick="CalcularPago12()" /></div>
</td>
<td width="25%">
<div align="center">
<div id="18meses"></div>
</div>
</td>
<td width="25%">
<div align="center"><input class="btn btn-default" type="submit" name="Submit5" value="36 meses" onClick="CalcularPago36()" />
</div>
</td>
<td width="25%">
<div align="center">
<div id="48meses"></div>
</div>
</td>
</tr>
<tr>
<td width="25%">
<div align="center"><input class="btn btn-default" type="submit" name="Submit3" value="18 meses" onClick="CalcularPago18()" />
</div>
</td>
<td width="25%">
<div align="center">
<div id="24meses"></div>
</div>
</td>
<td width="25%">
<div align="center"><input class="btn btn-default" type="submit" name="Submit6" value="48 meses" onClick="CalcularPago48()" />
</div>
</td>
<td width="25%">
<div align="center">
<div id="60meses"></div>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>

<div class="card   card-inverse card-primary mb-3 " style="width: 20rem;">
  <div class="card-block">
     <blockquote class="card-blockquote">
    <h3 class="card-title">Monto a Financiar</h3>
    <p class="card-text"> <div style="font-size:24px" id="monto" >$0</div></p>
     <h3 class="card-title">Pagos</h3>
    <p class="card-text"> <div style="font-size:24px" id="pagos" >$0</div></p>
    <a><h3 class="card-title">CAT<small class="delta-indicator delta-positive" id="CATp" >%</small></h3>
          
                   <cite title="Source Title">Para fines informativos y de comparación exclucivamente</cite></a>
  </blockquote>
  </div>
</div>
</div>
</div>

</div>




  </td>
      

</div>

<br />
<br />
<div id="pepe" class="container"></div>

<br />

	</div>
	
</div>	
   
</section>
<!-- footer -->
<footer>
	<div class="container_24">

		<div class="wrapper">

			
		</div>
	</div>
</footer>  
</body>
<script type="text/javascript">
//<![CDATA[
seleccion="";

function inicio(){
            document.getElementById("contenido").style.display='none';
      }
      
      function capturar()
    {
    
        if(document.getElementById("seleccion").value=="---"){
            alert("¡¡Selecciona un tipo de crédito!!");
            document.getElementById("contenido").style.display='none';
        }else{
            document.getElementById("contenido").style.display = 'block';
            document.getElementById("12meses").innerHTML = "$0";
            document.getElementById("18meses").innerHTML = "$0";
            document.getElementById("24meses").innerHTML = "$0";
            document.getElementById("36meses").innerHTML = "$0";
            document.getElementById("48meses").innerHTML = "$0";
            document.getElementById("60meses").innerHTML = "$0";
            document.getElementById("monto").innerHTML = "$0";
            document.getElementById("pagos").innerHTML = "$0";
            document.getElementById("pepe").innerHTML = "";
            
        }  
    }  
    



function clicked_valor(){
        var sutring="";
        var cont=0;
        var valor=document.getElementById("valor").value;

        document.getElementById("valor2").max = valor;
        for(var i=valor.length-1;i>=0;i--){
                
                if (valor.charAt(i)==".") {cont=-1;}
                if(cont==3){
                sutring+=",";
                cont=0;
                }
                sutring+=valor.charAt(i);
                
                cont++;
        }
        valor="";
        for(var i=sutring.length;i>=0;i--){
                valor+=sutring.charAt(i);
        }
        
        document.getElementById("price").value="$"+valor;
        clicked_valor2();
        
        
}

function clicked_valor2(){
        var sustring="";
        var cont=0;
        var valor2=document.getElementById("valor2").value;
        for(var i=valor2.length-1;i>=0;i--){
                
                if (valor2.charAt(i)==".") {cont=-1;}
                if(cont==3){
                sustring+=",";
                cont=0;
                }
                sustring+=valor2.charAt(i);
                
                cont++;
        }
        valor2="";
        for(var i=sustring.length;i>=0;i--){
                valor2+=sustring.charAt(i);
        }
        document.getElementById("price2").value="$"+valor2;
        
}

function clicked_text1(){
        var sutring="";
        var cont=0;
        var valor=document.getElementById("price").value;
        
        valor=valor.replace("$", "");
        valor=valor.replace(",", "");
         if (isNaN(valor)) {
            alert(valor);
            document.getElementById("price").value="$";
            return false;
         }
        if(valor>1000000){
                document.getElementById("valor").value=1000000;
                document.getElementById("valor2").max = 1000000;
                document.getElementById("price").value="$1,000,000";
        }else{
                document.getElementById("valor").value=valor;
                document.getElementById("valor2").max = valor;
        for(var i=valor.length-1;i>=0;i--){
                
             if (valor.charAt(i)==".") {cont=-1;}   
                if(cont==3){
                sutring+=",";
                cont=0;
                }
                sutring+=valor.charAt(i);
                
                cont++;
        }
        valor="";
        for(var i=sutring.length;i>=0;i--){
                valor+=sutring.charAt(i);
        }
        
        document.getElementById("price").value="$"+valor;
        clicked_valor2();
        
        }
        
        
}


function clicked_text2(){

        var sutring="";
        var cont=0;
        var valor2=document.getElementById("price2").value;
       
        valor2=valor2.replace("$", "");
        valor2=valor2.replace(",", "");
         if (isNaN(valor2)) {
            alert("no es numero");
            document.getElementById("price2").value="$";
            return false;
         }
        if(valor2>parseInt(document.getElementById("valor").value)){
                document.getElementById("valor2").value=valor2;
                document.getElementById("price2").value=document.getElementById("price").value;
        }else{
                        document.getElementById("valor2").value=valor2;
        
        for(var i=valor2.length-1;i>=0;i--){
                alert (cont);
                if (valor2.charAt(i)==".") {cont=-1;}
                if(cont==3){

                sutring+=",";
                cont=0;
                }
                sutring+=valor2.charAt(i);
                
                cont++;
        }
        valor2="";
        for(var i=sutring.length;i>=0;i--){
                valor2+=sutring.charAt(i);
        }
        
        document.getElementById("price2").value="$"+valor2;
        
        
        
        }
        
}


function pagototal(tiempo){
var montofin=document.getElementById("valor").value-document.getElementById("valor2").value
var tasa=document.getElementById("seleccion").value;

intRate=(tasa/100)/12;
months=tiempo;
cuota=Math.floor((montofin*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
falta=montofin; 
interestotal=0;
tasa=tasa/100;
for(a=1;a<=months;a++){
capital=cuota-(falta*(tasa/12));
interes=falta*(tasa/12);
falta=falta-capital;
interestotal+=interes;

}
ivaintereses=(interestotal*16)/100;
ivaint=ivaintereses/months;
var pagtotal=0;
pagtotal=cuota+ivaint;
return pagtotal.toFixed(2);
}

function CalcularPago6(){

document.getElementById("monto").innerHTML = document.getElementById("price").value;
document.getElementById("pagos").innerHTML = "$"+pagototal(6);
 
document.getElementById("12meses").innerHTML = "$"+pagototal(6);


document.getElementById("18meses").innerHTML = "$"+pagototal(12);

document.getElementById("24meses").innerHTML = "$"+pagototal(18);

document.getElementById("36meses").innerHTML = "$"+pagototal(24);

document.getElementById("48meses").innerHTML = "$"+pagototal(36);

document.getElementById("60meses").innerHTML = "$"+pagototal(48);
document.getElementById("pepe").style.display = 'none';
seleccion=6;
calculaTabla(seleccion);
}

function CalcularPago12(){


document.getElementById("monto").innerHTML = document.getElementById("price").value;

document.getElementById("12meses").innerHTML = "$"+pagototal(6); 

document.getElementById("18meses").innerHTML = "$"+pagototal(12); 
document.getElementById("pagos").innerHTML = "$"+pagototal(12); 

document.getElementById("24meses").innerHTML = "$"+pagototal(18); 

document.getElementById("36meses").innerHTML = "$"+pagototal(24); 

document.getElementById("48meses").innerHTML = "$"+pagototal(36); 

document.getElementById("60meses").innerHTML = "$"+pagototal(48); 
document.getElementById("pepe").style.display = 'none';
seleccion=12;
calculaTabla(seleccion);
}

function CalcularPago18(){

document.getElementById("monto").innerHTML = document.getElementById("price").value;

document.getElementById("12meses").innerHTML = "$"+pagototal(6); 

document.getElementById("18meses").innerHTML = "$"+pagototal(12); 

document.getElementById("24meses").innerHTML = "$"+pagototal(18); 
document.getElementById("pagos").innerHTML = "$"+pagototal(18); 

document.getElementById("36meses").innerHTML = "$"+pagototal(24); 

document.getElementById("48meses").innerHTML = "$"+pagototal(36); 

document.getElementById("60meses").innerHTML = "$"+pagototal(48); 
document.getElementById("pepe").style.display = 'none';
seleccion=18;
calculaTabla(seleccion);
}

function CalcularPago24(){

document.getElementById("monto").innerHTML = document.getElementById("price").value;

document.getElementById("12meses").innerHTML = "$"+pagototal(6); 

document.getElementById("18meses").innerHTML = "$"+pagototal(12); 

document.getElementById("24meses").innerHTML = "$"+pagototal(18); 

document.getElementById("36meses").innerHTML = "$"+pagototal(24); 
document.getElementById("pagos").innerHTML = "$"+pagototal(24); 

document.getElementById("48meses").innerHTML = "$"+pagototal(36); 

document.getElementById("60meses").innerHTML = "$"+pagototal(48); 
document.getElementById("pepe").style.display = 'none';
seleccion=24;
calculaTabla(seleccion);
}

function CalcularPago36(){


document.getElementById("monto").innerHTML = document.getElementById("price").value;

document.getElementById("12meses").innerHTML = "$"+pagototal(6); 

document.getElementById("18meses").innerHTML = "$"+pagototal(12); 

document.getElementById("24meses").innerHTML = "$"+pagototal(18); 

document.getElementById("36meses").innerHTML = "$"+pagototal(24); 

document.getElementById("48meses").innerHTML = "$"+pagototal(36); 
document.getElementById("pagos").innerHTML = "$"+pagototal(36); 

document.getElementById("60meses").innerHTML = "$"+pagototal(48); 
document.getElementById("pepe").style.display = 'none';
seleccion=36;
calculaTabla(seleccion);
}

function CalcularPago48(){


document.getElementById("monto").innerHTML = document.getElementById("price").value;

document.getElementById("12meses").innerHTML = "$"+pagototal(6); 

document.getElementById("18meses").innerHTML = "$"+pagototal(12); 

document.getElementById("24meses").innerHTML = "$"+pagototal(18); 

document.getElementById("36meses").innerHTML = "$"+pagototal(24); 

document.getElementById("48meses").innerHTML = "$"+pagototal(36); 

document.getElementById("60meses").innerHTML = "$"+pagototal(48); 
document.getElementById("pagos").innerHTML = "$"+pagototal(48); 
document.getElementById("pepe").style.display = 'none';
seleccion=48;
calculaTabla(seleccion);

}


function calculaTabla(meses){ 
document.getElementById("pepe").style.display = 'block';
var montofin=document.getElementById("valor").value-document.getElementById("valor2").value;
var tasa=document.getElementById("seleccion").value;
var eng=document.getElementById("valor2").value;
var monT=document.getElementById("valor").value;

intRate=(tasa/100)/12;
months=meses;
pago=Math.floor((montofin*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;
codigo="<h2>Tabla de amortizacion</h2>"
codigo+="<table class='table table-hover' width='100%' border='0' id='f'>"; 
codigo+="<tr class='table-info'>"; 
codigo+="<td>Balance inicial<\/td>"; 
codigo+="<td>Pago programado<\/td>"; 
codigo+="<td>Capital<\/td>"; 
codigo+="<td>Interés<\/td>"; 
codigo+="<td>Balance final<\/td>"; 
codigo+="<td>Iva de los intereses<\/td>"; 
codigo+="<td>Pago Total Programado<\/td>"; 
codigo+="<\/tr>";

falta=montofin; 
interestotal=0;
tasa=tasa/100;
for(a=1;a<=months;a++){
capital=pago-(falta*(tasa/12));
interes=falta*(tasa/12);
falta=falta-capital;
interestotal+=interes;

}
ivaintereses=(interestotal*16)/100;
ivaint=ivaintereses/months;
var pagtotal=0;
pagtotal=pago+ivaint;
falta=montofin;

for(a=1;a<=months;a++){ 

codigo+="<tr  class='table-warning'>"; 
codigo+="<td>"+falta.toFixed(2);+"<\/td>"; 
codigo+="<td>"+pago+"<\/td>";
capital=pago-(falta*(tasa/12));
codigo+="<td>"+capital.toFixed(2);+"<\/td>";
interes=falta*(tasa/12);
codigo+="<td>"; 
codigo+=interes.toFixed(2);; 
codigo+="<\/td>"; 
falta=falta-capital;
codigo+="<td>"; 
codigo+=falta.toFixed(2); 
codigo+="<\/td>"; 

codigo+="<td>"; 
codigo+=ivaint.toFixed(2); 
codigo+="<\/td>"; 

codigo+="<td>"; 
codigo+=pagtotal.toFixed(2); 
codigo+="<\/td>"; 

codigo+="<\/tr>"; 
} 
codigo+="<\/table>"; 
document.getElementById("pepe").innerHTML =codigo;
var cat = CAT.get(monT, eng, pagtotal, months, 12);
document.getElementById('CATp').innerHTML = cat['formatted'] + "%"; 

} 

function clickedtabla(){
        document.getElementById('tablalink').onclick=function(){
        calculaTabla(seleccion);
        };
}


window.CAT = (function(){
  function getCATValue(total, charge, pay, payments, periods, cat){
    var i = 0;
    var value = charge / Math.pow((1+(cat/100)), 0/periods);
    
    for(i = 1; i <= payments; i++){
      value += pay / Math.pow((1+(cat/100)), i/periods);
    }
    return total - value;
  }
  var CAT = {
    get: function(amount, charge, byPeriod, totalPayments, periodsByYear){
      var cat = 50, cat_min = 0, cat_max = 0, temp_cat;

      var counter = 0, tempVal;
      
      do{
        tempVal = getCATValue(amount, charge, byPeriod, totalPayments, periodsByYear, cat);
        if(tempVal > 0){
          temp_cat = cat;
          cat = (cat+cat_min)/2;
          cat_max = temp_cat;
        }else if(cat_max == 0){
          cat_min = cat;
          cat = cat + 50;
        }else{
          temp_cat = cat;
          cat = (cat+cat_max)/2;
          cat_min=temp_cat;
        }
        counter++;
      }while(counter <= 25);
      
      return {num: cat, formatted: cat.toFixed(2)}
    }
  };
  return CAT;
}());

//]]>
</script>
</html>
