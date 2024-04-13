<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Company;
use App\Models\Subsidiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EcommerceController extends Controller{
    public function index(){
        $featurePro =DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('subsidiaries', 'products.subsidiary_id', '=', 'subsidiaries.id')
            ->select('products.*', 'categories.category_name','subsidiaries.subsidiary_name')
            ->where('product_area',1)
            ->get();

        return view('frontEnd.home.home',[
            'categories'=>Category::all(),
            'companies'=>Company::all(),
            'subsidiaries'=>Subsidiary::all(),
            'featurePro'=>$featurePro
        ]);
    }
    public function shop(){
        return view('frontEnd.shop.shop');
    }
    public function cart(){
        return view('frontEnd.cart.cart');
    }public function checkout(){
        return view('frontEnd.checkout.checkout');
    }public function contact_us(){
        return view('frontEnd.contact_us.contact_us');
    }
}
