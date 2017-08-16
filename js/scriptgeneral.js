function cpostal(cpos,estado,municipio,colonia,ciudad,loading){
    var data = new FormData();
   data.append('idCP', cpos);
   
   //data.append('id', obj.id);

 
   
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
    if(xmlhttp.readyState==1){
        $("#"+loading).html("<img src='images/cargando.gif' width='20' height='20'/>");
    }


    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        
        
        $("#"+loading).empty();

        
        codigospostales = JSON.parse(xmlhttp.responseText);


        
        if(codigospostales==""){
            alert("¡¡Codigo Postal no Registrado, Favor de ingresar uno valido!!");
            return false;
        }
        

        if(document.getElementById(ciudad)!=null){
            var cdd = document.getElementById(ciudad);
            $("#"+ciudad+" option").remove();
            var optionprin4 = document.createElement("option");
                optionprin4.text = "-Seleccione una opcion-";
                optionprin4.value = "";
                cdd.add(optionprin4);
        var option4 = document.createElement("option");
                if(codigospostales[0].Ciudad[0]!=null){
                    
                    option4.text = codigospostales[0].Ciudad[0];
                    option4.value = codigospostales[0].Ciudad[0];
                }else{
                    option4.text = "N/A";
                    option4.value = "N/A";
                }
                
                cdd.add(option4);
        }


        if(document.getElementById(estado)!=null){
            var est = document.getElementById(estado);
            $("#"+estado+" option").remove();
            var optionprin = document.createElement("option");
                optionprin.text = "-Seleccione una opcion-";
                optionprin.value = "";
                est.add(optionprin);
            var option = document.createElement("option");
                option.text = codigospostales[0].Estado[0];
                option.value = codigospostales[0].Estado[0];
                est.add(option);
        }

        if(document.getElementById(municipio)!=null){
            var mun = document.getElementById(municipio);
            $("#"+municipio+" option").remove();
            var optionprin2 = document.createElement("option");
                optionprin2.text = "-Seleccione una opcion-";
                optionprin2.value = "";
                mun.add(optionprin2);
            var option2 = document.createElement("option");
                option2.text = codigospostales[0].Municipio[0];
                option2.value = codigospostales[0].Municipio[0];
                mun.add(option2);
        }
        
        if(document.getElementById(colonia)!=null){
            var col = document.getElementById(colonia);
            $("#"+colonia+" option").remove();
             var optionprin3 = document.createElement("option");
                optionprin3.text = "-Seleccione una opcion-";
                optionprin3.value = "";
                col.add(optionprin3);
             $.each(codigospostales, function(i,cliente){
            var option3 = document.createElement("option");
                option3.text = this.Fracc[0];
                option3.value = this.Fracc[0];
                col.add(option3);
        });
        return true;
        }
       
      }
  }
xmlhttp.open("POST","cpostal.php",true);
xmlhttp.send(data);
}


function datepick(inputdate){
    
    $fecha=$(inputdate);
    
    if ($fecha[0].type!="date"){
        $("#"+inputdate.id).mask("9999-99-99",{placeholder:"yyyy/mm/dd"});
      $fecha.datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true} );
      
      }
        

}

function calcularAntiguedad(input,destino)
{
    var fecha=document.getElementById(input.id).value;
    if(validate_fecha(fecha)==true)
    {
        // Si la fecha es correcta, calculamos la edad
        var values=fecha.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];
 
        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth()+1;
        var ahora_dia = fecha_hoy.getDate();
 
        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes )
        {
            edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }
 
        // calculamos los meses
        var meses=0;
        if(ahora_mes>mes)
            meses=ahora_mes-mes;
        if(ahora_mes<mes)
            meses=12-(mes-ahora_mes);
        if(ahora_mes==mes && dia>ahora_dia)
            meses=11;
 
        // calculamos los dias
        var dias=0;
        if(ahora_dia>dia)
            dias=ahora_dia-dia;
        if(ahora_dia<dia)
        {
            ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
            dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
        }
       
           
        
            document.getElementById(destino).value=edad;
            
       
        
    }else{
        document.getElementById(destino).value=0;
    }
}


function mayusculas(input) {
    var curp = input.value.toUpperCase();
        resultado = document.getElementById(input.id);
       
        
    resultado.value = curp;
}
