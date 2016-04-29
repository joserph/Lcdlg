$(document).ready(function()
{
	/*
	 * Add fecha.
	 */
	var formFecha = $('.add-fecha');
	formFecha.on('submit', function()
	{
		$.ajax({
			type: formFecha.attr('method'),
			url: formFecha.attr('action'),
			data: formFecha.serialize(),
			beforeSend: function()
			{
				//$('.before').append('<img src="images/before.gif" alt="before" />');
			},
			complete: function(data)
			{
				//ver si quitando esto funciona.
			},
			success: function(data)
			{
				$('.before').hide();
				$('.error').html('');
				$('.success').hide().html('');
				if(data.success == false)
				{
					var errors = '';
						errors += '<div class="alert alert-warning">';
						errors += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>';
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					var successMessage = '';
						successMessage += '<div class="alert alert-success">';
						successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
						successMessage += '</div>';
					$(formFecha)[0].reset();
					List();										
					$('#myModal').modal('hide');
					//location.reload();
					$('.success').show().html(successMessage).fadeOut(4000);
				}
			},
			error: function(errors)
			{
				$('.before').hide();
				$('.error').html(errors);
			}
		});
		return false;
	});
	/*
	 * End Add fecha.
	 */
	List();
	$('.deleteFecha').hide();
});

function List()
{
	/*
	 * List fecha.
	 */
	var trDatos = $('#tr-fecha');
	var route = 'http://lcdlg.dev/fecha';
	$('#tr-fecha').empty();
	$.get(route, function(respuesta)
	{
		$(respuesta).each(function(key, value)
		{
			trDatos.append('<tr><td class="text-center">'+ value.fecha +'</td><td class="text-center">'+ value.tipo +'</td><td class="text-center"><button value='+ value.id +' onclick="Mostrar(this);" data-toggle="modal" data-target="#myModal2" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</button> <button value='+ value.id +' onclick="Eliminar(this);" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i> Eliminar</button></td></tr>');
		});
	});
	/*
	* End List fecha.
	*/
}
/*
* Eliminar fecha.
*/
function Eliminar(boton)
{
	var route = 'http://lcdlg.dev/fechas/'+boton.value+'';
	var token = $("#token").val();
	var action = confirm("¿Seguro de eliminar fecha?");
	if(action)
	{
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'DELETE',
			dataType: 'json',
			success: function()
			{
				List();
				$('.deleteFecha').show().fadeOut(4000);		
			}
		});
	}
	
}
/*
* End Eliminar fecha.
*/


/*
* Edit fecha.
*/
function Mostrar(boton)
{
	var route = 'http://lcdlg.dev/fechas/'+ boton.value +'/edit';
	$.get(route, function(respuesta)
	{
		$('#fechaEdit').val(respuesta.fecha);
		$('#tipoEdit').val(respuesta.tipo);
		$('#id').val(respuesta.id);
	});
}

$('#edit-fecha').click(function()
{
	//var formEdit = $('.formEdit');
	var value = $('#id').val();
	var fecha = $('#fechaEdit').val();
	var tipo = $('#tipoEdit').val();
	var route = 'http://lcdlg.dev/fechas/'+value+'';
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {fecha: fecha, tipo: tipo},
		success: function(data)
		{
			if(data.success == false)
			{

			}else{
				var successMessage = '';
				successMessage += '<div class="alert alert-warning">';
				successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				successMessage += '<p><i class="fa fa-check fa-fw"></i>' + data.message + '</p>';
				successMessage += '</div>';
				List();
				$('#myModal2').modal('hide');
				$('.success').show().html(successMessage).fadeOut(4000);
			}
			
		}
	});
});
/*
 * End Edit fecha.
 */
