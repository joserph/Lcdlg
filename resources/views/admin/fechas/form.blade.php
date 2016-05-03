<div class="error"></div>
{!! Form::open(['route' => 'fechas.store', 'class' => 'add-fecha']) !!}
    {!! Form::hidden('id_user', Auth::user()->id) !!}
    {!! Form::hidden('update_user', Auth::user()->id) !!}
	{!! Form::label('fecha', 'Fecha') !!}
	<div class="row">
    		<div class="col-md-6">
    			{!! Form::text('fecha', null, ['class' => 'form-control', 'placeholder' => 'Fecha en letras', 'autofocus']) !!}
    		</div>
    	</div>
    	{!! Form::label('tipo', 'Tipo') !!}
    	<div class="row">
    		<div class="col-md-4">
    			{!! Form::select('tipo', ['año' => 'Año', 'mes' => 'Mes'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}
    		</div>
    	</div><br>
	
    	<button tipe="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar</button>
{!! Form::close() !!}
