
  <?php
  
     
      $solicitudNo=strtoupper($_GET['textfield']);

      
  include('Conexion2.php');
  $result=mysqli_query($cnx,"select * from solicitudpfa where Folio_Sol='$solicitudNo'");
  $ob=mysqli_fetch_array($result,MYSQL_NUM);
$cliente=$ob[2];
  $gra=mysqli_query($cnx,"select * from gradoriesgo where Folio_Sol='$solicitudNo'");

  $tab=mysqli_query($cnx,"select * from pfa where Folio_cliente='$cliente'");
  
  $tab1=mysqli_query($cnx,"select * from pfna where Folio_cliente='$ob[1]'");

  $tab2=mysqli_query($cnx,"select * from pm where Folio_cliente='$ob[1]'");

  
if (stristr($solicitudNo, 'SA')== TRUE || stristr($solicitudNo, 'SM')== TRUE || stristr($solicitudNo, 'SM')== TRUE) {
  # code...
  if(mysqli_num_rows($tab) == 0){
  echo "<h4>No Se Encontro El Registro</h4>";
  }else{
    $con= array(  " Id  " ,
  " Folio " ,
  " Tipo de Credito " ,
  " Nombre  " ,
  " Segundo nombre  " ,
  " Apellido parteno  " ,
  " Apellido materno  " ,
  " RFC   " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  "   NO. de domicilio",
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Estado  " ,
  "   Municipio ",
  " Codigo Postal " ,
  " CURP  " ,
  " Email " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " Nacionalidad  " ,
  " No. de dependientes " ,
  " Acredita domicilio  " ,
  " Vive en " ,
  " Otro  " ,
  " Propiedad inmueble  " ,
  " Arraigo del domicilio " ,
  " Años de residir " ,
  " Nombre Beneficiario " ,
  " Apellido Paterno  " ,
  " Apellido materno  " ,
  " Estado civil  " ,
  " Auto propio " ,
  " Marca/Tipo  " ,
  " Puesto  " ,
  " Departamento  " ,
  " Desde el año  " ,
  " Compañía  " ,
  " Telefono  " ,
  " Extencion ",
  "  Domicilio laboral" );

  $sol = array( 
    "ID ",
    " Folio solicitud " ,
  " Folio Cliente " ,
  "Tipo Credito",
  " Nombre Referencia " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Nombre Referencia 2 " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Banco " ,
  " No Tarjeta  " ,
  " Bannco cargo directo  " ,
  " No Tarjeta  " ,
  " Nombre conyuge  " ,
  " apellido paterno  " ,
  " apellido materno  " ,
  " Compañía  " ,
  " Puesto  " ,
  " Nombre obligado " ,
  " apellido paterno  " ,
  " apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo Postal " ,
  " Email " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " CURP  " ,
  " Nombre obligado 2 " ,
  " apellido paterno  " ,
  " apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo Postal " ,
  " Email " ,
  " sexo  " ,
  " Fecha nacimiento  " ,
  " edad  " ,
  " CURP  " ,
  " Fecha " ,
  " Clave consecionario " ,
  " Nombre consecionario  " ,
  " Nombre vendedor   " ,
  " Nombre gerente grl. ",
  "Comentarios",
  "Estatus"
   );
$gr = array(  " Folio solicitud " ,
  " Folio Cliente " ,
  " Actividad objeto social " ,
  " Antigüedad Cliente  " ,
  " Naturaleza Operaciones  " ,
  " Numero de Beneficiarios " ,
  " Numero de Terceros Relacionados " ,
  " PEPs Relacionados " ,
  " Alerta Reputacional " ,
  " Volumen Esperado  " ,
  " Frecuencia Esperada " ,
  " Instrumento Monetario " ,
  " Canales Medios Utilizados " ,
  " Pais Estado Oficial " ,
  " Pais Estado Residencia  " ,
  " Pais Estado Operacion " ,
  " Origen Recursos " ,
  " Destino Recursos  " ,
  " Pais Estado Residencia Terceros " ,
  " Grado de Riesgo " ,
  " Numero Serie FIEL " ,
  " Sueldo Solicitante  " ,
  " Actividad Economica Adicional " ,
  " Ingreso Adicional Mensual Aproximado  " ,
  " INE Solicitante " ,
  " Adjunta INE Solicitante " ,
  " Pasaporte o Cedula Profecional Solicitante  " ,
  " Adjunta Pasaporte o Cedula Profecional Solicitante  " ,
  " Cartilla Militar  " ,
  " Adjunta Cartilla Militar  " ,
  " Licencia Conducir   " ,
  " Adjunta Licencia Conducir   " ,
  " Otra Identificacion " ,
  " Adjunta Otra Identificacion " ,
  " Especifacacion Identificacion   " ,
  " Cotejo Vs Original  " ,
  " Adjunta CURP  RFC FEA " ,
  " Adjunta Comprobante Domicilio " ,
  " Domicilio Coincide Id " ,
  " Domicilio Beneficiario  " ,
  " Colonia " ,
  " Codigo Postal " ,
  " Pais  " ,
  " Telefono  " ,
  " CURP  " ,
  " RFC " ,
  " Parentesco  " ,
  " Porciento " ,
  " Fecha nacimiento  " ,
  " Municipio " ,
  " Estado  " ,
  " Estado civil  " ,
  " Sociedad conyugal " ,
  " Ocupacion/Profecion " ,
  " PEPS  " ,
  " Origen de los recursos  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Total ingresos  " ,
  " Valor auto  " ,
  " Engache " ,
  " Porcentaje de enganche  " ,
  " Porcentaje financiado " ,
  " Monto Financiado  " ,
  " Plazo " ,
  " Pago mensual esperado " ,
  " PEPS  " ,
  " NombrePEPS  " ,
  " ParentescoPEPS  " ,
  " PuestoPEPS  " );
$CPfna = array( 
  " Id   ",
  " Folio Cliente " ,
  " Tipo Credito  " ,
  " Nombre  " ,
  " Segundo Nombre  " ,
  " Apellido paterno  " ,
  " Apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono Movil  " ,
  " Dirreccion  " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Lugar nacimiento  " ,
  " Estado  " ,
  " Codigo Postal " ,
  " CURP  " ,
  " Email " ,
  " Fax " ,
  " Sexo  " ,
  " Fecha Nacimiento  " ,
  " Edad  " ,
  " Nacionalidad  " ,
  " No. De dependientes   " ,
  " Acredita domicilio  " ,
  " Vive en   " ,
  " Otro  " ,
  " Importe mensual   " ,
  " Propiedad inmueble  " ,
  " Arraigo domicilio   " ,
  " Años de residir   " ,
  " Nombre beneficiario   " ,
  " Apellido paterno  " ,
  " Apellido materno  " ,
  " Estado civil  " ,
  " Auto propio " ,
  " Marca / tipo  " ,
  " Ocupacion " ,
  " Puesto  " ,
  " Desde el año  " ,
  " Compañía  " ,
  " Telefono  " ,
  " Nombre empresa  " ,
  " Extencion   " ,
  " Giro  " ,
  " Domicilio empresa   " );
$CPM = array( " id  " ,
  " Folio cliente " ,
  " Tipo Credito  " ,
  " Nombre  " ,
  " RFC " ,
  " Telefono  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Estado  " ,
  " Codigo Postal " ,
  " Email " ,
  " Fax " ,
  " Nombre de la empresa  " ,
  " Telefono  " ,
  " Email " ,
  " RFC " ,
  " Fax " ,
  " Puesto  " ,
  " Actividad Principal   " ,
  " Inicio de operaciones " ,
  " Cantidad de personal  " );
$SPFNA = array( " Folio Solicitud " ,
  " Folio Cliente " ,
  " Nombre referencia " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Nombre referencia2  " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Referencia bancaria " ,
  " No. De cuenta " ,
  " Referencia bancaria2  " ,
  " No. De cuenta " ,
  " Sucursal referencia 1 " ,
  " Sucursal referencia 2 " ,
  " Fecha de apertura " ,
  " Fecha de apertura 2 " ,
  " Empresa " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Empresa 2 " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Banco cargo directo " ,
  " No. De cuenta " ,
  " Nombre Conyuge  " ,
  " Compañía  " ,
  " Puesto  " ,
  " Nombre Obligado solidario " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Luar de nacimiento  " ,
  " Estado  " ,
  " Codigo Postal " ,
  " RFC " ,
  " Telefono  " ,
  " Fax " ,
  " Antigüedad  " ,
  " Apoderado " ,
  " Actividad principal " ,
  " Inicio de operaciones " ,
  " Cantidad de personal  " ,
  " Nombre obligado solidario " ,
  " Apellido paterno  " ,
  " Apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " estado  " ,
  " Codigo Postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " CURP  " ,
  " Nombre obligado solidario " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo Postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " CURP  " ,
  " Fecha " ,
  " Clave consecionario " ,
  " Nombre  " ,
  " Nombre vendedor " ,
  " Nombre gerente grl. " );
$SPM = array( " Folio solicitante " ,
  " Folio Cliente " ,
  " Referencia Bancaria   " ,
  " No. De cuenta " ,
  " Referencia bancaria   " ,
  " No. De cuenta " ,
  " Sucursal referencia 1 " ,
  " Sucursal referencia 2 " ,
  " Fecha de apertura   " ,
  " Fecha de apertura   " ,
  " Empresa " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Empresa " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Banco cargo directo " ,
  " No. de cuenta " ,
  " Nombre obligado solidario " ,
  " Direccion " ,
  " Colonia " ,
  " Ciudad  " ,
  " Estado  " ,
  " Codigo postal " ,
  " RFC " ,
  " Telefono  " ,
  " Fax " ,
  " Antigüedad de constitucion  " ,
  " Apoderado " ,
  " Actividad principal " ,
  " Inicio operaciones  " ,
  " Cantidad de personal  " ,
  " Nombre accionista " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista " ,
  " RFC   " ,
  " Porcentaje  " ,
  " Nombre accionista PM  " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista PM  " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre obligado solidario " ,
  " RFC   " ,
  " Telefono  " ,
  " Telefono Movil  " ,
  " Direccion " ,
  " Colonia " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " Edad  " ,
  " CURP  " ,
  " Nombre Obligado solidario " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " RFC   " ,
  " CURP  " ,
  " Edad  " ,
  " Nombre obligado solidario " ,
  " RFC   " ,
  " Telefono  " ,
  " Telefono Movil  " ,
  " Direccion " ,
  " Colonia " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " Estado  " ,
  " CURP  " ,
  " Nombre obligado solidario " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " RFC " ,
  " CURP  " ,
  " Edad  " ,
  "   " ,
  "   " ,
  "   " ,
  "   " ,
  "   " ,
  "   " ,
  " Fecha " ,
  " ClavConcesionario " ,
  " Nombre concesionario  " ,
  " Nombre vendedor " ,
  " Nombre gerente Grl. " );

   echo'Encontrado';    
  ?>
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
    


   <ul class='tabs' data-tabs id='example-tabs'>
  <li class='tabs-title is-active'><a href='#panel1' aria-selected='true'>Cliente</a></li>
  <li class='tabs-title'><a href='#panel2'>Solicitud</a></li>
  <li class='tabs-title'><a href='#panel3'>Grado de riesgo</a></li>

</ul>




   <div class='tabs-content' data-tabs-content='example-tabs'>


<div class="tabs-panel" id="panel1">
    <table width='20%' border='0' class='table table-sm table-inverse'>

   <?php
   while($row=mysqli_fetch_array($tab,MYSQL_NUM)){

for ($i=1; $i < count($row); $i++) { 
  for ($j=$i; $j < $i+1; $j++) { 
    
if ($row[$j]=="") {
  # code...
  break;
}
    else{
?>
<tr>
    <td > <?php echo $con[$i]; ?> </td>


      <td > <?php echo  $row[$j] ?> </td>
  </tr>
    <?php
      }
    }
  }
}
?>
  </table> 
 </div>

<div class="tabs-panel" id="panel2">
 <table width='20%' border='0' class='table table-sm table-inverse'>
  <?php
  
for ($k=1; $k < count($ob); $k++) { 
  for ($l=$k; $l < $k+1; $l++) { 
    
if ($ob[$l]=="") {
  # code...
  break;
}
    else{

?> <tr class='bg-primary' >
    <td > <?php echo $sol[$k] ?> </td>
  
   
    <td > <?php echo $ob[$l] ?></td>
  </tr>
  <?php
      }
    }
  }

?>

  </table> 
</div>

<div class="tabs-panel" id="panel3" >
    <table width='20%' border='0' class='table table-sm table-inverse'>

   <?php
   while($row1=mysqli_fetch_array($gra,MYSQL_NUM)){

for ($i=0; $i < count($row1); $i++) { 
  for ($j=$i; $j < $i+1; $j++) { 
    
if ($row1[$j]=="") {
  # code...
  break;
}
    else{
?>
<tr>
    <td > <?php echo $gr[$i]; ?> </td>


      <td class="<?php if($row1[$j]=='Bajo') {echo 'callout success'; } elseif($row1[$j]=='Alto') {echo 'callout alert'; } elseif($row1[$j]=='Medio') {echo 'callout warning'; }  ?>" > <?php echo  $row1[$j] ?> </td>
  </tr>
    <?php
      }
    }
  }
}
?>
  </table> 
 </div>

</div>

<?php


      }
}
else{

echo "fallo";

}
echo "";
  
     ?>










    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>

     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


    