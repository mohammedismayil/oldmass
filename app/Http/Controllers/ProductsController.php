<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
     //

     public function getAllProducts(){
        $post = Product::all();

        $postcpy = $post;

        $postcpy[0]->name = "Rolex dddd";
        // dd($postcpy[0]->name);
        //  dd($post[0]->name);

        // dd($postcopy);
        $post2 = Product::all();

         return response()->json(['response' => 'success',
         'message'=>'string',
            'fakeproducts' => $postcpy,
            'products' => $post2
        ]);
    }
}
