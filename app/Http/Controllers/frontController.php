<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class frontController extends Controller
{
    public function products(){
        $products = Product::orderBy("id",'desc')->paginate(9);
        return view('products',compact('products'));
    }
}
