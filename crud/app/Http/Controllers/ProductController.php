<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        
        return view('products.create');
    }

    public function store(Request $request){

        // dd($request->all());
        // return view('products.create');

        $data = $request->validate([
            'name'=> 'required',
            'qty'=> 'required|numeric',
            'price'=> 'required|decimal:0,2',
            'description'=> 'nullable',
        ]);

        $product = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(product $product){

        return view('products.edit',['product'=>$product]); 
    }
    public function update(Request $request,product $product){
        $data = $request->validate([
            'name'=> 'required',
            'qty'=> 'required|numeric',
            'price'=> 'required|decimal:0,2',
            'description'=> 'nullable',
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('success','Product updated sucessfully'); 
    }

    public function delete(product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success','Product deleted sucessfully');
    }

}
