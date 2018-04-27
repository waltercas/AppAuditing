@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8  col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Crear Producto</h2>
				</div>
					<hr>
				<div class="panel-body">
					{!! Form::open(['route' => 'products.store']) !!}
						{{ Form::hidden('user_id', auth()->user()->id) }}

						<div class="form-group">
						    {{ Form::label('name', 'Nombre del producto') }}
						    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
						</div>
						<div class="form-group">
						    {{ Form::label('description', 'Descripcion') }}
						    {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) }} 
						</div>
						<div class="form-group">
						    {{ Form::label('price', 'Precio') }}
						    {{ Form::text('price', null, ['class' => 'form-control', 'id' => 'price']) }}
						</div>
						<div class="form-group">
						    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
						</div>
					{!! Form::close() !!}
                </div>
			</div>
		</div>
	</div>
</div>


@endsection