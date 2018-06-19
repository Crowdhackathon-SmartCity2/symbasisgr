<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showAllProducts()
    {
        return response()->json(Product::all());
    }

    public function findProducts($name)
    {
       // dd(Product::where('name' , '%LIKE%', $name)->get());
        return response()->json(Product::with('categories')->where('name' , 'LIKE', '%'.$name.'%')->get());
    }

    
}