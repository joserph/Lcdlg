<div class="error"></div>
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
<input type="hidden" id="id">
{!! Form::label('nombre', 'Nombre') !!}
<div class="row">
	<div class="col-md-6">
		{!! Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombreEdit', 'placeholder' => 'Nombre del predicador', 'autofocus']) !!}
	</div>
</div>
<br>

<button tipe="submit" class="btn btn-success" id="edit-predicador"><i class="fa fa-plus-circle"></i> Agregar</button>

