<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    //
    public function getAddToCart($id)
    {
	    $product = Product::find($id);

		$item = Cart::add(['id' => $product->id, 'name' => $product->title, 'qty' => 1, 'price' => $product->price]);

		Session::flash('Success','The product was successfully added to cart');
		
		return redirect()->back();
	}

	public function getCartIndex()
    {
    	# code...
    	$items = Cart::content();

    	return view('cart.cartIndex')->withItems($items);
    }

    public function DeleteItem(Request $request,$rowId)
   {
     # code...
    
    Cart::remove($rowId);
    Session::flash('Success','Item deleted successfully');
    return redirect()->back();

   }

    public function UpdateItem(Request $request, $rowId)
   {
   	# code...
    Cart::update($rowId,$request->qty);
    return redirect()->back();
   	
   }



}
