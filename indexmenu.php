<?php

session_start();
/*
if(!$_SESSION['usser']) {
  ?> <script> window.location.href='index.php';</script>  <?php
}
*/


?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Financiera| Bienvenido</title>
    
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    
    <link rel="stylesheet" href="js/js/css/foundation.css">
   
    <link rel="stylesheet" href="js/js/css/app.css">
    <link rel="stylesheet" href="js/js/css/foundation-icons/foundation-icons.css">
     <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
     
    <style type="text/css">

    </style>
  </head>
  <body>
<!-- header -->



<!-- content -->
<section>
	
    <div class="medium-10 large-11 medium-push-4 large-push-2 columns" >
      <div class="medium-8 columns">
      <head>
      <img src="images/logosfg.png" >
    


  <div class="title-bar" id="example-menu" titlebar-background="$white" >
  <div class="title-bar-left" >
  <ul class="dropdown menu" data-dropdown-menu >
  <li>
    <a href="indexmenu.php"><i class="fi-home"></i><span>Inicio</span></a>
  </li>
  <?php 
  if($_SESSION['GSolicitudes']=="1"){
    echo '<li>

    <a href="#"><i class="fi-pencil"></i><span>Solicitudes de credito</span></a>
    <ul class="menu">
      <li id="bot1"><a href="#"><i class="fi-clipboard-notes"></i><span>Solicitud PFA</span></a></li>
      <li id="bot2"><a href="#"><i class="fi-clipboard-notes"></i><span>Solicitud PM</span></a></li>
      <li id="bot3"><a href="#"><i class="fi-clipboard-notes"></i><span>Solicitud PFNA</span></a></li>


    </ul>
  </li>';
  }
  
  if($_SESSION['BSolicitudes']=="1"){
  echo '<li id="boton2"><a href="#"><i class="fi-graph-trend"></i><span>Solicitudes</span></a></li>';
  }
  
  if($_SESSION['GCotizacion']=="1"){
  echo '<li id="boton1"><a href="#"><i class="fi-dollar"></i><span>Cotizacion</span></a></li>';
  }
  if($_SESSION['BQeQ']=="1"){
   echo '<li id="qeq"><a href="#"><i class="fi-dollar"></i><span>QeQ</span></a></li>';
  }
  if($_SESSION['SetConf']=="1"){
   echo '<li id="Admin"><a href="#"><i class="fi-dollar"></i><span>Configuración</span></a></li>';
  }
  ?>
</ul>


</div>
</div>

</head>

	  <div class="container" id="htmlext" >
<img src="images/sfg.jpg" width="100%">
         <div>
 

    </div>

	  </div>
    </div>
  </div>

	
</section>

    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>

     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>


    <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    
  <script>$(document).foundation();
  $('.title-bar').on('sticky.zf.stuckto:top', function(){
  $(this).addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function(){
  $(this).removeClass('shrink');
})</script>

    <script type="text/javascript" src="js/botones.js"></script>
       
      
      
</body>

</html>
