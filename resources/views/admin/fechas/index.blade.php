@extends('template.layout')

@section('title') Fechas | Panel de Administración @stop

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                Fechas 
                <a href="{{ route('fechas.create') }}" class="pull-right btn btn-success" data-toggle="tooltip" data-placement="top" title="Agregar fecha"><i class="fa fa-plus-circle fa-fw"></i> Agregar</a>
            </h2>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-calendar fa-fw"></i> Fechas registradas
                </li>
            </ol>
        </div>
    </div>

    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>
                <th>#</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Slug</th>  
                <th class="text-center">Tipo</th>                 
                <th class="text-center">Acción</th>                
            </tr>            
            @foreach ($fechas as $item)
            <tr>
                <td>{{ $contador += 1 }}</td>
                <td class="text-center">{{ $item->fecha }}</td>
                <td class="text-center">{{ $item->url }}</td>
                <td class="text-center">{{ $item->tipo }}</td>                
                <td class="text-center">                                                                                  
                    <a href="{{ route('fechas.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</a>                                
                </td>                
            </tr>
            @endforeach
        </table>
    </div>
    <!-- /.table -->
@endsection