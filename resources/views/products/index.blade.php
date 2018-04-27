@extends('layouts.app')

@section('content')
<div class="container">      
	


<div class="panel-heading">
	<h3>Productos 
		<a href="{{ route('products.create') }}" 
		class="btn btn-success">
			Crear
		</a>
	</h3>
</div>


	<br><hr>
	<div>
		<table class="table table-bordered">
			<thead>
				<th>Id</th>
				<th>Nombre</th>
				{{--<th>Descripcion</th>  --}}
				<th>Precio</th>
			</thead>
				@foreach ($products as $product)
					<tr>
						<td>{{ $product->id}}</td>
						<td>{{ $product->name}}</td>
						{{-- <td>{{ $product->description}}</td> --}}
						<td>{{ $product->price}}</td>
							<td width="10px">
							{!! Form::open(['route' => ['products.destroy', $product->id],
							'method'=> 'DELETE']) !!}
								<button class="btn btn-sm btn-danger">
									Eliminar
								</button>
							{!! Form::close() !!}
							</td>
					</tr>
				@endforeach
		</table>
	</div>
{{$products->render()}}
</div>
@endsection