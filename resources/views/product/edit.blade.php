@extends('main')

@section('title', 'Edit Product')

@section('content')
	<div class="container">
		<div class="row">
		<h2 class="text-center">EDIT PRODUCT</h2>
		{!!Form::model($product, ['route'=>['products.update',$product->id], 'method'=> 'PUT']) !!}
			<div class="col-md-8 col-md-offset-2">
				<div class="panel ">
				  <div class="panel-heading">
				  	{{form::label('name','Name')}}
				  	{{form::text('name', null, ['class'=>"form-control input-lg "])}}
				  </div>
				
				  <div class="panel-body">
				  	{{form::label('details','Product Details')}}
				    {{form::textarea('details',null,['class'=>"form-control"])}}<br>
				    {{form::label('status','Product status')}}
				    {{form::text('status',null,['class'=>"form-control"])}}<br>
				    {{form::label('price','Product price')}}
				    {{form::text('price',null,['class'=>"form-control"])}}<br>
				    {{form::label('image','Product Image url')}}
				    {{form::text('image',null,['class'=>"form-control"])}}
				  </div>

				</div>
				<div class="row">
					<div class="col-sm-6 col-md">
						{{form::submit('Save Changes',['class'=>'btn btn-success '])}}
						{!! Html::linkRoute('products.show','Cancel',array($product->id), array('class'=>'btn btn-danger')) !!}
					</div>
				</div>
			</div>
			
		</div>
		{!!form::close()!!}
	</div> <!-- end .row(form) -->
	

@endsection