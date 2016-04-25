@extends('template.layout')

@section('title') Fechas | Panel de Administración @stop

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                Fechas 
            </h2>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-calendar fa-fw"></i> Agregar fecha
                </li>
            </ol>
        </div>
    </div>
    <!-- Form -->
	{!! Form::open(['route' => 'fechas.store']) !!}
		{!! Form::label('fecha', 'Fecha') !!}
		<div class="row">
      		<div class="col-md-3">
      			{!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'dd/mm/aaaa', 'autofocus']) !!}
      		</div>
      	</div>
      	{!! Form::label('tipo', 'Tipo') !!}
      	<div class="row">
      		<div class="col-md-2">
      			{!! Form::select('tipo', ['año' => 'Año', 'mes' => 'Mes'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}
      		</div>
      	</div><br>
		
      	<button tipe="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar</button>
	{!! Form::close() !!}
@endsection