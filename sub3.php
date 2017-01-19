<?php
					$id=$_GET['id'];
					$com=$_GET['comentario'];
				 	$stat=$_GET['status'];
					include('Conexion2.php');
		 $dato=mysqli_fetch_array(mysqli_query($cnx,"select StatusSolicitud from solicitudes where Id='$id'"));
		 if($dato['StatusSolicitud']!="Aceptada" && $dato['StatusSolicitud']!="Rechazada"){
     mysqli_query($cnx,"update solicitudes set StatusSolicitud='$stat',Comentarios='$com' where Id='$id'");
		//echo "<script>window.location='solicitudesPendientes.php';</script>"
    echo "realizado";
		 }else{
		 //echo "<script>alert('La Solicitud Ya Fue Validada');//window.location='indexmenu.php';</script>";
		 echo "Solicitud ya validada";
		 }
		
		 ?>