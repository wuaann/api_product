<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function index(){
        $product = Product::all();
        return $product;
    }

    protected function show(string $id){
        $product = Product::find($id);
        if (isset($product)) {
            return $product;
        }else return 'product is not found';
    }

    protected  function store(Request $request){
        Product::create($request->all());
        return 'done';
    }
}
