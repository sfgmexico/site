

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
codigo+="<th>Balance inicial<\/th>"; 
codigo+="<th>Pago programado<\/th>"; 
codigo+="<th>Capital<\/th>"; 
codigo+="<th>Interés<\/th>"; 
codigo+="<th>Balance final<\/th>"; 
codigo+="<th>Iva de los intereses<\/th>"; 
codigo+="<th>Pago Total Programado<\/th>"; 
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

