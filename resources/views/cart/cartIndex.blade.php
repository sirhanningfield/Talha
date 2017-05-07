@extends('main')

@section('title','My Cart')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<table class="table">
				<thead>
					<th>Product</th>
                    <th>Quantity</th>
					<th>Unit price</th>                                   
                    <th>Total</th>
				</thead>
				<tbody>
					 @foreach($items as $item)
                        <tr>
                        <td><a href="#">{{$item->name}}</a></td>
                        <td width="8">{{$item->qty}}</td>                          
                        <td >${{$item->price}}</td>
                        <td >${{$item->price * $item->qty}}</td>
                     </tr>
                    @endforeach
				</tbody>
				<tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <th colspan="3">${{Cart::subtotal()}}</th>
                    </tr>
                </tfoot>
				</table>
				<a href="{{ route('cart.delete') }}" class="btn btn-danger">Checkout</a>
			</div>
		</div>
	</div>
@endsection