@extends('main')

@section('title','Home')

@section('content')


<div class="container-fluid">
    <div class="row">
         <div class="col-md-8 col-md-offset-2 text-center">
            <h2>ICA Furnitures</h2>
            
            <div class="text-justify">
                <p>At ICA, it just feels a little different. That's because we're a locally owned family business with over 60 years of experience in Southern California. With our low-pressure selling style and friendly atmosphere, we think you'll appreciate the difference. But don't take our word for it—see for yourself.</p>

                <p>ICA Furniture was founded in 1954 by Jim & Esther Navarra and is still owned and operated by the Navarra family. The 900 employee company features six Navarra family members, three of whom are third generation retailers. Jerry and Ann Navarra joined the business in the early 1970’s and oversaw the opening in 1979 of their first satellite store in San Marcos. Over the next 10 years, new ICA locations were added in Chula Vista, El Cajon, and Scripps Ranch. In 2000, the original store in downtown San Diego was replaced with a large format unit on Morena Boulevard. In 2005, the company streamlined its operations by opening a 450,000 square foot distribution center. In the last few years ICA has started expanding outside the San Diego area into Murrieta, Corona, Rancho Cucamonga, South Bay/Torrance, Anaheim, Laguna Hills, and Fountain Valley.</p>
            <hr>
            </div>
        </div>
    </div><!-- End row-->

    <div class="row">
        <div class="container">
            <ul class="nav nav-tabs">
            <li role="presentation"  id="tabs1"  data-toggle="collapse" data-target="#tabs-1" ><a >Most Popular</a></li>
            <li role="presentation"  id="tabs2" data-toggle="collapse" data-target="#tabs-2"><a >Latest</a></li>
            </ul>
            <div class="row">
                <div id="tabs-1" class="collapse">
                @foreach($populars as $product)
                    <div class="col-sm-6 col-md-3 col">
                        <div class="thumbnail">
                            <img src="{{$product->image}}" alt="..." style="width: 300px; height: 250px">
                            <div class="caption">
                                <h3>{{$product->name}}</h3>
                                
                                <p>{{$product->details}}</p>
                                <p><h3>$ {{$product->price}}</h3></p>
                                <p><a href="{{route('products.show',$product->id)}}" class="btn btn-default" role="button">View Details</a> <a href="{{ route('cart.add',$product->id) }}" class="btn btn-warning" role="button">Add to Cart</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="tabs-2" class="collapse"">
                @foreach($latest as $product)
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{$product->image}}" alt="..." style="width: 300px; height: 250px">
                            <div class="caption">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->details}}</p>
                                <p><h3>$ {{$product->price}}</h3></p>
                                <p><a href="{{route('products.show',$product->id)}}" class="btn btn-default" role="button">View Details</a> <a href="{{ route('cart.add',$product->id) }}" class="btn btn-warning" role="button">Add to Cart</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>    
        </div>
    </div>
    <div class="container">
        <div class="row text-center" style="margin-bottom: 25px;">
        <h2><u>ALL PRODUCTS<u></h2>

        </div>
        <div class="row">
            @foreach($products as $product)   
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="{{$product->image}}" alt="..." style="width: 320px; height: 250px">
                  <div class="caption">
                    <h3>{{$product->name}}</h3>
                    
                    <p>{{$product->details}}</p>
                    <p><h3>$ {{$product->price}}</h3></p>
                    <p><a href="{{route('products.show',$product->id)}}" class="btn btn-default" role="button">View Details</a> <a href="{{ route('cart.add',$product->id) }}" class="btn btn-warning" role="button">Add to Cart</a></p>
                  </div>
                </div>
            </div>
            @endforeach
        </div><!-- End row-->
    </div>
    


@endsection


