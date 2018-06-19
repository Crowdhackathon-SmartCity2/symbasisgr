<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function showAllCategories()
    {
        return response()->json(Category::all());
    }

    public function findCategory($name)
    {
        return response()->json(Category::find($id));
    }

    
}