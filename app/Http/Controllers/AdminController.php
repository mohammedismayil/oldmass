<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    function loginAdmin(Request $request){


if ($request->input('email') == 'admin@gmail.com' && $request->input('password') == '123456') {
    $request->session()->put('isAdminLoggedIn','true');
    // dd($request->session()->get('isAdminLoggedIn'));
    return response()->view('admin'); 

}else{
    return response()->view('adminlogin'); 
}


    }
}
// 