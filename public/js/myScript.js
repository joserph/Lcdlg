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
						errors += '<h4><i class="fa fa-exclamation-triangle fa-fw"></i> Por favor corrige los siguentes errores:</h4>';
					for(datos in data.errors)
					{
						errors += '<li>' + data.errors[datos] + '</li>'
					}
						errors += '</div>';
					$('.error').html(errors);
				}else{
					var successMessage = '';
						successMessage += '<div class="alert alert-warning">';
						successMessage += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						successMessage += '<h4><i class="fa fa-check fa-fw"></i>' + data.message + '</h4>';
						successMessage += '</div>';
					$(formFecha)[0].reset();										
					$('#myModal').modal('hide');
					location.reload();
					$('.success').show().html(successMessage);
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