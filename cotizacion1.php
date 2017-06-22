<?php
include("Conexion2.php");
?>
<!DOCTYPE html>
<title>Financiera|Cotización</title>
<body onLoad="inicio()" >

<p>Tipo de Crédito: 
 <select name="seleccion" size="1" id="seleccion" style="width:40%;" onchange="capturar()" required>
          <option value="" ></option>
          <?php
          $rescreditos=mysqli_query($cnx,"select * from tiposcreditos");
          while($rowcreditos=mysqli_fetch_array($rescreditos)){?> 
             <option value="<?php echo $rowcreditos['tasa'];?>" ><?php echo $rowcreditos['descripcion'];?></option>

         <?php }
          ?>
        </select>


<div id="contenidocreditoquirografario" class="container" >
    
  <table >
        <tr>
                <td style="display:none">Ingresos mensuales  <input type="number" name="ingmen" id="ingmen"> </td>
                 <td>Tasa de interes (Anual)<input type="text" name="tasacreditoquirografario" id="tasacreditoquirografario" readonly></td>
                  <td>Seguro de vida  <input> <select name="seleccion"><option value="noaplica">no aplica</option> <option>unico pago al inicio</option>  </select></td>
        </tr>

         <tr>
                <td> Monto a solicitar  <input type="text" name="montocreditoquirografario" id="montocreditoquirografario" onChange="formatodenumero(this.id,this.value)" onfocus="this.select()"></td>
                 <td>Frecuencia de pago <select name="frecpagocreditoquirografario" id="frecpagocreditoquirografario"><option value="12">Mensual</option></select> </td>
                  <td>Seguro de desempleo <input> <select><option>No aplica</option> <option>unico pago al inicio</option> <option>Gratuito</option></select> </td>
        </tr>


        <tr>
                <td>Plazo <select name="plazocreditoquirografario" id="plazocreditoquirografario"><option value="3">3</option> <option value="6">6</option> <option value="12">12</option><option value="24">24</option><option value="36">36</option><option value="48">48</option><option value="60">60</option></select>  </td>
                 <td> Comision por apertura <input name="comisioncreditoquirografario" id="comisioncreditoquirografario" value="3%"readonly> <select><option>unico pago al inicio</option> <option>Se integra al monto</option> <option>Gratuita</option><option>No aplica</option></select> </td>
                  <td>  <input type="button" value="Calcula" onClick="Calculacreditoquirografario()"></td>
        </tr>


  </table>
  <div id="resultadocreditoquirografario" ></div>
</div>


</body>
<script type="text/javascript"  src="js/cotiza.js"></script>
</html>
