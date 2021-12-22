<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
     //

     public function getAllProducts(){
        $post = Product::all();
     //    $name = $post[0]->name;
     //    dd($name);
     $postcopy = $post;


     $postcpy = $postcopy;
     
     $postcpy[0]->name = "Rolex watch";
     // dd($postcpy[0]->name);
     dd($post[0]->name);

     // dd($postcopy);

     
         return response()->json(['response' => 'success',
         'message'=>'string',
         'fakeproducts' => $postcpy, 
         'products' => $post ]);
    }
}
