function enviarCorreo(formulario)
{
	if(formulario == 2)
	{
		var nombre = $('#trabaje #nombre').val();
		var email = $('#trabaje #email').val();
		var mensaje = $('#trabaje #mensaje').val();
		var ajax_Data = {'nombre': nombre ,'email' : email, 'mensaje' : mensaje };
		$.ajax({
		type : "post", 
		url : "enviarCorreo.php",  
		dataType : 'json',
		data : ajax_Data,
		success : function(respuesta){
				alert(respuesta["Mensaje"]);
		},
		error : function(){
				alert('Presentamos un problema en nuestro servidor , prueba en 5 minutos - Por favor');
		}

	});


	}
	if(formulario == 1)
	{
		var nombre = $('#contactenos #nombre').val();
		var email = $('#contactenos #email').val();
		var mensaje = $('#contactenos #mensaje').val();
		var ajax_Data = {'nombre': nombre ,'email' : email, 'mensaje' : mensaje };
		$.ajax({
		type : "post", 
		url : "enviarCorreo.php",  
		dataType : 'json',
		data : ajax_Data,
		success : function(respuesta){
				alert(respuesta["Mensaje"]);
		},
		error : function(){
				alert('Presentamos un problema en nuestro servidor , prueba en 5 minutos - Por favor');
		}

	});
	}



}