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
                
                <th class="text-center">Nombre</th>
                <th class="text-center">Slug</th>         
                <th class="text-center">Acción</th>                
            </tr>            
            
            <tbody id="tr-predicador"></tbody>
            
        </table>
    </div>
    <!-- /.table -->
@endsection