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
        {!! Form::hidden('id_user', Auth::user()->id) !!}
        {!! Form::hidden('update_user', Auth::user()->id) !!}
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
        {!! Form::label('mes_id', 'Mes') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::select('mes_id', $meses, null, ['class' => 'form-control select-mes', 'placeholder' => 'Seleccione tag mes']) !!}
            </div>
        </div>
        {!! Form::label('anio_id', 'Año') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::select('anio_id', $anios, null, ['class' => 'form-control select-anio', 'placeholder' => 'Seleccione tag año']) !!}
            </div>
        </div>
        {!! Form::label('predicador_id', 'Predicador') !!}
        <div class="row">
            <div class="col-md-5">
                {!! Form::select('predicador_id', $predicadores, null, ['class' => 'form-control select-pre', 'placeholder' => 'Seleccione predicador']) !!}
            </div>
        </div>
        {!! Form::label('content', 'Contenido') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('content', null, ['class' => 'form-control content', 'placeholder' => 'Contenido de la predica']) !!}
            </div>
        </div>
        {!! Form::label('audio', 'Audio') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('audio', null, ['class' => 'form-control audio', 'placeholder' => 'Colocar audio']) !!}
            </div>
        </div>
        {!! Form::label('video', 'Video') !!}
        <div class="row">
            <div class="col-md-10">
                {!! Form::textarea('video', null, ['class' => 'form-control video', 'placeholder' => 'Colocar video']) !!}
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

    @section('scripts')
        <script>
            $('.select-mes').chosen();
            $('.select-anio').chosen();
            $('.select-pre').chosen();
            $('.content').trumbowyg();
            $('.audio').trumbowyg();
            $('.video').trumbowyg();
        </script>
    @endsection
@endsection