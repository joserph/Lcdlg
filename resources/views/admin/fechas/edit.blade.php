<div class="error"></div>
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
<input type="hidden" id="id">
{!! Form::hidden('update_user', Auth::user()->id, ['id' => 'updateUser']) !!}
{!! Form::label('fecha', 'Fecha') !!}
<div class="row">
	<div class="col-md-6">
		{!! Form::text('fecha', null, ['class' => 'form-control', 'id' => 'fechaEdit', 'placeholder' => 'Fecha en letras', 'autofocus']) !!}
	</div>
</div>
{!! Form::label('tipo', 'Tipo') !!}
<div class="row">
	<div class="col-md-4">
		{!! Form::select('tipo', ['año' => 'Año', 'mes' => 'Mes'], null, ['class' => 'form-control', 'id' => 'tipoEdit', 'placeholder' => 'Seleccione...']) !!}
	</div>
</div><br>
	
<button tipe="submit" class="btn btn-warning" id="edit-fecha"><i class="fa fa-plus-circle"></i> Actualizar</button>

