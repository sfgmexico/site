


function cambiacartas(){
	alert('entra function');
	if(document.getElementById('TipoCliente').value==""){
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='none';
	}else if(document.getElementById('TipoCliente').value=="1"){
		document.getElementById("pfa").style.display = "block";
		document.getElementById('pm').style.display='none';
	}else if(document.getElementById('TipoCliente').value=="2"){
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='block';
	}
	


}