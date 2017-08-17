<?php
switch ($_REQUEST['function']) {
    case 'nuevaconocimiento':
        include('Conexion2.php');
        try {
            $rawdata = array();
            $i=0;
            $result=mysqli_query($cnx,"select solicitudes.Id,TipoCredito,clientes.NombrePF,clientes.SegNombrePF,clientes.ApPatPF,clientes.ApMatPF,clientes.RazonSocial from solicitudes INNER JOIN clientes on solicitudes.FolioCliente=clientes.id 
                 where solicitudes.GradoRiesgo is null and Timestampdiff(day, solicitudes.Fecha, Now())<31 and solicitudes.Status='Finalizado'");
            while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

            echo json_encode($rawdata);
            


        } catch (Exception $e) {
            echo "Error Al Obtener listado";
        }
        
        
        break;
    case 'nuevaregistroconocimiento':
        include('Conexion2.php');



        mysqli_query($cnx,"insert into gradoriesgo () values()");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));                            
        $id_cliente=$id['LAST_INSERT_ID()'];

        mysqli_query($cnx,"update solicitudes SET GradoRiesgo='$id'");
        echo json_encode($id);

        break;
	default;
        echo 'Error';
    	break;



}

?>