@extends('template.layout')

@section('title') Agregar predica | Panel de Administración @stop

@section('content')
    <!-- Breadcrumb -->
    <legend><h3><i class="fa fa-plus-circle fa-fw"></i> Agregar predica</h3></legend>
    <ul class="breadcrumb">
        <li><a href="/">Panel de administración</a></li>
        <li><a href="{{ URL::route('predicas.index') }}">Lista de Predicas</a></li>
        <li class="active">Agregar predica</li>
    </ul>
    <!-- Form -->
	{!! Form::open(['route' => 'predicas.store']) !!}
        {!! Form::label('title', 'Título') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título de la predica', 'autofocus']) !!}
            </div>
        </div>
        {!! Form::label('fecha', 'Fecha') !!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::date('fecha', null, ['class' => 'form-control', 'placeholder' => 'dd/mm/aaaa']) !!}
            </div>
        </div>
        {!! Form::label('mes', 'Mes') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::text('mes', null, ['class' => 'form-control', 'placeholder' => 'Tag mes de la predica']) !!}
            </div>
        </div>
        {!! Form::label('anio', 'Año') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::text('anio', null, ['class' => 'form-control', 'placeholder' => 'Tag año de la predica']) !!}
            </div>
        </div>
        {!! Form::label('predicador', 'Predicador') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::text('predicador', null, ['class' => 'form-control', 'placeholder' => 'Seleccione predicador']) !!}
            </div>
        </div>
        {!! Form::label('content', 'Contenido') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Contenido de la predica']) !!}
            </div>
        </div>
        {!! Form::label('audio', 'Audio') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('audio', null, ['class' => 'form-control', 'placeholder' => 'Colocar audio']) !!}
            </div>
        </div>
        {!! Form::label('video', 'Video') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('video', null, ['class' => 'form-control', 'placeholder' => 'Colocar video']) !!}
            </div>
        </div>
        {!! Form::label('estatus', 'Estatus') !!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::select('estatus', [
                'publicado' => 'Publicado',
                'menu' => 'En menú',
                'oculto' => 'Oculto'], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar estatus']) !!}
            </div>
        </div>
        <!-- Habilitar comentarios -->
        <br>   
        {!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Agregar', ['type' => 'submit', 'class' => 'btn btn-success']) !!} 
    {!! Form::close() !!}
@endsection