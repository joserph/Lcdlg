@extends('template.layout')

@section('title') Fechas | Panel de Administración @stop

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                Fechas 
                <button type="button" class="pull-right btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i> Agregar</button>
            </h2>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-calendar fa-fw"></i> Fechas registradas
                </li>
            </ol>
        </div>
    </div>
    <div class="text-center before"></div>
    
    <div class="success"></div>
    <!-- Modal Add-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-fw"></i> Agregar fecha</h4>
                </div>
                <div class="modal-body">
                    @include('admin.fechas.form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- .table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-responsive">
            <tr>
                
                <th class="text-center">Fecha</th>
                <!--<th class="text-center">Slug</th> -->
                <th class="text-center">Tipo</th>                 
                <th class="text-center">Acción</th>                
            </tr>            
            @foreach ($fechas as $item)
            <tr class="td-fecha">                
                <td class="text-center">{{ $item->fecha }}</td>
                <!--<td class="text-center">{{ $item->url }}</td>-->
                <td class="text-center">{{ $item->tipo }}</td>                
                <td class="text-center">                                                                                  
                    <a href="{{ route('fechas.edit', $item->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit fa-fw"></i> Editar</a>                            
                </td>                
            </tr>
            @endforeach
        </table>
    </div>
    <!-- /.table -->
    <div class="text-center">{!! $fechas->render() !!}</div>
    
@endsection