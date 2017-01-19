<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.responsivemenu.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/forms.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.responsivemenu.js"></script>
<script src="js/FF-cash.js"></script>
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
	<div class="container_24">
	  <div class="grid_24">
			<h1 class="fleft">Volkswagen</h1>
			<ul class="sf-menu">
				<li><a href="index.html">Home</a></li>
			</ul>
		    
           
		</div>
		
	</div>
</header>

<!-- content -->
<section>
	<div class="bg" align="center">
	  <div class="container_24" align="center">
	  <form method="post">
                  
                  <fieldset>
                  <div class="wrapper">
                    <div class="grid_8 suffix_1 alpha" >
                     
                      <p>Usuario:</p>
                      <p>
                        <input name="user" type="text" id="user" >
                      </p>
                      <p>Contraseña:</p>
                      <p>
                        <input name="pass" type="password" id="pass" >
                      </p>
                      <p>
                        <input  name="aceptar" type="submit" class="button" id="aceptar" value="Entrar">
                      </p>
                     
                    </div>
                   
                  </div>
                  </fieldset>
				  
				  <?php 
				  if(isset($_POST['aceptar'])){
				  $user=$_REQUEST['user'];
				  $pass=$_REQUEST['pass'];
				  if($user=="" && $pass==""){?>
				  	<script>alert("¡¡Favor de Ingresar Usuario y Contraseña!!");</script>
				  <?php
				  }else{
				  	include("Conexion2.php");
					include("carpetaraiz.php");
					$row=mysqli_fetch_array(mysqli_query($cnx,"select * from acceso where user='$user' and pass='$pass'"));
					
					if($row==false){
						?>
				  	<script>alert("¡¡Error de Identificación!!");</script>
				  <?php
					}else{
						header('Location: '.$raiz.'indexmenu.php');
					}
					
					
				  }
				  }			  
				  
				  ?>
                </form></div>
	</div>
	
</section>
<!-- footer -->
<footer>
	<div class="container_24">
		<div class="wrapper">
			<div class="grid_24"><a href="index.html" class="link"></a> &copy; 2012</div>
		</div>
	</div>
</footer>  
</body>
</html>
