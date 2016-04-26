$(document).ready(function()
{
	var formFecha = $('.add-fecha');
	formFecha.on('submit', function()
	{
		$.ajax({
			type: formFecha.attr('method'),
			url: formFecha.attr('action'),
			data: formFecha.serialize(),
			beforeSend: function()
			{
				$('.before').append('<img src="images/before.gif" alt="before" />');
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
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>'
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					$(formFecha)[0].reset();
					$('.success').show().html(data.message);
					//location.reload();
					$('#myModal').modal('hide');
					//Ejemplo
					var task = '<tr id="task' + data.id + '"><td>' + data.id + '</td><td>' + data.task + '</td><td>' + data.description + '</td><td>' + data.created_at + '</td>';
                task += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                task += '<button class="btn btn-danger btn-xs btn-delete delete-task" value="' + data.id + '">Delete</button></td></tr>';
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
});