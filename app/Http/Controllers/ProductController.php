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
        // για την παρουσίαση τραβάμε απο την βάση.
        // όταν Skroutz και Bestbuy(δεν έχει ακόμα) θα ανοίξουν το API θα τραβάμε απο εκεί
        return response()->json(Product::with('categories')->where('name' , 'LIKE', '%'.$name.'%')->get());
    }

    
}