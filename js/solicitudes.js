


$( "#tipocredito" ).change(function() {
	seleccionvalor();
});

function seleccionvalor(){
	var data = new FormData();
	data.append('function', "requesttipocredito");
	if(document.getElementById("tipocredito").value==""){
		document.getElementById("displaymonto").style.display='none';
		document.getElementById("engautochange").style.display='none';
		document.getElementById("porengautochange").style.display='none';
		document.getElementById("porfinautochange").style.display='none';
		document.getElementById("monfinautochange").style.display='none';
		document.getElementById("interesanual").style.display='none';
		document.getElementById("comisionapchange").style.display='none';
		document.getElementById("seguroauto").style.display='none';
		document.getElementById("segurovida").style.display='none';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='none';
		document.getElementById("pagomensualesp").style.display='none';
		data.append('requestcredito', "");

		

	}else if(document.getElementById("tipocredito").value=="Auto Nuevo"){
		document.getElementById("displaymonto").style.display='block';
		document.getElementById("labelmontosoli").innerHTML='Monto del Vehiculo';
		document.getElementById("engautochange").style.display='block';
		document.getElementById("porengautochange").style.display='block';
		document.getElementById("porfinautochange").style.display='block';
		document.getElementById("monfinautochange").style.display='block';
		document.getElementById("interesanual").style.display='block';
		document.getElementById("comisionapchange").style.display='block';
		document.getElementById("seguroauto").style.display='block';
		document.getElementById("segurovida").style.display='block';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='block';
		document.getElementById("pagomensualesp").style.display='block';
		data.append('requestcredito', "Auto Nuevo");


		
	}else if(document.getElementById("tipocredito").value=="Auto Seminuevo"){
		document.getElementById("displaymonto").style.display='block';
		document.getElementById("labelmontosoli").innerHTML='Monto del Vehiculo';
		document.getElementById("engautochange").style.display='block';
		document.getElementById("porengautochange").style.display='block';
		document.getElementById("porfinautochange").style.display='block';
		document.getElementById("monfinautochange").style.display='block';
		document.getElementById("interesanual").style.display='block';
		document.getElementById("comisionapchange").style.display='block';
		document.getElementById("seguroauto").style.display='block';
		document.getElementById("segurovida").style.display='block';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='block';
		document.getElementById("pagomensualesp").style.display='block';
		data.append('requestcredito', "Auto Seminuevo");


	}else if(document.getElementById("tipocredito").value=="Crédito Simple de Nomina"){
		document.getElementById("displaymonto").style.display='block';
		document.getElementById("labelmontosoli").innerHTML='Monto Solicitado';
		document.getElementById("engautochange").style.display='none';
		document.getElementById("porengautochange").style.display='none';
		document.getElementById("porfinautochange").style.display='none';
		document.getElementById("monfinautochange").style.display='none';
		document.getElementById("interesanual").style.display='block';
		document.getElementById("comisionapchange").style.display='block';
		document.getElementById("seguroauto").style.display='none';
		document.getElementById("segurovida").style.display='block';
		document.getElementById("segdeschange").style.display='block';
		document.getElementById("plazocredito").style.display='block';
		document.getElementById("pagomensualesp").style.display='block';
		data.append('requestcredito', "Crédito Simple de Nomina");


	}else{
		document.getElementById("displaymonto").style.display='none';
		document.getElementById("engautochange").style.display='none';
		document.getElementById("porengautochange").style.display='none';
		document.getElementById("porfinautochange").style.display='none';
		document.getElementById("monfinautochange").style.display='none';
		document.getElementById("interesanual").style.display='none';
		document.getElementById("comisionapchange").style.display='none';
		document.getElementById("seguroauto").style.display='none';
		document.getElementById("segurovida").style.display='none';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='none';
		document.getElementById("pagomensualesp").style.display='none';
		data.append('requestcredito', "");


	}

   
   
   
   
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
        
        //alert(xmlhttp.responseText);
        obj3 = JSON.parse(xmlhttp.responseText);

        if(obj3!=null){
            if(obj3.descripcion=="Crédito Simple de Nomina"){
              document.getElementById("textfield100").value=obj3.tasa;
            }else if(obj3.descripcion=="Auto Nuevo"){
              document.getElementById("textfield100").value=obj3.tasa;
            }else{
              document.getElementById("textfield100").value="";
            }
        }
            

        
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);



	
}

$("#cancelarsolicitud").click(function(event) {
    
   var data = new FormData();
   data.append('function', "cancelarsolicitud");
   
   
   
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
        document.getElementById("botonessolicitud").style.display="block";
        document.getElementById("contenidorequestsolicitud").style.display="none";
        document.getElementById("guardarsolicitud").style.display="none";
        
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);
});




$("#guardarsolicitud").click(function(event) {
    $('#form2').foundation('validateForm');



var validacion=false;
$( "#panel1d-label" ).removeClass( "is-invalid-input" );
/*
$( "#panel2c-label" ).removeClass( "is-invalid-input" );
$( "#panel3c-label" ).removeClass( "is-invalid-input" );
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );
*/
    if($( "#tipocredito").hasClass( "is-invalid-input" )){

        $( "#panel1d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

    
$('#panel1d').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
/*
$('#panel2c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel4c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel4c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel5c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel5c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel6c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel6c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel7c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel7c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel8c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel8c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel9c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel9c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });


*/


    if(validacion){
         console.log("Hay errores");
         alert("¡¡Verifica Que Todos Los Datos Sean Correctos!!");
         return validacion;
    }






    
   var data = new FormData(document.forms['form2']);
   data.append('function', "guardasolicitud");
   
   data.append('id', obj2[0]);
   




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
        
        document.getElementById("cancelarsolicitud").disabled = true;
        //document.getElementById('').style.display='none';

        
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);

});





$( "#ANYBODY" ).change(function() {
    
if(document.getElementById('ANYBODY').value=="0"){
     document.getElementById("nombres").style.display = "none";
    	document.getElementById("ident").style.display='none';

    }
    else if(document.getElementById('ANYBODY').value=="1"){
        document.getElementById('nombres').style.display='none';
        document.getElementById("ident").style.display='block';

    }else if(document.getElementById('ANYBODY').value=="2"){
        document.getElementById("nombres").style.display = "block";
    	document.getElementById("ident").style.display='none';
      
    }else if(document.getElementById('ANYBODY').value=="3"){
        document.getElementById('nombres').style.display='none';
        document.getElementById("ident").style.display='block';

       
      
       
    }
    
  
});



function sol(fun){

 var data = new FormData();
   data.append('function', "nuevasolicitud");
   data.append('cliente', fun);
   
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
        $( "#cerrarmodalnuevasolicitud" ).click();
        obj2 = JSON.parse(xmlhttp.responseText);
        document.getElementById("botonessolicitud").style.display="none";
        document.getElementById("contenidorequestsolicitud").style.display="block";
        document.getElementById("guardarsolicitud").style.display="block";
        document.getElementById("idcliente").value=obj2[0];
        
      
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);
  
}



function busqueda(){

 
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#idnuevasolicitud").val();
                                           select= $("#ANYBODY").val();   
                                           nom= $("#nombrepf").val();
                                           pa= $("#ApellidoPa").val();
                                           ma= $("#ApellidoMa").val();                             
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "ANYBODY="+select+"&b="+consulta+"&c="+nom+"&d="+pa+"&e="+ma,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultadonuevasolicitud").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultadonuevasolicitud").empty();
                          $("#resultadonuevasolicitud").append(data);
                                                             
                    }
              });
                                                                                  
}
                                                                           
        

