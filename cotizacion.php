<?php
include("Conexion2.php");
?>
<!DOCTYPE html>
<title>Financiera|Cotización</title>
<body onLoad="inicio()" >
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
  <div class="medium-6 columns">
    <div class="card">
      <div class="card-section">
        <h5 class="card-title">Precio: (Costo del vehículo a adquirir)</h5>
        <p class="card-text"><input size="12" style="border-width: 2px; border-style: solid; font-size:24pt; color: #009900; letter-spacing : 3px;" onFocus="this.select()" name="price" type="text" value="$0"
data-previousvalue="0" id="price" data-val-min="0" data-val-max="1000000" data-val-regex="^[0-9]*$" onKeyUp="if(event.keyCode == 13) clicked_text1()" onkeydown=
"if(event.keyCode == 9 || event.keyCode == 13) clicked_text1()" /></p>
        <a><input name="valor" type="range" id="valor" value="0" min="0" max="1000000" step="1" onClick="clicked_valor()" onChange="clicked_valor()" /></a>

      </div>
    </div>
  </div>
  <div class="medium-6 columns">
    <div class="card">
      <div class="card-section">
<h5 class="card-title">Enganche: (Aportación inicial)</h5>
           <input size="12" style="border-width: 2px; border-style: solid; font-size:24pt; color: #009900; letter-spacing : 3px;" onFocus="this.select()" name="price2" type="text" value="$0"
data-previousvalue="0" id="price2" data-val-min="0" data-val-max="1000000" data-val-regex="^[0-9]*$" onKeyUp="if(event.keyCode == 13) clicked_text2()" onkeydown=
"if(event.keyCode == 9 || event.keyCode == 13) clicked_text2()" />
        <a><input name="valor2" type="range" id="valor2" value="0" min="0" max="0" step="1" onClick="clicked_valor2()" onChange="clicked_valor2()" /></a>
   
      </div>
    </div>
  </div>
</div>

 

<br>
   

    <div class="row small-collapse medium-uncollapse" data-equalizer data-equalize-on="medium" id="test-eq">
        <div class="medium-7 columns">
            <div class="card">
                <div class="card-section">

                        <h4 >Selecciona el plazo de tu preferencia</h4>
                        <br />
                        <table class="hover"width="100%" border="0">
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

                          <div class="medium-5 columns">
                            <div class="card">
                                 <div class="button">
                              <div class="card-section">
                               
                                            <h3 class="card-title">Monto a Financiar</h3>
                                            <p class="card-text"> <div style="font-size:24px" id="monto" >$0</div></p>
                                            <h3 class="card-title">Pagos</h3>
                                            <p class="card-text"> <div style="font-size:24px" id="pagos" >$0</div></p>
                                        <h3 class="card-title">CAT<small class="delta-indicator delta-positive" id="CATp" >%</small></h3>
                                            <cite title="Source Title">Para fines informativos y de comparación exclucivamente</cite>
                                    </div>
                                </div>
                            </div>
                         </div>
                    
                         </div>
</div>


<div id="pepe" class="container"></div>
      



</body>
<script type="text/javascript"  src="js/cotiza.js"></script>
</html>
