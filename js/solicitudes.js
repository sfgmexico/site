$("#guardarcliente").click(function(event) {
    $('#form2').foundation('validateForm');



var validacion=false;
/*
$( "#panel1c-label" ).removeClass( "is-invalid-input" );
$( "#panel2c-label" ).removeClass( "is-invalid-input" );
$( "#panel3c-label" ).removeClass( "is-invalid-input" );
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );


    if($( "#TipoCliente").hasClass( "is-invalid-input" )){

        $( "#panel1c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

    
$('#panel1c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
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


$("#requestnuevasolicitud").click(function(event) {

   var data = new FormData();
   data.append('function', "nuevasolicitud");
   data.append('cliente', document.getElementById("idnuevasolicitud").value);
   
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
});

 $("#idnuevasolicitud").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#idnuevasolicitud").val();
                                           select= $("#ANYBODY").val();                                
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "ANYBODY="+select+"&b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultadonuevasolicitud").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultadonuevasolicitud").empty();
                          $("#resultadonuevasolicitud").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
