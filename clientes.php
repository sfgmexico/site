<?php
switch ($_REQUEST['function']) {
    









    case "nuevocliente":
        include("Conexion3.php");
        mysqli_query($cnx,"insert into clientes () values()");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_cliente=$id['LAST_INSERT_ID()'];
		echo json_encode($id);
        break;
    








 








    case "guardacliente":
        $status="Incompleto";

       
        

        if(($_REQUEST['TipoCliente']=="Persona Fisica") 

            && 


            (($_REQUEST['actempresarial']== "Si" && ($_REQUEST['puestosol']!='' && $_REQUEST['depasol']!='' && $_REQUEST['desdesol']!='' && $_REQUEST['compasol']!='' && $_REQUEST['compatelsol1']!='' && $_REQUEST['giroprof']!='' && $_REQUEST['noempleados']!='' && $_REQUEST['domneg']!='')) || ($_REQUEST['actempresarial']== "No" && ($_REQUEST['puestosol']!='' && $_REQUEST['depasol']!='' && $_REQUEST['desdesol']!='' && $_REQUEST['compasol']!='' && $_REQUEST['compatelsol1']!=''))) 

            && 



            (($_REQUEST['vivsol']=="Otros especificar" && $_REQUEST['vivsolesp']!='') || ($_REQUEST['vivsol']!="" && $_REQUEST['vivsol']!="Otros especificar")) 

            && 

            (($_REQUEST['autosol']=='Si' && $_REQUEST['marcasol']!='') || ($_REQUEST['autosol']!='' && $_REQUEST['autosol']!='Si' )) 

            &&


            ((($_REQUEST['civilsol']=='Casado Bienes Mancomunados' || $_REQUEST['civilsol']=='Casado Bienes Separados') && $_REQUEST['conyunom']!='' && $_REQUEST['conyuape1']!='' && $_REQUEST['conyuape2']!='' && $_REQUEST['compaconyu']!='' && $_REQUEST['puestconyu']!='' ) || ($_REQUEST['civilsol']!='' && ($_REQUEST['civilsol']!='Casado Bienes Mancomunados' && $_REQUEST['civilsol']!='Casado Bienes Separados'))) 

            &&
            
            ($_REQUEST['nomsol']!=''  &&  $_REQUEST['apepasol']!=''  &&  $_REQUEST['rfc1']!='' && $_REQUEST['telsol1']!='' && $_REQUEST['movsol1']!='' && $_REQUEST['mailsol']!='' && $_REQUEST['dirsol']!='' && $_REQUEST['dirsol']!='' && $_REQUEST['dirnumsol']!='' && $_REQUEST['colsol']!='' && $_REQUEST['cpsol']!='' && $_REQUEST['lugnacsol']!='' && $_REQUEST['edosol']!='' && $_REQUEST['cdsol']!='' && $_REQUEST['textfield5']!='' && $_REQUEST['curpsol']!='' && $_REQUEST['sexsol']!='' && $_REQUEST['fechnacsol']!='' && $_REQUEST['edsol']!='' && $_REQUEST['nacsol']!='' && $_REQUEST['acdomsol']!='' && $_REQUEST['anosol']!='' && $_REQUEST['arraisol']!='' && $_REQUEST['inmusol']!='' && $_REQUEST['nomref1']!='' && $_REQUEST['parenref1']!='' && $_REQUEST['telref11']!='' && $_REQUEST['nomref2']!='' && $_REQUEST['parenref2']!='' && $_REQUEST['telref12']!='' && $_REQUEST['refbanc']!='' && $_REQUEST['numcuebanc']!='' && $_REQUEST['sucbanc1']!='' && $_REQUEST['aperbanc1d']!='0000-00-00' && $_REQUEST['refbanc2']!='' && $_REQUEST['numcuebanc2']!='' && $_REQUEST['sucbanc2']!='' && $_REQUEST['aperbanc2d']!='' && $_REQUEST['cargdir']!='' && $_REQUEST['nocuentcd']!='' && $_REQUEST['refcomemp1']!='' && $_REQUEST['telrefcom11']!='' && $_REQUEST['antirefcom1']!='' && $_REQUEST['refcomemp2']!='' && $_REQUEST['telrefcom22']!='' && $_REQUEST['antirefcom2']!='' && $_REQUEST['benesol3']!='' && $_REQUEST['benesol1']!='' && $_REQUEST['benesol2']!='' && $_REQUEST['textfield48']!='' && $_REQUEST['textfield49']!='' && $_REQUEST['textfield50']!='' && $_REQUEST['textfield51']!='' && $_REQUEST['textfield52']!='' && $_REQUEST['textfield53']!='' && $_REQUEST['textfield54']!='' && $_REQUEST['textfield55']!='' && $_REQUEST['textfield56']!='' && $_REQUEST['textfield57']!='' && $_REQUEST['textfield58']!='' && $_REQUEST['textfield59']!='' && $_REQUEST['textfield60']!='' && $_REQUEST['textfield61']!='' && $_REQUEST['textfield62']!='')
            /*
            
            */

             ){

            $status="Finalizado";

        }



        

        

          
         
           



          






    	include("Conexion3.php");
    	mysqli_query($cnx,"update clientes set TipoCliente='".$_REQUEST['TipoCliente']."', NombrePF='".$_REQUEST['nomsol']."', SegNombrePF='".$_REQUEST['segnomsol']."', ApPatPF='".$_REQUEST['apepasol']."', ApMatPF='".$_REQUEST['apemasol']."', 
    		RFCPF='".$_REQUEST['rfc1']."', 
    		TelefonoPF='".$_REQUEST['telsol1']."', 
    		MovilPF='".$_REQUEST['movsol1']."', 
    		EmailPF='".$_REQUEST['mailsol']."', 
    		DireccionPF='".$_REQUEST['dirsol']."', 
    		NumDireccionPF='".$_REQUEST['dirnumsol']."', 
    		ColoniaPF='".$_REQUEST['colsol']."', 
    		CPPF='".$_REQUEST['cpsol']."', 
    		LugNacimientoPF='".$_REQUEST['lugnacsol']."',
    		EstadoPF='".$_REQUEST['edosol']."', 
    		CiudadPF='".$_REQUEST['cdsol']."', 
    		MunicipioPF='".$_REQUEST['textfield5']."', 
    		CURPPF='".$_REQUEST['curpsol']."', 
    		SexoPF='".$_REQUEST['sexsol']."', 
    		FechNacimientoPF='".$_REQUEST['fechnacsol']."', 
    		Edad='".$_REQUEST['edsol']."', 
    		NacionalidadPF='".$_REQUEST['nacsol']."', 
    		NumDependientesPF='".$_REQUEST['depensol']."', 
    		AcreditaDomPF='".$_REQUEST['acdomsol']."', 
    		RecidirCiudadPF='".$_REQUEST['anosol']."', 
    		ArraigoDomPF='".$_REQUEST['arraisol']."', 
    		ViviendaPF='".$_REQUEST['vivsol']."', 
    		EspViviendaPF='".$_REQUEST['vivsolesp']."',
    		EstCivilPF='".$_REQUEST['civilsol']."', 
    		AutoPropioPF='".$_REQUEST['autosol']."', 
    		EspAuto='".$_REQUEST['marcasol']."', 
    		InmueblePF='".$_REQUEST['inmusol']."', 
    		ActividadEmpresarial='".$_REQUEST['actempresarial']."', 
    		PuestoPF='".$_REQUEST['puestosol']."', 
    		DepartamentoPF='".$_REQUEST['depasol']."', 
    		DesdeEmpPF='".$_REQUEST['desdesol']."', 
    		CompaniaPF='".$_REQUEST['compasol']."', 
    		TelefonoEmpPF='".$_REQUEST['compatelsol1']."', 
    		ExtensionEmpPF='".$_REQUEST['compatelsolext']."', 
    		GiroPF='".$_REQUEST['giroprof']."', 
    		NumEmpleadosPF='".$_REQUEST['noempleados']."', 
    		DomicilioNegPF='".$_REQUEST['domneg']."', 
    		RefPerNom1PF='".$_REQUEST['nomref1']."', 
    		RefPerParentesco1PF='".$_REQUEST['parenref1']."',
    		RefPerTelefono1PF='".$_REQUEST['telref11']."', 
    		RefPerNom2PF='".$_REQUEST['nomref2']."', 
    		RefPerParentesco2PF='".$_REQUEST['parenref2']."', 
    		RefPerTelefono2PF='".$_REQUEST['telref12']."', 
    		Banco1='".$_REQUEST['refbanc']."', 
    		CuentaBanc1='".$_REQUEST['numcuebanc']."', 
    		SucursalBanc1='".$_REQUEST['sucbanc1']."', 
    		FechaApertura1='".$_REQUEST['aperbanc1d']."', 
    		Banco2='".$_REQUEST['refbanc2']."', 
    		CuentaBanc2='".$_REQUEST['numcuebanc2']."', 
    		SucursalBanc2='".$_REQUEST['sucbanc2']."', 
    		FechaApertura2='".$_REQUEST['aperbanc2d']."', 
    		CarDirBanco='".$_REQUEST['cargdir']."', 
    		CLABE='".$_REQUEST['nocuentcd']."', 
    		RefComEmp1='".$_REQUEST['refcomemp1']."', 
    		RefComTel1='".$_REQUEST['telrefcom11']."',
    		RefComAnt1='".$_REQUEST['antirefcom1']."', 
    		RefComEmp2='".$_REQUEST['refcomemp2']."', 
    		RefComTel2='".$_REQUEST['telrefcom22']."', 
    		RefComAnt2='".$_REQUEST['antirefcom2']."', 
    		ConyugeNom='".$_REQUEST['conyunom']."', ConyugeApPat='".$_REQUEST['conyuape1']."', ConyugeApMat='".$_REQUEST['conyuape2']."', ConyugeCompania='".$_REQUEST['compaconyu']."', ConyugePuesto='".$_REQUEST['puestconyu']."', 
    		BeneficiarioNom='".$_REQUEST['benesol3']."', 
    		BeneficiarioApPat='".$_REQUEST['benesol1']."', 
    		BeneficiarioApMat='".$_REQUEST['benesol2']."', 
    		BeneficiarioDom='".$_REQUEST['textfield48']."', 
    		BeneficiarioCol='".$_REQUEST['textfield49']."', 
    		BeneficiarioCP='".$_REQUEST['textfield50']."', 
    		BeneficiarioPais='".$_REQUEST['textfield51']."', 
    		BeneficiarioTel='".$_REQUEST['textfield52']."', 
    		BeneficiarioCURP='".$_REQUEST['textfield53']."', 
    		BeneficiarioRFC='".$_REQUEST['textfield54']."', 
    		BeneficiarioParent='".$_REQUEST['textfield55']."', 
    		BeneficiarioPorciento='".$_REQUEST['textfield56']."', 
    		BeneficiarioFechNac='".$_REQUEST['textfield57']."', 
    		BeneficiarioMun='".$_REQUEST['textfield58']."', 
    		BeneficiarioEstado='".$_REQUEST['textfield59']."', 
    		BeneficiarioEstCivil='".$_REQUEST['textfield60']."', 
    		BeneficiarioSocConyugal='".$_REQUEST['textfield61']."', 
    		BeneficiarioOcupacion='".$_REQUEST['textfield62']."', 
    		RazonSocial='".$_REQUEST['nomrazsoc2']."', 
    		TelPM='".$_REQUEST['telsol2']."', 
    		RFCPM='".$_REQUEST['rfcsol1']."', 
    		DireccionPM='".$_REQUEST['dirsolpm']."', 
    		NumDireccionPM='".$_REQUEST['dirnumsolpm']."', 
    		EmailPM='".$_REQUEST['mailsol2']."', 
    		ColoniaPM='".$_REQUEST['colsolpm']."', 
    		CiudadPM='".$_REQUEST['cdsolpm']."', 
    		EstadoPM='".$_REQUEST['edosolpm']."', 
    		CPPM='".$_REQUEST['cpsolpm']."', 
    		ActPrinPM='".$_REQUEST['actprinc']."',
    		CantPersonalPM='".$_REQUEST['cantperson']."', 
    		InOperacionesPM='".$_REQUEST['inicoper1']."', 
    		ConstEmpresaPM='".$_REQUEST['inicoper13']."', 
    		AntiguedadPM='".$_REQUEST['antemp']."', 
    		ApoderadoPM='".$_REQUEST['apodsusc']."', 
    		ContEmpNombre='".$_REQUEST['nomconemp']."', 
    		ContEmpSegNombre='".$_REQUEST['segnomconemp']."', 
    		ContEmpApPat='".$_REQUEST['apepaconemp']."', 
    		ContEmpApMat='".$_REQUEST['apemaconemp']."', 
    		ContEmpDireccion='".$_REQUEST['datobdir22']."', 
    		ContEmpColonia='".$_REQUEST['datobcol23']."', 
    		ContEmpCiudad='".$_REQUEST['colsol22']."', 
    		ContEmpEstado='".$_REQUEST['cdsol22']."', 
    		ContEmpCP='".$_REQUEST['lugnacsol22']."', 
    		ContEmpRFC='".$_REQUEST['rfcconemp1']."', 
    		ContEmpTel='".$_REQUEST['telconemp1']."', 
    		ContEmpEmail='".$_REQUEST['mailconemp']."', 
    		ContEmpPuesto='".$_REQUEST['puesconemp']."', 
    		Acc1Nombre='".$_REQUEST['accionista1']."', 
    		Acc1RFC='".$_REQUEST['rfcaccion1']."', 
    		Acc1Porcentaje='".$_REQUEST['%1']."', 
    		Acc2Nombre='".$_REQUEST['accionista2']."', 
    		Acc2RFC='".$_REQUEST['rfcaccion2']."', 
    		Acc2Porcentaje='".$_REQUEST['%2']."', 
    		Acc3Nombre='".$_REQUEST['accionista3']."', 
    		Acc3RFC='".$_REQUEST['rfcaccion3']."', 
    		Acc3Porcentaje='".$_REQUEST['%3']."', 
    		Acc4Nombre='".$_REQUEST['accionista4']."', 
    		Acc4RFC='".$_REQUEST['rfcaccion4']."', 
    		Acc4Porcentaje='".$_REQUEST['%4']."', 
    		Acc5Nombre='".$_REQUEST['accpermor1']."',
    		Acc5RFC='".$_REQUEST['rfcaccpermor1']."', 
    		Acc5Porcentaje='".$_REQUEST['%permoracc1']."', 
    		Acc6Nombre='".$_REQUEST['accpermor2']."', 
    		Acc6RFC='".$_REQUEST['rfcaccpermor2']."', 
    		Acc6Porcentaje='".$_REQUEST['%permoracc2']."', 
    		FechaRegistro='".$_REQUEST['fecharegistro']."', Status='$status'


    		where id='".$_REQUEST['id']."'");
        echo "¡Guardado!";
        break;
    













    case "cancelarcliente":
        include('Conexion3.php');
        mysqli_query($cnx,"delete FROM clientes WHERE Status = ''");
        echo "Cancelado";
        break;






     case "modificarcliente":
        include('Conexion3.php');
        try {
            if($_REQUEST['tipodecliente']=="Persona Fisica" && $_REQUEST['idpf']!=''){
            $result=mysqli_fetch_array(mysqli_query($cnx,"select * FROM clientes WHERE TipoCliente = '".$_REQUEST['tipodecliente']."' and id='".$_REQUEST['idpf']."'"));
            echo json_encode($result);
            }
            if($_REQUEST['tipodecliente']=="Persona Fisica" && $_REQUEST['curppf']!=''){
            $result=mysqli_fetch_array(mysqli_query($cnx,"select * FROM clientes WHERE TipoCliente = '".$_REQUEST['tipodecliente']."' and CURPPF='".$_REQUEST['curppf']."'"));
            echo json_encode($result);
            }
            if($_REQUEST['tipodecliente']=="Persona Moral" && $_REQUEST['idpm']!=''){
            $result=mysqli_fetch_array(mysqli_query($cnx,"select * FROM clientes WHERE TipoCliente = '".$_REQUEST['tipodecliente']."' and id='".$_REQUEST['idpm']."'"));
            echo json_encode($result);
            }
            if($_REQUEST['tipodecliente']=="Persona Moral" && $_REQUEST['rfcpm']!=''){
            $result=mysqli_fetch_array(mysqli_query($cnx,"select * FROM clientes WHERE TipoCliente = '".$_REQUEST['tipodecliente']."' and RFCPM='".$_REQUEST['rfcpm']."'"));
            echo json_encode($result);
            }


            
            if(($_REQUEST['tipodecliente']=="" || $_REQUEST['tipodecliente']=="Persona Fisica" || $_REQUEST['tipodecliente']=="Persona Moral") && $_REQUEST['idpf']=="" && $_REQUEST['curppf']=="" && $_REQUEST['idpm']=="" && $_REQUEST['rfcpm']==""){
                echo "¡Por favor de Ingresar un Dato!";
            }


        } catch (Exception $e) {
            echo "Error";
        }
        
        
        
        break;
    
    


















    default;
        echo 'Error';
    	break;
}


?>