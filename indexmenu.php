<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="js/script.js"></script>
<script src="js/npm.js"></script>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/bootstrap-grid.css" >
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>

 <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
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
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->

	<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active"  href="indexmenu.php" id="boton">Inicio</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"  role="button" aria-haspopup="true" aria-expanded="true">Solicitudes de credito</a>
    <div class="dropdown-menu">
     
      <a class="dropdown-item" href="#"  id="bot1">Solicitud PFA</a>
     
      <a class="dropdown-item" href="#"  id="bot2">Solicitud PM</a>
    
      <a class="dropdown-item" href="#"  id="bot3">Solicitud PFNA</a>
   </div> 
    
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="#" id="boton2">Solicitudes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "   href="#" id="boton1">Cotizacion</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel"></div>
  
  <div class="tab-pane" id="messages" role="tabpanel"></div>

</div>

</nav>

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
