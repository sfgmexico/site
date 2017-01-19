<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="js/script.js"></script>




 <script src="js/vendor/jquery.min.js"></script>
    <script src="js/js/what-input.min.js"></script>
     <script src="js/js/foundation.abide.js"></script>
       <script src="js/js/foundation.dropdownMenu.js"></script>
         <script src="js/js/foundation.dropdown.js"></script>
           <script src="js/js/foundation.responsiveMenu.js"></script>
           	<script src="js/js/foundation.util.triggers.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script>
      $(document).foundation();
    </script>
    <link rel="stylesheet" href="css/foundation.css" />
     <link rel="stylesheet" href="css/app.css" />

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!-- header -->
<header>
	<div class="container">
	  <div class="grid_24">
			<h1 class="fleft" ><img src="logosfg.png" width="190" height="50"></h1>
			
			
		    
           
		</div>
		
	</div>
	
  <!-- Navbar content -->


	<ul class="menu">
  <li>
    <a href="indexmenu.php" id="boton"><i class="fi-list"></i><span>Inicio</span></a>
  </li>
  <li><i class="fi-list"></i>
    <a>Solicitudes de credito</a>
   
     <ul class="menu">
      <li><a class="dropdown-item" href="#"  id="bot1">Solicitud PFA</a></li>
     
       <li><a class="dropdown-item" href="#"  id="bot2">Solicitud PM</a></li>
    
      <li> <a class="dropdown-item" href="#"  id="bot3">Solicitud PFNA</a></li>
  </ul>
 
    
  </li>
  <li><i class="fi-list"></i>
    <a class="nav-link"  href="#" id="boton2">Solicitudes</a>
  </li>
  <li><i class="fi-list"></i>
    <a class="nav-link "   href="#" id="boton1">Cotizacion</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel"></div>
  
  <div class="tab-pane" id="messages" role="tabpanel"></div>

</div>



<!-- content -->
<section>
	<div class="bg" align="left">
	  <div class="container" id="htmlext">
	  <form method="post">
                
				  
				  <?php 
				  
				  ?>
                </form></div>
	</div>
	
</section>
<!-- footer -->
<footer>
	<div class="container_24">
		<div class="wrapper">
			<div class="grid_24"><a href="index.php" class="link"></a> &copy; 2012</div>
		
		</div>
	</div>
</footer>  
</body>
<script type="text/javascript">
						
						$("#boton1").click(function(event) {
        				$("#htmlext").load('./cotizacion.php');
    														});

						$("#boton2").click(function(event) {
        				$("#htmlext").load('solicitudesPendientes.php');
    														});
						$("#bot1").click(function(event) {
        				$("#htmlext").load('solicitudPFA.php');
    														});
						$("#bot2").click(function(event) {
        				$("#htmlext").load('solicitudPM.php');
    														});
						$("#bot3").click(function(event) {
        				$("#htmlext").load('solicitudPFNA.php');
    														});

						


						
				

	

</script>
</html>
