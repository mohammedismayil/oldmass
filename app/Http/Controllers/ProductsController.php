<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
     //

     public function getAllProducts(){
        $post = Product::all();
        
         return response()->json(['response' => 'success', 'products' => $post ]);
    }
}
