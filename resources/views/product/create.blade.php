@extends('main')

@section('title','Add Product')

@section('content')

	<div id="content">
        <div class="container">
			<div class="box" id="contact">
				{{Form::open(['route'=>'products.store','files'=>true])}}
					<div class="row text-center">
						<h3>ADD NEW PRODUCT</h3>
					</div><br><br>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group">
								{{form::label('name','Product Name')}}
								{{form::text('name',NULL,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{{form::label('image','Product image url')}}
								{{form::text('image',NULL,['class'=>'form-control'])}}
							</div>								
						</div>
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group">
								{{form::label('details','Product Details')}}
								{{form::textarea('details',NULL,['class'=>'form-control','rows'=>5])}}
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-md-offset-2">
							{{form::label('status','status')}}
							{{form::text('status',NULL,['class'=>'form-control'])}}
						</div>				
											
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-2">
							<div class="form-group">
								{{form::label('price','Price')}}
								{{form::text('price',NULL,['class'=>'form-control'])}}
								
							</div>
						</div>										
					</div><br>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							{{form::submit('Add new Product',['class'=>'btn btn-primary btn-block'])}}
						</div>
					</div><br>					
				{{Form::close()}}
			</div>
        </div>
    </div>

@endsection