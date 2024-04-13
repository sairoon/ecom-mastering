<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Company;
use App\Models\Subsidiary;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index(){
        return view('admini.product.product',[
            'categories'=>Category::all(),
            'companies'=>Company::all(),
            'subsidiaries'=>Subsidiary::all(),
            ]);
    }
    public function saveProduct(Request $request){
        $product =new Product();
        $product->category_id = $request->category_id;
        $product->company_id = $request->company_id;
        $product->subsidiary_id = $request->subsidiary_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->discount_percent = $request->discount_percent;
        $product->discounted_price = $request->discounted_price;
        $product->description = $request->description;
        $product->image = $this->saveImage($request);
        $product->product_area = $request->product_area;
        $product->statusProduct = $request->statusProduct;
        $product->save();
        return redirect('/manage-product');
    }
    private function saveImage(Request $request){
        $image =$request->file('image');
        $imageName=rand().'.'.$image->extension();
        $dir='admini/image/';
        $imgUrl=$dir.$imageName;
        $image->move($dir,$imageName);
        return $imgUrl;
    }
    public function manageProduct(){
        return view('admini.product.manage-product',[
            'products'=>Product::all(),
        ]);
    }
    public function deleteProduct($id){
        $product=Product::find($id);
        if ($product->image){
            unlink($product->image);
            $product->delete();
            return back();
        }else{
            $product->delete();
            return back();
        }
    }
    public function statusProduct($id){
        $product=Product::find($id);
        if($product->statusProduct==1){
            $product->statusProduct=0;
            $product->save();
            return back();
        }
        else{
            $product->statusProduct=1;
            $product->save();
            return back();
        }
    }
}
