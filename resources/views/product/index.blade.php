@extends('main')

@section('title','AdminIndex')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-2">
				<h2 class="text-center" style="margin-bottom: 50px;"><u>Amin Panel</u></h2>
				<a href="{{ route('products.create') }}" class="btn btn-default">New Product +</a>
				<hr>
				<table class="table">
				  <thead>
				  	<th>#</th>
				  	<th>Name</th>
				  	<th>Price($)</th>
				  	<th></th>
				  	
				  </thead>
				  <tbody>
				  	@foreach($products as $product)
				  		<tr>
				  			<td>{{$product->id}}</td>
				  			<td>{{$product->name}}</td>
				  			<td>{{$product->price}}</td>
				  			<td class="pull-left">
                                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-default">Update</a>
                            </td>
				  			<td class="pull-left">
                                {!!Form::open(['route'=>['products.destroy',$product->id],'method'=>'DELETE'])!!}        
                                    <button class="btn btn-default" type="submit"><i class="fa fa-trash-o"></i></button>
                                {!!Form::close()!!}
                            </td>   
				  		</tr>
				  	@endforeach
				  </tbody>
				</table>								
			</div> 
		</div>
	</div>
	<div class="container text-center">
		{{$products->links()}}
	</div>
@endsection