@extends('template.layout')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>Welcome to Auth system by <strong><a href="http://twitter.com/joserph_a" target="_blanck">@joserph_a</a></strong></p>            
        </div>
    </div>
    <div class="row">
    	@if (Auth::guest())
		@else
			@if(Auth::user()->role == 'admin' || Auth::user()->role == 'editor')
				<div class="col-sm-6 col-md-4">
		    		<div class="thumbnail">
		    			<div class="text-center">
							<h3><i class="fa fa-users fa-fw fa-5x"></i></h3>
		      			</div>
		      			<div class="caption">
					        <h3>Admin Usuarios</h3>
					        <p>Ver y editar los usuarios registrados.</p>
					        <p><a href="{{ route('admin.index') }}" class="btn btn-primary" role="button">Ver usuarios</a></p>
		      			</div>
		    		</div>
		  		</div>
			@endif
		@endif
  		
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
    			<div class="text-center">
					<h3><i class="fa fa-calendar fa-fw fa-5x"></i></h3>
      			</div>
      			<div class="caption">
			        <h3>Fechas</h3>
			        <p>Ver, crear y editar los tags fechas.</p>
			        <p><a href="{{ route('fechas.index') }}" class="btn btn-primary" role="button">Ver fechas</a></p>
      			</div>
    		</div>
  		</div>
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
    			<div class="text-center">
					<h3><i class="fa fa-bullhorn fa-fw fa-5x"></i></h3>
      			</div>
      			<div class="caption">
			        <h3>Predicadores</h3>
			        <p>Ver, crear y editar los predicadores.</p>
			        <p><a href="{{ route('predicadores.index') }}" class="btn btn-primary" role="button">Ver predicadores</a></p>
      			</div>
    		</div>
  		</div>
  		<div class="col-sm-6 col-md-4">
    		<div class="thumbnail">
    			<div class="text-center">
					<h3><i class="fa fa-play fa-fw fa-5x"></i></h3>
      			</div>
      			<div class="caption">
			        <h3>Predicas</h3>
			        <p>Ver, crear y editar los predicas.</p>
			        <p><a href="{{ route('predicas.index') }}" class="btn btn-primary" role="button">Ver predicas</a></p>
      			</div>
    		</div>
  		</div>
	</div>

@endsection