<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    //show all product
    public function index(){
        // dd(request()->tag);
        
        $products = Products::all();

        return view('shop.all_products', ["products" => $products]);
    
            }
public function index_landing(){
    $products=Products::all();

        $discountPeoducts = Products::all()->where('discount', '20');
        // dd($discountPeoducts );
        return view('index', ['products' => $products, 'discountProducts' => $discountPeoducts]);
}


            //store new product
    public function store(Request $request){
        // dd(request()->tag);
        $formFields = $request->validate([
            'name'=>['required', 'min:3'],
            'price'=>['required'],
            'color'=>['required', 'min:3'],
            'images'=>['required'],
            'tags'=>['required', 'min:3'],
            'quantity'=>['required'],
            'description'=>['required', 'min:3'],
            'category'=>['required', 'min:3'],
            
        ]);

        $products = Products::create($formFields);

        return redirect()->back();
    

            }


public function show($id){
        $product = Products::find($id);
        return view('shop.product_details', ['product' => $product]);
}

}


