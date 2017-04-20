<?php
$cnx=mysqli_connect("localhost","root","","plan piso")or die(mysql_ERROR().'Error de conexion');
mysqli_query($cnx,"SET NAMES 'utf8'");
#mysqli_select_db("u382973845_psico",$cnx);
#mysqli_select_db($cnx,"u382973845_psico");

//mysql_close($cnx);
if (isset($_REQUEST['auto'])) {
$auto=strtoupper($_REQUEST['auto']);
$chasis=strtoupper($_REQUEST['chasis']);
$tasa=$_REQUEST['tasa'];
$importe=$_REQUEST['importe'];
$fecha=$_REQUEST['from'];
$gracia=$_REQUEST['gracia'];
$int=$_REQUEST['int'];
if($auto == '' && $chasis == '' && $tasa =='' && $importe =='' && $fecha =='' && $gracia == '' && $int == ''){
echo "<script>alert('ingresa todos los datos')</script>";

}
else{mysqli_query($cnx,"insert into ficha(Automovil,No_chasis,Tasa,Importe,Fecha_prestamo,Dias_gracia,Interes)values('$auto','$chasis','$tasa','$importe','$fecha','$gracia','$int');");}
}



?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Financiera| Bienvenido</title>
  <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
<style type="text/css">
.mifecha2 {
   border: 1px solid #ddd;
   padding: 3px;
   text-align: center;
   font-family:verdana, arial;
   font-size: 10pt;
   overflow: hidden;
   width: 100%
}
.mifecha2 .mesano{
   float: left;
   padding: 3px;
   font-weight: bold;
}
.mifecha2 .dia, .mifecha2 .diaactual{
   width: 20px;
   padding: 3px;
   margin-left: 3px;
   background-color: #ddd;
   float: left;
}
.mifecha2 .diaactual{
   background-color: #999;
   font-weight: bold;
}

</style>
<script>
var f=new Date();
var ano = f.getFullYear();
var mes = f.getMonth();
var dia = f.getDate();
var estiloDia;
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var diasMes = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
var diaMaximo = diasMes[mes];
if (mes == 1 && (((ano % 4 == 0) && (ano % 100 != 0)) || (ano % 400 == 0)))
   diaMaximo = 29;
document.write('<div class="mifecha2">');
document.write('<div class="mesano">' + meses[mes] + ' ' + ano + ':</div>');

for (i=1; i<=diaMaximo; i++){
   if(i == dia)
      estiloDia = "diaactual";
   else
      estiloDia = "dia";
   document.write('<div class="' + estiloDia + '">' + i + '</div>');
}   
document.write('</div>');
</script>

<script type="text/javascript">
   $( function() {
  
      $( "#from" ).datepicker({ dateFormat:'yy-mm-dd',changeMonth: true,changeYear: true});
   
  } );

 function restaFechas()
 {
   var f1 = document.getElementById("from").value;
var f2=document.getElementById("to").value;
 var aFecha1 = f1.split('/'); 
 var aFecha2 = f2.split('/'); 
 var fFecha1 = Date.UTC(aFecha1[2],aFecha1[0],aFecha1[1]-1); 
 var fFecha2 = Date.UTC(aFecha2[2],aFecha2[0],aFecha2[1]-1); 
 var dif = fFecha2 - fFecha1;
 var dias = Math.floor(dif / (1000 * 60 * 60 * 24)); 
 return dias;
 //alert (dias);

 }

function tasaR(){

  var tas=document.getElementById("tasa").value;
  var Importe=document.getElementById("importe").value;
  var tasaM=(tas/12)/100;
  var tasaD=(tas/365)/100;
  var intdiario=0;
  intdiario=(Importe*tasaD);
  var a=document.getElementById("auto").value;
    var c=document.getElementById("chasis").value;

  document.getElementById("int").value= intdiario.toFixed(2);
  //alert(intdiario.toFixed(2));
//alert(tasaM);
//alert(tasaD);

}
  </script>
<form name="form" id="form" action=""  method="post" >
  
<br>
Automovil
<input name="auto" id="auto" >
<br>
No. de chasis
<input name="chasis" id="chasis" >
<br>
Tasa anual
<input name="tasa" type="text" id="tasa">
<br>
Importe
<input name="importe" onchange="tasaR()" type="text" id="importe" >
<br>
<label for="from">Fecha de prestamo</label>
<input type="text" id="from" name="from" >
<br>
Dias de gracia
<input name="gracia" >
<br>
<!-- <label for="from">From</label>
<input type="text" id="from" name="from" >
<label for="to">to</label>
<input type="text" id="to" name="to" > -->
Interes diario 
<br>


      <input type="submit"  id="dia" name="dia" value="Guardar"> 
      <br>
      <input name="int" id="int" readonly>
</form>


<table border="2" >
<tr>
  <th>Automovil</th>
   <th>No de chasis</th>
    <th>Tasa</th>
     <th>Importe</th>
      <th>Fecha de prestamo</th>
       <th>Dias de gracia </th>
         <th>Interes diario</th>
          <th>Interes a la fecha</th>


</tr>
<<<<<<< HEAD
<br>
<? 
=======
<?php  
>>>>>>> origin/master
function hbz_day_counter($fecha) {

$today = strtotime(date("Y-m-d")); //Today
$start_ts = strtotime($fecha); //Since...

$years = date('Y')-substr($fecha, 0,4); //Years since...
/*if (($years%4) == 0) {
$extra_days = (((date('Y')-$year)/4)-1);
} else {
$extra_days = (((date('Y')-$year)/4));
}
$extra_days = round($extra_days);
*/
return round(($today - $start_ts)/(60*60*24))+1 ;

}

  $result=mysqli_query($cnx,"select * from ficha");
$sum=0;
while($row=mysqli_fetch_array($result)){
  $inter=$row['Interes']*(hbz_day_counter($row['Fecha_prestamo'])-$row['Dias_gracia']);
  $sum +=$inter;
if( $inter <= 0){ $inter=0; }
 echo 
 " <tr>
    <td>" .$row['Automovil']."</td>
    <td>".$row['No_chasis']."</td>
    <td>".$row['Tasa']."</td>
    <td>".$row['Importe']."</td>
    <td>".$row['Fecha_prestamo']."</td>
    <td>".$row['Dias_gracia']."</td>
    <td>".$row['Interes']."</td>
    <td>".$inter."</td>
  </tr>";

      }
    
      echo "</table>";
echo "    <br>
     <br>
<table>
  <tr>
    <td> Subtotal</td>
        <td>". $sum . "</td>
  </tr>
 <tr>
   <td>IVA </td>
       <td>". $sum * 0.16 . " </td>
 </tr>
  <tr>
    <td> Total </td>
        <td>".  $sum*1.16 ." </td>
  </tr>
</table>";
      
      
     ?>
 


</body>

</html>
