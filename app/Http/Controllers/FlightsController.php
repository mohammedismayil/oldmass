<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightsController extends Controller
{
    //

    public function getAllFlights(){
        $post = Flight::all();
        
         return response()->json(['response' => 'success', 'flights' => $post ]);
    }
}
