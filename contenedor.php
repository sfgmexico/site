
  <?php
  
     
      $solicitudNo=strtoupper($_GET['textfield']);
      
  include('Conexion2.php');
  $result=mysqli_query($cnx,"select * from solicitudpfa where Folio_Sol='$solicitudNo'");
  $ob=mysqli_fetch_array($result,MYSQL_NUM);

  $tab=mysqli_query($cnx,"select * from pfa where Folio_cliente='$ob[1]'");
  
  $tab1=mysqli_query($cnx,"select * from pfna where Folio_cliente='$ob[1]'");

  $tab2=mysqli_query($cnx,"select * from pm where Folio_cliente='$ob[1]'");

  
if (stristr($solicitudNo, 'SA')== TRUE) {
  # code...
  if(mysqli_num_rows($result) == 0){
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

  $sol = array( " Folio solicitante " ,
  " Folio Cliente " ,
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
  " Nombre gerente grl. " );

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
  <li class='tabs-title is-active'><a href='#panel1' aria-selected='true'>Datos generales</a></li>
  <li class='tabs-title'><a href='#panel2'>Referencias Personales</a></li>
  <li class='tabs-title'><a href='#panel3'>Referencias Bancarias</a></li>
  <li class='tabs-title'><a href='#panel4'>Obligado Solidario</a></li>
</ul>




   <div class='tabs-content' data-tabs-content='example-tabs'>
  <div class="tabs-panel" id="panel3">
<?php echo "string"; ?>
</div>

<div class="tabs-panel" id="panel1">
    <table width='20%' border='0' class='table table-sm table-inverse'>

   <?php
   while($row=mysqli_fetch_array($tab,MYSQL_NUM)){

for ($i=0; $i < count($row); $i++) { 
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
  
echo $ob[0];
for ($k=0; $k < count($ob); $k++) { 
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


    