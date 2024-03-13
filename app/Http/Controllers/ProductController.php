<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Idea;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        $product = Product::paginate(4);
        return view('products.index', ['products' => $product]);
    }
    public function dashboard(){
        $product = Product::all();
        $product = Product::paginate(4);
        return view('dashboard', ['products' => $product]);
    }

    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([ 
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'))->with('success', 'Data Added Successfully');
    }

    public function edit(Product $product){
       return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');
    }

    public function about(){

        $idea = Product::all();

        return view('products.about', [
            'ideas' => $idea
        ]);
    }
}
