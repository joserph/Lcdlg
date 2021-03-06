@extends('template.layout')

@section('title') Fechas | Panel de Administración @stop

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <i class="fa fa-calendar fa-fw"></i> Fechas 
                <button type="button" class="pull-right btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle fa-fw"></i> Agregar</button>
            </h2>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-bars fa-fw"></i> Lista de fechas
                </li>
            </ol>
        </div>
    </div>
    
    <div class="success"></div>
    <div class="alert alert-danger deleteFecha" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p><i class="fa fa-trash fa-fw"></i> Fecha eliminada con exito!</p>
    </div>
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
                <th class="text-center">Slug</th>
                <th class="text-center">Tipo</th>                 
                <th class="text-center">Acción</th>                
            </tr>            
            
            <tbody id="tr-fecha"></tbody>
            
        </table>
    </div>
    <!-- /.table -->
    

    <!-- Modal Edit-->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-circle fa-fw"></i> Editar fecha</h4>
                </div>
                <div class="modal-body">
                    
                    @include('admin.fechas.edit')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script src="{{ asset('js/myScript.js') }}"></script>
    @endsection
@endsection