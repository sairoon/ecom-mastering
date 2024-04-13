<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\Models\Subsidiary;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addcart(Request $request){
        $product=Product::find($request->product_id);
        /*return $product;*/
        Cart::add([
            'id'=> $product->id,
            'name'=> $product->product_name,
            'price'=> $product->product_price,
            'qty'=>1,
            'weight'=>500,
        ]);
        return redirect('/show-cart');
    }
    public function showCart(){
        return view('frontEnd.cart.cart',[
            'categories'=>Category::all(),
            'companies'=>Company::all(),
            'subsidiaries'=>Subsidiary::all(),
            'carts'=>Cart::content()
        ]);
    }
    public function updateCart(Request $request){
        Cart::update(
            $request->rowId,
            $request->qty,
        );
        return back();
    }
    public function deleteCart($id){
        Cart::remove($id);
        return back();
    }
}
