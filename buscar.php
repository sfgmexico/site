<?php
 
      $buscar = $_REQUEST['b'];
       
  
       switch ($_REQUEST['ANYBODY']) {
              
             case 1:
                  include("Conexion2.php");  
          
      
            $sql = mysqli_query($cnx,"select * FROM clientes WHERE (id LIKE '".$buscar."%') or (NombrePF LIKE '%".$buscar."%')");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$buscar."</b>'.";
            }else{
                  while($row=mysqli_fetch_array($sql)){
                       
                         
                        echo $row['id']." - ".$row['NombrePF']." ".$row['SegNombrePF']." ".$row['ApPatPF']." ".$row['ApMatPF']." - ".$row['CURPPF']." ".$row['RazonSocial']." - ".$row['RFCPM']."<br />";    
                  }
            }
      
                   break;
             case 2 :

             break;

             case 3: 

             break;
             

             default:
                   echo("dbx_error");
                   break;
       }
  
       
?>