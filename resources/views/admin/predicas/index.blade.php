@extends('template.layout')

@section('title') Predicas | Panel de Administración @stop

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-play fa-fw"></i> Predicas 
                <a href="{{ route('predicas.create') }}" class="pull-right btn btn-success"><i class="fa fa-plus-circle fa-fw"></i> Agregar</a>
            </h2>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-bars fa-fw"></i> Lista de predicas
                </li>
            </ol>
        </div>
    </div>

    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>                
                <th class="text-center">Título</th>
                <th class="text-center">Predicador</th>         
                <th class="text-center">Fecha</th> 
                <th class="text-center">Acción</th>                
            </tr>
            @foreach($predicas as $item) 
            <tr>
                <td>{{ $item->title }} </td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->fecha }} </td>
                <td></td>
            </tr>          
            @endforeach
            
        </table>
    </div>
    <!-- /.table -->
    {!! $predicas->render() !!}
@endsection