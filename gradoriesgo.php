<?php


switch ($_REQUEST['function']) {
    case 'continuarconocimiento':
        include('Conexion2.php');
        try {
            $rawdata = array();
            $i=0;
            $result=mysqli_query($cnx,"select solicitudes.Id,TipoCredito,clientes.NombrePF,clientes.SegNombrePF,clientes.ApPatPF,clientes.ApMatPF,clientes.RazonSocial from solicitudes INNER JOIN clientes on solicitudes.FolioCliente=clientes.id inner join gradoriesgo on gradoriesgo.Id=solicitudes.GradoRiesgo where gradoriesgo.Status='Incompleto'");
            if($result===false){
                echo "Error -- No se pudo realizar el Query";
            }
            while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

            echo base64_encode(json_encode($rawdata));
            


        } catch (Exception $e) {
            echo "Error Al Obtener listado";
        }
        
        
        break;
    case 'requestmodificarconocimiento':
        include('Conexion2.php');
        $result=mysqli_query($cnx,"select * from gradoriesgo where Id=(select GradoRiesgo from solicitudes where Id='".$_REQUEST['registro']."')");
        if($result===false){
            echo "Error -- Falla al realizar Query";
            break;
        }
        echo base64_encode(json_encode(mysqli_fetch_array($result)));

        break;
    case 'guardargradriesgo':
        include('Conexion2.php');
        $status='Incompleto';

        if (

            (
            $_REQUEST['select']!='' 
            && $_REQUEST['select2']!='' 
            && $_REQUEST['select3']!='' 
            && $_REQUEST['select4']!='' 
            && $_REQUEST['select5']!='' 
            && $_REQUEST['select6']!='' 
            && $_REQUEST['select7']!='' 
            && $_REQUEST['select8']!='' 
            && $_REQUEST['select9']!='' 
            && $_REQUEST['select10']!='' 
            && $_REQUEST['select11']!='' 
            && $_REQUEST['select12']!='' 
            && $_REQUEST['select13']!='' 
            && $_REQUEST['select14']!='' 
            && $_REQUEST['select15']!='' 
            && $_REQUEST['select16']!='' 
            && $_REQUEST['select17']!='' 
            && (($_REQUEST['select18']!='' && $_REQUEST['select21']!='') || ($_REQUEST['select19']!='' && $_REQUEST['select20']!='')))


            &&

            (($_REQUEST['ingrcomp1']!='' && $_REQUEST['fuenteingrcomp1']!='')  || ($_REQUEST['ingrnocomp1']!='' && $_REQUEST['fuenteingrnocomp1']!=''))
            &&


            (($_REQUEST['tienepeprel']!='' && $_REQUEST['tienepeprel']!="Si") || ($_REQUEST['tienepeprel']!='' && $_REQUEST['tienepeprel']=="Si" && $_REQUEST['quienpep']!="" && $_REQUEST['parentescopep']!="" && $_REQUEST['puestorelpep']!=""))

/*
*/
            

            ) {
            # code...
            $status='Finalizado';
        }

        session_start();
        $matrizgradreisgo=array(
            1=> array('Vulnerable' => 3, 'Informal' =>2, 'Otra'=>1,''=>''),
            2=> array('1-3 años' =>3 ,'4-6 años'=>2, '7-10 años'=>1, 'N/A'=>0,''=>'' ),
            3=> array('Prestamo'=>1,'Arrendamiento'=>2,'Otros'=>3,''=>''),
            4=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            5=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            6=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            7=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            8=> array('$18000 - $20000'=>1,'$21000 - $25000'=>2,'mas de $25000'=>3,''=>''),
            9=> array('1 a 3'=>1,'4 a 6'=>2,'7 a 10'=>3,''=>''),
            10=>array('Transferencia'=>1,'Cheque'=>2,'Efectivo'=>3,''=>''),
            11=>array('Agencia'=>1,'Internet'=>2,'Otro'=>3,''=>''),
            12=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            13=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            14=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            15=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            16=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            17=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            18=>array('18 - 26'=>3,'27 - 36'=>2,'37 - 56'=>1,'56 en adelante'=>3,''=>''),
            19=>array('0 - 3'=>3,'4 - 7'=>2,'8 en adelante'=>1,''=>''),
            20=>array('Regimen agape'=>3,'Regimen general de ley'=>1,'Regimen Donatarios'=>2,'Regimen Coordinados'=>3,''=>''),
            21=>array('Incorporacion Fiscal'=>3,'Servicios Profesionales'=>3,'Intereses'=>3,'Asalariado'=>1,'Arrendamiento'=>2,'Actividad empresarial'=>2,'Regimen Agape'=>3,''=>'')
            );

        $sumagradoriesgo=
        $matrizgradreisgo[1][$_REQUEST['select']]
        +$matrizgradreisgo[2][$_REQUEST['select2']]
        +$matrizgradreisgo[3][$_REQUEST['select3']]
        +$matrizgradreisgo[4][$_REQUEST['select4']]
        +$matrizgradreisgo[5][$_REQUEST['select5']]
        +$matrizgradreisgo[6][$_REQUEST['select6']]
        +$matrizgradreisgo[7][$_REQUEST['select7']]
        +$matrizgradreisgo[8][$_REQUEST['select8']]
        +$matrizgradreisgo[9][$_REQUEST['select9']]
        +$matrizgradreisgo[10][$_REQUEST['select10']]
        +$matrizgradreisgo[11][$_REQUEST['select11']]
        +$matrizgradreisgo[12][$_REQUEST['select12']]
        +$matrizgradreisgo[13][$_REQUEST['select13']]
        +$matrizgradreisgo[14][$_REQUEST['select14']]
        +$matrizgradreisgo[15][$_REQUEST['select15']]
        +$matrizgradreisgo[16][$_REQUEST['select16']]
        +$matrizgradreisgo[17][$_REQUEST['select17']]
        +$matrizgradreisgo[18][$_REQUEST['select18']]
        +$matrizgradreisgo[19][$_REQUEST['select19']]
        +$matrizgradreisgo[20][$_REQUEST['select20']]
        +$matrizgradreisgo[21][$_REQUEST['select21']];

        

        if($sumagradoriesgo<29){
            $gradoriesgorango="Bajo";
        }else if($sumagradoriesgo>=30 || $sumagradoriesgo<=45){
            $gradoriesgorango="Medio";
        }else{
            $gradoriesgorango="Alto";
        }

        $result=mysqli_query($cnx, "update gradoriesgo SET 
        Antiguedad_ObjetoSocial         ='".$_REQUEST['select']."',
        Antiguedad_Cliente              ='".$_REQUEST['select2']."',
        Naturaleza_Operaciones          ='".$_REQUEST['select3']."',
        Numero_Beneficiarios            ='".$_REQUEST['select4']."',
        Numero_TercerosRelacionados     ='".$_REQUEST['select5']."',
        PEPs_Relacionados               ='".$_REQUEST['select6']."',
        Alerta_Reputacional             ='".$_REQUEST['select7']."',
        Volumen_Esperado                ='".$_REQUEST['select8']."',
        Frecuencia_Esperada             ='".$_REQUEST['select9']."',
        Instrumento_Monetario           ='".$_REQUEST['select10']."',
        Canales_MediosUtilizados        ='".$_REQUEST['select11']."',
        Pais_EstadoOficial              ='".$_REQUEST['select12']."',
        Pais_EstadoResidencia           ='".$_REQUEST['select13']."',
        Pais_EstadoOperacion            ='".$_REQUEST['select14']."',
        Origen_Recursos                 ='".$_REQUEST['select15']."',
        Destino_Recursos                ='".$_REQUEST['select16']."',
        Pais_EstadoResidenciaTerceros   ='".$_REQUEST['select17']."',
        Edad_Cliente                    ='".$_REQUEST['select18']."',
        An_Construccion                 ='".$_REQUEST['select19']."',
        Reg_TributacionPF               ='".$_REQUEST['select21']."',
        Reg_TributacionPM               ='".$_REQUEST['select20']."',
        GradoRiesgo                     ='".$gradoriesgorango."',
        ingrcomp1                       ='".str_replace(",","",$_REQUEST['ingrcomp1'])."'                      ,
        fuenteingrcomp1                 ='".$_REQUEST['fuenteingrcomp1']."'                ,
        ingrcomp2                       ='".str_replace(",","",$_REQUEST['ingrcomp2'])."'                      ,
        fuenteingrcomp2                 ='".$_REQUEST['fuenteingrcomp2']."'                ,
        ingrcomp3                       ='".str_replace(",","",$_REQUEST['ingrcomp3'])."'                      ,
        fuenteingrcomp3                 ='".$_REQUEST['fuenteingrcomp3']."'                ,
        ingrcomp4                       ='".str_replace(",","",$_REQUEST['ingrcomp4'])."'                      ,
        fuenteingrcomp4                 ='".$_REQUEST['fuenteingrcomp4']."'                ,
        ingrcomp5                       ='".str_replace(",","",$_REQUEST['ingrcomp5'])."'                      ,
        fuenteingrcomp5                 ='".$_REQUEST['fuenteingrcomp5']."'                ,
        ingrnocomp1                     ='".str_replace(",","",$_REQUEST['ingrnocomp1'])."'                    ,
        fuenteingrnocomp1               ='".$_REQUEST['fuenteingrnocomp1']."'              ,
        ingrnocomp2                     ='".str_replace(",","",$_REQUEST['ingrnocomp2'])."'                    ,
        fuenteingrnocomp2               ='".$_REQUEST['fuenteingrnocomp2']."'              ,
        ingrnocomp3                     ='".str_replace(",","",$_REQUEST['ingrnocomp3'])."'                    ,
        fuenteingrnocomp3               ='".$_REQUEST['fuenteingrnocomp3']."'              ,
        ingrnocomp4                     ='".str_replace(",","",$_REQUEST['ingrnocomp4'])."'                    ,
        fuenteingrnocomp4               ='".$_REQUEST['fuenteingrnocomp4']."'              ,
        ingrnocomp5                     ='".str_replace(",","",$_REQUEST['ingrnocomp5'])."'                    ,
        fuenteingrnocomp5               ='".$_REQUEST['fuenteingrnocomp5']."',
        tienepeprel                     ='".$_REQUEST['tienepeprel']."',
        quienpep                        ='".$_REQUEST['quienpep']."',
        parentescopep                   ='".$_REQUEST['parentescopep']."',
        puestorelpep                    ='".$_REQUEST['puestorelpep']."',
        Status                          ='$status',
        FechaModificacion               =CURDATE(),
        ModPor                          ='".$_SESSION['usser']."'

        WHERE Id='".$_REQUEST['registro']."'");

        if($result===false){
            echo "Error query no realizado";
            break;
        }


        echo "¡¡Guardado!!";
        break;



    case 'tipodeclientepeps':
        include('Conexion2.php');
        $result=mysqli_query($cnx,"select clientes.TipoCliente from clientes where id=(select solicitudes.FolioCliente from solicitudes where id='".$_REQUEST['solicitud']."')");
        if($result===false){
            echo "Error";
            break;
        }
        $row=mysqli_fetch_array($result);
        echo json_encode($row);
        break;
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



        mysqli_query($cnx,"insert into gradoriesgo (Status) values('Incompleto')");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));                            
        $id_cliente=$id['LAST_INSERT_ID()'];

        mysqli_query($cnx,"update solicitudes SET GradoRiesgo='$id_cliente' where id='".$_REQUEST['solicitud']."'");
        echo json_encode($id);

        break;




	default;
        echo 'Error';
    	break;



}

?>