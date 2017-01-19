 <?php 
		 
		  include('Conexion2.php');
  $result=mysqli_query($cnx,"select * from solicitudes where StatusSolicitud='Pendiente' order by Id desc");
 
  if(mysqli_num_rows($result) == 0){
  echo "<h4>No Hay Solicitudes Pendientes</h4>";
  }else{
   
   
			
	echo 	"	<h4>Solicitudes Pendientes</h4>
			<table width='100%' border='0' class='table table-inverse'>
  <tr>
    <td>No Solicitud</td>
    <td>Solicitante</td>
  </tr>";
   
   while($row=mysqli_fetch_array($result)){
  
  echo "<tr>
   <td class='bg-warning' id=".$row['Id'].">".  $row['Id'] ."</td>
    <td class='bg-primary'>".  $row['NomSolicitante'] ."</td>
  </tr>";


			
			
			}
					
 		  }
		 
		 
     ?>