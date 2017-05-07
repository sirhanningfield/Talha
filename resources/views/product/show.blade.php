@extends('main')

@section('title','Product Detail')

@section('content')

	<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="#">{{$product->category}}</a>
                    </li>
                    <li><a href="#">{{$product->subcategory}}</a>
                    </li>
                    <li>{{$product->title}}</li>
                </ul>

            </div>

            <div class="col-md-3">
                <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Categories</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked category-menu">
                            <li class="active">
                                <a href="#">Men <span class="badge pull-right"></span></a>
                                <ul>
                                    <li><a href="#">T-shirts</a>
                                    </li>
                                    <li><a href="#">Shirts</a>
                                    </li>
                                    <li><a href="#">Pants</a>
                                    </li>
                                    <li><a href="#">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#">Ladies  <span class="badge pull-right"></span></a>
                                <ul>
                                    <li><a href="#">T-shirts</a>
                                    </li>
                                    <li><a href="#">Skirts</a>
                                    </li>
                                    <li><a href="#">Pants</a>
                                    </li>
                                    <li><a href="#">Accessories</a>
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- *** MENUS AND FILTERS END *** -->

            <div class="col-md-9">

                <div class="row" id="productMain">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <img src={{asset('images/product/default.jpg')}} alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">{{$product->title}}</h1>
                            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details</a>
                            </p>
                            <p class="price">$ {{$product->price}}</p>

                            <p class="text-center buttons">
                                <a href="{{ route('cart.add',$product->id) }}" class="btn btn-primary btn-block"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                            </p>
                        </div>
                    </div>
                </div>


                <div class="box" id="details">
                    <p>
                        <h4>Product details</h4>
                        <blockquote>
                            <p><em>{{$product->description}}.</em>
                            </p>
                        </blockquote>
                        <hr>                            
                </div>                      
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
        <!-- /#content -->

@endsection